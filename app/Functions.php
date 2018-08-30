<?php

function generateTitle()
{
    switch ($_SERVER['REQUEST_URI']) {
        case '/contact/':
            $uri = $_SERVER['REQUEST_URI'];
            echo $titleHeader = 'Contact - ';
            break;
    }
}
