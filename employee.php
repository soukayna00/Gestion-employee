<?php
    class Employee {
        private $id;
        private $matricule;
        private $Nom;
        private $Prenom;
        private $date_de_naissance;
        private $Département;
        private $Salaire;
        private $Photo;
        private $Fonction;
        
        public function getId(){
            return $this->id;
        }
        public function setId($value){
            $this->id = $value;
        }

        public function getmatricule(){
            return $this->matricule;
        }

        public function setmatricule($value){
            $this->matricule = $value;
        }

        public function getnom(){
            return $this->nom;
        }

        public function setnom($value){
            $this->nom = $value;
        }

        public function getprenom(){
            return $this->prenom;
        }

        public function setprenom($value){
            $this->prenom= $value;
        }

        public function getdate_de_naissance(){
            return $this->date_de_naissance;
        }

        public function setdate_de_naissance($value){
            $this->date_de_naissance= $value;
        }

        public function getdépartement(){
            return $this->département;
        }

        public function setdépartement($value){
            $this->département = $value;
        }
        public function getfonction(){
            return $this->fonction;
        }
        public function setfonction($value){
            $this->fonction = $value;
        }
        public function getsalaire(){
            return $this->salaire;
        }

        public function setsalaire($value){
            $this->salaire = $value;
        }
    
         public function getphoto(){
        return $this->photo;
        }

    public function setphoto($value){
        $this->photo = $value;
        }
}
    
?>