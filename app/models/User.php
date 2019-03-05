<?php

namespace App\Models;

use Core\Container;

class User
{

    public static function register($email, $password, $passwordConfirm)
    {
        return Container::get('auth')
            ->register($email, $password, $passwordConfirm);
    }
}