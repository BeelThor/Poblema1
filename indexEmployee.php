<?php
require_once __DIR__ .'/Controllers/EmployeesController.php';
require_once __DIR__ .'/Controllers/StudentsController.php';

// $employee = new EmployeesController ("No","Sí");
// echo $employee;
$students = new StudentsController ("No","Sí");
echo $students;