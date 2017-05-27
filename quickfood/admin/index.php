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
                <p>Qui debitis meliore ex, tollit debitis conclusionemque te eos.</p>
                <p></p>
            </div><!-- End sub_content -->
        </div><!-- End subheader -->
    </section><!-- End section -->
    <!-- End SubHeader ============================================ -->

    <div id="position">
        <div class="container">
            <ul>
                <li><a href="#0">Home</a>
                </li>
                <li><a href="#0">Category</a>
                </li>
                <li>Page active</li>
            </ul>
            <a href="#0" class="search-overlay-menu-btn"><i class="icon-search-6"></i> Search</a>
        </div>
    </div><!-- Position -->

    <!-- Content ================================================== -->
    <div class="container margin_60">
        <div id="tabs" class="tabs">
            <nav>
                <ul>
                    <li><a href="#section-1" class="icon-profile"><span>Main info</span></a>
                    </li>
                    <li><a href="#section-2" class="icon-menut-items"><span>Menu</span></a>
                    </li>
                    <li><a href="#section-3" class="icon-settings"><span>Settings</span></a>
                    </li>
                </ul>
            </nav>
            <div class="content">

                <section id="section-1">
                <form action="index.php" method="post"  enctype="multipart/form-data">
                    <div class="indent_title_in">
                        <i class="icon_house_alt"></i>
                        <h3>General restaurant description</h3>
                        <p>Partem diceret praesent mel et, vis facilis alienum antiopam ea, vim in sumo diam sonet. Illud ignota cum te, decore elaboraret nec ea. Quo ei graeci repudiare definitionem. Vim et malorum ornatus assentior, exerci elaboraret eum ut, diam meliore no mel.</p>
                    </div>

                    <div class="wrapper_indent">
                        <div class="form-group">
                            <label>Restaurant name</label>
                            <input class="form-control" name="r_name" id="restaurant_name" type="text">
                        </div>
                        <div class="form-group">
                            <label>Restaurant description</label>
                            <textarea class="wysihtml5 form-control" name="r_desc" placeholder="Enter text ..." style="height: 200px;"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Telephone</label>
                                    <input type="text" id="Telephone" name="r_telephone" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Category</label>
                                    <input type="text" id="Email" name="r_cat" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div><!-- End wrapper_indent -->

                    <hr class="styled_2">

                    <div class="indent_title_in">
                        <i class="icon_pin_alt"></i>
                        <h3>Address</h3>
                        <p>
                            Mussum ipsum cacilds, vidis litro abertis.
                        </p>
                    </div>
                    <div class="wrapper_indent">
                        <div class="form-group">
                            <label>Restaurant Address</label>
                            <textarea class="wysihtml5 form-control" name="r_addr" placeholder="Enter text ..." style="height: 200px;"></textarea>
                        </div><!--End row -->
                    </div><!-- End wrapper_indent -->

                    <hr class="styled_2">
                    <div class="indent_title_in">
                        <i class="icon_images"></i>
                        <h3>Logo and restaurant photos</h3>
                        <p>
                            Mussum ipsum cacilds, vidis litro abertis.
                        </p>
                    </div>

                    <div class="wrapper_indent add_bottom_45">
                        <div class="form-group">
                            <label>Upload your restaurant logo</label>
                            <div id="logo_picture" class="dropzone">
                                <input name="r_logo" type="file">
                                <div class="dz-default dz-message"><span>Click or Drop Images Here</span>
                                </div>
                            </div>
                        </div>

                        
                    </div><!-- End wrapper_indent -->
                    
                    <hr class="styled_2">
                    <div class="wrapper_indent">
                        <input class="btn_1" type="submit" name = "r_submit" value="Add">
                    </div><!-- End wrapper_indent -->
                </form>   
                </section><!-- End section 1 -->

                <section id="section-2">
                    <div class="indent_title_in">
                        <i class="icon_document_alt"></i>
                        <h3>Edit menu list</h3>
                        <p>Partem diceret praesent mel et, vis facilis alienum antiopam ea, vim in sumo diam sonet. Illud ignota cum te, decore elaboraret nec ea. Quo ei graeci repudiare definitionem. Vim et malorum ornatus assentior, exerci elaboraret eum ut, diam meliore no mel.</p>
                    </div>
                    
                    <div class="wrapper_indent">
                        <div class="form-group">
                            <label>Menu Category</label>
                            <input type="text" name="menu_category" class="form-control" placeholder="EX. Starters">
                        </div>

                        <div class="menu-item-section clearfix">
                            <h4>Menu item #1</h4>
                            <div><a href="#0"><i class="icon_plus_alt"></i></a><a href="#0"><i class="icon_minus_alt"></i></a>
                            </div>
                        </div>

                        <div class="strip_menu_items">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="menu-item-pic dropzone">
                                        <input name="file" type="file">
                                        <div class="dz-default dz-message"><span>Click or Drop<br>Images Here</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-9">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="text"  name="menu_item_title" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Price</label>
                                                <input type="text" name="menu_item_title_price" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Short description</label>
                                        <input type="text" name="menu_item_description" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Item options</label>
                                        <div class="table-responsive">
                                            <table class="table table-striped edit-options">
                                                <tbody>
                                                    <tr>
                                                        <td style="width:20%">
                                                            <input type="text" class="form-control" placeholder="+ $3.50">
                                                        </td>
                                                        <td style="width:50%">
                                                            <input type="text" class="form-control" placeholder="Ex. Medium">
                                                        </td>
                                                        <td style="width:30%">
                                                            <label>
                                                                <input type="radio" name="option_item_settings_1" checked class="icheck" value="checkbox">Checkbox</label>
                                                            <label class="margin_left">
                                                                <input type="radio" name="option_item_settings_1" class="icheck" value="radio">Radio</label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width:20%">
                                                            <input type="text" class="form-control" placeholder="+ $5.50">
                                                        </td>
                                                        <td style="width:50%">
                                                            <input type="text" class="form-control" placeholder="Ex. Large">
                                                        </td>
                                                        <td style="width:30%">
                                                            <label>
                                                                <input type="radio" name="option_item_settings_2" class="icheck" value="checkbox">Checkbox</label>
                                                            <label class="margin_left">
                                                                <input type="radio" name="option_item_settings_2" class="icheck" value="radio" checked>Radio</label>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div><!-- End form-group -->

                                    <div class="form-group">
                                        <label>Item ingredients</label>
                                        <div class="table-responsive">
                                        <table class="table table-striped notifications">
                                            <tbody>
                                                <tr>
                                                    <td style="width:20%">
                                                        <input type="text" class="form-control" placeholder="+ $2.50">
                                                    </td>
                                                    <td style="width:50%">
                                                        <input type="text" class="form-control" placeholder="Ex. Extra tomato">
                                                    </td>
                                                    <td style="width:30%">
                                                        <label>
                                                            <input type="radio" name="option_item_settings_3" checked class="icheck" value="checkbox">Checkbox</label>
                                                        <label class="margin_left">
                                                            <input type="radio" name="option_item_settings_3" class="icheck" value="radio">Radio</label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width:20%">
                                                        <input type="text" class="form-control" placeholder="+ $5.50">
                                                    </td>
                                                    <td style="width:50%">
                                                        <input type="text" class="form-control" placeholder="Ex. Extra Pepper">
                                                    </td>
                                                    <td style="width:30%">
                                                        <label>
                                                            <input type="radio" name="option_item_settings_4" class="icheck" value="checkbox">Checkbox</label>
                                                        <label class="margin_left">
                                                            <input type="radio" name="option_item_settings_4" class="icheck" value="radio" checked>Radio</label>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        </div>
                                    </div><!-- End form-group -->
                                </div>
                            </div><!-- End row -->
                        </div><!-- End strip_menu_items -->



                        <div class="menu-item-section clearfix">
                            <h4>Menu item #2</h4>
                            <div><a href="#0"><i class="icon_plus_alt"></i></a><a href="#0"><i class="icon_minus_alt"></i></a>
                            </div>
                        </div>

                        <div class="strip_menu_items">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="menu-item-pic dropzone">
                                        <input name="file" type="file">
                                        <div class="dz-default dz-message"><span>Click or Drop<br>Images Here</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-9">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="text" name="menu_item_title" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Price</label>
                                                <input type="text" name="menu_item_title_price" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Short description</label>
                                        <input type="text" name="menu_item_description" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Item options</label>
                                        <div class="table-responsive">
                                        <table class="table table-striped notifications">
                                            <tbody>
                                                <tr>
                                                    <td style="width:20%">
                                                        <input type="text" class="form-control" placeholder="+ $3.50">
                                                    </td>
                                                    <td style="width:50%">
                                                        <input type="text" class="form-control" placeholder="Ex. Medium">
                                                    </td>
                                                    <td style="width:30%">
                                                        <label>
                                                            <input type="radio" name="option_item_settings_5" checked class="icheck" value="checkbox">Checkbox</label>
                                                        <label class="margin_left">
                                                            <input type="radio" name="option_item_settings_5" class="icheck" value="radio">Radio</label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width:20%">
                                                        <input type="text" class="form-control" placeholder="+ $5.50">
                                                    </td>
                                                    <td style="width:50%">
                                                        <input type="text" class="form-control" placeholder="Ex. Large">
                                                    </td>
                                                    <td style="width:30%">
                                                        <label>
                                                            <input type="radio" name="option_item_settings_7" class="icheck" value="checkbox">Checkbox</label>
                                                        <label class="margin_left">
                                                            <input type="radio" name="option_item_settings_7" class="icheck" value="radio" checked>Radio</label>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        </div>
                                    </div><!-- End form-group -->

                                    <div class="form-group">
                                        <label>Item ingredients</label>
                                        <div class="table-responsive">
                                        <table class="table table-striped notifications">
                                            <tbody>
                                                <tr>
                                                    <td style="width:20%">
                                                        <input type="text" class="form-control" placeholder="+ $2.50">
                                                    </td>
                                                    <td style="width:50%">
                                                        <input type="text" class="form-control" placeholder="Ex. Extra tomato">
                                                    </td>
                                                    <td style="width:30%">
                                                        <label>
                                                            <input type="radio" name="option_item_settings_8" checked class="icheck" value="checkbox">Checkbox</label>
                                                        <label class="margin_left">
                                                            <input type="radio" name="option_item_settings_8" class="icheck" value="radio">Radio</label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width:20%">
                                                        <input type="text" class="form-control" placeholder="+ $5.50">
                                                    </td>
                                                    <td style="width:50%">
                                                        <input type="text" class="form-control" placeholder="Ex. Extra Pepper">
                                                    </td>
                                                    <td style="width:30%">
                                                        <label>
                                                            <input type="radio" name="option_item_settings_9" class="icheck" value="checkbox">Checkbox</label>
                                                        <label class="margin_left">
                                                            <input type="radio" name="option_item_settings_9" class="icheck" value="radio" checked>Radio</label>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        </div>
                                    </div><!-- End form-group -->
                                </div>
                            </div><!-- End row -->
                        </div><!-- End strip_menu_items -->
                    </div><!-- End wrapper_indent -->

                    <hr class="styled_2">
                    
                    <div class="wrapper_indent">
                        <div class="form-group">
                            <label>Menu Category</label>
                            <input type="text" name="menu_category" class="form-control" placeholder="EX. Main courses">
                        </div>

                        <div class="menu-item-section clearfix">
                            <h4>Menu item #1</h4>
                            <div><a href="#0"><i class="icon_plus_alt"></i></a><a href="#0"><i class="icon_minus_alt"></i></a>
                            </div>
                        </div>

                        <div class="strip_menu_items">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="menu-item-pic dropzone">
                                        <input name="file" type="file">
                                        <div class="dz-default dz-message"><span>Click or Drop<br>Images Here</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-9">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="text" name="menu_item_title" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Price</label>
                                                <input type="text" name="menu_item_title_price" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Short description</label>
                                        <input type="text" name="menu_item_description" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Item options</label>
                                        <div class="table-responsive">
                                        <table class="table table-striped notifications">
                                            <tbody>
                                                <tr>
                                                    <td style="width:20%">
                                                        <input type="text" class="form-control" placeholder="+ $3.50">
                                                    </td>
                                                    <td style="width:50%">
                                                        <input type="text" class="form-control" placeholder="Ex. Medium">
                                                    </td>
                                                    <td style="width:30%">
                                                        <label>
                                                            <input type="radio" name="option_item_settings_10" checked class="icheck" value="checkbox">Checkbox</label>
                                                        <label class="margin_left">
                                                            <input type="radio" name="option_item_settings_10" class="icheck" value="radio">Radio</label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width:20%">
                                                        <input type="text" class="form-control" placeholder="+ $5.50">
                                                    </td>
                                                    <td style="width:50%">
                                                        <input type="text" class="form-control" placeholder="Ex. Large">
                                                    </td>
                                                    <td style="width:30%">
                                                        <label>
                                                            <input type="radio" name="option_item_settings_11" class="icheck" value="checkbox">Checkbox</label>
                                                        <label class="margin_left">
                                                            <input type="radio" name="option_item_settings_11" class="icheck" value="radio" checked>Radio</label>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        </div>
                                    </div><!-- End form-group -->

                                    <div class="form-group">
                                        <label>Item ingredients</label>
                                        <div class="table-responsive">
                                        <table class="table table-striped notifications">
                                            <tbody>
                                                <tr>
                                                    <td style="width:20%">
                                                        <input type="text" class="form-control" placeholder="+ $2.50">
                                                    </td>
                                                    <td style="width:50%">
                                                        <input type="text" class="form-control" placeholder="Ex. Extra tomato">
                                                    </td>
                                                    <td style="width:30%">
                                                        <label>
                                                            <input type="radio" name="option_item_settings_12" checked class="icheck" value="checkbox">Checkbox</label>
                                                        <label class="margin_left">
                                                            <input type="radio" name="option_item_settings_12" class="icheck" value="radio">Radio</label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width:20%">
                                                        <input type="text" class="form-control" placeholder="+ $5.50">
                                                    </td>
                                                    <td style="width:50%">
                                                        <input type="text" class="form-control" placeholder="Ex. Extra Pepper">
                                                    </td>
                                                    <td style="width:30%">
                                                        <label>
                                                            <input type="radio" name="option_item_settings_13" class="icheck" value="checkbox">Checkbox</label>
                                                        <label class="margin_left">
                                                            <input type="radio" name="option_item_settings_13" class="icheck" value="radio" checked>Radio</label>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        </div>
                                    </div><!-- End form-group -->
                                </div>
                            </div><!-- End row -->
                        </div><!-- End strip_menu_items -->
                    </div><!-- End wrapper_indent -->
                    
                    <hr class="styled_2">
                    
                    <div class="wrapper_indent">
                        <div class="add_more_cat"><a href="#0" class="btn_1">Save now</a> <a href="#0" class="btn_1">Add menu category</a> </div>
                    </div><!-- End wrapper_indent -->
                    
                </section><!-- End section 2 -->

                <section id="section-3">

                    <div class="row">
                    
                        <div class="col-md-6 col-sm-6 add_bottom_15">
                            <div class="indent_title_in">
                                <i class="icon_lock_alt"></i>
                                <h3>Change your password</h3>
                                <p>
                                    Mussum ipsum cacilds, vidis litro abertis.
                                </p>
                            </div>
                            <div class="wrapper_indent">
                                <div class="form-group">
                                    <label>Old password</label>
                                    <input class="form-control" name="old_password" id="old_password" type="password">
                                </div>
                                <div class="form-group">
                                    <label>New password</label>
                                    <input class="form-control" name="new_password" id="new_password" type="password">
                                </div>
                                <div class="form-group">
                                    <label>Confirm new password</label>
                                    <input class="form-control" name="confirm_new_password" id="confirm_new_password" type="password">
                                </div>
                                <button type="submit" class="btn_1 green">Update Password</button>
                            </div><!-- End wrapper_indent -->
                        </div>
                        
                        <div class="col-md-6 col-sm-6 add_bottom_15">
                            <div class="indent_title_in">
                                <i class="icon_mail_alt"></i>
                                <h3>Change your email</h3>
                                <p>
                                    Mussum ipsum cacilds, vidis litro abertis.
                                </p>
                            </div>
                            <div class="wrapper_indent">
                                <div class="form-group">
                                    <label>Old email</label>
                                    <input class="form-control" name="old_email" id="old_email" type="email">
                                </div>
                                <div class="form-group">
                                    <label>New email</label>
                                    <input class="form-control" name="new_email" id="new_email" type="email">
                                </div>
                                <div class="form-group">
                                    <label>Confirm new email</label>
                                    <input class="form-control" name="confirm_new_email" id="confirm_new_email" type="email">
                                </div>
                                <button type="submit" class="btn_1 green">Update Email</button>
                            </div><!-- End wrapper_indent -->
                        </div>
                        
                    </div><!-- End row -->

                    <hr class="styled_2">
                    
                    <div class="indent_title_in">
                        <i class="icon_shield"></i>
                        <h3>Notification settings</h3>
                        <p>
                            Mussum ipsum cacilds, vidis litro abertis.
                        </p>
                    </div>
                    <div class="row">
                    
                        <div class="col-md-6 col-sm-6">
                            <div class="wrapper_indent">
                                <table class="table table-striped notifications">
                                    <tbody>
                                        <tr>
                                            <td style="width:5%">
                                                <i class="icon_pencil-edit_alt"></i>
                                            </td>
                                            <td style="width:65%">
                                                New orders
                                            </td>
                                            <td style="width:35%">
                                                <label>
                                                    <input type="checkbox" name="option_1_settings" checked class="icheck" value="yes">Yes</label>
                                                <label class="margin_left">
                                                    <input type="checkbox" name="option_1_settings" class="icheck" value="no">No</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <i class="icon_pencil-edit_alt"></i>
                                            </td>
                                            <td>
                                                Modified orders
                                            </td>
                                            <td>
                                                <label>
                                                    <input type="checkbox" name="option_2_settings" checked class="icheck" value="yes">Yes</label>
                                                <label class="margin_left">
                                                    <input type="checkbox" name="option_2_settings" class="icheck" value="no">No</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <i class="icon_pencil-edit_alt"></i>
                                            </td>
                                            <td>
                                                New user registration
                                            </td>
                                            <td>
                                                <label>
                                                    <input type="checkbox" name="option_3_settings" checked class="icheck" value="yes">Yes</label>
                                                <label class="margin_left">
                                                    <input type="checkbox" name="option_3_settings" class="icheck" value="no">No</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <i class="icon_pencil-edit_alt"></i>
                                            </td>
                                            <td>
                                                New comments
                                            </td>
                                            <td>
                                                <label>
                                                    <input type="checkbox" name="option_4_settings" checked class="icheck" value="yes">Yes</label>
                                                <label class="margin_left">
                                                    <input type="checkbox" name="option_4_settings" class="icheck" value="no">No</label>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <button type="submit" class="btn_1 green">Update notifications settings</button>
                            </div>
                            
                        </div><!-- End row -->
                    </div><!-- End wrapper_indent -->
                    
                </section><!-- End section 3 -->

            </div><!-- End content -->
        </div>
    </div><!-- End container  -->
    <!-- End Content =============================================== -->

    <!-- Footer ================================================== -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-3">
                    <h3>Secure payments with</h3>
                    <p><img src="img/cards.png" alt="" class="img-responsive">
                    </p>

                </div>
                <div class="col-md-3 col-sm-3">
                    <h3>About</h3>
                    <ul>
                        <li><a href="about.html">About us</a>
                        </li>
                        <li><a href="faq.html">Faq</a>
                        </li>
                        <li><a href="contacts.html">Contacts</a>
                        </li>
                        <li><a href="#0" data-toggle="modal" data-target="#login_2">Login</a>
                        </li>
                        <li><a href="#0" data-toggle="modal" data-target="#register">Register</a>
                        </li>
                        <li><a href="#0">Terms and conditions</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-3" id="newsletter">
                    <h3>Newsletter</h3>
                    <p>Join our newsletter to keep be informed about offers and news.</p>
                    <div id="message-newsletter_2"></div>
                    <form method="post" action="http://www.ansonika.com/quickfood/assets/newsletter.php" name="newsletter_2" id="newsletter_2">
                        <div class="form-group">
                            <input name="email_newsletter_2" id="email_newsletter_2" type="email" value="" placeholder="Your mail" class="form-control">
                        </div>
                        <input type="submit" value="Subscribe" class="btn_1" id="submit-newsletter_2">
                    </form>
                </div>
                <div class="col-md-2 col-sm-3">
                    <h3>Settings</h3>
                    <div class="styled-select">
                        <select class="form-control" name="lang" id="lang">
                            <option value="English" selected>English</option>
                            <option value="French">French</option>
                            <option value="Spanish">Spanish</option>
                            <option value="Russian">Russian</option>
                        </select>
                    </div>
                    <div class="styled-select">
                        <select class="form-control" name="currency" id="currency">
                            <option value="USD" selected>USD</option>
                            <option value="EUR">EUR</option>
                            <option value="GBP">GBP</option>
                            <option value="RUB">RUB</option>
                        </select>
                    </div>
                </div>
            </div>
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
include("../database/db_conection.php");  
if (isset($_POST['r_submit']))
{
     $name = $_POST["r_name"];
    $desc=$_POST['r_desc'];
    $phone=$_POST['r_telephone'];
    $category=$_POST['r_cat'];
    $address=$_POST['r_addr'];
                  //$book_image = $_POST["book_image"];
              $img_name = $_FILES['r_logo']['name'];
              $img_tmp_name = $_FILES['r_logo']['tmp_name'];
              $code = substr( md5(rand()), 0, 7);
              $img = "f".$code.$img_name;
              if(move_uploaded_file($img_tmp_name, "../home/img/".$img)){
              $inq = "INSERT INTO restaurant VALUES(NULL,'$name','$address','$img','$phone','$category','$desc','$img')";

      
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