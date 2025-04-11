<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

//Index
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register']);

Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

// Homepage
Route::get('/sobre-nos', [App\Http\Controllers\FrontController::class, 'about_us'])->name('about_us');
Route::get('/concursos', [App\Http\Controllers\FrontController::class, 'contest'])->name('contest');

//Backoffice


Auth::routes();
