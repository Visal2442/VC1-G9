<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/home/index.controller.php',
    '/post' => 'controllers/post/post.controller.php',
    '/login' => 'controllers/login/login.controller.php',
    '/register' => 'controllers/register/register.controller.php',
    '/detail' => 'controllers/detail/detail.controller.php',
    '/search' => 'controllers/search/search.controller.php',
    '/profile' => 'controllers/profile/profile.controller.php',
    '/seller' => 'controllers/seller/seller.controller.php',
    '/cart'=> 'controllers/cart/cart.controller.php',
    '/cart'=> 'controllers/cart/cart.controller.php',
    '/error'=> 'views/errors/404.php',
];

if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
   http_response_code(404);
   require $routes['/error'];
   die();
}

