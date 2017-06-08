 <?php


 	$servername = "localhost";
 	$username = "root";
	$password = "";
	$delivery = 10;
	$adminemail = 'adityapadhi1996@gmail.com';

	$dbname = "foodwala";

	// Create connection
	$dbcon = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($dbcon->connect_error) {
	    die("Connection failed: " . $dbcon->connect_error);
	}

	
    
?>  
