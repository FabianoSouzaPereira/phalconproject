<?php

$router = $di->getRouter();

$router->add(
    '/app/controller/index',
    [
        'controller' => 'index',
        'action'     => 'index',
    ]
);

$router->add(
    '/app/controller/signup',
    [
        'controller' => 'sign',
        'action'     => 'index',
    ]
);

$router->add(
    'app/controller/sign',
    [
        'controller' => 'sign',
        'action'     => 'login',
    ]
);

$router->add(
    'app/controller/sign',
    [
        'controller' => 'sign',
        'action'     => 'update',
    ]
);


$router->handle($_SERVER['REQUEST_URI']);
