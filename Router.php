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

    /**
     * @param $uri
     * @return mixed - The correct controller
     * @throws Exception - Throws if it does not find the uri
     */
    public function direct($uri)
    {
        if(!array_key_exists($uri, $this->routes)) {
            throw new Exception('No Route Found');
        }
        return $this->routes[$uri];
    }
}