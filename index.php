<?php


$database = require 'bootstrap.php';


try {

    require Router::load(require 'routes.php')
        ->direct(Request::uri());

} catch (Exception $exception) {
    echo $exception->getMessage();
    die('<br>404');
}