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
Route::get('/galeria', [App\Http\Controllers\FrontController::class, ''])->name('');

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

route::get('/alunos', function () {
    return view('home-alunos');
})->name('home-alunos');

route::get('/criar-aluno', function () {
    return view('home-adicionarAluno');
})->name('home-adicionarAluno');
Auth::routes();
