<?php

class Router
{
    protected $routes = [
        'GET'  => [],
        'POST' => [],
        'HEAD' => []
    ];

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    public function head($uri, $controller)
    {
        $this->routes['HEAD'][$uri] = $controller;
    }

    public static function load($file)
    {
        $router = new static;
        require $file;
        return $router;
    }

    public function direct($uri, $requestType)
    {
        if (is_array($this->routes[$requestType]) && array_key_exists($uri, $this->routes[$requestType])) {
            return $this->routes[$requestType][$uri];
        }
        // throw new Exception('No route defined for this URI: "'.$uri.'"');

        die(http_response_code(404));
    }
}
