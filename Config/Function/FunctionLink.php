<?php


$server  = 'localhost';
$director  = 'zadanie/';
$znak = '/'; // '/'
define('BASE_URL', 'http://'.$server.$znak.$director);

function packageFille( $path, $base = BASE_URL.'')
{
    $path = trim( $path,'/' );
    return filter_var($base.$path,FILTER_SANITIZE_URL);
}


/**
 * @param $folder
 * @param $dubfolder
 * @param $pripona
 * AUTO CONNECT IN FOLDER CSS
 * PACKAGEFILLE
 */
function add_css($folder , $dubfolder, $pripona)
{
    foreach (glob($folder.'/'.$dubfolder.'/'.$pripona ) as $filename)
    {
        echo '<link rel="stylesheet" href="'. packageFille($filename) .'">';
    }
}


/**
 * @param $folder
 * @param $dubfolder
 * @param $pripona
 * AUTO CONNECT IN FOLDER JS
 * PACKAGEFILLE
 */
function add_js($folder , $dubfolder, $pripona)
{
    foreach (glob($folder.'/'.$dubfolder.'/'.$pripona ) as $filename)
    {
        echo ' <script src="'. packageFille($filename).'"></script>';
    }
}