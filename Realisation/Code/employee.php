<?php
    class Employee {
        private $Id;
        private $FirstName;
        private $LastName;
        private $Department ;
        private $Occupation ;
        private  $Salary ;
        private  $Image ;
        


        public function getId(){
            return $this->Id;
        }
        public function setId($value){
            $this->Id = $value;
        }

        public function getFirstName(){
            return $this->FirstName;
        }

        public function setFirstName($value){
            $this->FirstName = $value;
        }

        public function getLastName(){
            return $this->LastName;
        }

        public function setLastName($value){
            $this->LastName= $value;
        }

        public function getDepartement(){
            return $this->Department;
        }

        public function setDepartement($value){
            $this->Department= $value;
        }

        public function getOccupation(){
            return $this->Occupation;
        }

        public function setOccupation($value){
            $this->Occupation = $value;
        }
        public function getSalary(){
            return $this->Salary;
        }

        public function setSalary($value){
            $this->Salary = $value;
        }
        public function getImage(){
            return $this->Image;
        }

        public function setImage($value){
            $this->Image = $value;
        }
    }
?>