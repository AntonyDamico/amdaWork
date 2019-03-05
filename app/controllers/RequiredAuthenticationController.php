<?php

namespace App\Controllers;

use Core\Container;

abstract class RequiredAuthenticationController
{

    public function __call($method, $arguments)
    {
        Container::get('auth')->ifNotAuthenticatedRedirect('login');
        return $this->$method($arguments);
    }

}