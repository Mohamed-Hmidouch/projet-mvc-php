<?php
require_once __Dir__ . '/../vendor/autoload.php';
use App\core\Application;
$app = new Application();
$app->router->get('/contact',function(){
  return 'contact';
});
$app->run();