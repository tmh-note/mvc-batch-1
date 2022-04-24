<?php

use Controllers\HomeController;
use Controllers\AboutController;
use Controllers\ProductController;

$router = new Router();
$router->define('/home', HomeController::class, 'index');
$router->define('/about', AboutController::class, 'index');
$router->define('/products/list', ProductController::class, 'index');
$router->define('/products/detail', ProductController::class, 'show');
$router->render();
