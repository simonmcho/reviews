<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\User;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        $validationParams = [
            'username' => 'bail|required|unique:users|max:255',
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6|confirmed|'
        ]; // https://www.5balloons.info/password-regex-validation-laravel-authentication/
        // regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/

        $this->validate(request(), $validationParams);

        $newUser = User::create([
            'username' => request('username'),
            'firstName' => request('firstName'),
            'lastName' => request('lastName'),
            'email' => request('email'),
            'password' => Hash::make(request('password')),
            'password_confirmation' => Hash::make(request('password_confirmation'))
        ]);

        auth()->login($newUser);

        return redirect()->home();
    }
}