<?php
session_start();		
include("database/db_conection.php");  
/*
returns json data 

*/
if(!isset($_SESSION['user'])){
	exit(1);
}
else{
	$user_email = $_SESSION['user'];
}


if(isset($_POST['first_name'])&& isset($_POST['last_name']) && isset($_POST['mobile']) && isset($_POST['email']) && isset($_POST['date']) && isset($_POST['time']) && isset($_POST['notes']) && isset($_POST['mode']) &&
	isset($_POST['items']) ) 
{
	// status 0 for  payment status pending.
	// status 1 for payment status complete.
	$order_id = 'DD'.strtotime("now");
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	$date = $_POST['date'];
	$time = $_POST['time'];
	$note = $_POST['notes'];
	$dinein = $_POST['mode'];
	$status = 0;
	$items = $_POST['items'];
	$itemdetailed = json_encode($items);

	if($dinein=='delivery' &&
		isset($_POST['address']) && 
		isset($_POST['city']) && 
		isset($_POST['pincode']))
	{
		$dinein = 0;
		$people = ' ';
		$address = $_POST['address'];
		$city = $_POST['city'];
		$pincode = $_POST['pincode'];
	}
	else if($dinein=='dinein' && isset($_POST['people']))
	{
		$dinein = 1;
		$people = $_POST['people'];
		$address = ' ';
		$city = ' ';
		$pincode = ' ';
	}
	else
	{
		header('location:'.$_SERVER['HTTP_REFERER']);
	}


	$sql = "INSERT INTO `orders`(`order_id`, `first_name`, `last_name`, `mobile`, `email`, `address`, `city`, `pincode`, `date`, `time`, `dinein`, `people`, `note`, `status`, `items`, `user_email`) VALUES ('$order_id','$first_name', '$last_name', '$mobile', '$email', '$address', '$city', '$pincode', '$date', '$time', $dinein, '$people' , '$note', $status,'$itemdetailed', '$user_email')";
	if($dbcon->query($sql))
	{
		$last_id = $dbcon->insert_id;
		class_exists('Order') || require('partials/class.order.php');
		$order = new Order;
		$detail = $order->getOrderDetails($order_id, $first_name, $last_name, $mobile, $email, $date, $time, $note, $dinein, $status, $itemdetailed, $people ,$address, $city, $pincode, $last_id);
		$prop = $detail['prop'];
		$total = $detail['total'];
		$itemstable = $detail['itemstable'];
		$order->sendClientMail($prop, $itemstable, $total, $delivery, $last_id);
		$order->sendAdminMail($adminemail, $prop, $itemstable, $total);
		$order->clearCart($user_email);

			
		$success = array('success' => 1,'orderid' => $order_id);
		echo json_encode($success);
	}
	


}