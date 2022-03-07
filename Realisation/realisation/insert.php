<?php
	include 'employeeManager.php';

    if(!empty($_POST)){
		$employee = new Employee();	
		$employeeManager = new EmployeeManager();

        $employee->setNom($_POST['Nom']);
        $employee->setPrenom($_POST['Prenom']);
        $employee->setDatedeNaissance($_POST['DatedeNaissance']);
				$employee->setDepartement($_POST['Departement']);
				$employee->setSalaire($_POST['Salaire']);
				$employee->setFonction($_POST['Fonction']);


		$employeeManager->insertEmployee($employee);
     
        header("Location: index.php");

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
<div>
        <div>
		<div><h3>Create a User</h3>
        <form method="POST" action="">
			<div>
				<label for="inputNom">Nom</label>
				<input type="text" required="required" id="inputNom" name="Nom" placeholder="Nom">
				<span></span>
			</div>
			
			<div>
				<label for="inputlname">Prenom</label>
				<input type="text" required="required" id="inputPrenom" name="Prenom" placeholder="Prenom">
        		<span></span>
			</div>
			
			<div>
				<label for="inputage">Date de Naissance</label>
				<input type="number" required="required" class="form-control" id="inputage" name="Date de Naissance" placeholder="Date de naissance">
				<span></span>
			</div>

			<div>
				<label for="inputage">Departement</label>
				<input type="number" required="required" class="form-control" id="inputage" name="Departement" placeholder="Departement">
				<span></span>
			</div>
			<div>
				<label for="inputage">Salaire</label>
				<input type="number" required="required" class="form-control" id="inputage" name="Salaire" placeholder="Salaire">
				<span></span>
			</div>
			<div>
				<label for="inputage">Fonction</label>
				<input type="number" required="required" class="form-control" id="inputage" name="Fonction" placeholder="Fonction">
				<span></span>
			</div>
		
    
			<div class="form-actions">
					<button type="submit">Create</button>
					<a href="index.php">Back</a>
			</div>
		</form>
        </div></div>        
</div>
</body>
</html>