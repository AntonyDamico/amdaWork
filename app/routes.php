<?php

return [
    'GET' => [
        '' => 'PagesController@home',
        'contacts' => 'ContactsController@list',
        'contacts/add' => 'ContactsController@add'
    ],

    'POST' => [
        'contacts/add' => 'ContactsController@insert'
    ]
];


