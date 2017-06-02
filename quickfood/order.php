<?php
session_start();		
include("database/db_conection.php");  
/*
returns json data 

*/
if(isset($_POST['first_name'])&&
	isset($_POST['last_name']) &&
	isset($_POST['mobile']) && 
	isset($_POST['email']) && 
	isset($_POST['address']) && 
	isset($_POST['city']) && 
	isset($_POST['pincode']) && 
	isset($_POST['date']) && 
	isset($_POST['time']) && 
	isset($_POST['notes']) &&
	isset($_POST['mode']) &&
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
	$note = $_POST['notes'];
	$dinein = $_POST['mode'];
	$status = 0;
	$items = $_POST['items'];
	$itemdetailed = json_encode($items);
	/*echo "
	order_id: $order_id, 
	first_name: $first_name , 
	last_ame: $last_name , 
	mobile: $mobile , 
	email : $email,
	address: $address,
	city : $city,
	pincode : $pincode,
	date : $date,
	time : $time,
	note: $note,
	dineIn : $dinein,
	status : $status
	items: $itemdetailed";*/

	if($dinein=='delivery'){
		$dinein = 1;
	}else if($dinein=='dinein'){
		$dinein = 0;
	}

	// echo "Hello";
	// var_dump($dbcon);

	$sql = "INSERT INTO `orders`(`order_id`, `first_name`, `last_name`, `mobile`, `email`, `address`, `city`, `pincode`, `date`, `time`, `dinein`, `note`, `status`, `items`) VALUES ('$order_id','$first_name', '$last_name', '$mobile', '$email', '$address', '$city', '$pincode', '$date', '$time', $dinein , '$note', $status,'$itemdetailed')";
	if($dbcon->query($sql))
	{
		echo 1;
	}
	


}