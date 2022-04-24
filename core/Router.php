<?php

class Router
{
    public $routes = []; 

    public function define($uri, $controller, $method) 
    {
        $this->routes[$uri] = [
            'controller' => $controller,
            'method' => $method
        ];
    }

    public function render()
    {
        $uri = $_SERVER["REQUEST_URI"];
        if(array_key_exists($uri, $this->routes)) {
            $class = $this->routes[$uri];
            $controller = $class['controller'];
            $method = $class['method'];
            
            $obj = new $controller;
            $obj->$method();
        } else {
            require app_path("views/errors/page_not_found.view.php");
        }
    }
}