<?php

$router = new Router;

/**
 * Public routes
 */

$router->get('',        '../app/controllers/index.controller.php');
$router->get('contact', '../app/controllers/contact.controller.php');
$router->get('resume',  '../app/controllers/resume.controller.php');
$router->get('upload',  '../app/controllers/upload.controller.php');


$router->head('',        '../app/controllers/index.controller.php');
$router->head('contact', '../app/controllers/contact.controller.php');
$router->head('resume',  '../app/controllers/contact.controller.php');


$router->post('upload',  '../app/controllers/upload.controller.php');
$router->post('contact', '../app/controllers/contact.controller.php');

/**
 *  API routes
 */

$router->post('api/v1/thumbnails', '../app/controllers/api/thumbnails.controller.php');
$router->post('api/v1/cache',      '../app/controllers/api/cache.controller.php');
