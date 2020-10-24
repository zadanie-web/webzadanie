<?php
/**
 * 404 page
 */
function show_404()
{
    header("HTTP/1.0 404 NOT FOUND");
    include_once("components/Systems/Message/404.php");
    die();
}


/**
 * http
 * https
 */
function get_http()
{
    return 'http' .
        (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on' ? 's://' : '://') .
        $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
}


/**
 * @return false|string[]
 * for segments in url
 */
function get_segments()
{
    $current_url = 'http' .
        (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on' ? 's://' : '://') .
        $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

    $path = str_replace(BASE_URL, '', $current_url);
    $path = trim(parse_url($path, PHP_URL_PATH), '/');
    $segments = explode('/', $path);

    return $segments;
}

/**
 * @param $index
 * @return bool|mixed
 */
function segment($index)
{
    $segments = get_segments();
    // -1 nevytahuje mi 0 segment z array tak -1 = 0 segmentu v array
    // musis zakomentovt filter zodpovedajuci k segmentu ktory chces vytiahnut
    // vo funkcii segments
    return isset($segments[$index - 1]) ? $segments[$index - 1] : false;
}



