<?php

namespace Core;

use Exception;

class Router
{

    public $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function load($routes)
    {
        $router = new static();
        $router->register($routes);
        return $router;
    }

    private function register($methodRoutes)
    {
        $this->registerGet($methodRoutes['GET']);
        $this->registerPost($methodRoutes['POST']);
    }

    public function registerGet($routes)
    {
        foreach ($routes as $uri => $controller)
            $this->routes['GET'][$uri] = $controller;
    }

    public function registerPost($routes)
    {
        foreach ($routes as $uri => $controller)
            $this->routes['POST'][$uri] = $controller;
    }

    /**
     * @param $uri
     * @param $method
     * @return mixed - The correct controller
     * @throws Exception - Throws if it does not find the uri
     */
    public function direct($uri, $method)
    {
        if (!array_key_exists($uri, $this->routes[$method]))
            throw new Exception('No Route Found');

        return $this->resolveController(
            ...$this->parseRequest($uri, $method)
        );
    }

    private function parseRequest($uri, $method)
    {
        return explode('@', $this->routes[$method][$uri]);
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