<?php

/* start application */
require '../bootstrap/Bootstrap.php';

/* load routes */
require Router::load($_SERVER['DOCUMENT_ROOT'] . '/..' . '/app/Routes.php')
    ->direct(Request::uri(), Request::method());
