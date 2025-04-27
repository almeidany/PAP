<?php

use App\Http\Controllers\BackController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Redireciona a raiz para /home
Route::redirect('/', '/home');

//Index Front
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Index Back
Route::get('/dashboard', [App\Http\Controllers\BackController::class, 'index'])->name('dashboard')->middleware('auth');

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
Route::get('/acessos', [App\Http\Controllers\AccessController::class, 'index'])->name('access')->middleware('auth');

Route::get('/conta', [App\Http\Controllers\AccountController::class, 'index'])->name('account')->middleware('auth');

// web.php
Route::get('/membros', [App\Http\Controllers\MemberController::class, 'index'])->name('members')->middleware('auth');
Route::get('/membros/criar', [App\Http\Controllers\MemberController::class, 'create'])->name('members.create')->middleware('auth');
Route::post('/membros', [App\Http\Controllers\MemberController::class, 'store'])->name('members.store')->middleware('auth');
Route::get('/membros/{member}/visualizacao', [App\Http\Controllers\MemberController::class, 'show'])->name('members.show')->middleware('auth');
Route::get('/membros/{member}/editar', [App\Http\Controllers\MemberController::class, 'edit'])->name('members.edit')->middleware('auth');
Route::put('/membros/{member}', [App\Http\Controllers\MemberController::class, 'update'])->name('members.update')->middleware('auth');
Route::delete('/membros/{member}', [App\Http\Controllers\MemberController::class, 'destroy'])->name('members.destroy')->middleware('auth');

Route::get('noticias', [App\Http\Controllers\NewsController::class, 'index'])->name('news')->middleware('auth');
Route::get('noticias/criar', [App\Http\Controllers\NewsController::class, 'create'])->name('news.create')->middleware('auth');
Route::post('noticias', [App\Http\Controllers\NewsController::class, 'store'])->name('news.store')->middleware('auth');
Route::get('noticias/{news}', [App\Http\Controllers\NewsController::class, 'show'])->name('news.show')->middleware('auth');

Route::get('/projetos', [App\Http\Controllers\ProjectController::class, 'index'])->name('projects')->middleware('auth');
Route::get('/projetos/criar', [App\Http\Controllers\ProjectController::class, 'create'])->name('projects.create')->middleware('auth');
Route::post('/projetos', [App\Http\Controllers\ProjectController::class, 'store'])->name('projects.store')->middleware('auth');
Route::get('/projetos/{project}/visualizacao', [App\Http\Controllers\ProjectController::class, 'show'])->name('projects.show')->middleware('auth');
Route::get('/projetos/{project}/editar', [App\Http\Controllers\ProjectController::class, 'edit'])->name('projects.edit')->middleware('auth');
Route::put('/projetos/{project}', [App\Http\Controllers\ProjectController::class, 'update'])->name('projects.update')->middleware('auth');
Route::delete('/projetos/{project}', [App\Http\Controllers\ProjectController::class, 'destroy'])->name('projects.destroy')->middleware('auth');

Auth::routes();
