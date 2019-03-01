<?php

require 'vendor/autoload.php';

use Core\{Router, Request};

$database = require 'core/bootstrap.php';

try {
    require Router::load(require 'routes.php')
        ->direct(Request::uri());
} catch (Exception $exception) {
    echo $exception->getMessage();
    die('<br>404');
}