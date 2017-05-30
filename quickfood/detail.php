<!DOCTYPE html>
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html>

<?php include "head.php"; ?>


<body>

<!--[if lte IE 8]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
    <![endif]-->

    <?php //include "preloader.php"; ?>
    <!-- End Preload -->

    <!-- Header ====== -->
    <?php include "header.php"; ?>
    <!-- End Header === -->
    
    <!-- SubHeader === -->
    <?php
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

    <!-- Content ====== -->
    <div class="container margin_60_35">
      <div class="row">

        <!-- End col-md-3 -->

        <div class="col-md-9">
          <div class="box_style_2" id="main_menu">
            <h2 class="inner">Menu</h2>
            <!--Sub Menu Starts-->
            <?php
            $query = "SELECT DISTINCT category FROM item WHERE rest_id = $rid" ;
            // $run   = mysqli_query($dbcon, $query);
            $run = $dbcon->query($query);
            // while ($row = mysqli_fetch_array($run)) {
            while ($row = $run->fetch_array()) {
              # code...
              $cat = $row[0];
              ?>
              <h3 class="nomargin_top" id="starters"><?=$cat?></h3>
              <p>

              </p>
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
                      <a href="javascript:void(0)" onclick="addtocart(<?=$id?>)" style="text-decoration: none;" class="button"><i class="icon_plus_alt2"></i></a>
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
          <div class="col-md-3" id="sidebar">
            <div class="theiaStickySidebar" id="detailedcart">

            </div><!-- End theiaStickySidebar -->
          </div><!-- End col-md-3 -->

        </div><!-- End row -->
      </div><!-- End container -->
      <!-- End Content === -->

      <!-- Footer ====== -->
      <footer>
        <div class="container">
          <!-- End row -->
          <div class="row">
            <div class="col-md-12">
              <div id="social_footer">
                <ul>
                  <li><a href="#0"><i class="icon-facebook"></i></a></li>
                  <li><a href="#0"><i class="icon-twitter"></i></a></li>
                  <li><a href="#0"><i class="icon-google"></i></a></li>
                  <li><a href="#0"><i class="icon-instagram"></i></a></li>
                  <li><a href="#0"><i class="icon-pinterest"></i></a></li>
                  <li><a href="#0"><i class="icon-vimeo"></i></a></li>
                  <li><a href="#0"><i class="icon-youtube-play"></i></a></li>
                </ul>
                <p>© daily dukaan 2017</p>
              </div>
            </div>
          </div><!-- End row -->
        </div><!-- End container -->
      </footer>
      <!-- End Footer === -->

      <div class="layer"></div><!-- Mobile menu overlay mask -->

      <?php include "modals.php"; ?>

      <!-- Search Menu -->
      <div class="search-overlay-menu">
        <span class="search-overlay-close"><i class="icon_close"></i></span>
        <form role="search" id="searchform" method="get">
          <input value="" name="q" type="search" placeholder="Search..." />
          <button type="submit"><i class="icon-search-6"></i>
          </button>
        </form>
      </div>
      <!-- End Search Menu -->

      <!-- COMMON SCRIPTS -->
      <?php include "scripts.php"; ?>

      <!-- SPECIFIC SCRIPTS -->
      <script  src="js/cat_nav_mobile.js"></script>
      <script>$('#cat_nav').mobileMenu();</script>
      <script src="js/theia-sticky-sidebar.js"></script>
      <script>
        jQuery('#sidebar').theiaStickySidebar({
          additionalMarginTop: 80
        });
      </script>
      <script>
        alertify.set('notifier','position', 'bottom-right');
        $('#cat_nav a[href^="#"]').on('click', function (e) {
          e.preventDefault();
          var target = this.hash;
          var $target = $(target);
          $('html, body').stop().animate({
            'scrollTop': $target.offset().top - 70
          }, 900, 'swing', function () {
            window.location.hash = target;
          });
        });

        function addtocart(id)
        {
          $("body").css({ opacity:0.1});
          $.get( "addtocart.php?itemid="+id)
          .done(function(data) {
            $("#detailedcart").load('detailedcart.php');
            alertify.success(data);
            $("body").css({ opacity:1});
          })
          .fail(function() {
            $("body").css({ opacity:1});
            alert( "Failed to add to cart. Please try again." );
          });

        }

        function removeitem(itemid, rm)
        {
          $("body").css({ opacity:0.2});
          $.get("removefromcart.php?itemid="+itemid+"&remove="+rm)
          .done(function(data){
            alertify.success(data);
            $("body").css({ opacity:1});
            $("#detailedcart").load('detailedcart.php');
          }).fail(function(){
            $("body").css({ opacity:1});
            alertify.success(data);
          });
        }




        $(document).ready(function(){
          $("#detailedcart").load('detailedcart.php');
        });
      </script>

    </body>
    </html>