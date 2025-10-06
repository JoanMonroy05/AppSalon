<?php

namespace App\Http\Controllers\Auth;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Mail\BienvenidaMailable;
use App\Mail\ConfirmarMailable;

use function Ramsey\Uuid\v1;

class RegisterController
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.crear-cuenta');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nombre'   => 'required|string|max:60',
            'apellido' => 'required|string|max:60',
            'email'    => 'required|email|max:30|unique:usuarios,email',
            'password' => 'required|string|min:6|',
            'telefono' => 'required|string|size:10|regex:/^3\d{9}$/',
        ]);
        
        //Crear el token
        $validate['token'] = Str::random(15);

        $usuario = Usuario::create([
            'nombre'   => $validate['nombre'],
            'apellido' => $validate['apellido'],
            'email'    => $validate['email'],
            'password' => bcrypt($validate['password']),
            'telefono' => $validate['telefono'],
            'token'    => $validate['token'],
        ]);

        if($usuario){
            //Enviar el email
            Mail::to($usuario->email)->send(new ConfirmarMailable($usuario));
            //Redireccionar al usuario
            return redirect()->route('mensaje.usuario');
        }else{
            return back()->with('error', 'Error al crear la cuenta, por favor intenta de nuevo.');
        }
    }

    public function confirmar($token)
    {
        return view('auth.confirmar-cuenta');
    }

    public function mensaje()
    {
        return view('auth.mensaje');
    }
}
