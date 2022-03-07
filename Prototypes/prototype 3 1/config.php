<?php
   $conn = mysqli_connect('localhost', 'soukayna', '', 'prototype 3');

   // check connection
 if(!$conn){
      echo 'Connection error: ' . mysqli_connect_error(); 
  }
?>