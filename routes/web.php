<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

// Iniciar sesión
Route::get('/', [LoginController::class, 'index'])->name('login.index');
Route::post('/', [LoginController::class, 'store'])->name('login.store');
Route::get('/logout', [LoginController::class, 'destroy'])->name('login.destroy');

// Reestablecer contraseña
Route::get('/olvide', [ForgotPasswordController::class, 'create'])->name('olvide.create');
Route::post('/olvide', [ForgotPasswordController::class, 'store'])->name('olvide.store');
Route::get('/recuperar', [ForgotPasswordController::class, 'edit'])->name('recuperar.edit');
Route::post('/recuperar', [ForgotPasswordController::class, 'update'])->name('actualizar.update');

// Crear cuenta de usuario
Route::get('/crear', [RegisterController::class, 'create'])->name('crear.create');
Route::post('/crear', [RegisterController::class, 'store'])->name('crear.store');

// Confirmar cuenta de usuario
Route::get('/confirmar/{token}', [RegisterController::class, 'confirmar'])->name('confirmar.usuario');
Route::get('/mensaje', [RegisterController::class, 'mensaje'])->name('mensaje.usuario');