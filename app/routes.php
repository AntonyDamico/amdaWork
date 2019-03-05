<?php

return [
    'GET' => [
        '' => 'PagesController@home',
        'login' => 'AuthController@loginForm',
        'register' => 'AuthController@registerForm',
        'contacts' => 'ContactsController@list',
        'contacts/read' => 'ContactsController@read',
        'contacts/add' => 'ContactsController@add'
    ],

    'POST' => [
        'contacts/add' => 'ContactsController@insert'
    ]
];


