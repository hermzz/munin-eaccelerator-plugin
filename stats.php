<?php

$auth = true;
$user = "";
$pw = "";

if ($auth && (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW']) ||
        $_SERVER['PHP_AUTH_USER'] != $user || $_SERVER['PHP_AUTH_PW'] != $pw)) {
    header('WWW-Authenticate: Basic realm="eAccelerator control panel"');
    header('HTTP/1.0 401 Unauthorized');
    exit;
}

if(!function_exists("eaccelerator_info"))
	die("eaccelerator_info() function not found, make sure this script is under eaccelerator.allowed_admin_path");

$stats = eaccelerator_info();
$var_names = array('memorySize', 'memoryAllocated', 'cachedScripts', 'removedScripts');

foreach($var_names as $var_name)
	print $stats[$var_name].' ';

?>
