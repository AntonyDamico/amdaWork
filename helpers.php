<?php

function view($viewName)
{
    return require "views/{$viewName}.view.php";
}
