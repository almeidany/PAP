<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::get('/formulario-inscricao', function () {
    return view('forminsc');
})->name('formulario-inscricao');

Route::get('/login', function () {
    return view('auth.login_registo');
})->name('login');

Route::get('/dashboard', function () {
    return view('dashboard_Prof');
})->name('dashboard');
