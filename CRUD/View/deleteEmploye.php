<?php
include '../Controller/employeC.php';
$emp1=new employeC();
$emp1->deleteEmploye($_GET['id']);
header('Location:listEmployes.php');
?>