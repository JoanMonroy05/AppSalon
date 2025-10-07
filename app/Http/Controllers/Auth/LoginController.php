<?php

namespace App\Http\Controllers\Auth;

use App\Models\Usuario;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController
{
    public function showLoginForm():View
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $validate = $request->validate([
            'email'    => 'required|email|max:30',
            'password' => 'required|string|min:6|',
        ]);

        // verificar si el usuario existe
        $user = Usuario::where('email', $validate['email'])->first();

        if (!$user || !Hash::check($validate['password'], $user->password)) {
            return back()->withErrors(['email' => 'Credenciales incorrectas']);
        }

        if (!$user->confirmado) {
            return back()->withErrors(['email' => 'Tu cuenta no ha sido confirmada']);
        }

        // Iniciar sesión
        Auth::login($user);
        if ($user->admin === 1) {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->route('citas.index');
        }
    }

    public function logout()
    {
        //
    }
}
