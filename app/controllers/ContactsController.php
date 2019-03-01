<?php

namespace App\Controllers;

use Core\Container;

class ContactsController
{

    public function list()
    {
        $contacts = Container::get('database')->selectAll('contacts');
        return view('list', compact('contacts'));
    }

}