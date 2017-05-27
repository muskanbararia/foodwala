<?php
  if(isset($_GET['item'])){
    $id = $_GET['item'];
    $rid = $_GET['pid'];
    if (isset($_SESSION['cart'])) {
      # code...
      array_push($_SESSION['cart'], $id);
      echo "<script>window.open('detail.php?name=$rid','_self')</script>";
    }
    else{
      $_SESSION['cart'] = array();
      array_push($_SESSION['cart'], $id);
      echo "<script>window.open('detail.php?name=$rid','_self')</script>";
    }
  }
  else{
    echo "<script>window.open('detail.php?name=$rid','_self')</script>";
  }
?>