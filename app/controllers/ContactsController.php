<?php

namespace App\Controllers;

use App\Models\Contact;

class ContactsController
{

    public function list()
    {
        $contacts = Contact::getAll();
        return view('list', compact('contacts'));
    }

    public function read()
    {
        $contact = Contact::getById($_GET['id']);
        return view('contact', compact('contact'));
    }

}