<?php
// GET:  page.php?name=John
echo $_GET['name'];

// POST form
echo $_POST['email'];

// Server info
echo $_SERVER['REQUEST_METHOD'];  // GET / POST
echo $_SERVER['PHP_SELF'];
echo $_SERVER['REMOTE_ADDR'];
echo $_SERVER['HTTP_USER_AGENT'];

// Always sanitize user input!
$name = htmlspecialchars($_GET['name'] ?? '');
?>
<!-- 
Superglobal   ->	Purpose
$_GET   ->	Query string parameters
$_POST  ->	Form data sent via POST
$_REQUEST   ->	Combined GET/POST/COOKIE
$_FILES  ->	Uploaded files
$_SERVER  ->	Server & execution environment
$_SESSION  -> 	Session variables
$_COOKIE   -> 	Cookie values
$_ENV   -> 	Environment variables
$GLOBALS    -> 	All global variables
-->