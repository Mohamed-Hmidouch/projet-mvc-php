<?php
require_once __Dir__ . '/../vendor/autoload.php';
use App\core\Application;
$app = new Application();
$app->router->get('/','index');
$app->router->get('/article','article');
$app->router->get('/home','home');
$app->router->get('/dashboard','dashboard');
$app->router->get('/users','users');
$app->run();