<?php
/**
* Order Class
*/
class Order
{
	public $mail;

	public function __construct(){
		require 'php-mailer/PHPMailerAutoload.php';
		$this->mail = new PHPMailer;
	}
	private $html1="<!DOCTYPE html>
				<html>
				<head>
				<style>
				table {
				    font-family: arial, sans-serif;
				    border-collapse: collapse;
				    width: 50%;
				}

				td, th {
				    border: 1px solid #dddddd;
				    text-align: left;
				    padding: 10px;
				}
				</style>
				</head>
				<body>";

	private $endhtml="</body></html>";


	public function get_string_between($string, $start, $end){
		    $string = ' ' . $string;
		    $ini = strpos($string, $start);
		    if ($ini == 0) return '';
		    $ini += strlen($start);
		    $len = strpos($string, $end, $ini) - $ini;
		    return substr($string, $ini, $len);
	}

	public function getOrderDetails($order_id, $first_name, $last_name, $mobile, $email, $date, $time, $note, $dinein, $status, $itemdetailed, $people ,$address, $city, $pincode, $rest_id, $last_id)
	{
		$results = array();

		$prop = array();
		$prop['id'] = $last_id;
		$prop['order_id'] = $order_id;
		$prop['first_name'] = $first_name;
		$prop['last_name'] = $last_name;
		$prop['mobile'] = $mobile;
		$prop['email'] = $email;
		$prop['date'] = $date;
		$prop['time'] = $time;
		$prop['note'] = $note;
		$prop['dinein'] = $dinein;
		$prop['status'] = $status;
		$items = json_decode($itemdetailed);
		$prop['people'] = $people;
		$prop['address'] = $address;
		$prop['city'] = $city;
		$prop['pincode'] = $pincode;
		$prop['rest_id'] = $rest_id;

		include "database/db_conection.php";
		$sql = "SELECT * FROM  resturant  WHERE id = $rest_id";
		$result = $dbcon->query($sql);
		while($row = $result->fetch_assoc()){
			$prop['restname'] = $row['name'];
			$prop['restloc'] = $row['location'];
			$prop['restphn'] = $row['phone'];
		}

		$oitems = array();
		foreach ($items as $key => $item) 
		{
			$oitems[$key]['name'] = preg_replace('/(?<!\ )[A-Z]/', ' $0', $this->get_string_between($item,'x','Rs.'));
			$oitems[$key]['quantity'] = $item[0];
			$oitems[$key]['price'] = intval(explode('Rs.', $item)[1]);
			$oitems[$key]['subtot'] = $item[0] * explode('Rs.', $item)[1];
		}
		$total = 0;
		foreach($oitems as $oitem)
		{
			$total += $oitem['subtot'];
		}
		$itemstable = "<table><thead>
						<tr>
							<th>Item</th>
							<th>Quan</th>
							<th>Price</th>
							<th>Subtotal</th>
						</tr>
					</thead>";
		foreach($oitems as $row) {
			$itemstable .= '<tr>';
			foreach($row as $cell) {
				$itemstable .= '<td>'.$cell .'</td>';
			}
			$itemstable .= '</tr>';
		}
		$itemstable .= "<tr>
						<th></th>
						<th></th>
						<th>Total</th>
						<th>$total/-</th>
						</tr>
					</table>";

		$results['prop'] = $prop;
		$results['total'] = $total;
		$results['itemstable'] = $itemstable;
		$results['oitems'] = $oitems;
		return $results;
	}

	public function sendClientMail($prop, $oitems, $total, $delivery, $last_id, $adminemail)
	{
		$coid = $prop['order_id'];
		$csub = "Your order with OrderID: #$coid has been placed successfully. Thanks for your order.";
		$cmail = $prop['email'];
		$cbody  = $this->html1;
		$ototal = $total+$delivery;

		$logo  = "http://dailydukaan.com";
		$name = $prop['first_name']." ".$prop['last_name'];
		$odate = $prop['date'];

		$cbody .= "<h3>Your order has been placed successfully.</h3> \n\n\n";
		$cbody .= "<h3> Resturant Name:".$prop['restname']."</h3>";
		$cbody .= "<h3> Resturant Location:".$prop['restloc']."</h3>";
		$cbody .= "<h3> Resturant Phone No.:".$prop['restphn']."</h3>";
		$cbody .= $itemstable;
		$cbody .= "<table>
					<tr>
						<th width='40%'></th>
						<th></th>
						<th>Total + Taxes</th>
						<th>$ototal /- (inc. taxes)</th>
					</tr>
					</table>";
		$cbody .= "\n\n\n<h3>Please click on the link below to check your order.</h3> \n\n\n<a href='http://foods.dailydukaan.com/myorders.php?orderid=$coid'> http://foods.dailydukaan.com/myorders.php?orderid=$coid </a>";
		$ototal = $total+$delivery;
		
		$cbody .= $this->endhtml;

		
        $this->mail->setFrom("$adminemail", 'Daily Dukaan - Foods');
        $this->mail->addAddress("$cmail", "$name");
        $this->mail->isHTML(true);
        $this->mail->Subject = "$csub";
        $this->mail->Body = "$cbody";
        
        $this->mail->send();
	}

	public function sendAdminMail($adminemail, $prop, $itemstable, $total, $delivery)
	{
		$name = $prop['first_name']." ".$prop['last_name'];
		$order_id = $prop['order_id'];
		$admintable ="<table>
					<thead>
					  <tr>
					    <th>#</th>
					    <th>Item</th>
					    <th>Description</th>
					  </tr>
					  </thead>";
        $ototal = $total+$delivery;
		$admintable .="<tbody>
			<tr>
				<td>1</td>
				<td>Full Name</td>
				<td>$name</td>
			</tr>
			<tr>
				<td>2</td>
				<td>Mobile</td>
				<td>".$prop['mobile']."</td>
			</tr>
			<tr>
				<td>3</td>
				<td>Email</td>
				<td>".$prop['email']."</td>
				
			</tr>";
		
		if(!$prop['dinein']){
		    $admintable .="	
			<tr>
				<td>4</td>
				<td>Address</td>
				<td>".$prop['address'].", ".$prop['city']."</td>
				
			</tr>
			<tr>
				<td>6</td>
				<td>Pincode</td>
				<td>".$prop['pincode']."</td>
				
			</tr>";
		}
		
		
		$admintable .="
			<tr>
				<td>7</td>
				<td>Date</td>
				<td>".$prop['date']."</td>
				
			</tr>
			<tr>
				<td>8</td>
				<td>Status</td>
				<td>".$prop['status']."</td>
				
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
					<td>$ototal /-</td>
					
				</tr>
				</tbody>
			</table>";
			$adminsub = "New order placed with OrderId: $order_id";
			$adminmessage = $this->html1.$admintable.$this->endhtml;

            $this->mail->setFrom("$adminemail", 'Daily Dukaan - Foods');
            $this->mail->addAddress('info@dailydukaan.com' , 'Admin Daily Dukaan');
            $this->mail->isHTML(true);
            $this->mail->Subject = "$adminsub";
            $this->mail->Body = "$adminmessage";
            
            $this->mail->send();
		}

		public function clearCart($user_email)
		{
			include "database/db_conection.php";
			$sql = "DELETE FROM `cart` WHERE `user_id`='$user_email'";
			$dbcon->query($sql);
			$dbcon->close();
		}
}