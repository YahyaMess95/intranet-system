<?php 
	include "../crud.php";
session_start();	
	$crud=new crud();
	$conn=$crud->cnx;



$today = date("F j, Y, g:i a");
	if(isset($_POST['submit']))
	{

		$crud->ajoutNouv($conn,$_POST['titre'], $_POST['description'] , 	$_SESSION['id'] , $today) ; 

		header('location: ../gestion_user/Acceuil.php');
	}
?>