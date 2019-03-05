<?php

namespace App\Controllers;

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

}