<?php
session_start();		
include("database/db_conection.php");      
if(isset($_POST['name']) && isset($_POST['password']))  
{  
	$email=($_POST['name']);  
	$password=($_POST['password']);  
	$check_user="select count(*) AS pr from user WHERE email='$email' AND password='$password'";


	$run= $dbcon->query($check_user);  
	$data = $run->fetch_assoc();

	if((int)$data['pr'])  
	{  
		$_SESSION['user']=$email;
		echo 1;
	}  
	else  
	{  
		echo 0;      
	}  
}
