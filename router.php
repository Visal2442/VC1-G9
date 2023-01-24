<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/home/index.controller.php',
    '/post' => 'controllers/post/post.controller.php',
    '/login' => 'controllers/login/login.controller.php',
    '/register' => 'controllers/register/register.controller.php'
];

if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
   http_response_code(404);
   require 'views/errors/404.php';
   die();
}

