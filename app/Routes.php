<?php

/* public routes */

$router->get('', '../app/controllers/index.controller.php');

$router->get('contact', '../app/controllers/contact.controller.php');


$router->head('', '../app/controllers/index.controller.php');

$router->head('contact', '../app/controllers/contact.controller.php');


$router->post('?sent', '../app/controllers/mail.controller.php');
