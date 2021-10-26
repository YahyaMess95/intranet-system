<?php 
	include "FctUser.php";

	$crud=new crudU();
	$conn=$crud->cnx;


session_start();

	$crud->modifier($conn, $_SESSION['id'], $_POST['nom'], $_POST['prenom'], $_POST['specialite'],  $_POST['email']  , $_POST['password']  ,  $_POST[ 'sexe' ], $_POST[ 'role' ], $_POST[ 'cin' ],  $_POST[ 'telephone' ]);	

  header("Location:profile.php");

?>
