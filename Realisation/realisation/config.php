<?php
   $conn = mysqli_connect('localhost','soukayna','','gestion employee');

   // check connection
 if(!$conn){
      echo 'Connection error: ' . mysqli_connect_error(); 
  }
?>