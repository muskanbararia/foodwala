<!-- Login modal -->   
<div class="modal fade" id="login_2" tabindex="-1" role="dialog" aria-labelledby="myLogin" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content modal-popup">
        <a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
        <form action="index.php" method="post" class="popup-form" id="myLogin">
                  <div class="login_icon"><i class="icon_lock_alt"></i></div>
          <input type="text" name="name" class="form-control form-white" placeholder="Useremail">
          <input type="text" name="password" class="form-control form-white" placeholder="Password">
          
          <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
        </form>
      </div>
    </div>
  </div><!-- End modal -->   
    
<!-- Register modal -->   
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myRegister" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content modal-popup">
        <a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
        <form action="index.php" method="post" class="popup-form" id="myRegister">
                  <div class="login_icon"><i class="icon_lock_alt"></i></div>
          <input type="text" name="name" class="form-control form-white" placeholder="Name">
          <input type="text" name="mobile" class="form-control form-white" placeholder="Mobile">
                    <input type="email" name="email" class="form-control form-white" placeholder="Email">
                    <input type="text" name="address" class="form-control form-white" placeholder="Address">
                    <input type="text" name="password" class="form-control form-white" placeholder="Password"  id="password1">
                    <input type="text" class="form-control form-white" placeholder="Confirm password"  id="password2">
                    <div id="pass-info" class="clearfix"></div>
          
          <input type="submit" name="signin-submit" id="signin-submit" tabindex="4" class="form-control btn btn-login" value="Sign In">
        </form>
      </div>
    </div>
  </div><!-- End Register modal -->