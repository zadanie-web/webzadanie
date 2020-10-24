<?php

/**
 * @param $str
 * @return string
 */
function plain($str)
{
    return htmlspecialchars($str,ENT_QUOTES);
}


/**
 * @param $results
 * @return object
 */
function format($results)
{
    $results = array_map('trim',$results);
    return (object)$results;
}