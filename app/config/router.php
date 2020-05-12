<?php

$router = $di->getRouter();

// Define your routes here
$router->add('/', [
    'controller' => 'project',
    'action'     => 'home',
])->setName('home'); 

$router->add('/skills', [
    'controller' => 'project',
    'action'     => 'skill',
])->setName('skill'); 

$router->add('/projects', [
    'controller' => 'project',
    'action'     => 'project',
])->setName('project'); 

$router->add('/shell', [
    'controller' => 'project',
    'action'     => 'shell',
])->setName('shell'); 

$router->add('/contact', [
    'controller' => 'project',
    'action'     => 'contact',
])->setName('contact'); 


$router->handle($_SERVER['REQUEST_URI']);
