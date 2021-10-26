<?php 



	include "../crud.php";

	$crud=new crud();
	$conn=$crud->cnx;
session_start();	
	$nomComplet=$_POST['nomComplet'];
	$dateSortie=$_POST['dateSortie'];
	$heureSortie=$_POST['heureSortie'];
	$heureRetour=$_POST['heureRetour'];
	$raison=$_POST['raison'];
	$destination=$_POST['destination'];
	$motif=$_POST['motif'];
	$validateur=$_POST['validateur'];

	$crud->ajoutAutorisation($conn, $_SESSION["EmailSession"] , $dateSortie, $heureSortie, $heureRetour, $raison, $destination, $motif, $validateur);

	header('location: listAutorisation.php');
?>