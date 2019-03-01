<?php

$database = require 'bootstrap.php';

$contacts = $database->selectAll('contacts');

require 'index.view.php';
