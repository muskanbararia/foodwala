<?php
session_start();
if(isset($_GET['orderid']) && 
   !empty($_GET['orderid']))
{
    unset($_SESSION['order_id']);
	$orderid = $_GET['orderid'];
	header('Location:myorders.php?orderid='.$orderid);
}else{
	header('Location:404.php');
}
