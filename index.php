<?php
require_once __DIR__ .'/Controllers/TableController.php';
require_once __DIR__ .'/Controllers/EmployeesController.php';
require_once __DIR__ .'/Controllers/StudentsController.php';
$person= new TableController('No','Sí');
$person->setEmployees();
$person->setStudents();
$students=new StudentsController('No','Sí');
$employees=new EmployeesController('No','Sí');

//students
$totalStudents= $students->getTotalStudents();
$menores = $students->menores_25;
$medianos = $students->entre_25_34;
$mayores = $students->mayores;

$promedioMedianos = $students->calificacion_medios;
$promedioMenores = $students->calificacion_menores;
$promedioMayores = $students->calificacion_mayores;
//employees
$totalEmployees= $employees->getTotalEmployees();
$eMenores = $employees->menores_25;
$eMedianos = $employees->entre_25_34;
$eMayores = $employees->mayores;

$ePromedioMedianos = $employees->salario_medios;;
$ePromedioMenores = $employees->salario_menores;
$ePromedioMayores = $employees->salario_mayores;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema 1 - csv</title>
</head>
<body>
    <h2>Students</h2>
    <ul>
    <li>Total estudiantes: <?php  echo $totalStudents ?> </li>
    <li>Estudiantes menores de 25: <?php  echo $menores ?> </li>
    <li>Estudiantes entre 25 y 34: <?php  echo $medianos ?> </li>
    <li>Estudiantes mayores de 34: <?php  echo $mayores ?> </li>
    </ul>
    <ul>
    
    <li>Promedio estudiantes menores de 25: <?php  echo $promedioMenores ?> </li>
    <li>Promedio estudiantes entre 25 y 34: <?php  echo $promedioMedianos ?> </li>
    <li>Promedio estudiantes mayores de 34: <?php  echo $promedioMayores ?> </li>
    </ul>
    <br><hr>
    <h2>Employees</h2>
    <ul>
    <li>Total empleados: <?php  echo $totalEmployees ?> </li>
    <li>Empleados menores de 25: <?php  echo $eMenores ?> </li>
    <li>Empleados entre 25 y 34: <?php  echo $eMedianos ?> </li>
    <li>Empleados mayores de 34: <?php  echo $eMayores ?> </li>
    </ul>
    <ul>
    
    <li>Promedio empleados menores de 25: <?php  echo $ePromedioMenores ?> </li>
    <li>Promedio empleados entre 25 y 34: <?php  echo $ePromedioMedianos ?> </li>
    <li>Promedio empleados mayores de 34: <?php  echo $ePromedioMayores ?> </li>
    </ul>

</body>
</html>