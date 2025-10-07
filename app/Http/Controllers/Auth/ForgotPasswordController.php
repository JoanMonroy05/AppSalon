<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

class ForgotPasswordController
{
    public function showForgotForm()
    {
        return view('auth.olvide-password');
    }

    public function sendResetLink(Request $request)
    {
        //
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
