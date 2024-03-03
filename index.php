<?php
declare(strict_types=1);

require_once 'vendor/autoload.php';

$uri = $_SERVER['REQUEST_URI'];

$router = require 'src/routes.php';
$router->dispatch($uri);
