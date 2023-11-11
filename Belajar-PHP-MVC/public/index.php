<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Yusril\Belajar\PHP\MVC\App\Router;
use Yusril\Belajar\PHP\MVC\Controller\HomeController;
use Yusril\Belajar\PHP\MVC\Controller\ProductController;

Router::add('GET', '/products/([0-9a-zA-Z]*)/categories/([0-9a-zA-Z]*)', ProductController::class, 'categories');
Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/hello', HomeController::class, 'hello');
Router::add('GET', '/world', HomeController::class, 'world');
Router::add('GET', '/about', HomeController::class, 'about');

Router::run();