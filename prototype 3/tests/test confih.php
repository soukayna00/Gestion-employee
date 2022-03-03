<?php
require_once '../employeeManager.php';

$employeeManager = new EmployeeManager();
$connection = $employeeManager->getConnection;

if ($connection){
  echo 'Success';
}

?>