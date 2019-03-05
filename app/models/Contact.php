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

}