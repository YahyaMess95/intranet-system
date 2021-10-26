<?php

session_start();


include "../crud.php";
$crud=new crud();
$conn=$crud->cnx;






  

$crud->modifierTacheU( $conn , $_GET['id'] , 'terminé') ; 

  header("Location:AfficheTache.php");



?>