<?php

namespace Core;

use Exception;

class Router
{

    private $routes;

    public static function load($routes)
    {
        $router = new static();
        $router->register($routes);
        return $router;
    }

    private function register($routes)
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
        if (!array_key_exists($uri, $this->routes))
            throw new Exception('No Route Found');

        return $this->resolveController(
            ...$this->parseRequest($uri)
        );
    }

    private function parseRequest($uri)
    {
        return explode('@', $this->routes[$uri]);
    }

    /**
     * @param $controllerName
     * @param $method
     * @return mixed
     * @throws Exception
     */
    private function resolveController($controllerName, $method)
    {
        $controllerClass = "App\\Controllers\\{$controllerName}";
        $controller = new $controllerClass;

        if (!method_exists($controller, $method))
            throw new Exception('Controller Method does not exists');

        return $controller->$method();
    }
}