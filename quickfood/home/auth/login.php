<?php

include("../database/db_conection.php");      
if(isset($_POST['login-submit']))  
{  
    $email=($_POST['name']);  
    $password=($_POST['password']);  
    $check_user="select * from user WHERE email='$email' AND password='$password'";


    $run= $dbcon->query($check_user);  
    $data = $run->fetch_assoc();

    if($run->num_rows>0)  
    {  
        $_SESSION['user']=$email;
        echo "<script>window.open('./index.php','_self')</script>";  

    }  
    else  
    {  
      echo "<script>alert('Email or password is incorrect!')</script>";

      echo "<script>window.open('./index.php','_self')</script>";       
  }  
}
if(isset($_POST['signin-submit']))  
{  
                        //here getting result from the post array after submitting the form.
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['mobile'];
    $pwd=$_POST['password'];
    $address=$_POST['address'];


                    //here query check if package already registered so can't register again.  
    $check_if_package="select * from user WHERE email='$email'";
    $run_query=$dbcon->query($check_if_package);  

    if($run_query->num_rows>0)  
    {  
        echo "<script>alert('User already exists')</script>";  
        exit();  
    }


    $insert_package="insert into user (name, email, mobile, address,password) VALUE ('$name','$email','$phone','$address','$pwd')";  


    if($dbcon->query($insert_package))  
    {  
        echo"<script>alert('Registered successfully')</script>";
        $_SESSION['user']=$email;
        echo"<script>window.open('./index.php','_self')</script>";
    }     
}
?>