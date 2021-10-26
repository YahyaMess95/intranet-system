<?php



session_start();
include "../crud.php";
$crud=new crud();
$conn=$crud->cnx;





$crud->supprimerSuivifact($conn,$_GET['IdF']) ; 

header('Location:ListFacture.php?Id='.$_GET['Id'].'&pays='.$_GET['pays'].'&date1='.$_GET['date1'].'&siege='.$_GET['siege']);

  ?>
