<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

class ForgotPasswordController
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.olvide-password');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }
}
