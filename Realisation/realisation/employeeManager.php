<?php
    include 'employee.php';

    class EmployeeManager {

        private $Connection = null;

        private function getConnection(){
            if(is_null($this->Connection)){
                $this->Connection = mysqli_connect('localhost', 'soukayna','','gestion employee');

                if(!$this->Connection){
                    $message = 'Connection Error: ' .mysqli_connect_error();
                    throw new Exception($message);
                }
            }
            return $this->Connection;
        }

   

        public function getAllEmployees(){
            $sqlGetData = 'SELECT id,Nom,Prenom,DatedeNaissance,Departement,Salaire,Fonction FROM person1';
            $result = mysqli_query($this->getConnection() ,$sqlGetData);
            $employeesList = mysqli_fetch_all($result, MYSQLI_ASSOC);

            $employees = array();
            foreach($employeesList as $employee_list){
                $employee = new Employee();
                $employee->setId($employee_list['id']);
                $employee->setNom($employee_list['Nom']);
                $employee->setPrenom($employee_list['Prenom']);
                $employee->setDatedeNaissance($employee_list['DatedeNaissance']);
                $employee->setDepartement($employee_list['Departement']);
                $employee->setSalaire($employee_list['Salaire']);
                $employee->setFonction($employee_list['Fonction']);
                array_push($employees, $employee);
            }

            return $employees;
        }


        public function insertEmployee($employee){
            $Nom = $employee->getNom();
            $Prenom = $employee->getPrenom();
            $DatedeNaissance= $employee->getDatedeNaissance();
            $Departement= $employee->getDepartement();
            $Salaire= $employee->getSalaire();
            $Fonction= $employee->getFonction();


                 // sql insert query
        $sqlInsertQuery = "INSERT INTO person1 (Nom,Prenom,DatedeNaissance ,Departement,Salaire,Fonction) 
                            VALUES('$Nom','$Prenom','$DatedeNaissance,'$Departement','$Salaire','$Fonction' )";

        mysqli_query($this->getConnection(), $sqlInsertQuery);
        }


        public function deleteEmployee($id){
            $sqlDeleteQuery = "DELETE FROM person1 WHERE id= '$id'";

            mysqli_query($this->getConnection(), $sqlDeleteQuery);
        }


        public function editEmployee($Nom,$Prenom,$DatedeNaissance,$Departement,$Salaire,$Fonction){
     
            // Update query
            $sqlUpdateQuery = "UPDATE person1 SET 
                         Nom='$Nom', 
                         Prenom='$Prenom', 
                         DatedeNaissance='$DatedeNaissance',
                         departement='$Departement',
                         salaire='$Salaire',
                         Fonction='$Fonction',
                         WHERE id=$id";
     
             // Make query 
             mysqli_query($this->getConnection(), $sqlUpdateQuery);

             if(mysqli_error($this->getConnection())){
                 $msg = 'Erreur' . mysqli_errno($this->getConnection());
                 throw new Exception($msg);
             }
       
        }

        public function getEmployee($id){
            $sqlGetQuery = "SELECT * FROM person1 WHERE id= $id";
        
            // get result
            $result = mysqli_query($this->getConnection(), $sqlGetQuery);
        
            // fetch to array
            $employee_data = mysqli_fetch_assoc($result);

            $employee = new Employee();
            $employee->setId($employee_data['id']);
            $employee->setNom($employee_data['Nom']);
            $employee->setPrenom($employee_data['Prenom']);
            $employee->setDatedeNaissance($employee_data['DatedeNaissance']);
            $employee->setDepartement($employee_data['Departement']);
            $employee->setSalaire($employee_data['Salaire']);
            $employee->setFonction($employee_data['Fonction']);
            
            return $employee;
        }
    }


    
?>