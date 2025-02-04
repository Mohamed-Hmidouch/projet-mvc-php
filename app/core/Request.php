<?php
namespace App\core;
class Request{
    public function getPath(){
     $path = $_SERVER['REQUEST_URI'] ?? '/';
     $position = strpos($path,'?');
     var_dump($position);
     if($position == false){
      return $path;
     }
     return substr($path,0,$position);
    }
    public function getMethod(){
      
    }
}