<?php

require 'database/Connection.php';

$config = require 'config.php';

$database = Connection::make($config['database']);

echo 'Everything OK';
