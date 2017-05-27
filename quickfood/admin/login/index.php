


<!DOCTYPE html>
<html>

<head>

<title>Signin</title>

<!-- Meta-Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="Natural Signin Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Meta-Tags -->

<!-- Style --> <link rel="stylesheet" href="css/style.css" type="text/css" media="all">

<!-- Fonts -->
<link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
<!-- //Fonts -->

</head>
<!-- //Head -->

<!-- Body -->
<body>
<div class="banner">
<div class="agileinfo-dot">
	<h1>Admin Login</h1>

	<div class="w3layoutscontaineragileits">
	<h2>Sign In</h2>
		<form action="index.php" method="post">
			<input type="email" name="email" placeholder="EMAIL" required="">
			<input type="password" name="password" placeholder="PASSWORD" required="">
			
			<div class="aitssendbuttonw3ls">
				<input type="submit" name = "submit" value="SIGNIN">
				<div class="clear"></div>
			</div>
		</form>
	</div>
	
	
	
</div>
</div>
	
	
	

</body>
<!-- //Body -->

</html>
<?php
		session_start();     
		include("../../database/db_conection.php");      
		    if(isset($_POST['submit']))  
		    {  
		        $email=($_POST['email']);  
		        $password=($_POST['password']);  
		        $check_user="select * from admin WHERE email='$email' AND pass='$password'";


		            $run=mysqli_query($dbcon,$check_user);  
		            $data = mysqli_fetch_assoc($run);
		          
		            if(mysqli_num_rows($run))  
		            {  
		                $_SESSION['admin']=$email;
		                echo "<script>window.open('../index.php','_self')</script>";  
		                   
		            }  
		            else  
		            {  
		              echo "<script>alert('Email or password is incorrect!')</script>";

		              echo "<script>window.open('./index.php','_self')</script>";       
		            }  
		        }
		       
?>  
