<?php 
	include "../crud.php";

	$crud=new crud();
	$conn=$crud->cnx;

	$id=$_GET["id"];

	
	$crud->supprimerNouveaut($conn, $id);

	header('location: listNouveaute.php');
?>