<?php
include_once 'Config/Config.php';
include_once 'Partials/Header.php';

$routes = [
    '/' => [
       'GET' => 'Partials/Body.php',
        'POST' => 'Partials/Body.php',
    ],

    '/Kategory' => [
        'POST' => 'Actions/Ajax/Kategory.php',
    ]

];







$page = segment(1);
$method = $_SERVER['REQUEST_METHOD'];

if ( ! isset( $routes["/$page"][$method]) ) {
    show_404();
}
include_once 'Partials/Footer.php';

require $routes["/$page"][$method] ;