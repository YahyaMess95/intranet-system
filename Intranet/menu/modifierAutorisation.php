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

	$crud->modifierAutorisation($conn, $id, $etat);

	header('location: listAutorisation - Admin.php');
?>