<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Certifique-se de que o modelo User está no namespace correto
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }
    public function create() {}
    public function store(Request $request)
    {
        // Validação dos dados
        $request->validate([
            'first_name' => 'required|string|max:35',
            'last_name' => 'required|string|max:35',
            'schoolnumber' => 'required|integer|unique:users,schoolnumber',
            'birth_date' => 'required|date',
            'phonenumber' => 'required|integer|unique:users,phonenumber',
            'class' => 'required|string|max:10',
            'tshirt_size' => 'required|string|max:3',
            'food_allergies' => 'required|in:sim,nao',
            'image_authorization' => 'required|in:sim,nao',
            'allergies_description' => 'nullable|string|max:400',
            'email' => 'required|string|email|max:75|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Criação do usuário
        User::create([
            // Aqui você pode adicionar os dados do usuário ao banco de dados
        ]);

        return redirect()->route('users.index')->with('success', 'Usuário criado com sucesso!');
    }
    public function show($id)
    {
        // Aqui você pode buscar o usuário pelo ID e passá-lo para a view
        $user = User::findOrFail($id);
        return view('users.show', compact('user'));
    }
    public function edit($id)
    {
        // Aqui você pode buscar o usuário pelo ID e passá-lo para a view de edição
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        // Validação dos dados
        $request->validate([
            'first_name' => 'required|string|max:35',
            'last_name' => 'required|string|max:35',
            'schoolnumber' => [
                'required',
                'integer',
                Rule::unique('users')->ignore($id),
            ],
            'birth_date' => 'required|date',
            'phonenumber' => [
                'required',
                'integer',
                Rule::unique('users')->ignore($id),
            ],
            'class' => 'required|string|max:10',
            'tshirt_size' => 'required|string|max:3',
            'food_allergies' => 'required|in:sim,nao',
            'image_authorization' => 'required|in:sim,nao',
            'allergies_description' => 'nullable|string|max:400',
            'email' => [
                'required',
                'string',
                'email',
                'max:75',
                Rule::unique('users')->ignore($id),
            ],
        ]);

        $user = User::findOrFail($id);
        $user->update($request->all());

        return redirect()->route('users')->with('Successo', 'Utilizador atualizado com sucesso!');
    }

    public function destroy($id)
    {

        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('users')->with('Successo', 'Utilizador excluído com sucesso!');
    }
}
