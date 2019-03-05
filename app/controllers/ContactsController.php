<?php

namespace App\Controllers;

use App\Models\Contact;
use Core\Container;

class ContactsController
{

    public function __call($method, $arguments)
    {
        Container::get('auth')->ifNotAuthenticatedRedirect('login');
        return $this->$method($arguments);
    }

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
        return view('contacts/contactsForm');
    }

    protected function insert()
    {
        Contact::insert($_POST['firstName'], $_POST['lastName']);
        redirect('contacts');
    }

}