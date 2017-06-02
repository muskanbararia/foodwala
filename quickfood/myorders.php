<?php 
session_start();
include "database/db_conection.php";

$email = $_SESSION['user'];
$email = 'adityapadhi1996@gmail.com';
$sql = "SELECT * FROM orders where email='$email' AND status=0";
$results= $dbcon->query($sql);
while($row = $results->fetch_assoc()){
?>

<table>
	<tr>
		<td><?=$row['order_id']?></td>
		<td><?=$row['address']?></td>
		<td><?=$row['status']?></td>
		<td><button onclick="window.open('payment.php?order_id=<?=$row['order_id']?>&user=<?=$_SESSION['user']?>','_self')">PAY NOW</button></td>
	</tr>

</table>
<?php
	
}



