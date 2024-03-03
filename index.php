<?php
declare(strict_types=1);

define('BASE_PATH', dirname(__DIR__));

require_once 'vendor/autoload.php';
require_once 'src/Config/Config.php';
// require 'src/Databases/Connection.php';

if (session_id() === '') {
    session_start();
}

$uri = $_SERVER['REQUEST_URI'];

$router = require 'src/routes.php';
$router->dispatch($uri);
