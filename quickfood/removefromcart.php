<?php
session_start();
if(!isset($_SESSION['user'])){
	header('LOCATION:index.php');
}

if(isset($_GET['itemid'])&&isset($_GET['remove']))
{
	include("database/db_conection.php"); 
	$itemid = $_GET['itemid'];
	$userid = $_SESSION['user'];
	$sql = "DELETE FROM cart WHERE item_id=$itemid AND user_id='$userid'";
	$dbcon->query($sql);
	echo "Item removed from cart successfully. <a href='javascript:void(0)' onclick='addtocart($itemid)'>Add Again?</a>";
}