<?php
session_start();		
include("database/db_conection.php");  

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['mobile']) && isset($_POST['password']) && isset($_POST['address'])) 
{  
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['mobile'];
	$pwd=$_POST['password'];
	$address=$_POST['address'];

	$check_if_package="select * from user WHERE email='$email'";
	$run_query=$dbcon->query($check_if_package);  

	if($run_query->num_rows>0)  
	{  
		echo 0; 
	}


	$insert_package="INSERT INTO user (name, email, mobile, address,password) 
					VALUES ('$name','$email','$phone','$address','$pwd')";


	if($dbcon->query($insert_package))  
	{  
		echo 1;
	}     
}