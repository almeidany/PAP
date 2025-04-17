<?php

use App\Http\Controllers\BackController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Redireciona a raiz para /home
Route::redirect('/', '/home');

//Index Front
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Index Back
Route::get('/dashboard', [App\Http\Controllers\BackController::class, 'index'])->name('dashboard');

//Auth
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
Route::get('/acessos', [App\Http\Controllers\AccessController::class, 'index'])->name('access');

Route::get('/conta', [App\Http\Controllers\AccountController::class, 'index'])->name('account');

// web.php
Route::get('/membros', [App\Http\Controllers\MemberController::class, 'index'])->name('members');
Route::get('/membros/criar', [App\Http\Controllers\MemberController::class, 'create'])->name('members.create');
Route::post('/membros', [App\Http\Controllers\MemberController::class, 'store'])->name('members.store');
Route::get('/membros/{member}', [App\Http\Controllers\MemberController::class, 'show'])->name('members.show');
Route::get('/membros/{member}/editar', [App\Http\Controllers\MemberController::class, 'edit'])->name('members.edit');
Route::put('/membros/{member}', [App\Http\Controllers\MemberController::class, 'update'])->name('members.update');
Route::delete('/membros/{member}', [App\Http\Controllers\MemberController::class, 'destroy'])->name('members.destroy');

Route::get('noticias', [App\Http\Controllers\NewsController::class, 'index'])->name('news');
Route::get('noticias/criar', [App\Http\Controllers\NewsController::class, 'create'])->name('news.create');
Route::post('noticias', [App\Http\Controllers\NewsController::class, 'store'])->name('news.store');
Route::get('noticias/{news}', [App\Http\Controllers\NewsController::class, 'show'])->name('news.show');

Route::get('/projetos', [App\Http\Controllers\ProjectController::class, 'index'])->name('projects');
Route::get('/projetos/criar', [App\Http\Controllers\ProjectController::class, 'create'])->name('projects.create');
Route::post('/projetos', [App\Http\Controllers\ProjectController::class, 'store'])->name('projects.store');
Route::get('/projetos/{projects}', [App\Http\Controllers\ProjectController::class, 'show'])->name('projects.show');


Auth::routes();
