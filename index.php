<?php

require 'database/Connection.php';

$config = require 'config.php';

$database = Connection::make($config['database']);

$statement = $database->prepare('SELECT * FROM contacts');
$statement->execute();
$contacts = $statement->fetchAll(PDO::FETCH_CLASS);

require 'index.view.php';
