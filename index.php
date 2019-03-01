<?php

$database = require 'bootstrap.php';

$contacts = $database->selectAll('contacts');

return view('index');
