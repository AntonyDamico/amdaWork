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

function session($key, $value = null)
{
    if(!isset($_SESSION)) session_start();
    if($value != null) $_SESSION[$key] = $value;
    return $_SESSION[$key];
}