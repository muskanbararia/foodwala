<div id="cart_box" >
<?php session_start(); 

if(!isset($_SESSION['user']))
{
    echo '<h3>Your order <i class="icon_cart_alt pull-right"></i></h3>';
    echo '<a href="#0" class="btn_full" data-toggle="modal" data-target="#login_2">Login</a>';
    echo '</div>';
}
else{
?>
    <h3>Your order <i class="icon_cart_alt pull-right"></i></h3>
    <table class="table table_summary">
      <tbody>
<?php
        include("database/db_conection.php");          

        $sql = "SELECT * FROM cart where user_id='".$_SESSION['user']."'";
        $result = $dbcon->query($sql);
        
          while($row = $result->fetch_assoc()){
          ?>
            <tr>
              <td class="col-md-1">
                <a href="javascript:void(0)" onclick="removeitem(<?=$row['item_id'] ?>,1)" class="remove_item"><i class="icon_close_alt"></i></a>
              </td>
              <td class="col-md-5">
                 <?=$row['quan'] ?> <strong> x </strong> <?=$row['name']?>
              </td>
              <td class="col-md-2">
                <strong class="pull-right">₹<?=$row['price']?></strong>
              </td>
              <td class="col-md-4">
                <ul class="list-inline">
                  <li><button class="btn btn-sm btn-danger" id="ritem"
                  <?php
                    if($row['quan']==1) echo "disabled";
                  ?>
                   onclick="removeitem(<?=$row['item_id'] ?>,2)"><i class="icon_minus_alt" ></i></button>
                  </li>
                  <li>
                <button class="btn btn-sm btn-info" onclick="addtocart(<?=$row['item_id'] ?>)"><i class="icon_plus_alt"></i></button>
                  </li>
                </ul>
                
              </td>
            </tr>
          <?php } ?>

      </tbody>
    </table>
<?php
    if($result->num_rows==0)
    {
              echo "<h3>Your cart is now empty!</h3>";

        }
        else{
          ?>
          <hr>
          <div class="row" id="options_2">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-6">
                <div class="row maxl">
                  <label class="radio inline"> 
                      <input type="radio" name="mode" value="delivery" 
                          <?php 
                            if(isset($_GET['mode'])){ 
                              if($_GET['mode']=='delivery'){ 
                                echo "checked=''";
                              }
                              else{
                                echo "disabled";
                              }
                            }
                           ?> >
                      <span style="font-size: 20px;"> Delivery </span> 
                   </label>
                  <label class="radio inline"> 
                      <input type="radio" name="mode" value="dinein" 
                          <?php 
                            if(isset($_GET['mode'])){ 
                              if($_GET['mode']=='dinein'){ 
                                echo "checked";
                              }
                              else{
                                echo "disabled";
                              }
                            }
                           ?> >
                      <span style="font-size: 20px;"> Dine In </span> 
                  </label>
                </div>
              
            </div>
          </div><!-- Edn options 2 -->       
          <hr>
          <table class="table table_summary">
            <tbody>
            <tr>
              <td>
              <?php

                $sql = "SELECT SUM(price) AS total FROM cart where user_id='".$_SESSION['user']."'";
                $result = $dbcon->query($sql);


                while($row = $result->fetch_assoc()){
                  $subtotal = $row['total'];
                  $delivery = 10;
                  $total = (int)$subtotal + 10;
              ?>
                 Subtotal <span class="pull-right">₹<?=$subtotal?></span>
              <?php
                 }
              ?>
              </td>
            </tr>
            <tr>
              <td>
                 Delivery fee <span class="pull-right">₹<?=$delivery?></span>
              </td>
            </tr>
            <tr>
              <td class="total">
                 TOTAL <span class="pull-right">₹<?=$total ?></span>
              </td>
            </tr>
            </tbody>
          </table>
          <hr>
          <button class="btn_full" onclick="checkMode()">Order now</button>
          </div><!-- End cart_box -->
<?php } 
}
?>