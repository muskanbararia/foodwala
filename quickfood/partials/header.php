 <header>
    <div class="container-fluid">
        <div class="row">
            <div class="col--md-4 col-sm-4 col-xs-4">
                <a href="index.php" id="logo">
                    <img src="img/logo.png" width="120" height="60" alt="" data-retina="true" class="hidden-xs">
                    <img src="img/logo_mobile.png" width="59" height="23" alt="" data-retina="true" class="hidden-lg hidden-md hidden-sm">
                </a>
            </div>
            <nav class="col-md-8 col-sm-8 col-xs-8" style="padding-top: 15px;">
                <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
                <div class="main-menu">
                    <div id="header_menu">
                        <img src="img/logo.png" width="120" height="60" alt="" data-retina="true">
                    </div>
                    <a href="#" class="open_close" id="close_in"><i class="icon_close"></i></a>
                     <ul>
                        <li>
                            <a href="index.php" class="show-submenu"><i class="pull-left icon-home-outline"></i> HOME</a>  
                        </li>
                        <li >
                            <a href="list_page.php" class="show-submenu"><i class="pull-left icon-food-1"></i> RESTUARANTS</a>
                        
                        </li>
                        <li><a href="about.php"><i class="pull-left icon-megaphone-2"></i> ABOUT US</a></li>
                        <li><a href="faq.php"><i class="pull-left icon-question"></i> FAQ</a></li>
                        
                        
                         <?php if (!isset($_SESSION['user'])): ?> 
                       
                        <li><a href="#0" data-toggle="modal" data-target="#register"><i class="pull-left icon-question"></i> SIGNUP</a></li>
                        <li><a href="#0" data-toggle="modal" data-target="#login_2"><i class="pull-left  icon-login"></i> LOGIN</a></li>
                        <?php else: ?>
                            <?php 
                            include("database/db_conection.php");          
                            $email=$_SESSION['user'];
                            $view_users_query="SELECT * from user WHERE email='$email' LIMIT 1";//select query for viewing users.  
                            $run=$dbcon->query($view_users_query);//here run the sql query.  
                      
                            if($row=$run->fetch_array())//while look to fetch the result and store in a array $row.  
                            {  
                                $user_name=$row[1];
                            }
                            ?>
                             <li><a href="myorders.php"><i class="pull-left icon-basket-3"></i> MY ORDERS</a></li>
                             <li><a href="logout.php"><i class="pull-left  icon-logout"></i> LOGOUT</a></li>
                             <?php endif; ?>
                        
                        
                        
                    </ul>
                </div><!-- End main-menu -->
            </nav>
        </div><!-- End row -->
    </div><!-- End container -->
</header>
