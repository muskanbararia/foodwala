<?php

if(!isset($_GET['mode']))
{
  if(isset($_SERVER['HTTP_REFERER'])){
    $referer= $_SERVER['HTTP_REFERER'];
    header('LOCATION:'.$referer);
  }  
  header('LOCATION:list_page.php');
}
else{
  $mode = $_GET['mode'];
  if($mode != 'delivery' && $mode != 'dinein')
  {
    header('LOCATION:404.php');
  }else{
  	$_SESSION['mode'] = $mode;
  	header('Location:cart.php?mode='.$mode);
  }
}