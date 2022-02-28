<?php
   $conn = mysqli_connect('localhost', 'soukayna', '', 'employee');

   // check connection
 if(!$conn){
      echo 'Connection error: ' . mysqli_connect_error(); 
  }
?>