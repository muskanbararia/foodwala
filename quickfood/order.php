<?php
session_start();		
include("database/db_conection.php");  
/*
returns json data 

*/
function get_string_between($string, $start, $end){
	    $string = ' ' . $string;
	    $ini = strpos($string, $start);
	    if ($ini == 0) return '';
	    $ini += strlen($start);
	    $len = strpos($string, $end, $ini) - $ini;
	    return substr($string, $ini, $len);
}

if(isset($_POST['first_name'])&&
	isset($_POST['last_name']) &&
	isset($_POST['mobile']) && 
	isset($_POST['email']) && 
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
	else{
		header('location:'.$_SERVER['HTTP_REFERER']);
	}

	// echo "Hello";
	// var_dump($dbcon);

	$sql = "INSERT INTO `orders`(`order_id`, `first_name`, `last_name`, `mobile`, `email`, `address`, `city`, `pincode`, `date`, `time`, `dinein`, `people`, `note`, `status`, `items`) VALUES ('$order_id','$first_name', '$last_name', '$mobile', '$email', '$address', '$city', '$pincode', '$date', '$time', $dinein, $people , '$note', $status,'$itemdetailed')";
	if($dbcon->query($sql))
	{

		$last_id = $dbcon->insert_id;

		$sql2 = "SELECT * FROM orders WHERE id='$last_id'";
		$resulta = $dbcon->query($sql2);
		while($row = $resulta->fetch_assoc())
		{
			$first_name = $row['first_name'];
			$last_name = $row['last_name'];
			$mobile = $row['mobile'];
			$email = $row['email'];
			$address = $row['address'];
			$city = $row['city'];
			$pincode = $row['pincode'];
			$date = $row['date'];
			$time = $row['time'];
			$status = $row['status'];
			$items = json_decode($row['items']);
		}
		$oitems = array();
		foreach ($items as $key => $item) {
			$oitems[$key]['quantity'] = $item[0];
			$oitems[$key]['name'] = preg_replace('/(?<!\ )[A-Z]/', ' $0', get_string_between($item,'x','u20b9'));
			$oitems[$key]['price'] = explode('u20b9', $item)[1];
			$oitems[$key]['subtot'] = $item[0] * explode('u20b9', $item)[1];
		}

		$total = 0;
		foreach($oitems as $oitem){
			$total += $oitem['subtot'];
		}
		

		$html1="<!DOCTYPE html>
				<html>
				<head>
				<style>
				table {
				    font-family: arial, sans-serif;
				    border-collapse: collapse;
				    width: 100%;
				}

				td, th {
				    border: 1px solid #dddddd;
				    text-align: left;
				    padding: 8px;
				}

				tr:nth-child(even) {
				    background-color: #dddddd;
				}
				</style>
				</head>
				<body>";

			$itemstable = "<table>";
			foreach($oitems as $row) {
				$itemstable .= '<tr>';
				foreach($row as $cell) {
					$itemstable .= '<td>'.$cell .'</td>';
				}
				$itemstable .= '</tr>';
			}
			$itemstable .= '</table>';


			$admintable ="<table>
						<thead>
						  <tr>
						    <th>#</th>
						    <th>Item</th>
						    <th>Description</th>
						  </tr>
						  </thead>";

			$admintable .="<tbody>
				<tr>
					<td>1</td>
					<td>Full Name</td>
					<td>$first_name $last_name</td>
				</tr>
				<tr>
					<td>2</td>
					<td>Mobile</td>
					<td>$mobile</td>
					
				</tr>
				<tr>
					<td>3</td>
					<td>Email</td>
					<td>$email</td>
					
				</tr>
				<tr>
					<td>4</td>
					<td>Address</td>
					<td>$address, $city</td>
					
				</tr>
				<tr>
					<td>6</td>
					<td>Pincode</td>
					<td>$pincode</td>
					
				</tr>
				<tr>
					<td>7</td>
					<td>Date</td>
					<td>$date</td>
					
				</tr>
				<tr>
					<td>8</td>
					<td>Status</td>
					<td>$status</td>
					
				</tr>
				<tr>
					<td>9</td>
					<td>Items</td>
					<td>";

				$admintable .= $itemstable;
				$admintable .="		
					</td>
				</tr>
				<tr>
					<td>10</td>
					<td>Total</td>
					<td>$total /-</td>
					
				</tr>
				</tbody>
			</table>";

			$html2 = "</body></html>";

			$clientmail = $email;
			$clientsubject = 'Thanks for your order';
			$clientmsg = $html1;
			$clientmsg .= "Your order has been placed successfully. \n\n\n";
			$clientmsg .= $itemstable;
			$clientmsg .= "Please click on the link below to check your order. <a href='http://foods.dailydukaan.com/myorders.php?orderid=$last_id'>http://foods.dailydukaan.com/myorders.php?orderid=$last_id</a>";
			$clientmsg .= $html2;

			$adminsub = "New order placed";
			$adminmessage = $html1.$admintable.$html2;

			@mail($clientmail, $clientsubject, $clientmsg);
			@mail($adminmail, $adminsubject, $adminmessage);

			
			$success = array('success' => 1,'orderid' => $last_id);
			echo json_encode($success);
	}
	


}