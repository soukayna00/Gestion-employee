<?php
    class Employee {
        private $id;
        private $Nom;
        private $Prenom;
        private $DatedeNaissance;
        private $Departement;
        private $Salaire;
        private $Fonction;
        

        public function getId(){
            return $this->id;
        }
        public function setId($value){
            $this->id = $value;
        }

        public function getNom(){
            return $this->Nom;
        }

        public function setNom($value){
            $this->Nom = $value;
        }

        public function getPrenom(){
            return $this->Prenom;
        }

        public function setPrenom($value){
            $this->Prenom= $value;
        }

        public function getDatedeNaissance(){
            return $this->DatedeNaissance;
        }

        public function setDatedeNaissance($value){
            $this->DatedeNaissance = $value;
        }
        public function getDepartement(){
            return $this->Departement;
        }

        public function setDepartement($value){
            $this->Departement = $value;
        }
        public function getSalaire(){
            return $this->Salaire;
        }

        public function setSalaire($value){
            $this->Salaire = $value;
        }
        public function getFonction(){
            return $this->Fonction;
        }

        public function setFonction($value){
            $this->Fonction = $value;
        }
    }
   

?>