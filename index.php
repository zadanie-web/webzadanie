<?php
include_once 'Config/Config.php';
include_once 'Partials/Header.php';
$routes = [
    '/' => [
       '',
    ],
];
include_once 'Partials/Footer.php';

$page = segment(1);
$method = $_SERVER['REQUEST_METHOD'];

if ( ! isset( $routes["/$page"][$method]) ) {
    show_404();
}


require $routes["/$page"][$method] ;