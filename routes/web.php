<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

// Iniciar sesión
Route::get('/', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('/', [LoginController::class, 'login'])->name('login.submit');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Reestablecer contraseña
Route::get('/olvide', [ForgotPasswordController::class, 'showForgotForm'])->name('password.forgot.form');
Route::post('/olvide', [ForgotPasswordController::class, 'sendResetLink'])->name('password.forgot.submit');
Route::get('/recuperar/{token}', [ForgotPasswordController::class, 'showResetForm'])->name('password.reset.form');
Route::post('/recuperar', [ForgotPasswordController::class, 'resetPassword'])->name('password.reset.submit');

// Crear cuenta de usuario
Route::get('/crear', [RegisterController::class, 'showRegistrationForm'])->name('register.form');
Route::post('/crear', [RegisterController::class, 'register'])->name('register.submit');

// Confirmar cuenta de usuario
Route::get('/confirmar/{token}', [RegisterController::class, 'confirm'])->name('register.confirm');
Route::get('/mensaje', [RegisterController::class, 'message'])->name('register.message');