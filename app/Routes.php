<?php

/* public routes */

$router->get('', '../app/controllers/index.controller.php');

$router->get('contact', '../app/controllers/contact.controller.php');

$router->get('resume', '../app/controllers/resume.controller.php');

$router->get('admin', '../app/controllers/admin.controller.php');


$router->head('', '../app/controllers/index.controller.php');

$router->head('contact', '../app/controllers/contact.controller.php');


$router->post('?sent', '../app/controllers/mail.controller.php');
