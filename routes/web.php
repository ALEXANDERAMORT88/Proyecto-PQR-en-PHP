<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/register', 'auth.register')->name('register'); // Muestra el formulario

Route::post('/register', [RegisteredUserController::class, 'store'])->name('register.store'); // Llama al método store