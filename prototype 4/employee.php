<?php

class Employees {
  private  $id;
   private $first_name;
   private $last_name;
   private $Age;
   private $Gender;


   public function getid(){
    return $this->id;
  }

   public function setid($value){
     $this->id=$value;
  }

  public function getfirst_name(){
    return $this->first_name;
  }


  public function setfirst_name($value){
    $this->first_name=$value;
 }

 public function getlast_name(){
  return $this->last_name;
 }

 public function setlast_name($value){
  $this->last_name=$value;
}


public function getAge(){
  return $this->first_name;
 }
public function setAge($value){
  $this->first_name=$value;
}
  

public function getgender(){
  return $this->gender;
 }
public function setgender($value){
  $this->first_name=$value;
}



}






?>