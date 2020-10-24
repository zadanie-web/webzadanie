<?php


$server  = 'localhost';
$director  = 'jaj/';
$znak = '/'; // '/'
define('BASE_URL', 'http://'.$server.$znak.$director);

function packageFille( $path, $base = BASE_URL.'')
{
    $path = trim( $path,'/' );
    return filter_var($base.$path,FILTER_SANITIZE_URL);
}




// AUTO ADD CSS ALL in FOLDER
function add_css($folder , $dubfolder, $pripona)
{
    foreach (glob($folder.'/'.$dubfolder.'/'.$pripona ) as $filename)
    {
        echo '<link rel="stylesheet" href="'. packageFille($filename) .'">';
    }
}


// AUTO ADD JS all in folder
function add_js($folder , $dubfolder, $pripona)
{
    foreach (glob($folder.'/'.$dubfolder.'/'.$pripona ) as $filename)
    {
        echo ' <script src="'. packageFille($filename).'"></script>';
    }
}