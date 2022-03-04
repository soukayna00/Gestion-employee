<?php
include 'employees.php';
class EmployeesManager{
  private $connect =Null ;
  private function getConnect(){
    if(is_null($this->connect)){
      $this->connect=mysqli_connect('localhost','Soukayna','test123','Prototype 3');
    }
    else{
       if(!$this->connect){
         $message='Data Base connection error'  .mysqli_connect_error();
         throw new Exception($message);
       }
    }
    return $this->connect;
  }

  public function insertEmployees($employee){
     $firstName=$employee->getfirstName();
     $lastName=$employee->getlastName();
     $age=$employee->getAge();

    $insertdb="INSERT INTO employees(first_name,last_name,age)VALUES('$firstName','$lastName','$age')";

    mysqli_query($this->getConnect(),$insertdb);
  }
  
  public function getAllEmployees(){

    $sqlGetData = "SELECT ID, first_name, last_name, age FROM employees";
    $result = mysqli_query($this->getConnect(), $sqlGetData);
    $datas = mysqli_fetch_all($result, MYSQLI_ASSOC);

    $dataArray = array();

    foreach($datas as $data){

            $employe = new Employees();
            $employe->setId($data['ID']);
            $employe->setfirstName($data['first_name']);
            $employe->setlastName($data['last_name']);
            $employe->setAge($data['age']);
            array_push($dataArray, $employe);


    }

    return $dataArray;

}

// delete employee
public function  deleteEmployee($id){

  $deleteDB="DELETE FROM employees WHERE ID=$id";
  mysqli_query($this->getConnect(),$deleteDB);
}

// get employee by is
public function getById($id){
  $getById="SELECT *FROM employees WHERE ID=$id";
  $result=mysqli_query($this->getConnect(),$getById);
  $employeeData=mysqli_fetch_assoc($result);

  $employee =new Employees();
  $employee->setId($employeeData['ID']);
  $employee->setfirstName($employeeData['first_name']);
  $employee->setlastName($employeeData['last_name']);
  $employee->setAge($employeeData['age']);


  return $employee;

}


public function modifyEmployee($id,$first_name,$last_name,$age){
  $updateDB="UPDATE employees SET first_name='$first_name',
            last_name='$last_name',age='$age
            WHERE ID=$id";
    mysqli_query($this->getConnect(),$updateDB);
    if(mysqli_error($this->getConnect())){
     $message="data base connection  error".mysqli_error($this->getConnect());
     throw new Exception($message);
    }

}















































}












?>