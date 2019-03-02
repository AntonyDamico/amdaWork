<?php

require 'vendor/autoload.php';
require 'core/bootstrap.php';

use Core\{Router, Request};

try {
    Router::load(require 'app\routes.php')
        ->direct(Request::uri());
} catch (Exception $exception) {
//    echo $exception->getMessage();
//    die('<br>404');
    return view('404', ['message' => $exception->getMessage()]);
}