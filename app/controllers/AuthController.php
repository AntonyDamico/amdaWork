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

    public function login()
    {
        try {
            $user = User::login(
                $_POST['email'],
                $_POST['password']
            );
            session_start();
            $_SESSION['userId'] = $user->id;
            redirect('contacts');
        } catch (Exception $e) {
            return view('/login', ['msg' => $e->getMessage()]);
        }
    }

    public function logout()
    {
        session_start();
        if (isset($_SESSION['userId'])) unset($_SESSION['userId']);
        redirect('login');
    }
}