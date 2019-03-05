<?php

return [
    'GET' => [
        '' => 'PagesController@home',
        'login' => 'AuthController@loginForm',
        'register' => 'AuthController@registerForm',
        'logout' => 'AuthController@logout',
        'contacts' => 'ContactsController@list',
        'contacts/read' => 'ContactsController@read',
        'contacts/add' => 'ContactsController@add'
    ],

    'POST' => [
        'login' => 'AuthController@login',
        'register' => 'AuthController@register',
        'contacts/add' => 'ContactsController@insert'
    ]
];


