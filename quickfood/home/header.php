 <header>
    <div class="container-fluid">
        <div class="row">
            <div class="col--md-4 col-sm-4 col-xs-4">
                <a href="index.html" id="logo">
                <img src="img/logo.png" width="120" height="60" alt="" data-retina="true" class="hidden-xs">
                <img src="img/logo_mobile.png" width="59" height="23" alt="" data-retina="true" class="hidden-lg hidden-md hidden-sm">
                </a>
            </div>
            <nav class="col--md-8 col-sm-8 col-xs-8">
            <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
            <div class="main-menu">
                <div id="header_menu">
                    <img src="img/logo.png" width="120" height="60" alt="" data-retina="true">
                </div>
                <a href="#" class="open_close" id="close_in"><i class="icon_close"></i></a>
                 <ul>
                    <li >
                    <a href="view.php" class="show-submenu">Restaurants</a>
                    
                    </li>
                    <li><a href="submit.php">Submit a restaurant</a></li>
                    <?php  
    
                     session_start(); 
                     ?>
                     <?php if (!isset($_SESSION['user'])): ?> 
                   
                    <li><a href="/signup.php"/>Signup</a></li>
                    <li><a href="/#0"/ data-toggle="/modal"/ data-target="/#login_2"/>Login</a></li>
                    <?php else: ?>
                        <?php 
                        include("../database/db_conection.php");          
        $email=$_SESSION['email'];
        $view_users_query="select * from user WHERE email='$email' ORDER BY id DESC";//select query for viewing users.  
        $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.  
  
        if($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
        {  
            $user_name=$row[1];
        }
        ?>
        <li><a href="/signup.php"/>Hello, <?php echo $user_name; ?></a></li>
                <?php endif; ?>
                    
                    
                    
                    
                    <li><a href="about.php">About us</a></li>
                    <li><a href="faq.php">Faq</a></li>
                    
                </ul>
            </div><!-- End main-menu -->
            </nav>
        </div><!-- End row -->
    </div><!-- End container -->
    </header>