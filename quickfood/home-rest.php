 <div class="white_bg">
    <div class="container margin_60">
        
        <div class="main_title">
            <h2 class="nomargin_top">Choose from Most Popular</h2>
            
        </div>
        <?php
            include "database/db_conection.php";
              $i=0;
              $query = "SELECT * FROM restaurant" ;
              $run   = $dbcon->query($query);
              while ($row = $run->fetch_array()) //while look to fetch the result and store in a array $row.  
              {  
                  $id = $row[0];
                  $name=$row[1];  
                  $location=$row[2];  
                  $logo=$row[3];  
                  $phone=$row[4];
                  $category=$row[5];
                  if($i%2==0){
                  
             
        ?>
        <div class="row">
            <div class="col-md-6">
                <a href="detail_page.html" class="strip_list">
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
                            <?=$location?> <span class="opening">Opens at 10:00</span>
                        </div>
                        <ul>
                            <li>Take away<i class="icon_check_alt2 ok"></i></li>
                            <li>Delivery<i class="icon_check_alt2 ok"></i></li>
                        </ul>
                    </div><!-- End desc-->
                </a><!-- End strip_list-->
                <?php }
                else {
                 ?>
              <!-- End strip_list-->
            </div>
            <div class="col-md-6">
                <a href="detail_page.html" class="strip_list">
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
                            <?=$location?> <span class="opening">Opens at 10:00</span>
                        </div>
                        <ul>
                            <li>Take away<i class="icon_check_alt2 ok"></i></li>
                            <li>Delivery<i class="icon_check_alt2 ok"></i></li>
                        </ul>
                    </div><!-- End desc-->
                </a><!-- End strip_list-->
                <!-- End strip_list-->
            </div>
        </div><!-- End row -->   
        <?php }
        } ?>
        </div><!-- End container -->
        </div>