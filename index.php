<?php

require 'vendor/autoload.php';
require 'core/bootstrap.php';

use Core\{Router, Request};

try {
    Router::load(require 'app\routes.php')
        ->direct(Request::uri(), Request::method());
} catch (Exception $exception) {
    return view('404', ['message' => $exception->getMessage()]);
}