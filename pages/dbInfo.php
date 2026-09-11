<?php
error_reporting(0);
date_default_timezone_set('Asia/Kolkata');

function connect_database() {
	$fetchType = "array";
	$dbHost    = "localhost";
	$dbLogin   = "u341305994_upi11";
	$dbPwd     = "Ladox@20";
	$dbName    = "u341305994_upi11";
	$con       = mysqli_connect($dbHost, $dbLogin, $dbPwd, $dbName);
	if (!$con) {
		die("Database Connection failes" . mysqli_connect_errno());
	}
	return ($con);
}

// Database configuration
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'u341305994_upi11');
define('DB_PASSWORD', 'Ladox@20');
define('DB_NAME', 'u341305994_upi11');
?>