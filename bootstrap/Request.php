<?php

class Request
{
    public static function uri()
    {
        return (string) trim(explode('?', $_SERVER['REQUEST_URI'])[0], "/");
    }

    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}
