<?php


// PARTIALS
include_once 'Header.php';
include_once 'Body.php';
include_once 'Footer.php';


// MESSAGE BELL
require_once 'App/bell.php';
use bell\bell;
$message = null;
$mybell = new bell($message);