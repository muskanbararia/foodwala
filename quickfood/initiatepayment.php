<?php
error_reporting(0);
session_start();
include "database/db_conection.php";
if(!isset($_SESSION['user'])){
	header('LOCATION:index.php?next='.$actual_link);
}else{
	$useremail = $_SESSION['user'];

	if(isset($_POST['order_id']) && !empty($_POST['order_id']))
	{
		$order_id = $_POST['order_id'];
		$sql = "UPDATE orders SET status=1 where order_id='$order_id' AND user_email='$useremail'";
		$dbcon->query($sql);
	}

}
