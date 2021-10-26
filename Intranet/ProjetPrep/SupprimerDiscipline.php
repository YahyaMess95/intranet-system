<?php



session_start();
include "../crud.php";
$crud=new crud();
$conn=$crud->cnx;





$crud->supprimerDiscipline($conn,$_GET['id']) ; 

header('Location:AjoutDiscipline.php');














  ?>