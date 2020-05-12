<?php

$router = $di->getRouter();

// Define your routes here
$router->add('/', [
    'controller' => 'project',
    'action'     => 'index',
])->setName('index'); 

$router->handle($_SERVER['REQUEST_URI']);
