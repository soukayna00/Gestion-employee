<?php
    include 'employeeManager.php';

    $employeeManager = new EmployeeManager();

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $employee = $employeeManager->getEmployee($id);

    }

    if(isset($_POST['update'])){
		$id = $_POST['id'];
		$Nom= $_POST['Nom'];
		$Prenom = $_POST['Prenom'];
		$DatedeNaissance = $_POST['DatedeNaissance'];
		$Departement = $_POST['Departement'];
		$Salaire = $_POST['Salaire'];
		$Fonction= $_POST['Fonction'];

  

        $employeeManager->editEmployee($id, $Nom, $Prenom, $DatedeNaissance,$Departement,$Salaire,$Fonction);

        header('Location: index.php');
        
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
			<input type="hidden" id='id' name='id' value=<?php echo $employee->getId() ?>>
			<div>
				<label for="inputNom">Nom</label>
				<input	type="text" 
						required="required" 
						id="inputNom" 
						value=<?php echo $employee->getNom()?> 
						name="Nom" 
						placeholder="Nom"
					>
				<span></span>
			</div>
			
			<div>
				<label for="inputPrenom">Prenom</label>
				<input	type="text" 
						required="required" 
						id="inputPrenom" 
						value=<?php echo $employee->getPrenom()?> 
						name="Prenom" 
						placeholder="Prenom"
					>
        		<span></span>
			</div>
			
			<div>
				<label for="inputage">Date de Naissance</label>
				<input	type="number" 
						required="required" 
						class="form-control" 
						id="inputage" 
						value=<?php echo $employee->getDatedeNaissance()?> 
						name="DatedeNaissance" 
						placeholder="DatedeNaissance"
					>
				<span></span>
			</div>
			<div>
				<label for="inputage">Departement</label>
				<input	type="number" 
						required="required" 
						class="form-control" 
						id="inputage" 
						value=<?php echo $employee->getDepartement()?> 
						name="Departement" 
						placeholder="Departement"
					>
				<span></span>
			</div>

			<div>
				<label for="inputage">Salaire</label>
				<input	type="number" 
						required="required" 
						class="form-control" 
						id="inputage" 
						value=<?php echo $employee->getSalaire()?> 
						name="Salaire" 
						placeholder="Salaire"
					>
				<span></span>
			</div>
			<div>
				<label for="inputage">Fonction</label>
				<input	type="number" 
						required="required" 
						class="form-control" 
						id="inputage" 
						value=<?php echo $employee->getFonction()?> 
						name="Fonction" 
						placeholder="Fonction"
					>
				<span></span>
			</div>
			
			
			
				
    
			<div class="form-actions">
					<input name="update" type="submit" value="Update">
					<a href="index.php">Back</a>
			</div>
		</form>
        </div></div>        
</div>
</body>
</html>