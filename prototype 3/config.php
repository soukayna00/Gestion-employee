<?php
   $conn = mysqli_connect('localhost', '', '', 'employee db');

   // check connection
 if(!$conn){
      echo 'Connection error: ' . mysqli_connect_error(); 
  }
?>