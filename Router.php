<?php

class Router
{

    private $routes;

    public function load($routes)
    {
        $router = new static();
        $router->register($routes);
        return $router;
    }

    public function register($routes)
    {
        $this->routes = $routes;
    }

    public function resolve()
    {
        die(var_dump($_SERVER['REQUEST_URI']));
    }
}