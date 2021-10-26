<?php 
	include "../crud.php";

	$crud=new crud();
	$conn=$crud->cnx;

	$id=$_POST["id"];

	if(isset($_POST['Approuver'])){
		$etat=$_POST["Approuver"];	
	}

	if(isset($_POST['Desapprouver'])){
		$etat=$_POST["Desapprouver"];
	}

	$crud->modifierConge($conn, $id, $etat);

	header('location: listConge - Admin.php');
?>