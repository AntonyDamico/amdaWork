<?php

namespace Core\Database;

use Exception;
use Core\Container;

class Authentication
{
    private $pdo;
    private $TABLE_NAME;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
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

        if (!empty($this->getEmail($email)))
            throw new Exception('The email is taken');
    }

    public function getEmail($email)
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


}