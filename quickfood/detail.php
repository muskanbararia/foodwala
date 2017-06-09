<!DOCTYPE html>
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html>
        <?php include "partials/head.php"; ?>

<body>
        <?php include "partials/preloader.php" ?>
        
        <!-- Header  -->
        <?php include "partials/header.php"; ?>
        <!-- End Header -->
        
        <!-- SubHeader -->
        <?php
          include "database/db_conection.php"; 
          if(isset($_GET['name'])){
            $rid = $_GET['name'];
            $limit = 10;
            $query = "SELECT * FROM restaurant WHERE id = $rid" ;
            $run   = $dbcon->query($query);
            while ($row = $run->fetch_array()) {
            # code...
              $id = $row[0]; 
              $name = $row[1];
              $cat = $row[5];
              $desk = $row[6];
              $loc = $row[2];
              $logo = $row[3];
            }
          }
          else{
            $name = 'EXCE';
          }
        ?>
        <section class="parallax-window" data-parallax="scroll" data-image-src="img/sub_header_2.jpg" data-natural-width="1400" data-natural-height="470">
          <div id="subheader">
            <div id="sub_content">
              <div id="thumb">
                <img src="img/<?=$logo?>" alt="<?=$name?>">
              </div>

              <h1><?=$name?></h1>
              <div>
                <em><?=$cat?></em>
              </div>

            </div><!-- End sub_content -->
          </div><!-- End subheader -->
        </section><!-- End section -->
        <!-- End SubHeader  -->

        <!-- Position -->

        <!-- Content  -->
        <div class="container margin_60_35">
          <div class="row">

            <!-- End col-md-3 -->

            <div class="col-md-8">
              <div class="box_style_2" id="main_menu">
                <h2 class="inner">Menu</h2>
                <!--Sub Menu Starts-->
                <?php
                $query = "SELECT DISTINCT category FROM item WHERE rest_id = $rid" ;
                $run = $dbcon->query($query);
                while ($row = $run->fetch_array()) {
                  # code...
                  $cat = $row[0];
                  ?>
                  <h3 class="nomargin_top" id="starters"><?=$cat?></h3>

                  <table class="table table-striped cart-list">
                    <thead>
                      <tr>
                        <th>
                         Item
                       </th>
                       <th>
                         Price
                       </th>
                       <th>
                         Order
                       </th>
                     </tr>
                    </thead>
                    <tbody>
                      <?php
                        $query = "SELECT * FROM item WHERE rest_id = $rid AND category = '$cat'" ;
                        $runz = $dbcon->query($query);
                        $i = 0;
                        while ($irow = $runz->fetch_array()) {
                          # code...
                            $id     = $irow[0];
                            $i += 1;
                            $rest_id = $irow[1];
                            $item   = $irow[2];
                            $catg   = $irow[3];
                            $sub    = $irow[4];
                            $price  = $irow[5];
                            $logo   = $irow[6];
                            $desk   = $irow[7];
                            $img=$irow[6];
                            ?>
                          <tr>
                            <td>
                              <figure class="thumb_menu_list"><img src="img/<?=$img?>" alt="thumb"></figure>
                              <h5><?=$i?>. <?=$item?></h5>
                              <p>
                                <?=$desk?>
                              </p>
                            </td>
                            <td>
                              <strong> ₹ <?=$price?></strong>
                            </td>
                            <!-- Cart Options -->
                            <td class="options">
                              <a href="javascript:void(0)" onclick="
                              <?php if(isset($_SESSION['user'])){ ?>

                                addtocart(<?=$id?>)
                              <?php }
                                else{
                              ?>  
                              $('#login_2').modal('show');

                              <?php } ?>
                               " style="text-decoration: none;" class="button"><i class="icon_plus_alt2"></i></a>
                            </td>
                          </tr>
                      <?php }?>
                    </tbody>
                  </table>
                  <hr>
                  <?php } ?>
                  <!--Sub0menu end-->

                </div><!-- End box_style_1 -->
              </div><!-- End col-md-6 -->

              <!--Cart View -->
              <div class="col-md-4" id="sidebar">
                <div class="theiaStickySidebar" id="detailedcart">

                </div><!-- End theiaStickySidebar -->
              </div><!-- End col-md-3 -->

            </div><!-- End row -->
        </div>
        <!-- End container -->
        <!-- End Content === -->

        <!-- Footer -->
        <?php include "partials/footer.php"; ?>
        <!-- End Footer  -->

        <div class="layer"></div><!-- Mobile menu overlay mask -->

        <?php include "partials/modals.php"; ?>

        <!-- COMMON SCRIPTS -->
        <?php include "partials/scripts.php"; ?>

        <!-- SPECIFIC SCRIPTS -->
        <script  src="js/cat_nav_mobile.js"></script>
        <script>$('#cat_nav').mobileMenu();</script>
        <script src="js/theia-sticky-sidebar.js"></script>
        <script type="text/javascript" src="js/detail.min.js"></script>

    </body>
    </html>