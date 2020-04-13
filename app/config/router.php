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
        'controller' => 'signup',
        'action'     => 'index',
    ]
);

$router->add(
    '/app/controller/signup',
    [
        'controller' => 'signup',
        'action'     => 'register',
    ]
    );

$router->add(
    'app/controller/sign',
    [
        'controller' => 'sign',
        'action'     => 'index',
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

