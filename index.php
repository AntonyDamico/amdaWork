<?php


$database = require 'bootstrap.php';

Router::load(require 'routes.php')->direct();
