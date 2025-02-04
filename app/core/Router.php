<?php
namespace App\core;
require_once __DIR__ . '/../../vendor/autoload.php';
use App\core\Request;
class Router
{
    public Request $request;
    protected array $routes = [];

    public function __construct($request){
        $this->request = $request;
    }

    public function get($path,$callback){
      $this->routes['get'][$path] = $callback;
    }

    public function resolve(){
        
        //request_url//path_info//
        $path = $this->request->getPath();
        var_dump($path);
    }
}