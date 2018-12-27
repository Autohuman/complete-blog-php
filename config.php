<?php
	session_start();
	// connect to database
	$conn = mysqli_connect("localhost", "root", "991004", "QunXing");
	mysqli_query($conn,"set names utf8");


	if (!$conn) {
		die("Error connecting to database: " . mysqli_connect_error());
	}
    // define global constants
	define ('ROOT_PATH', realpath(dirname(__FILE__)));
	define('BASE_URL', 'http://47.101.196.53/CMS/');
?>
