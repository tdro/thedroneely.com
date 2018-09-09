<?php

/* require core files */
require '../bootstrap/Bootstrap.php';

/* create new router */
$router = new Router;

/* instantiate navigator functions */
$navigation = new Navigation();

/* direct routes as defined */
require Router::load('../app/Routes.php')
    ->direct(Request::uri(), Request::method());
