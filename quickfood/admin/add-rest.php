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
                            <div id="logo_picture" >
                                <input type="file" name="r_logo">
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
