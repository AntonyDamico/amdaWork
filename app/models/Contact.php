<?php

namespace App\Models;

use Core\Container;

class Contact
{

    const TABLE_NAME = 'contacts';

    public static function getAll()
    {
        return Container::get('database')
            ->selectAll(self::TABLE_NAME);
    }


    public static function getById($id)
    {
        return Container::get('database')
            ->read(self::TABLE_NAME, $id)[0];
    }

    public static function insert($firstName, $lastName)
    {
        $data = [
            'first_name' => $firstName,
            'last_name' => $lastName
        ];

        Container::get('database')
            ->insert(self::TABLE_NAME, $data);
    }

}