<?php
error_reporting(0);
session_start();
include "database/db_conection.php";
if(!isset($_SESSION['user'])){
	header('LOCATION:index.php?next='.$actual_link);
}else{
	$useremail = $_SESSION['user'];
	if(isset($_POST['order_id']))
	{
		$order_id = $_POST['order_id'];
		$sql1 = "SELECT * FROM orders where order_id='$order_id' AND user_email='$useremail'";
		$result = $dbcon->query($sql1);
		if($result->num_rows>0){
			while($row=$result->fetch_assoc())
			{
				$status = $row['status'];
			}

			if($status != 2){
				$sql = "UPDATE orders SET status=0 WHERE order_id='$order_id' AND user_email='$useremail'";
				$dbcon->query($sql);
				echo 1;
			}
		}
		else{
			echo $result->num_rows;
		}
		
		
	}

}
