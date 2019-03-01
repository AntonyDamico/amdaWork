<?php

require 'helpers.php';
require 'Router.php';
require 'Request.php';
require 'database/Connection.php';
require 'database/QueryBuilder.php';

$config = require 'config.php';

return new QueryBuilder(Connection::make($config['database']));