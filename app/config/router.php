<?php

$router = $di->getRouter();

$router->add(
    '/app/controller/',
    [
        'controller' => 'index',
        'Action'     => 'index',
    ]
    );

$router->handle($_SERVER['REQUEST_URI']);
