<?php



session_start();
include "../crud.php";
$crud=new crud();
$conn=$crud->cnx;





$crud->supprimerProjet($conn,$_GET['id']) ; 

header('Location:AjouterProjet.php');














  ?>