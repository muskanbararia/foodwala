<?php
/*
To be used in the admin panel.
Gets order by email


*/
include("database/db_conection.php");

function get_string_between($string, $start, $end){
    $string = ' ' . $string;
    $ini = strpos($string, $start);
    if ($ini == 0) return '';
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    return substr($string, $ini, $len);
}

$sql = "SELECT * FROM orders WHERE email='adityapadhi1996@gmail.com'";
$results = $dbcon->query($sql);
while($row = $results->fetch_assoc()){
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
?>


<table border="1">
	<tr>
		<td>1</td>
		<td>Full Name</td>
		<td><?=$first_name?> <?=$last_name ?></td>
	</tr>
	<tr>
		<td>2</td>
		<td>Mobile</td>
		<td><?=$mobile?></td>
		
	</tr>
	<tr>
		<td>3</td>
		<td>Email</td>
		<td><?=$email?></td>
		
	</tr>
	<tr>
		<td>4</td>
		<td>Address</td>
		<td><?=$address?>, <?=$city?></td>
		
	</tr>
	<tr>
		<td>6</td>
		<td>Pincode</td>
		<td><?=$pincode ?></td>
		
	</tr>
	<tr>
		<td>7</td>
		<td>Date</td>
		<td><?=$date ?></td>
		
	</tr>
	<tr>
		<td>8</td>
		<td>Status</td>
		<td><?=$status ?></td>
		
	</tr>
	<tr>
		<td>9</td>
		<td>Items</td>
		<td>	
			<table>
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
		<td>10</td>
		<td>Total</td>
		<td><?=$total?>/-</td>
		
	</tr>
</table>





