<?php

class Navigation
{
    public function requestContains($route)
    {
        if (strpos($_SERVER['REQUEST_URI'], $route) !== false) {
            return true;
        }
        return false;
    }

     public function isActiveHome()
    {
        if (strlen($_SERVER['REQUEST_URI']) === 1) {
            return 'navbar__active ';
        }
        return;
    }

    public function isActive($route)
    {
        if ($_SERVER['REQUEST_URI'] === $route
            || $this->requestContains($route)
        ) {
            return 'navbar__active ';
        }
        return;
    }

    public function title()
    {
        switch ($_SERVER['REQUEST_URI']) {
        case '/contact/':
            $uri = $_SERVER['REQUEST_URI'];
            echo $titleHeader = 'Contact - ';
            break;
        case '/':
            $uri = $_SERVER['REQUEST_URI'];
            echo $titleHeader = 'Portfolio - ';
            break;
        }
    }
}
