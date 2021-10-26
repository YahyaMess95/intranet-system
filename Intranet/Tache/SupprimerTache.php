<?php



session_start();
include "../crud.php";
$crud=new crud();
$conn=$crud->cnx;





$crud->supprimerTache($conn,$_GET['id']) ; 

header('Location:AfficheTache.php');














  ?>