<?php
   $conn = mysqli_connect('localhost', 'soukayna000', 'test1234', 'employee');

   // check connection
 if(!$conn){
      echo 'Connection error: ' . mysqli_connect_error(); 
  }
?>