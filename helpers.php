<?php

function view($viewName, $data = [])
{
    extract($data);
    return require "app/views/{$viewName}.view.php";
}
