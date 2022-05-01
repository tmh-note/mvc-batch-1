<?php

use Controllers\HomeController;
use Controllers\AboutController;
use Controllers\ProductController;

$router = new Router();
$router->get('/home', [HomeController::class, 'index']);
$router->get('/about', [AboutController::class, 'index']);
$router->get('/products/list', [ProductController::class, 'index']);
$router->get('/products/detail', [ProductController::class, 'show']);
$router->get('/products/create', [ProductController::class, 'create']);
$router->post('/products/create', [ProductController::class, 'store']);
$router->get('/products/edit', [ProductController::class, 'edit']);
$router->post('/products/edit', [ProductController::class, 'update']);
$router->get('/products/delete', [ProductController::class, 'delete']);
$router->render();
