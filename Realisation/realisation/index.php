<?php
    include 'config.php';
    include 'employeeManager.php';

    $employeeManager = new EmployeeManager();
    $data = $employeeManager->getAllEmployees();

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
        <a href="insert.php">Insert Data</a>
        <table>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>DatedeNaissance</th>
                <th>Departement</th>
                <th>Salaire</th>
                <th>Fonction</th>
            </tr>

            <?php
                    foreach($data as $employee){
            ?>

            <tr>
                <td><?= $employee->getNom()?></td>
                <td><?= $employee->getPrenom()?></td>
                <td><?= $employee->getDatedeNaissance()?></td>
                <td><?= $employee->getDepartement()?></td>
                <td><?= $employee->getSalaire()?></td>
                <td><?= $employee->getFonction()?></td>
                <td>
                    <a href="edit.php?id=<?php echo $employee->getId() ?>">Edit</a>
                    <a href="delete.php?id=<?php echo $employee->getId() ?>">delete</a>
                </td>
            </tr>
            <?php }?>
        </table>
    </div>
</body>
</html>