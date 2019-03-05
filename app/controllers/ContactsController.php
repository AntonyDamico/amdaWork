<?php

namespace App\Controllers;

use App\Models\Contact;

class ContactsController
{

    public function list()
    {
        session_start();
        $contacts = Contact::getAll();
        return view('list', compact('contacts'));
    }

    public function read()
    {
        $contact = Contact::getById($_GET['id']);
        return view('contact', compact('contact'));
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