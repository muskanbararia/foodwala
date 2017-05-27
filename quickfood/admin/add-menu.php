 <section id="section-2">
<form action="index.php" method="post"  enctype="multipart/form-data">
                    <div class="indent_title_in">
                    <div class="indent_title_in">
                        <i class="icon_document_alt"></i>
                        <h3>Add a new item</h3>
                       
                    </div>
                    
                    <div class="wrapper_indent">
                        <div class="form-group">
                            <label>Menu Category</label>
                            <input type="text" name="m_cat" class="form-control" placeholder="EX. Starters">
                        </div>
                        <div class="form-group">
                            <label>Menu Sub-Category</label>
                            <input type="text" name="m_sub" class="form-control" placeholder="EX. Starters">
                        </div>

                        <div class="menu-item-section clearfix">
                            <h4>Menu item #1</h4>
                            <div><a href="#0"><i class="icon_plus_alt"></i></a><a href="#0"><i class="icon_minus_alt"></i></a>
                            </div>
                        </div>

                        <div class="strip_menu_items">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                            <label>Upload item logo</label>
                            <div id="logo_picture" >
                                <input type="file" name="m_logo">
                                <div class="dz-default dz-message"><span>Click or Drop Images Here</span>
                                </div>
                            </div>
                        </div>
                                </div>
                                <div class="col-sm-9">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text"  name="m_name" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Price</label>
                                                <input type="text" name="m_price" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Short description</label>
                                        <input type="text" name="m_desk" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Restaurant</label>
                                        <select name="m_rest" class="form-control">
                                      
                                      <?php  
                                        include("../database/db_conection.php");  
                                        $view_users_query="select * from restaurant";//select query for viewing users.  
                                        $run=mysqli_query($dbcon,$view_users_query);//here run the sql query. 
                                        
                                        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
                                        {  
                                            $id = $row[1];
                                            
                                            
                                            
                                      ?> 
                                      <option value="<?php echo $id; ?>"><?php echo $id; ?></option>
                                      <?php } ?>
                                      
                                    </select>
                                    </div>


                                    <!-- End form-group -->
                                </div>
                            </div><!-- End row -->
                        </div><!-- End strip_menu_items -->



                        

                        <!-- End strip_menu_items -->
                    </div><!-- End wrapper_indent -->

                    
                    
                   <!-- End wrapper_indent -->
                    
                    <hr class="styled_2">
                    
                    <div class="wrapper_indent">
                        <input class="btn_1" type="submit" name = "m_submit" value="Add">
                    </div><!-- End wrapper_indent -->
                    
                </section>