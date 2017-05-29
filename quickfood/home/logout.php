<<<<<<< HEAD
<?php
session_start();
 unset($_SESSION['user']) ?>
=======
    <?php
    session_start();
    $_SESSION['user'] = NULL;
    session_destroy();
    echo"<script>window.open('index.php','_self')</script>";//use for the redirection to some page  
    ?>  
>>>>>>> c2ed409ba1afeaacb188310def0885600352ae0f
