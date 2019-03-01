<?php

$database = require 'bootstrap.php';

$contacts = $database->selectAll('contacts');

require 'views/index.view.php';
