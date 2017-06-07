<?php 
session_start();
include "database/db_conection.php";

function get_string_between($string, $start, $end){
    $string = ' ' . $string;
    $ini = strpos($string, $start);
    if ($ini == 0) return '';
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    return substr($string, $ini, $len);
} 
if(!isset($_SESSION['user'])){
	header('LOCATION:index.php');
}else{
	$useremail = $_SESSION['user'];
}
if(isset($_GET['orderid']) && !empty(($_GET['orderid'])))
{
		$orderid = $_GET['orderid'];


		$sql = "SELECT * FROM orders WHERE id='$orderid'";
		$results = $dbcon->query($sql);
		while($row = $results->fetch_assoc()){
			$order_id = $row['order_id'];
			$first_name = $row['first_name'];
			$last_name = $row['last_name'];
			$mobile = $row['mobile'];
			$email = $row['email'];
			$address = $row['address'];
			$city = $row['city'];
			$pincode = $row['pincode'];
			$dinein = $row['dinein'];
			$people = $row['people'];
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
		$i = 1;
		?>
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
		<table border="1">
			<tr>
				<td width="5%">#</td>
				<td width="25%">Order Id</td>
				<td width="70%"><?=$order_id ?></td>
			</tr>
			<tr>
				<td><?=$i?></td>
				<td>Full Name</td>
				<td><?=$first_name?> <?=$last_name ?></td>
			</tr>
			<tr>
				<td><?=++$i?></td>
				<td>Mobile</td>
				<td><?=$mobile?></td>
				
			</tr>
			<tr>
				<td><?=++$i?></td>
				<td>Email</td>
				<td><?=$email?></td>
				
			</tr>

			<?php if($dinein){ ?>
			<tr>
					<td><?=++$i?></td>
					<td>Persons</td>
					<td><?=$people ?></td>
					
				</tr>
			
			<?php }else{ ?>
				<tr>
				<td><?=++$i?></td>
				<td>Address</td>
				<td><?=$address?>, <?=$city?></td>
				
			</tr>
			<tr>
				<td><?=++$i?></td>
				<td>Pincode</td>
				<td><?=$pincode ?></td>
				
			</tr>

			<?php } ?>
			<tr>
				<td><?=++$i?></td>
				<td>Date</td>
				<td><?=$date ?></td>
				
			</tr>
			<tr>
				<td><?=++$i?></td>
				<td>Time</td>
				<td><?=$time ?></td>
				
			</tr>
			<tr>
				<td><?=++$i?></td>
				<td>Status</td>
				<td><?=$status ?></td>
				
			</tr>
			<tr>
				<td><?=++$i?></td>
				<td>Items</td>
				<td>	
					<table>
					<thead>
						<tr>
							<th>Quan</th>
							<th>Item</th>
							<th>Price</th>
							<th>Subtotal</th>
						</tr>
					</thead>
					<?php foreach($oitems as $row) {
					  echo('<tr>');
					  foreach($row as $cell) {
					    echo('<td>' . $cell . '</td>');
					  }
					  echo('</tr>');
					} ?>
					</table>
				</td>
			</tr>
			<tr>
				<td><?=++$i?></td>
				<td>Total</td>
				<td><?=$total?>/-</td>
				
			</tr>
		</table>
<?php

}
else{
?>
<table>
<?php
	$sql = "SELECT * FROM orders WHERE email='adityapadhi1996@gmail.com'";
	$results = $dbcon->query($sql);

	while($row = $results->fetch_assoc())
	{
		?>

			<tr>
				<td>#</td>
				<td>Order Id</td>
				<td><?=$row['order_id'] ?></td>
				<td><a href="myorders.php?orderid=<?=$row['id'] ?>">See Order</a></td>
			</tr>

		<?php
	}
}
?>

</table>







