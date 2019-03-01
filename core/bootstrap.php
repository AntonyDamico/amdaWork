<?php

require 'helpers.php';

use Core\Database\{Connection, QueryBuilder};

$config = require 'config.php';

return new QueryBuilder(Connection::make($config['database']));