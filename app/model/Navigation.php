<?php

class Navigation
{
    public function requestContains($route)
    {
        return (bool) (strpos($_SERVER['REQUEST_URI'], $route) === 1);
    }

    public function isActive($route)
    {
        return (bool) (ltrim(Request::uri(), "/") === ltrim($route, "/") || $this->requestContains(ltrim($route, "/")));
    }
}
