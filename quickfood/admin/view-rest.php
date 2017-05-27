<section id="section-3">

          

            
          <div class="row mt">
            <div class="col-lg-12">
                      <div class="content-panel">
                      <h4><i class="fa fa-angle-right"></i>Users</h4>
                          
                            <table class="table table-bordered table-striped table-condensed" id="rest" >
                              <thead>
                              <tr>
                                  <th>Id</th>
                                  <th>Name</th>
                                  <th class="numeric">Location</th>
                                  <th class="numeric">Mobile</th>
                                  <th class="numeric">Category</th>
                                  <th class="numeric">Detail</th>
                                  <th class="numeric">Action</th>
                                  
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                              <?php  
                                include("../database/db_conection.php");  
                                $view_users_query="select * from restaurant";//select query for viewing users.  
                                $run=mysqli_query($dbcon,$view_users_query);//here run the sql query. 
                                if($run){  
                                while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
                                {  
                                    $id = $row[0];
                                    $name=$row[1];  
                                    $email=$row[2];  
                                    $phone=$row[4];  
                                    $address=$row[5];
                                    $address2=$row[6];
                                    
                              ?>  
                                  <td><?php echo "$id";?></td>
                                  <td><?php echo "$name";?></td>
                                  <td class="numeric"><?php echo "$email";?></td>
                                  <td class="numeric"><?php echo "$phone";?></td>
                                  <td class="numeric"><?php echo "$address";?></td>
                                  <td class="numeric"><?php echo "$address2";?></td>
                                 <td><form method ="post" action="view.php" >
                                  <input type="hidden" name="id" value="<?=$id?>">
                                  <input type="submit" name="r_del" value="Delete"></form></td>
                              </tr>
                              <? }
                                }
                                else{
                                    echo "string";
                                } 
                               ?>
                              </tbody>
                          </table>
                          
                  </div><!-- /content-panel -->
               </div><!-- /col-lg-4 -->     
        </div>
              <!-- page end-->
          
            <script type="text/javascript">
      $(document).ready( function () {
        var table = $('#rest').DataTable();
      } );
    </script>    
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>          
                    
                    
</section>