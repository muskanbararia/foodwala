<?php
session_start();
if(!isset($_SESSION['user'])){
	header('LOCATION:index.php');
}
include("../database/db_conection.php"); 
$cartid = $_GET['cartid'];
$userid = $_SESSION['user'];
$sql = "DELETE FROM cart WHERE id=$cartid AND user_id='$userid'";
$dbcon->query($sql);
echo "Deleted successfully";