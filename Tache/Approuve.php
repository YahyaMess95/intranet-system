<?php

session_start();


include "../crud.php";
$crud=new crud();
$conn=$crud->cnx;






  

$crud->modifierTache( $conn , $_GET['id'] , 'approuve') ; 

  header("Location:AfficheTacheAdmin.php");



?>