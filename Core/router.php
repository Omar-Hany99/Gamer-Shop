<?php

$uri = $_SERVER["REQUEST_URI"];


$routes = [
    '/test1/home' => 'controllers/index.php',
    '/test1/deals' => 'controllers/deals.php',
    '/test1/customerservice' => 'controllers/customer-service.php',
    '/test1/giftcards' => 'controllers/gift-cards.php',
    '/test1/registry' => 'controllers/registry.php',
    '/test1/pc' => 'controllers/pc.php',
    '/test1/console' => 'controllers/console.php',
    '/test1/handconsole' => 'controllers/handconsole.php'
];

if (array_key_exists($uri , $routes)){
    require $routes[$uri];
}else var_dump($uri);

