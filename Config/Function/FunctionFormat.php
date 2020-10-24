<?php

// STRING
function plain($str)
{
     return htmlspecialchars($str, ENT_QUOTES);

}


/**
 * EXTENDERS SELECT DATABASE
 * RETURN OBJECT
 */
function format($results)
{
    $results = array_map('trim', $results);
    return (object)$results;
}
