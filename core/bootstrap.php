<?php

require 'helpers.php';

use Core\Container;
use Core\Database\{Connection, QueryBuilder, Authentication};

Container::bind('config', require 'config.php');

$connection = Connection::make(Container::get('config')['database']);

Container::bind('database', new QueryBuilder($connection));
Container::bind('auth', new Authentication($connection));