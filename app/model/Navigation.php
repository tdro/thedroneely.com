<?php

class Navigation
{
    public function generateHomeButton()
    {
        if ($_SERVER['REQUEST_URI'] === '/') {
            echo '<a class="navbar__active navbar-item navbar__item" href="/">Home</a>';
            return;
        }
        echo '<a class="navbar-item navbar__item" href="/">Home</a>';
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
            if ($route['uri'] === $_SERVER['REQUEST_URI']
                || strpos($_SERVER['REQUEST_URI'], $route['uri']) !== false
            ) {
                $append = 'navbar__active';
            }
            echo str_repeat("\t", 4) .
            "<a class=\"navbar-item navbar__item $append\"" .
            ' href="' . $route['uri'] . '">' . $title . '</a>' . "\n";
        }
    }

    public function generateTitle()
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
