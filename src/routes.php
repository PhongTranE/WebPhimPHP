<?php

use App\Router\Router;
use App\Controllers\HomeController;

$router = new Router();

$router->addRoute('/', HomeController::class, 'index');

return $router;
