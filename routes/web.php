<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    librairesController,
    LoginController,
    LogoutController,
    RegisterController,
};

Route::get('/',[librairesController::class, 'index'])->name('Accueil');
Route::get('/login',[LoginController::class, 'index'])->name('login.index');
Route::post('/login',[LoginController::class, 'login'])->name('login.login');
Route::get('/auth.index',[RegisterController::class, 'index'])->name('register');
Route::post('/auth.register',[RegisterController::class, 'register'])->name('register.register');
Route::get('/forgotpwd',[librairesController::class, 'forgotpwd'])->name('forgotpwd');
Route::get('/reinitpwd',[librairesController::class, 'reinitpwd'])->name('reinitpwd');
Route::post('/logout',[LogoutController::class, 'logout'])->name('logout.logout');

