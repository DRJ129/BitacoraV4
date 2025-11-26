<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;

Route::get('/', function () {
    // Si está autenticado, mostrar dashboard; si no, la vista welcome
    if (auth::check()) {
        return view('dashboard');
    }

    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/register', [RegisterController::class, 'register']);
