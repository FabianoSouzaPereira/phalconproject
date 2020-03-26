<?php
declare(strict_types=1);

use Phalcon\Mvc\Controller;
 use Phalcon\Session\Manager;
use Phalcon\Session\Adapter\Stream;
$options = [
    'host'  => '127.0.0.1',
    'port'  => 5432,
    'index' => '1',
];
$session = new Manager();
$files = new Stream(
    [
        'savePath' => BASE_PATH . '/public/temp',
    ]
);
$session->setAdapter($files);

$session->start();
 
class ControllerBase extends Controller
{

}
