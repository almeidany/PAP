<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Redireciona a raiz para /home
Route::redirect('/', '/home');

//Index Front
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Index Back
Route::get('/dashboard', [App\Http\Controllers\BackController::class, 'index'])->name('dashboard');

Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register']);

Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

// Homepage
Route::get('/sobre-nos', [App\Http\Controllers\FrontController::class, 'about_us'])->name('about_us');
Route::get('/concursos', [App\Http\Controllers\FrontController::class, 'contests'])->name('contests');

//Backoffice
Route::get('/membros', [App\Http\Controllers\MemberController::class, 'index'])->name('members');

Route::get('/projetos', [App\Http\Controllers\ProjectController::class, 'index'])->name('projects');
Route::get('/projetos/criar', [App\Http\Controllers\ProjectController::class, 'create'])->name('projects.create');

Auth::routes();
