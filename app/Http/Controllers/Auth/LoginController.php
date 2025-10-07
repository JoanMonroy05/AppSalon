<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class LoginController
{
    public function showLoginForm():View
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        
    }

    public function logout()
    {
        //
    }
}
