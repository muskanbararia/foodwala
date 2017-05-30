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
   <section class="parallax-window" id="short" data-parallax="scroll" data-image-src="../img/sub_header_cart.jpg" data-natural-width="1400" data-natural-height="350">
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
                    <li><a href="#section-1" class="icon-profile"><span>Main info</span></a>
                    </li>
                    <li><a href="#section-2" class="icon-menut-items"><span>Menu</span></a>
                    </li>
                    <li><a href="#section-3" class="icon-settings"><span>Coupans</span></a>
                    </li>
                </ul>
            </nav>
            <div class="content">

                <?php include "add-rest.php" ?>
                <?php include "add-menu.php" ?>
                <!-- End section 2 -->
                <?php include "add-coupan.php" ?>
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
    <script src="../js/jquery-2.2.4.min.js"></script>
    <script src="../js/common_scripts_min.js"></script>
    <script src="../js/functions.js"></script>
    <script src="../assets/validate.js"></script>

    <!-- Specific scripts -->
    <script src="../js/tabs.js"></script>
    <script>
        new CBPFWTabs(document.getElementById('tabs'));
    </script>

    <script src="../js/bootstrap3-wysihtml5.min.js"></script>
    <script type="text/javascript">
        $('.wysihtml5').wysihtml5({});
    </script>
    <script src="../js/dropzone.min.js"></script>
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
include("../database/db_conection.php");  
if (isset($_POST['r_submit']))
{
    $name = $_POST["r_name"];
    $desc=$_POST['r_desc'];
    $phone=$_POST['r_telephone'];
    $category=$_POST['r_cat'];
    $address=$_POST['r_addr'];
    $img_name = $_FILES['r_logo']['name'];
    $img_tmp_name = $_FILES['r_logo']['tmp_name'];
    $code = substr( md5(rand()), 0, 7);
    $img = "f".$code.$img_name;
    
    if(move_uploaded_file($img_tmp_name, "../img/".$img)){
        $inq = "INSERT INTO restaurant VALUES(NULL,'$name','$address','$img','$phone','$category','$desc')";
        $query = mysqli_query($dbcon,$inq);
        if($query){
            echo "<script>alert('Added')</script>";
        }else{
                echo "<script>alert('Error')</script>";
        }
    }else{
            echo "<script>alert('Error Upload $img_name')</script>";
    }
}
if (isset($_POST['m_submit']))
{
    $name = $_POST["m_name"];
    $desc=$_POST['m_desk'];
    $sub=$_POST['m_sub'];
    $category=$_POST['m_cat'];
    $price=$_POST['m_price'];
    $rest=$_POST['m_rest'];
    $inq2 = "SELECT * FROM restaurant WHERE name='$rest'";
        $query2 = mysqli_query($dbcon,$inq2);
        if ($row=mysqli_fetch_array($query2))
        {
            $restid=$row[0];
            
            $img_name = $_FILES['m_logo']['name'];
    $img_tmp_name = $_FILES['m_logo']['tmp_name'];
    $code = substr( md5(rand()), 0, 7);
    $img = "m".$code.$img_name;
    
    if(move_uploaded_file($img_tmp_name, "../img/".$img)){
        $inq = "INSERT INTO item VALUES(NULL,'$restid','$name','$category','$sub','$price','$img','$desc')";
        $query = mysqli_query($dbcon,$inq);
        if($query){
            echo "<script>alert('Added')</script>";
        }else{
                echo "<script>alert('Error')</script>";
        }
    }else{
            echo "<script>alert('Error Upload $img_name')</script>";
    }
        }
        else
        {
            echo "<script>alert('restaurant not present')</script>";
        }
    
}
if (isset($_POST['c_submit']))
{
    $name = $_POST["name"];
    $type=$_POST['type'];
    $amount=$_POST['value'];
    $valid=$_POST['valid'];
    
        $inq = "INSERT INTO coupon VALUES(NULL,'$name','$type','$amount','$valid')";
        $query = mysqli_query($dbcon,$inq);
        if($query){
            echo "<script>alert('Added')</script>";
        }else{
                echo "<script>alert('Error')</script>";
        }
    
    
}
?>