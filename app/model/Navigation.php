<?php

class Navigation
{
    public function generateHomeButton()
    {
        if ($_SERVER['REQUEST_URI'] === '/') {
            echo '<a class="navbar-active navbar-item" href="/">Home</a>';
            return;
        }
        echo '<a class="navbar-item" href="/">Home</a>';
    }

    public function generateNavBar()
    {
        $navbar = [
        'Posts' => ['uri' => '/post/'],
        'Projects' => ['uri' => '/project/'],
        'Profile' => ['uri' => '/about/'],
        'Contact' => ['uri' => '/contact/'],
        ];

        foreach ($navbar as $title => $route) {
            $append ='';
            if ($route['uri'] === $_SERVER['REQUEST_URI'] || strpos($_SERVER['REQUEST_URI'], $route['uri']) !== false) {
                $append = ' navbar-active';
            }
            echo str_repeat("\t", 4) . "<a class=\"navbar-item$append\"" . ' href="' . $route['uri'] . '">' . $title . '</a>' . "\n";
        }
    }
}
