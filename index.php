<?php
include_once 'Config/Config.php';
$routes = [
    '/' => [
       '',
    ],
];

$page = segment(1);
$method = $_SERVER['REQUEST_METHOD'];

if ( ! isset( $routes["/$page"][$method]) ) {
    show_404();
}


require $routes["/$page"][$method] ;