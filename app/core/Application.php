<?php
namespace App\core;
require_once __DIR__ .'/../../vendor/autoload.php';
use App\core\Router;
use App\core\Request;
class Application
{
    public Router $router;
    public Request $request;
    public function __construct()
    {
      $this->request = new Request();
      $this->router = new Router($this->request);
      
    }
    public function run(){
      $this->router->resolve();
    }
}