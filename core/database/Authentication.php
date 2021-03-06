<?php

namespace Core\Database;

use Exception;
use Core\Container;

class Authentication
{
    private $TABLE_NAME;

    public function __construct()
    {
        $this->TABLE_NAME = Container::get('config')['auth']['tableName'];
    }

    public function register($email, $password, $confirmPassword)
    {
        try {
            $this->checkRegisterFields($email, $password, $confirmPassword);
            $this->performRegistration($email, $password);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function checkRegisterFields($email, $password, $confirmPassword)
    {
        if ($password != $confirmPassword)
            throw new Exception('The passwords are not the same');

        if (!empty($this->getByEmail($email)))
            throw new Exception('The email is taken');
    }

    public function getByEmail($email)
    {
        return Container::get('database')
            ->readByField($this->TABLE_NAME, ['email' => $email]);
    }

    public function performRegistration($email, $password)
    {
        $params = [
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT)
        ];

        Container::get('database')
            ->insert($this->TABLE_NAME, $params);
    }

    public function login($email, $password)
    {
        $user = $this->getByEmail($email)[0];

        if(!$user)
            throw new Exception('The email is not registered');

        if(!password_verify($password, $user->password))
            throw new Exception('Incorrect Password');

        return $user;
    }

    public function ifNotAuthenticatedRedirect($path)
    {
        if (!session('userId')) redirect($path);
    }

}