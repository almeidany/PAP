<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => 'required|string|max:35',
            'last_name' => 'required|string|max:35',
            'schoolnumber' => 'required|numeric|unique:users',
            'birth_date' => 'required|date',
            'phonenumber' => 'required|max:9|numeric|unique:users',
            'class' => 'required|string|max:10',
            'tshirt_size' => 'required|string|max:3',
            'food_allergies' => 'required|in:sim,nao',
            'image_authorization' => 'required|in:sim,nao',
            'email' => 'required|string|email|max:75|unique:users|regex:/@aerp\.pt$/',
            'password' => 'required|string|min:8|confirmed',
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'schoolnumber' => $data['schoolnumber'],
            'birth_date' => $data['birth_date'],
            'phonenumber' => $data['phonenumber'],
            'class' => $data['class'],
            'tshirt_size' => $data['tshirt_size'],
            'food_allergies' => $data['food_allergies'],
            'image_authorization' => $data['image_authorization'],
            'allergies_description' => $data['allergies_description'] ?? null,
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        return redirect('/login');
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }
}
