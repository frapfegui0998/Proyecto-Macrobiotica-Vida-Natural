<?php

namespace App\Http\Controllers\Correo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnviarCorreo;

class CorreoController extends Controller
{

    public function enviarCorreo(Request $request)
    {
        // Validar los datos del formulario si es necesario
        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'message' => 'required|string',
            'subject' => 'required|string',
        ]);

        // Obtener los datos del formulario
        $nombre = $request->first_name;
        $apellido = $request->last_name;
        $mensaje = $request->message;
        $motivo = $request->subject;
        $send_mail = 'henryrm8@gmail.com';

        Mail::to($send_mail)->send(new EnviarCorreo($nombre, $apellido, $mensaje, $motivo));
        $senderMessage = "Los productos que han solicitado son los siguientes:";
        // Puedes agregar un mensaje de éxito o redireccionar a una página de confirmación
        return redirect()->back()->with('message', '¡El correo electrónico ha sido enviado con éxito!');
    }
}
