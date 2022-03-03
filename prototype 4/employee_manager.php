<?php
include 'employee.php';

class EmployeeManager{

  public function getAllEmployees(){
       
    $file = file_get_contents('employees.json');
    $employeesList = json_decode($file);
    $employees = array();
    foreach($employeesList as $employee_list){
        $employee = new Employee();
        $employee->setId($employee_list->Id);
        $employee->setFirstName($employee_list->first_name);
        $employee->setLastName($employee_list->last_name);
        $employee->setAge($employee_list->age);
        $employee->setGender($employee_list->gender);
     
        array_push($employees, $employee);
    }

    return $employees;
}

public function insertEmployee($employee){
$employee->setId(uniqid(false));
$file = file_get_contents('employees.json');
$data = json_decode($file);
$employeeToList = array(
  'id'=> $employee->getId(),
  'first_name' => $employee->getfirstName(),
  'last_name' => $employee->getlastName(),
  'age' => $employee->getAge(),
  'gender' => $employee->getgender(),
  );

  array_push($data, $employeeToList);
  file_put_contents('employees.json', json_encode($data));
}

public function deleteEmployee($id){
  $data = json_decode(file_get_contents('employees.json'));
  for($i=0;$i<count($data);++$i){
    if($data[$i]->id== $id){   
      unset($data[$i]);
      $data = array_values($data);
      file_put_contents("employees.json",json_encode($data));
      break;
    //remove the keys
    $data=array_values($data);
    file_put_contents("employees.json",json_encode($data));
     break;
  }
}
}
public function editEmployee($id, $first_name, $last_name,$age, $gender){
  $file = file_get_contents('employees.json');
  $data = json_decode($file);
  $employeeToList = array(
                          'id'=> $id,
                          'first_name' => $first_name,
                          'last_name' => $last_name,
                          'age' => $age,
                          'gender' => $gender,
                          );


 for($i = 0; $i < count($data); $i++){
  if($data[$i]->id== $id){
      $data[$i] = $employeeToList;
      break;
  }
 }
  file_put_contents('employees.json', json_encode($data));

}

public function getEmployee($id){
  $file = file_get_contents("employees.json");
  $data = json_decode($file);
  $employee = new Employee();

  foreach($data as $employee_data){
      if($employee_data->id== $id){
          $employee->setId($employee_data->id);
          $employee->setFirstName($employee_data->first_name);
          $employee->setLastName($employee_data->last_name);
          $employee->setAge($employee_data->age);
          $employee->setGender($employee_data->gender);
    
          break;
      }
  }
  return $employee;
}
}
?>