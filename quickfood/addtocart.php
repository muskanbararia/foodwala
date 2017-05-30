<?php
session_start();
if(!isset($_SESSION['user'])){
  echo "You must login in order to continue.";
}
if(isset($_GET['itemid']) && isset($_SESSION['user']))
{
      include "database/db_conection.php";
      $itemid = $_GET['itemid'];
      $query = "SELECT * FROM item WHERE id =".$itemid;
      $run   = $dbcon->query( $query);
      while ($row = $run->fetch_array()) 
      {
              # code...
        $itemid = $row[0]; 
        $rest_id = $row[1];
        $name = $row[2];
        $price = $row[5];
      }

      $quan = 1;
      $userid = $_SESSION['user'];
      $sql = "SELECT * FROM `cart` WHERE `user_id`='".$userid."' LIMIT 1";
      $result = $dbcon->query($sql);

     // var_dump($result);
      if($result->num_rows==0)
      {
                //cart has no items so directly add item
        $insertquery = "INSERT INTO cart(id,item_id,rest_id,name,price,quan,user_id) 
        VALUES('', $itemid, $rest_id, '$name', $price, $quan, '$userid')";

        if($dbcon->query( $insertquery))
        {
         echo $name." added to cart successfully.<br/>";
               echo "Click here to <a href='javascript:void(0)' onclick='removeitem($dbcon->insert_id)'>remove item.</a>";
         }
         else
         {
           echo "Error adding";
         }
      }
     else
     {
       while($row = $result->fetch_assoc()) 
       {
        $user_cart_rest_id = $row['rest_id'];

       }
      if($user_cart_rest_id == $rest_id)
      {
            $sql = "SELECT * FROM cart where item_id=$itemid AND user_id='$userid'";
            $result = $dbcon->query($sql);

            if($result->num_rows==0)
            {
                        //Insert
              $insertquery = "INSERT INTO cart(id,item_id,rest_id,name,price,quan,user_id) 
              VALUES('', $itemid, $rest_id, '$name', $price, $quan, '$userid')";

              if($dbcon->query( $insertquery))
              {
               echo $name." added to cart successfully.<br/>";
               echo "Click here to <a href='javascript:void(0)' onclick='removeitem($dbcon->insert_id)'>remove item.</a>";
              }//end if
              else
               {
                 echo "Error adding";
               } //end else
           }// end if
           else
           {
            //Update
            while($row = $result->fetch_assoc()) 
             {
              $quan = $row['quan'];
             }
             $quan+=1;
            $sql = "UPDATE cart SET quan=$quan WHERE item_id=$itemid AND user_id='$userid'";
              if ($dbcon->query( $sql)) 
              {
                echo "Quantity updated successfully";
              }// end if
              else{
                echo "Couldnot update!";
              }
              
            }//end else
      }
      else{
        echo "You cannot add an item from differnt shop on this cart. please remove the items to do so.";
      }
    }
}




?>