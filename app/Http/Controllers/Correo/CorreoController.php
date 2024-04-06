<?php

namespace App\Http\Controllers\Correo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\FormularioEnviado;

class CorreoController extends Controller
{
    public function enviarCorreo(Request $request)
    {
    try {
        // Obtiene todos los datos del formulario
        $datos = $request->all();

        // Envía el correo electrónico con los datos del formulario
        Mail::to('macrovidanatural1@hotmail.com')->send(new FormularioEnviado($datos));

        // Verifica si el correo se envió correctamente
        if (Mail::failures()) {
            return back()->with('error', 'Error al enviar el correo electrónico.');
        } else {
            return back()->with('message', 'Correo electrónico enviado exitosamente.');
        }
        //code...
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
