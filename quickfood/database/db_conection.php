 <?php  
    $dbcon=mysqli_connect("localhost","root","");  
    mysqli_select_db($dbcon,"foodwala"); 
    function _a($x){
      echo "<script>alert('".$x."')</script>";
    } 
    function _r($url){
      echo "<script>window.location='".$url."';</script>";
    }
    
function xssafe($data,$encoding='UTF-8')
{
   return htmlspecialchars($data,ENT_QUOTES | ENT_HTML401,$encoding);
}
function _e($data)
{
   return xssafe($data);
}

function _sf($inp){
 $remove[] = "'";
 $remove[] = '"';
 $remove[] = "-";

 return str_replace( $remove, "", $inp );
}

?>  
