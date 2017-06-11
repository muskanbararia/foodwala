<?php 
error_reporting(0);
session_start();
include "database/db_conection.php";
if(!isset($_SESSION['user'])){
	header('LOCATION:index.php');
}else{
	$useremail = $_SESSION['user'];
}
$sql = "SELECT * FROM orders WHERE user_email='".$useremail."'";
$results = $dbcon->query($sql);
?>

<!DOCTYPE html>
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html>
        <?php include "partials/head.php"; ?>

<body>
        <?php include "partials/preloader.php" ?>
        
        <!-- Header  -->
        <?php include "partials/header.php"; ?>
        <!-- End Header -->
        <section class="parallax-window" data-parallax="scroll" data-image-src="img/sub_header_2.jpg" data-natural-width="1400" data-natural-height="470">
		    <div id="subheader">
				<div id="sub_content">
		    			<div><img src="img/logo.png" alt=""></div>
		                <h1>My Order History</h1>
		        </div>
		    <!-- End sub_content -->
			</div><!-- End subheader -->
		</section>
		<!-- End section -->

        <div class="container margin_60_35">
          <div class="row">

				<div class="col-lg-12 col-md-6">


				<?php	while($row = $results->fetch_assoc()){ ?>
		
				    <div class="strip_list">
					<div class="row">
						<div class="col-md-9 col-sm-9">
							<div class="desc">
								<div class="thumb_strip">
									<a href="myorders.php?orderid=<?=$row['order_id'] ?>"><img src="http://via.placeholder.com/300?text=ORDER" alt=""></a>
								</div>
								<div class="rating">
									<i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i> (<small><a href="#0">98 reviews</a></small>)
								</div>
								<h3># <?=$row['order_id'] ?></h3>
								<div class="type">
									Italian / Pizza
								</div>
								<div class="location">
									135 Newtownards Road, Belfast, BT4. <span class="opening">Opens at 17:00.</span> Minimum order: $15
								</div>
								<ul>
									<?php if($row['dinein'] == 1){ ?>
										<li>Dine In<i class="icon_check_alt2 ok"></i></li>
									<?php } else {?>
										<li>Delivery<i class="icon_check_alt2 ok"></i></li>
									<?php } ?>
								</ul>
							</div>
						</div>
						<div class="col-md-3 col-sm-3">
							<div class="go_to">
								<div>
									<a href="myorders.php?orderid=<?=$row['order_id'] ?>" class="btn_1">View Order Details</a>
								</div>
							</div>
						</div>
					</div><!-- End row-->
				</div><!-- End strip_list-->
				<?php } ?>

				<a href="#0" class="load_more_bt_2">Load more...</a>  
				</div>


            </div><!-- End row -->
        </div>
        <!-- End container -->
         <!-- Footer -->
        <?php include "partials/footer.php"; ?>
        <!-- End Footer  -->

        <div class="layer"></div><!-- Mobile menu overlay mask -->

        <?php include "partials/modals.php"; ?>

        <!-- COMMON SCRIPTS -->
        <?php include "partials/scripts.php"; ?>

</body>
</html>