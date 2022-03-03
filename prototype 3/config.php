<?php
   $conn = mysqli_connect('localhost', 'soukayna', 'test123', 'employee');

   // check connection
 if(!$conn){
      echo 'Connection error: ' . mysqli_connect_error(); 
  }
?>