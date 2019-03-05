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

    public function add()
    {
        return view('contacts/contactsForm');
    }

    public function insert()
    {
        Contact::insert($_POST['firstName'], $_POST['lastName']);
        redirect('contacts');
    }

}