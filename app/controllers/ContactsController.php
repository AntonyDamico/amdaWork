<?php

namespace App\Controllers;

use App\Models\Contact;

class ContactsController extends RequiredAuthenticationController
{

    protected function list()
    {
        $contacts = Contact::getAll();
        return view('list', compact('contacts'));
    }

    protected function read()
    {
        $contact = Contact::getById($_GET['id']);
        return view('contact', compact('contact'));
    }

    protected function add()
    {
        return view('contactsForm');
    }

    protected function insert()
    {
        Contact::insert($_POST['firstName'], $_POST['lastName']);
        redirect('contacts');
    }

}