<?
  $hint=$_GET["q"];

  if ($hint=="") {
    $response="no suggestion";
  } else {
    $response="<b>
      <a href='list_page.php'>Bhubaneswar</a>
      </b>";
  }
  echo $response;
?>

 <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script>
    function showResult(str) {
      if (str.length==0) { 
        document.getElementById("livesearch").innerHTML="";
        document.getElementById("livesearch").style.border="0px";
        return;
      }
      if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
      } else {  // code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
      xmlhttp.onreadystatechange=function() {
        if (this.readyState==4 && this.status==200) {
          document.getElementById("livesearch").innerHTML=this.responseText;
          document.getElementById("livesearch").style.border="1px solid #A5ACB2";
        }
      }
      xmlhttp.open("GET","livesearch.php?q="+str,true);
      xmlhttp.send();
    }
    </script>

    <input type="text" class=" search-query"  placeholder="Your Address or postal code" onkeyup="showResult(this.value)">
    <div id="livesearch"></div>
<?php
?>