<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\Admin\UserController; 
use App\Models\User;


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

// Listado de usuarios
Route::get('/admin/usuarios', [UserController::class, 'index'])->name('admin.usuarios');

// Página de crear usuario (GET)
Route::get('/admin/usuarios/create', function(){
    return view('admin.usuarios_create');
})->name('admin.usuarios.create');

// Página de editar usuario (GET)
Route::get('/admin/usuarios/{user}/edit', function(User $user){
    return view('admin.usuarios_edit', compact('user'));
})->name('admin.usuarios.edit');

Route::delete('/admin/usuarios/{user}', [UserController::class, 'destroy'])->name('admin.usuarios.destroy');

