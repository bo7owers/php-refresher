<?php

// dd($_SERVER);
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
// echo $uri;

// dd(parse_url($uri));

$routes = [
    '/learning-php/page-links/' => 'controllers/index.php',
    '/learning-php/page-links/about' => 'controllers/about.php',
    '/learning-php/page-links/contact' => 'controllers/contact.php',
];

function routeToController($uri, $routes)
{
    // load the route if matches query
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}
function abort($code = 404)
{
    http_response_code($code);
    require "views/{$code}.php";
    die();
}

routeToController($uri, $routes);