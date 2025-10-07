<?php

namespace App\Http\Controllers\Auth;

use App\Mail\RestaurarPassword;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class ForgotPasswordController
{
    public function showForgotForm()
    {
        return view('auth.olvide-password');
    }

    public function sendResetLink(Request $request)
    {
        $validate = $request->validate([
            'email' => 'required|email|max:30|exists:usuarios,email',
        ]);

        $user = Usuario::where('email', $validate['email'])->first();

        if ($user->confirmado === 0) {
            return back()->withErrors(['email' => 'El email no está confirmado.']);
        }

        $validate['token'] = Str::random(15);

        $user->token = $validate['token'];
        $user->confirmado = 0;
        $user->save();

        // Enviar email
        Mail::to($user->email)->send(new RestaurarPassword($user));
        return back()->with('info', 'Hemos enviado un enlace de restablecimiento de contraseña a tu correo electrónico.');
    }

    public function showResetForm(string $id)
    {
        //
    }

    public function resetPassword(Request $request, string $id)
    {
        //
    }
}
