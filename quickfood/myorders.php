<?php 
error_reporting(0);
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
		$sql = "SELECT * FROM orders WHERE order_id='$orderid'";
		$results = $dbcon->query($sql);
		$row = array();
		while($row = $results->fetch_assoc()){
			$id = $row['id'];
			$order_id = $row['order_id'];
			$first_name = $row['first_name'];
			$last_name = $row['last_name'];
			$mobile = $row['mobile'];
			$em = $row['email'];
			$address = $row['address'];
			$city = $row['city'];
			$pincode = $row['pincode'];
			$dinein = $row['dinein'];
			$people = $row['people'];
			$date = $row['date'];
			$time = $row['time'];
			$status = $row['status'];
			$items = json_decode($row['items']);
			$rest_id = $row['rest_id'];
			$db_user = $row['user_email'];
		}	
		if($db_user != $useremail){
			header('Location:myorders.php');
		}

		$sql = "SELECT * FROM restaurant WHERE id=$rest_id";
		$results = $dbcon->query($sql);
		$row = array();
		while($row = $results->fetch_assoc()){
			$rest_name = $row['name'];
			$rest_location = $row['location'];
			$rest_phone = $row['phone'];
			$rest_category = $row['category'];

		}

		$oitems = array();

		foreach ($items as $key => $item) {
			$oitems[$key]['name'] = preg_replace('/(?<!\ )[A-Z]/', ' $0', get_string_between($item,'x','Rs.'));
			$oitems[$key]['quantity'] = $item[0];
			$oitems[$key]['price'] = explode('Rs.', $item)[1];
			$oitems[$key]['subtot'] = $item[0] * explode('Rs.', $item)[1];
		}
		$i = 1;
		
?>
	<!DOCTYPE html>
	<!--[if IE 9]><html class="ie ie9"> <![endif]-->
	<html>
	<?php
	 include "partials/head.php";
	?>

	<body>
	        <?php include "partials/preloader.php"; ?>
	        
	        <!-- Header  -->
	        <?php include "partials/header.php"; ?>
	        <!-- End Header -->

	        <!-- SubHeader  -->
	        <section class="parallax-window" id="short" data-parallax="scroll" data-image-src="img/sub_header_cart.jpg" data-natural-width="1400" data-natural-height="350">
	          <div id="subheader">
	            <div id="sub_content">
	             <h1>Place your order</h1>
	             <div class="bs-wizard">
	              <div class="col-xs-4 bs-wizard-step complete">
	                <div class="text-center bs-wizard-stepnum"><strong>1.</strong> Your details</div>
	                <div class="progress"><div class="progress-bar"></div></div>
	                <a href="#0" class="bs-wizard-dot"></a>
	              </div>
	              
	              <div class="col-xs-4 bs-wizard-step complete <?php echo ($status == 1)? 'active':'';
	              													 echo  ($status == 2)? '':''; ?>">
	                <div class="text-center bs-wizard-stepnum"><strong>2.</strong> Payment<?php echo ($status == 1)? ' : Pending':'' ?></div>
	                
	                <div class="progress"><div class="progress-bar"></div></div>
	                <a href="#" class="bs-wizard-dot"></a>
	              </div>
	              
	              <div class="col-xs-4 bs-wizard-step 
	              <?php echo ($status == 2)? 'active':'disabled' ?>
	              ">
	                <div class="text-center bs-wizard-stepnum"><strong>3.</strong> Finish!</div>
	                <div class="progress"><div class="progress-bar"></div></div>
	                <a href="#" class="bs-wizard-dot"></a>
	              </div>  
	            </div><!-- End bs-wizard --> 
	          </div><!-- End sub_content -->
	          </div><!-- End subheader -->
	        </section><!-- End section -->

	         <div id="position">
	          <div class="container">
	            <ul>
	              <li><a href="index.php">Home</a></li>
	              <li>My Orders</li>
	            </ul>
	            <a href="#0" class="search-overlay-menu-btn"><i class="icon-search-6"></i> Search</a>
	          </div>
	        </div><!-- Position -->
			<div class="container margin_60_35">
					<div class="row">
						<div class="col-md-3">
							<div class="box_style_2 hidden-xs info">
								<h4 class="nomargin_top">Delivery time <i class="icon_clock_alt pull-right"></i></h4>
								<p>
									#
								</p>
								<hr>
								<h4>Secure payment <i class="icon_creditcard pull-right"></i></h4>
								<p>
									#
								</p>
							</div><!-- End box_style_2 -->
			                
							<div class="box_style_2 hidden-xs" id="help">
								<i class="icon_lifesaver"></i>
								<h4>Need <span>Help?</span></h4>
								<a href="tel://<?=$phnnum?>" class="phone"><?=$phnnum?></a>
								<small><?=$timings?></small>
							</div>
						</div><!-- End col-md-3 -->

	          <div class="col-md-6">
	            <div class="box_style_2">
	              <h2 class="inner">


	              
	              <img width='50' height='50'
	              <?php if($status==0) echo " src='img/icon_close.ico' /> Order Status : Cancelled";
	               else if($status==1) echo "  src='img/icon_pending.png' /> Order Status : Payment Pending";
	               else if($status==2) echo "  src='img/icon_success.png' /> Order Status : Successfull";
				?>
					</h2>

	               <h3>Billing Details</h3>
	              <table class="table table-bordered">
	                  <thead>
	                    <tr>
	                      <th>#</th>
	                      <th>Property</th>
	                      <th>Value</th>
	                    </tr>
	                  </thead>
	                  <tbody>
	                  	<tr>
	                      <th scope="row"><?=$i?></th>
	                      <td>Order ID</td>
	                      <td>#<a href="#"><?=$order_id?></a></td>
	                    </tr>
	                    <tr>
							<th scope="row"><?=++$i?></td>
							<td>Full Name</td>
							<td><?=$first_name?> <?=$last_name ?></td>
						</tr>
						<tr>
							<th scope="row"><?=++$i?></td>
							<td>Mobile</td>
							<td><?=$mobile?></td>
							
						</tr>
						<tr>
							<th scope="row"><?=++$i?></td>
							<td>Email</td>
							<td><?=$em?></td>
							
						</tr>

						<?php if($dinein){ ?>
						<tr>
								<th scope="row"><?=++$i?></td>
								<td>Persons</td>
								<td><?=$people ?></td>
								
							</tr>
						
						<?php }else{ ?>
							<tr>
							<th scope="row"><?=++$i?></td>
							<td>Address</td>
							<td><?=$address?>, <?=$city?></td>
							
						</tr>
						<tr>
							<th scope="row"><?=++$i?></td>
							<td>Pincode</td>
							<td><?=$pincode ?></td>
							
						</tr>

						<?php } ?>
						<tr>
							<th scope="row"><?=++$i?></td>
							<td>Date</td>
							<td><?=$date ?></td>
							
						</tr>
						<tr>
							<th scope="row"><?=++$i?></td>
							<td>Time</td>
							<td><?=$time ?></td>
							
						</tr>
						<tr>
							<th scope="row"><?=++$i?></td>
							<td>Persons</td>
							<td><?=$people ?></td>
							
						</tr>
	                    
	                  </tbody>
	                </table>

	               <h3>Resturant Details</h3>
	               <table class="table table-bordered">
	                  <thead>
	                    <tr>
	                      <th>#</th>
	                      <th>Property</th>
	                      <th>Value</th>
	                    </tr>
	                  </thead>
	                  <tbody>
	                  	<tr>
	                      <th scope="row"><?php echo $i=1;?></th>
	                      <td>Resturant Name</td>
	                      <td>#<a href="detail.php?name=<?=$rest_id?>"><?=$rest_name?></a></td>
	                    </tr>
	                    <tr>
							<th scope="row"><?=++$i?></td>
							<td>Resturant Location</td>
							<td><?=$rest_location ?></td>
						</tr>
						<tr>
							<th scope="row"><?=++$i?></td>
							<td>Resturant Phone</td>
							<td><?=$rest_phone?></td>
							
						</tr>
						<tr>
							<th scope="row"><?=++$i?></td>
							<td>Resturant Category</td>
							<td><?=$rest_category?></td>
							
						</tr>
						
						
	                    
	                  </tbody>
	                </table>

	            </div><!-- End box_style_1 -->
	          </div><!-- End col-md-6 -->
	          <div class="col-md-3" id="sidebar">
		            	<div class="theiaStickySidebar">
						<div id="cart_box">
							<h3>Your order <i class="icon_cart_alt pull-right"></i></h3>
							<table class="table table_summary">
							<tbody>
							<?php

							$total = 0;
							foreach($oitems as $oitem){

								$total += $oitem['subtot'];
							?>
							<tr>
								<td>
									<a href="javascript:void(0)" class="remove_item"><i class="icon_minus_alt"></i></a> <strong><?=$oitem['quantity']?> x</strong> <?=$oitem['name']?>
								</td>
								<td>
									<strong class="pull-right">₹<?=$oitem['price']?></strong>
								</td>
							</tr>
							<?php
								$ototal = $total+$delivery;
							}
								
							?>
							

							</tbody>
							</table>
							<hr>

							<input type="hidden" name="redirect_url" value="http://foods.dailydukaan.com/ccavResponseHandler.php"/>

							<input type="hidden" name="cancel_url" value="http://foods.dailydukaan.com/ccavResponseHandler.php"/>
							<div class="row" id="options_2">
								<div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
									<label>
									<input type="radio" value=""
									<?php if($dinein == 0)
									 echo "checked";
									 else
									 	echo "disabled";
									 ?> name="option_2" class="icheck">Delivery
									</label>
								</div>
								<div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
									<label><input type="radio" value="" name="option_2" <?php if($dinein == 1)
									 echo "checked";
									 else
									 	echo "disabled";
									 ?> class="icheck">Dine In</label>
								</div>
							</div><!-- Edn options 2 -->
							<hr>
							<input type="hidden" name="merchant_id" value="132894"/>
							<input type="hidden" name="currency" value="INR"/>
							
							<table class="table table_summary">
							<tbody>
							<tr>
								<td>
									 Subtotal <span class="pull-right">₹<?=$total?></span>
								</td>
							</tr>
							<tr>
								<td>
									 Delivery fee <span class="pull-right">₹<?=$delivery?></span>
								</td>
							</tr>
							<tr>
								<td class="total">
									 TOTAL <span class="pull-right">₹<?=$ototal?></span>
								</td>
							</tr>
							</tbody>
							</table>
							<hr>
							<?php if($status==0){ ?>
								<a class="btn_full" href="payment.php?order_id=<?=$order_id?>">Reinitiate payment</a>
							<?php } else if($status==1){ ?>
								<a class="btn_full" href="payment.php?order_id=<?=$order_id?>">Proceed to payment</a>
								<a class="btn_full" href="myorders.php"><i class="arrow_triangle-left"></i>Cancel Order</a>
				            <?php
				               }
				               else if($status==2) echo "  src='img/icon_close.ico' /> Order Status : Successfull";
							?>
							
							
						</div><!-- End cart_box -->
		                </div><!-- End theiaStickySidebar -->
				</div><!-- End col-md-3 -->



	          </div>


	          </div>




	        <!-- Footer -->
	        <?php include "partials/footer.php"; ?>
	        <!-- End Footer  -->

	        <div class="layer"></div><!-- Mobile menu overlay mask -->

	        <?php include "partials/modals.php"; ?>

	        <!-- COMMON SCRIPTS -->
	        <?php include "partials/scripts.php"; ?>


	        <!-- Search Menu -->
	        <!-- <div class="search-overlay-menu">
	          <span class="search-overlay-close"><i class="icon_close"></i></span>
	          <form role="search" id="searchform" method="get">
	            <input value="" name="q" type="search" placeholder="Search..." />
	            <button type="submit"><i class="icon-search-6"></i>
	            </button>
	          </form>
	        </div> -->
	        <!-- End Search Menu -->

	        <!-- SPECIFIC SCRIPTS -->
	        <script src="js/theia-sticky-sidebar.js"></script>
	        <script>
	          jQuery('#sidebar').theiaStickySidebar({
	            additionalMarginTop: 80
	          });
	         
	        </script>
	</body>
	</html>

<?php

}
else{
?>
<table>
<?php
	$sql = "SELECT * FROM orders WHERE user_email='".$useremail."'";
	$results = $dbcon->query($sql);

	while($row = $results->fetch_assoc())
	{
		?>

			<tr>
				<td>#</td>
				<td>Order Id</td>
				<td><?=$row['order_id'] ?></td>
				<td><a href="payment.php?order_id=<?=$row['order_id'] ?>">See Order</a></td>
			</tr>

		<?php
	}
}
?>

</table>







