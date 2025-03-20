<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register']);

Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return view('index');
})->name('index');

// Concursos
Route::get('/concursos', function () {
    return view('Concursos');
})->name('concursos');

// Galeria
Route::get('/galeria', function () {
    return view('galeria');
})->name('galeria');

// Sobre Nós
Route::get('/sobre-nos', function () {
    return view('sobrenos');
})->name('sobrenos');

// Formulário de Inscrição
Route::get('/inscricao', function () {
    return view('forminsc');
})->name('formulario-inscricao');

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/register');
})->name('logout');

Route::get('/projetos', function () {
    return view('home-projetos');
})->name('home-projetos');

Route::get('/criar-projeto', function () {
    return view('home-criarProjeto');
})->name('home-criarProjeto');

route::get('/noticias', function () {
    return view('home-noticias');
})->name('home-noticias');

route::get('/criar-noticia', function () {
    return view('home-criarNoticia');
})->name('home-criarNoticia');
Auth::routes();
