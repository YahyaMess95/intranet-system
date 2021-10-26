<?php



session_start();
include "../crud.php";
$crud=new crud();
$conn=$crud->cnx;





$crud->supprimerType($conn,$_GET['id']) ; 

header('Location:AjoutType.php');














  ?>