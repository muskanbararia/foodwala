 <div class="white_bg">
    <div class="container margin_60">
        
        <div class="main_title">
            <h2 class="nomargin_top">Choose from Most Popular</h2> 
        </div>

        <div class="row">
            <div class="col-md-6">
            <?php
                include "database/db_conection.php";
                  $query = "SELECT * FROM restaurant LIMIT 3" ;
                  $run   = $dbcon->query($query);
                  while ($row = $run->fetch_array()) //while look to fetch the result and store in a array $row.  
                  {  
                      $id = $row[0];
                      $name=$row[1];  
                      $location=$row[2];  
                      $logo=$row[3];  
                      $phone=$row[4];
                      $category=$row[5];
            ?>
                <a href="detail.php?name=<?=$id?>" class="strip_list">
                <div class="ribbon_1">
                    Popular
                </div>
                    <div class="desc">
                        <div class="thumb_strip">
                            <img src="img/<?=$logo?>" alt="">
                        </div>
                        <div class="rating">
                            <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                        </div>
                        <h3><?=$name?></h3>
                        <div class="type">
                            <?=$category?>
                        </div>
                        <div class="location">
                            Phone :<?=$phone?> <span class="opening">Opens at 10:00</span>
                        </div>
                        <ul>
                            <li>Take away<i class="icon_check_alt2 ok"></i></li>
                            <li>Delivery<i class="icon_check_alt2 ok"></i></li>
                        </ul>
                    </div><!-- End desc-->
                </a><!-- End strip_list-->
               <!-- End strip_list-->
             <?php } ?><!-- End col-md-6-->
            </div>
            <div class="col-md-6">
            <?php
                  $query = "SELECT * FROM restaurant LIMIT 3,6" ;
                  $run   = $dbcon->query($query);
                  while ($row = $run->fetch_array()) //while look to fetch the result and store in a array $row.  
                  {  
                      $id = $row[0];
                      $name=$row[1];  
                      $location=$row[2];  
                      $logo=$row[3];  
                      $phone=$row[4];
                      $category=$row[5];
            ?>
                <a href="detail.php?name=<?=$id?>" class="strip_list">
                <div class="ribbon_1">Popular</div>
                    <div class="desc">
                        <div class="thumb_strip">
                            <img src="img/<?=$logo?>" alt="">
                        </div>
                        <div class="rating">
                            <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                        </div>
                        <h3><?=$name?></h3>
                        <div class="type">
                            <?=$category?>
                        </div>
                        <div class="location">
                            Phone :<?=$phone?> <span class="opening">Opens at 10:00</span>
                        </div>
                        <ul>
                            <li>Take away<i class="icon_check_alt2 ok"></i></li>
                            <li>Delivery<i class="icon_check_alt2 ok"></i></li>
                        </ul>
                    </div><!-- End desc-->
                </a><!-- End strip_list-->
                <!-- End strip_list-->
            <?php } ?>
            </div>
        </div><!-- End row -->   
    </div><!-- End container -->
</div>