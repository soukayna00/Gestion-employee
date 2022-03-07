<?php
   $conn = mysqli_connect('localhost', 'soukayna', '', 'Gestion employee');

   // check connection
 if(!$conn){
      echo 'Connection error: ' . mysqli_connect_error(); 
  }
?>