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
              <td>
                <a href="javascript:void(0)" onclick="removeitem(<?=$row['item_id'] ?>)" class="remove_item"><i class="icon_minus_alt"></i></a> <?=$row['quan'] ?> <strong> x </strong> <?=$row['name']?>
              </td>
              <td>
                <strong class="pull-right">₹<?=$row['price']?></strong>
              </td>
            </tr>
          <?php } ?>

      </tbody>
    </table>
<?php
    if($result->num_rows==0){
              echo "<h3>Your cart is now empty!</h3>";

        }
        else{
          ?>
          <hr>
          <div class="row" id="options_2">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
              <label><input type="radio" value="" checked name="option_2" class="icheck">Delivery</label>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
              <label><input type="radio" value="" name="option_2" class="icheck">Take Away</label>
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
          <a class="btn_full" href="cart.php">Order now</a>
          </div><!-- End cart_box -->
<?php } 
}
?>