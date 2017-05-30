<?php
session_start();
if(!isset($_SESSION['user'])){
	header('LOCATION:'.$_SERVER['HTTP_REFERER']);
}

if(isset($_GET['itemid'])&&isset($_GET['remove']))
{
	$remove = $_GET['remove'];
	include("database/db_conection.php"); 
	$itemid = $_GET['itemid'];
	$userid = $_SESSION['user'];

	if($remove == 1){
		$sql = "DELETE FROM cart WHERE item_id=$itemid AND user_id='$userid'";
		$dbcon->query($sql);
		echo "Item removed from cart successfully. <a href='javascript:void(0)' onclick='addtocart($itemid)'>Add Again?</a>";
	}
	elseif ($remove==2) {
		$sql = "SELECT * FROM cart WHERE item_id=$itemid AND user_id='$userid'";
		$results = $dbcon->query($sql);
		while($row = $results->fetch_assoc()){
			$quan = $row['quan'];
		}
		$quan -= 1;
		if($quan==0)
		{
			$sql = "DELETE FROM cart WHERE item_id=$itemid AND user_id='$userid'";
			$dbcon->query($sql);
			echo "Item removed from cart successfully. <a href='javascript:void(0)' onclick='addtocart($itemid)'>Add Again?</a>";

		}
		else{
			$sql = "UPDATE cart SET quan=$quan WHERE item_id=$itemid AND user_id='$userid'";
			if ($dbcon->query( $sql)) 
			{
				echo "Quantity reduced successfully";
			}// end if
			else{
				echo "Couldnot reduce quantity! Please try again!";
			}
		}
		

	}
	
	
}