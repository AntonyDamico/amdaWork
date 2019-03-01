<?php

class Router
{

    private $routes;

    public static function load($routes)
    {
        $router = new static();
        $router->register($routes);
        return $router;
    }

    public function register($routes)
    {
        $this->routes = $routes;
    }

    public function direct($uri)
    {
        var_dump($this->routes);
        echo '<br>';
        die(var_dump($_SERVER['REQUEST_URI']));
    }
}