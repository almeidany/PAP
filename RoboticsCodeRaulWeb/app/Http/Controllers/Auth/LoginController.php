<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // Mostra o formulário de login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Processa o login (método simplificado)
    public function login(Request $request)
    {
        $credenciais = $request->only('email', 'password');

        if (Auth::attempt($credenciais)) {
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'email' => 'Credenciais inválidas.',
        ]);
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
