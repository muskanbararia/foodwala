<?php
		session_start();     
		include("../database/db_conection.php");      
		    if(isset($_POST['submit']))  
		    {  
		        $email=($_POST['email']);  
		        $password=($_POST['password']);  
		        $check_user="select * from user WHERE email='$email' AND pass='$password'";


		            $run=$dbcon->query($check_user);  
		            $data = $run->fetch_assoc();
		          
		            if($run->num_rows)  
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