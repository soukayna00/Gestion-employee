<?php
 include 'employee.php';

    class EmployeeManager {

        private $Connection = null;

        private function getConnection(){
            if(is_null($this->Connection)){
                $this->Connection = mysqli_connect('localhost', 'soukayna','test123', 'employee');}
            else {
                if(!$this->Connection){
                    $message = 'Connection Error: ' .mysqli_connect_error();
                    throw new Exception($message);
                }
            
            return $this->Connection;
        }

    }

        
    public function insertEmployee($employee){
        $firstName = $employee->getfirstName();
        $lastName = $employee->getlastName();
        $gender= $employee->getgender());
        $age = $employee->getAge();


        $sqlInsertQuery = "INSERT INTO employees_db(first_name, last_name, gender,age ) 
        VALUES('$firstName', 
                '$lastName',
                '$gender', 
                '$age')";

       mysqli_query($this->getConnection(), $sqlInsertQuery);
         }

    



        public function getAllEmployees(){
            $sqlGetData = 'SELECT id,first_name,last_name,gender,age FROM employees_db';
            $result = mysqli_query($this->getConnection(),$sqlGetData);
            $employeesList = mysqli_fetch_all($result, MYSQLI_ASSOC);

            $employees = array();
            foreach($employeesList as $employee_list){
                $employee = new Employee();
                $employee->setId($employee_list['id']);
                $employee->setFirstName($employee_list['first_name']);
                $employee->setLastName($employee_list['last_name']);
                $employee->setGender($employee_list['gender']);
                $employee->setAge($employee_list['age']);
                array_push($employees, $employee);
            }

            return $employees;
          }


            
    
             
       

        public function deleteEmployee($id){
            $sqlDeleteQuery = "DELETE FROM employees_db WHERE id= '$id'";

            mysqli_query($this->getConnection(), $sqlDeleteQuery);
        }


        public function editEmployee($id, $first_name, $last_name, $gender, $age){
     
            // Update query
            $sqlUpdateQuery = "UPDATE employees_db SET 
                         first_name='$first_name', 
                         last_name='$last_name', 
                         gender='$gender'
                         age='$age', 
                         WHERE id=$id";
     
             // Make query 
             mysqli_query($this->getConnection(), $sqlUpdateQuery);

             if(mysqli_error($this->getConnection())){
                 $msg = 'Erreur' . mysqli_errno($this->getConnection());
                 throw new Exception($msg);
             }
       
        }

        public function getEmployee($id){
            $sqlGetQuery = "SELECT * FROM employees_db WHERE id= $id";
        
            // get result
            $result = mysqli_query($this->getConnection(), $sqlGetQuery);
        
            // fetch to array
            $employee_data = mysqli_fetch_assoc($result);

            $employee = new Employee();
            $employee->setId($employee_data['id']);
            $employee->setFirstName($employee_data['first_name']);
            $employee->setLastName($employee_data['last_name']);
            $employee->setGender($employee_data['gender']);
            $employee->setAge($employee_data['age']);
    
            
            return $employee;
      }
    


    
?>