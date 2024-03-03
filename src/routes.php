<?php

use App\Router\Router;
use App\Controllers\UserController;

$router = new Router();

$router->addRoute('/', UserController::class, 'index');

return $router;
