<?php

namespace Controllers;

class ContactsController
{

    public function list()
    {
//        $contacts = $database->selectAll('contacts');
        $contacts = ['1', '2'];
        return view('list', compact('contacts'));
    }

}