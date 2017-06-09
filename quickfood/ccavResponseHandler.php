<?php 
    ob_start();
    include('Crypto.php');

	error_reporting(0);
	
	$workingKey='E669538D2203B141CD541D9596947DB9';		//Working Key should be provided here.
	$encResponse=$_POST["encResp"];			//This is the response sent by the CCAvenue Server
	$rcvdString=decrypt($encResponse,$workingKey);		//Crypto Decryption used as per the specified working key.
	$order_status="";
	$decryptValues=explode('&', $rcvdString);
	$dataSize=sizeof($decryptValues);
	// echo "<center>";

	for($i = 0; $i < $dataSize; $i++) 
	{
		$information=explode('=',$decryptValues[$i]);
		if($i==0)	$order_id=$information[1];
		if($i==1)	$order_tracking_id=$information[1];
		if($i==3)	$order_status=$information[1];
	}

	if($order_status==="Success")
	{
		include "database/db_conection.php"; 
		// $order_id = $_GET['order_id'];
		class_exists('Order') || require('partials/class.order.php');
		$order = new Order;
		$detail = $order->getOrderDetails($order_id);
		$total = $detail['total'];
		$itemstable = $detail['itemstable'];
		$oitems = $detail['oitems'];
		$prop = $detail['prop'];
		$id  = $prop['id'];
		$order->sendClientMail($prop, $oitems, $total, $delivery, $adminemail, $adminaddress);
		$order->sendAdminMail($adminemail, $prop, $itemstable, $total, $delivery);
		$order->changeStatus($id);
		header('Location:http://foods.dailydukaan.com/myorders.php?orderid='.$order_id);
	}
	else if($order_status==="Aborted")
	{
		header('Location:http://foods.dailydukaan.com/myorders.php?aborted=1?orderid='.$order_id);
	
	}
	else if($order_status==="Failure")
	{
		header('Location:http://foods.dailydukaan.com/myorders.php?failed=1?orderid='.$order_id);
	}
	else
	{
		echo "<br>Security Error. Illegal access detected";
	
	}

	echo "<br><br>";

?>
