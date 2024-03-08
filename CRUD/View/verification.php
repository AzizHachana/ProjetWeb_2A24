<?php
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$phone=$_POST['telephone'];
$email=$_POST['email'];
$dob=$_POST['date_naissance'];
$pass1=$_POST['mot_de_passe1'];
$pass2=$_POST['mot_de_passe2'];
include "../Model/employe.php";
include "../Controller/employeC.php";
$employe=new employe($nom,$prenom,$pass1,$phone,$email,$dob);
$emplo=new employeC();
$emplo->showEmployee($employe);
?>