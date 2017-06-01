<?php
session_start();		
include("database/db_conection.php");  

if(isset($_POST['first_name'])&&
	isset($_POST['last_name']) &&
	isset($_POST['mobile'])) && 
	isset($_POST['email']) && 
	isset($_POST['address']) && 
	isset($_POST['city']) && 
	isset($_POST['pincode']) && 
	isset($_POST['date']) && 
	isset($_POST['time']) && 
	isset($_POST['note'])) 
{
// status 0 for  payment status pending.
// status 1 for payment status complete.

	$status = 0;

	$sql = "INSERT INTO orders"


}