<?php
    class Employee {
        private $Id;
        private $FirstName;
        private $LastName;
        private $Gender ;
        private $Age ;
       

        


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

        public function getGender(){
            return $this->Gender;
        }

        public function setGender($value){
            $this->Gender= $value;
        }
        public function getAge(){
            return $this->Age;
        }

        public function setAge($value){
            $this->Age= $value;
        }

        
    }
?>