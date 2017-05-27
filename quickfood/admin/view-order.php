<section id="section-5">

          

            
          <div class="row mt">
            <div class="col-lg-12">
                      <div class="content-panel">
                      <h4><i class="fa fa-angle-right"></i>Dine In</h4>
                          
                            <table class="table table-bordered table-striped table-condensed" id="rest" >
                              <thead>
                              <tr>
                                  <th>Id</th>
                                  <th>Restaurant</th>
                                  <th class="numeric">Book Time</th>
                                  <th class="numeric">Dine Time</th>
                                  <th class="numeric">No of Persons</th>
                                  <th class="numeric">User</th>
                                  
                                  <th class="numeric">Action</th>
                                  
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                              <?php  
                                include("../database/db_conection.php");  
                                $view_users_query="select * from item";//select query for viewing users.  
                                $run=mysqli_query($dbcon,$view_users_query);//here run the sql query. 
                                if($run){  
                                while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
                                {  
                                    $id = $row[0];
                                    
                                    $rest=$row[1];
                                    $inq2 = "SELECT * FROM restaurant WHERE id='$rest'";
                                        $query2 = mysqli_query($dbcon,$inq2);
                                        if ($row=mysqli_fetch_array($query2))
                                        {
                                            $restid=$row[1];
                                          }
                                          $name=$row[2];  
                                    $email=$row[3];  
                                    $phone=$row[4];  
                                    $address=$row[5];
                                    $address2=$row[6];
                                    $inq2 = "SELECT * FROM user WHERE id='$address2'";
                                        $query2 = mysqli_query($dbcon,$inq2);
                                        if ($row2=mysqli_fetch_array($query2))
                                        {
                                            $uid=$row2[1];
                                          }
                              ?>  
                                  <td><?php echo "$id";?></td>
                                  <td><?php echo "$restid";?></td>
                                  <td class="numeric"><?php echo "$name";?></td>
                                  <td class="numeric"><?php echo "$email";?></td>
                                  <td class="numeric"><?php echo "$phone";?></td>
                                  <td class="numeric"><?php echo "$address";?></td>
                                  <td class="numeric"><?php echo "$uid";?></td>
                                  
                                 <td><form method ="post" action="view.php" >
                                  <input type="hidden" name="id" value="<?=$id?>">
                                  <input type="submit" name="m_del" value="Delete"></form></td>
                              </tr>
                              <? }
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