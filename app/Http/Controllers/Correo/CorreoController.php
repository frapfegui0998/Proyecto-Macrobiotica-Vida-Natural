<?php

namespace App\Http\Controllers\Correo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnviarCorreo;
use App\Models\LogError;
use Exception;
use App\Http\Requests\EmailRequest;

class CorreoController extends Controller
{
    public function enviarCorreo(EmailRequest $request)
    {
        try {
            if (!auth()->check()) {
                return redirect()->route('login')->with('deleted', 'Debe iniciar sesión para enviar el correo electrónico.');
            }

            $request->validate([
                'first_name' => 'required|string',
                'last_name' => 'required|string',
                'message' => 'required|string',
                'subject' => 'required|string',
            ]);

            $nombre = $request->first_name;
            $apellido = $request->last_name;
            $mensaje = $request->message;
            $motivo = $request->subject;
            $send_mail = 'henryrm8@gmail.com';

            Mail::to($send_mail)->send(new EnviarCorreo($nombre, $apellido, $mensaje, $motivo));

            return redirect()->back()->with('message', '¡El correo electrónico ha sido enviado con éxito!');
        } catch (Exception $e) {
            $errorMessage = $e->getMessage();

            LogError::create([
                'message' => 'Error al enviar correo de solicitud',
                'user_email' => auth()->user()->email,
                'user_name' => auth()->user()->name,
                'exception' => $errorMessage,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        return redirect()->back()->with('deleted', 'Ha ocurrido un error al enviar el correo electrónico. Por favor, inténtelo de nuevo más tarde.');
    }

    public function enviarProducto(EmailRequest $request)
    {
        try {
            if (!auth()->check()) {
                return redirect()->route('login')->with('deleted', 'Debe iniciar sesión para enviar el correo electrónico.');
            }

            $request->validate([
                'first_name' => 'required|string',
                'last_name' => 'required|string',
                'message' => 'required|string',
                'subject' => 'required|string',
            ]);

            $nombre = $request->first_name;
            $apellido = $request->last_name;
            $mensaje = $request->message;
            $motivo = $request->subject;
            $send_mail = 'henryrm8@gmail.com';

            Mail::to($send_mail)->send(new EnviarCorreo($nombre, $apellido, $mensaje, $motivo));

            return redirect()->back()->with('message', '¡El correo electrónico ha sido enviado con éxito!');
        } catch (Exception $e) {
            $errorMessage = $e->getMessage();

            LogError::create([
                'message' => 'Error al enviar correo de solicitud',
                'user_email' => auth()->user()->email,
                'user_name' => auth()->user()->name,
                'exception' => $errorMessage,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        return redirect()->back()->with('deleted', 'Ha ocurrido un error al enviar el correo electrónico. Por favor, inténtelo de nuevo más tarde.');
    }
}
