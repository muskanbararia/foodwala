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
	}
	else{
		$servername = "localhost";
	 	$username = "dailyduk_foods";
		$password = "foods@daily123";
		$dbname = "dailyduk_foody";	
	}
 	
	$delivery = 10;
	$adminemail = 'adityapadhi1996@gmail.com';
	$adminaddress = 'Bhubaneswar, Odisha';
	$record_limit = 5;
	$phnnum='+91 7381 11 0897';
	$timings = 'All days 9.00am - 7.30pm';

	

	// Create connection
	$dbcon = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($dbcon->connect_error) {
	    die("Connection failed: " . $dbcon->connect_error);
	}

	
    
?>  
