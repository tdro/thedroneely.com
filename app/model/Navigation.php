<?php

class Navigation
{
    public function requestContains($route)
    {
        return (bool) (strpos($_SERVER['REQUEST_URI'], $route) !== false);
    }

    public function isActiveHome()
    {
        return (bool) (strlen(strtok($_SERVER['REQUEST_URI'], '?')) === 1);
    }

    public function isActive($route)
    {
        return (bool) ($_SERVER['REQUEST_URI'] === $route || $this->requestContains($route));
    }
}
