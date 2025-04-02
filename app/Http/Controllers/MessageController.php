<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\MessageReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // Validaciones
        $validate = $request->validate([
            "name" => "required",
            "subject" => "required",
            "email" => "required|email",
            "content" => "required|min:3"
        ]);
        // Sucede si las validaciones pasan

        // Enviar Correo
        Mail::to('djcastillo@sena.edu.co')->send(new MessageReceived($validate));

        return redirect()->route('contact')->with('status', 'Recibimos tu mensaje, te responderemos pronto');
    }
}
