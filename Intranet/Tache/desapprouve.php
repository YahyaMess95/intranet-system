<?php

session_start();


include "../crud.php";
$crud=new crud();
$conn=$crud->cnx;






  

$crud->modifierTache( $conn , $_GET['id'] , 'non approuve') ; 

  header("Location:AfficheTacheAdmin.php");



?>