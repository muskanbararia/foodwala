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
	isset($_POST['note']) &&
	isset($_POST['dinein']) &&
	isset($_POST['items']) ) 
{
	// status 0 for  payment status pending.
	// status 1 for payment status complete.
	$order_id = 'DD'.strtotime("now");
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$pincode = $_POST['pincode'];
	$date = $_POST['date'];
	$time = $_POST['time'];
	$note = $_POST['note'];
	$dinein = $_POST['dinein'];
	$status = 0;
	$items = $_POST['items'];

	$sql = "INSERT INTO orders('order_id','first_name','last_name','mobile','email','address','city','pincode','date','time','note', 'dinein', 'status' ,'items') VALUES ('$order_id','$first_name', '$last_name', '$mobile', '$email', '$address', '$city', '$pincode', '$date', '$time', '$note', $dinein, $status,'$items')";
	$result = $dbcon->query($sql);
	


}