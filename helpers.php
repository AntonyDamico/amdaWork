<?php

function view($viewName, $data)
{
    extract($data);
    return require "views/{$viewName}.view.php";
}
