<?php

require_once __DIR__ . '/config/__init.php';
require_once __DIR__ . '/router/route.php';

$router = new Router();

$router->get('/', 'home.php');
$router->get('/home', 'home.php');
$router->get('/login', 'login.php');
$router->get('/register', 'register.php');
$router->get('/profile', 'information.php');

?>