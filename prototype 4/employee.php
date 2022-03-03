<?php

class Employees {
  private  $id;
   private $firstname;
   private $lastname;
   private $Age;
   private $Gender;


   public function getId(){
    return $this->Id;
  }

   public function setId($value){
     $this->Id=$value;
  }

  public function getfirstname(){
    return $this->first_name;
  }


  public function setfirstname($value){
    $this->first_name=$value;
 }

 public function getlastname(){
  return $this->last_name;
 }

 public function setlastname($value){
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