<?php



session_start();
include "../crud.php";
$crud=new crud();
$conn=$crud->cnx;





$crud->supprimerSuivie($conn,$_GET['Id']) ; 

header('Location:ListFichierFinance.php');

  ?>