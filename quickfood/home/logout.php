    <?php
    session_start();
    $_SESSION['user'] = NULL;
    session_destroy();
    echo"<script>window.open('../index.php','_self')</script>";//use for the redirection to some page  
    ?>  