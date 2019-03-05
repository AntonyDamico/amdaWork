<?php

namespace App\Controllers;

use App\Models\User;
use Exception;

class AuthController
{

    public function registerForm()
    {
        return view('register');
    }

    public function loginForm()
    {
        return view('login');
    }

    public function register()
    {
        try {
            User::register(
                $_POST['email'],
                $_POST['password'],
                $_POST['passwordConfirm']
            );
            return view('/login', ['msg' => 'Registration complete']);
        } catch (Exception $e) {
            return view('/register', ['msg' => $e->getMessage()]);
        }
    }

}