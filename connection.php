<?php
$conn = mysqli_connect("localhost","root","","interior",3306) or die($conn);  
 if ($conn) {  
      echo "connection Succesfuly";  
 }else{  
      echo "Something Error";  
 }  

 ?>