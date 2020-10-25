<?php
// CONNECT FUNCTION && DATABASE && DEFINE
include_once 'Config/Config.php';


// LOW ROUTERS
$routes = [
    '/' => [
        'GET' => 'Partials/CONNECTION.php',
        'POST' => 'Partials/CONNECTION.php',
    ],

    '/Kategory' => [
        'POST' => 'Actions/Ajax/Kategory.php',
    ],

    '/NewKat' => [
        'POST' => 'Actions/Php/InsertKategory.php'
    ]

];


// KONTROL PAGE SEGMENT
$page = segment(1);

$method = $_SERVER['REQUEST_METHOD'];

if ( ! isset( $routes["/$page"][$method]) ) {
    show_404();
}

require $routes["/$page"][$method] ;