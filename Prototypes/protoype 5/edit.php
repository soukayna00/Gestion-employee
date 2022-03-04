<?php
include 'employeesManager.php';
$employeeManager=new EmployeesManager();
if(isset($_GET['id'])){
  $employee=$employeeManager->getById($_GET['id']);
}

if(isset($_POST['modify'])){
  $id=$_POST['id'];
  $first_name=$_POST['first_name'];
  $last_name=$_POST['last_name'];
  $age=$_POST['age'];
  $employeeManager->modifyEmployee($id,$first_name,$last_name,$age);
  header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form method="post">
    <input type="text" name='id'        value=<?php echo  $employee->getId()?>><br> 
    <input type="text" name='firstName' value=<?php echo  $employee->getfirstName()?>><br>
    <input type="text" name ='lastName' value=<?php echo  $employee->getlastName()?>><br>
    <input type="text" name ='age'      value=<?php echo  $employee->getAge()?>><br> 
    <input type="submit" value="modify" name=value>
    <a href="index.php">cancel</a>
  </form>
</body>
</html>