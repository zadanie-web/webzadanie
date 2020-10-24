<?php
/**
 * SHOW 404
 */
function show_404()
{
    header("HTTP/1.0 404 NOT FOUND");
    include_once ('Components/404.php');
    die();
}

/**
 * @return string
 * CONTROL
 */
function get_http()
{
    return 'http' .
        (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on' ? 's://' : '://') .
        $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
}


/**
 * @return false|string[]
 * GET_HTTP
 */
function get_segments()
{
    $current_url = get_http();
    $path = str_replace(BASE_URL, '', $current_url);
    $path = trim(parse_url($path, PHP_URL_PATH), '/');
    $segments = explode('/', $path);

    return $segments;
}

/**
 * @param $index
 * @return false|mixed|string
 * GET_SEGMENTS
 */
function segment($index)
{
    $segments = get_segments();
    return isset($segments[$index - 1]) ? $segments[$index - 1] : false;
}



