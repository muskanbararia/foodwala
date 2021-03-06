<?php  
    
    session_start();   
    if(!isset($_SESSION['admin']))  
    {
    echo"<script>window.open('./login','_self')</script>";
    } 
     $email=$_SESSION['admin'] ; 
     
?>
<!DOCTYPE html>
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html>
<?php include "head.php"; ?>

<body>

<!--[if lte IE 8]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
<![endif]-->

<?php include "preloader.php"; ?><!-- End Preload -->

    <!-- Header ================================================== -->
   <?php include "header.php"; ?>
    <!-- End Header =============================================== -->
    
    <!-- SubHeader =============================================== -->
   <section class="parallax-window" id="short" data-parallax="scroll" data-image-src="img/sub_header_cart.jpg" data-natural-width="1400" data-natural-height="350">
        <div id="subheader">
            <div id="sub_content">
                <h1>Admin section</h1>
                <p>manage your website</p>
                <p></p>
            </div><!-- End sub_content -->
        </div><!-- End subheader -->
    </section><!-- End section -->
    <!-- End SubHeader ============================================ -->
<!-- Position -->

    <!-- Content ================================================== -->
    <div class="container margin_60">
        <div id="tabs" class="tabs">
            <nav>
                <ul>
                    <li><a href="#section-1" class="icon-profile"><span>View Users</span></a>
                    </li>
                    <li><a href="#section-2" class="icon-menut-items"><span>View Coupans</span></a>
                    </li>
                    <li><a href="#section-3" class="icon-settings"><span>View Restaurants</span></a>
                    </li>
                    <li><a href="#section-4" class="icon-settings"><span>View Menu Items</span></a>
                    </li>
                    <li><a href="#section-5" class="icon-settings"><span>View Orders</span></a>
                    </li>
                    <li><a href="#section-6" class="icon-settings"><span>View Dine In Request</span></a>
                    </li>
                </ul>
            </nav>
            <div class="content">

                <?php include "view-user.php" ?>
                <?php include "view-coupan.php" ?>
                <!-- End section 2 -->
                <?php include "view-rest.php" ?>
                <?php include "view-menu.php" ?>
                <?php include "view-order.php" ?>
                <?php include "view-dine.php" ?>
                <!-- End section 3 -->

            </div><!-- End content -->
        </div>
    </div><!-- End container  -->
    <!-- End Content =============================================== -->

    <!-- Footer ================================================== -->
    <footer>
        <div class="container">
           
            <!-- End row -->
            <div class="row">
                <div class="col-md-12">
                    <div id="social_footer">
                        <ul>
                            <li><a href="#0"><i class="icon-facebook"></i></a>
                            </li>
                            <li><a href="#0"><i class="icon-twitter"></i></a>
                            </li>
                            <li><a href="#0"><i class="icon-google"></i></a>
                            </li>
                            <li><a href="#0"><i class="icon-instagram"></i></a>
                            </li>
                            <li><a href="#0"><i class="icon-pinterest"></i></a>
                            </li>
                            <li><a href="#0"><i class="icon-vimeo"></i></a>
                            </li>
                            <li><a href="#0"><i class="icon-youtube-play"></i></a>
                            </li>
                        </ul>
                        <p>© Quick Food 2015</p>
                    </div>
                </div>
            </div>
            <!-- End row -->
        </div>
        <!-- End container -->
    </footer>
    <!-- End Footer =============================================== -->

    <div class="layer"></div>
    <!-- Mobile menu overlay mask -->

    <!-- Login modal -->
    <div class="modal fade" id="login_2" tabindex="-1" role="dialog" aria-labelledby="myLogin" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content modal-popup">
                <a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
                <form action="#" class="popup-form" id="myLogin">
                    <div class="login_icon"><i class="icon_lock_alt"></i>
                    </div>
                    <input type="text" class="form-control form-white" placeholder="Username">
                    <input type="text" class="form-control form-white" placeholder="Password">
                    <div class="text-left">
                        <a href="#">Forgot Password?</a>
                    </div>
                    <button type="submit" class="btn btn-submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <!-- End modal -->

    <!-- Register modal -->
    <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myRegister" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content modal-popup">
                <a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
                <form action="#" class="popup-form" id="myRegister">
                    <div class="login_icon"><i class="icon_lock_alt"></i>
                    </div>
                    <input type="text" class="form-control form-white" placeholder="Name">
                    <input type="text" class="form-control form-white" placeholder="Last Name">
                    <input type="email" class="form-control form-white" placeholder="Email">
                    <input type="text" class="form-control form-white" placeholder="Password" id="password1">
                    <input type="text" class="form-control form-white" placeholder="Confirm password" id="password2">
                    <div id="pass-info" class="clearfix"></div>
                    <div class="checkbox-holder text-left">
                        <div class="checkbox">
                            <input type="checkbox" value="accept_2" id="check_2" name="check_2" />
                            <label for="check_2"><span>I Agree to the <strong>Terms &amp; Conditions</strong></span>
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-submit">Register</button>
                </form>
            </div>
        </div>
    </div>
    <!-- End Register modal -->

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
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/common_scripts_min.js"></script>
    <script src="js/functions.js"></script>
    <script src="assets/validate.js"></script>

    <!-- Specific scripts -->
    <script src="js/tabs.js"></script>
    <script>
        new CBPFWTabs(document.getElementById('tabs'));
    </script>

    <script src="js/bootstrap3-wysihtml5.min.js"></script>
    <script type="text/javascript">
        $('.wysihtml5').wysihtml5({});
    </script>
    <script src="js/dropzone.min.js"></script>
    <script>
        if ($('.dropzone').length > 0) {
            Dropzone.autoDiscover = false;
            $("#photos").dropzone({
                url: "upload",
                addRemoveLinks: true
            });

            $("#logo_picture").dropzone({
                url: "upload",
                maxFiles: 1,
                addRemoveLinks: true
            });

            $(".menu-item-pic").dropzone({
                url: "upload",
                maxFiles: 1,
                addRemoveLinks: true
            });
        }
    </script>

</body>

</html>
<?php
    if(isset($_POST['c_del']))  
    {
            $id = $_POST['id'];
            $sql = "DELETE FROM coupon WHERE id='$id'" ;
            if(mysqli_query($dbcon,$sql))  
        {  
            echo"<script>alert('DELETED')</script>";
            echo"<script>window.open('view.php','_self')</script>";  
        }
    }
    if(isset($_POST['u_del']))  
    {
            $id = $_POST['id'];
            $sql = "DELETE FROM user WHERE id='$id'" ;
            if(mysqli_query($dbcon,$sql))  
        {  
            echo"<script>alert('DELETED')</script>";
            echo"<script>window.open('view.php','_self')</script>";  
        }
    }
    if(isset($_POST['r_del']))  
    {
            $id = $_POST['id'];
            $sql = "DELETE FROM restaurant WHERE id='$id'" ;
            if(mysqli_query($dbcon,$sql))  
        {  
            echo"<script>alert('DELETED')</script>";
            echo"<script>window.open('view.php','_self')</script>";  
        }
    }
    if(isset($_POST['m_del']))  
    {
            $id = $_POST['id'];
            $sql = "DELETE FROM item WHERE id='$id'" ;
            if(mysqli_query($dbcon,$sql))  
        {  
            echo"<script>alert('DELETED')</script>";
            echo"<script>window.open('view.php','_self')</script>";  
        }
    }
    if(isset($_POST['d_del']))  
    {
            $id = $_POST['id'];
            $sql = "DELETE FROM dineIn WHERE id='$id'" ;
            if(mysqli_query($dbcon,$sql))  
        {  
            echo"<script>alert('DELETED')</script>";
            echo"<script>window.open('view.php','_self')</script>";  
        }
    }
?>