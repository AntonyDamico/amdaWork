<?php

require 'database/Connection.php';
require 'database/QueryBuilder.php';

$config = require 'config.php';

$database = new QueryBuilder(Connection::make($config['database']));

$contacts = $database->selectAll('contacts');

require 'index.view.php';
