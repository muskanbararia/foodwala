<?php
		session_start();     
		include("../database/db_conection.php");      
		    if(isset($_POST['submit']))  
		    {  
		        $email=($_POST['email']);  
		        $password=($_POST['password']);  
		        $check_user="select * from user WHERE email='$email' AND pass='$password'";


		            $run=mysqli_query($dbcon,$check_user);  
		            $data = mysqli_fetch_assoc($run);
		          
		            if(mysqli_num_rows($run))  
		            {  
		                $_SESSION['email']=$email;
		                echo "<script>window.open('./index.php','_self')</script>";  
		                   
		            }  
		            else  
		            {  
		              echo "<script>alert('Email or password is incorrect!')</script>";

		              echo "<script>window.open('./index.php','_self')</script>";       
		            }  
		        }
		       
?>