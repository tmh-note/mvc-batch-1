<?php

class Router
{
    public $routes = []; 
    // [
    //     'get' => [
    //         [
    //             'home' => [
    //                 'controller' => 'Controllers\HomeController',
    //                 'method' => 'index'
    //             ],
    //             'home' => ['Controllers\HomeController', 'index']
    //             'about' => [
    //                 'controller' => 'Controllers\AboutController',
    //                 'method' => 'index'
    //             ]
    //         ]
    //     ],
    //     'post' => [

    //     ]
    // ]

    public function get($uri, $action) 
    {
        // $this->routes['GET'][$uri] = [
        //     'controller' => $action[0],
        //     'method' => $action[1]
        // ];
        $this->routes['GET'][$uri] = $action;
    }

    public function post($uri, $action) 
    {
        // $this->routes['POST'][$uri] = [
        //     'controller' => $action[0],
        //     'method' => $action[1]
        // ];
        $this->routes['POST'][$uri] = $action;
    }

    public function render()
    {
        $uri = $_SERVER["REQUEST_URI"];
        $requestMethod = $_SERVER['REQUEST_METHOD'];
        $currentRoute = parse_url($uri, PHP_URL_PATH);
        if(array_key_exists($currentRoute, $this->routes[$requestMethod])) {
            // $class = $this->routes[$requestMethod][$uri];

            // $controller = $class[0];
            // $method = $class[1];
            // or
            // list($controller, $method) = $class;
            // or
            [$controller, $method] = $this->routes[$requestMethod][$currentRoute];
            
            // $obj = new $controller;
            // $obj->$method();
            // or
            call_user_func_array([new $controller, $method], []);
        } else {
            require app_path("views/errors/page_not_found.view.php");
        }
    }
}