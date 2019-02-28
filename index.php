<?php

require 'database/Connection.php';

$config = require 'config.php';

$database = Connection::make($config['database']);

require 'index.view.php';
