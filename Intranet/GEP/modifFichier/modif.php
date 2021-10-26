<?php



session_start();
include "../../crud.php";
$crud=new crud();
$conn=$crud->cnx;




$today = date("F j, Y, g:i a");


$crud -> modifierFichier( $_GET['des'] ,$_GET['avancement'] ,$_GET['Rev_Externe'],$today, $_SESSION["EmailSession"],$_GET['Version_Interne'],$_GET['etape'],  $_GET['id'] ,$conn); 

//header('Location : ../GEP.php');



  header("Location:../GEP.php");

  ?>