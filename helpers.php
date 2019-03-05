<?php

function view($viewName, $data = [])
{
    extract($data);
    return require "app/views/{$viewName}.view.php";
}

function dd($data)
{
    die(var_dump($data));
}

function redirect($path)
{
    header("Location: /${path}");
}
