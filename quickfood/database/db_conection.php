<?php

	$whitelist = array(
	    '127.0.0.1',
	    '::1'
	);

	if(in_array($_SERVER['REMOTE_ADDR'], $whitelist)){
	    $servername = "localhost";
	 	$username = "root";
		$password = "";	
		$dbname = "foodwala";
		$documentroot = $_SERVER['DOCUMENT_ROOT'].'/fd/quickfood';
	}
	else{
		$servername = "localhost";
	 	$username = "dailyduk_foods";
		$password = "foods@daily123";
		$dbname = "dailyduk_foody";
		// $documentroot = $_SERVER['DOCUMENT_ROOT'];	
	}
 	
	$delivery = 0;
	$adminemail = 'info@dailydukaan.com';
	$adminaddress = 'Bhubaneswar, Odisha';
	$record_limit = 5;
	$phnnum='+91 7381 11 0897';
	$timings = 'All days 9.00am - 7.30pm';
	$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

	

	// Create connection
	$dbcon = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($dbcon->connect_error) {
	    die("Connection failed: " . $dbcon->connect_error);
	}

	
    
?>  
