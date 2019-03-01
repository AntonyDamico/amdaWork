<?php

$database = require 'core/bootstrap.php';

$contacts = $database->selectAll('contacts');

return view('index');
