<?php

require 'helpers.php';

use Core\Container;
use Core\Database\{Connection, QueryBuilder, Authentication};

Container::bind('config', require 'config.php');

Container::bind('database', new QueryBuilder(
    Connection::make(Container::get('config')['database'])
));

Container::bind('auth', new Authentication());