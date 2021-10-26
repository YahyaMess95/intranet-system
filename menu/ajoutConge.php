<?php 
	include "../crud.php";

	$crud=new crud();
	$conn=$crud->cnx;
session_start();	
	//$nomComplet=$_POST['nomComplet'];
	$dateDebut=$_POST['dateDebut'];
	$dateFin=$_POST['dateFin'];
	$nbrJour=$_POST['nbrJour'];
	$raison=$_POST['raison'];
	$adresse=$_POST['adresse'];
	$telephone=$_POST['telephone'];
	$interimaire=$_POST['interimaire'];
	$validateur=$_POST['validateur'];
	$info=$_POST['info'];

	//$interval = $dateDebut->diff($dateFin);
	//echo $interval->format('%a');

	$crud->ajoutConge($conn, $_SESSION["EmailSession"], $dateDebut, $dateFin, $nbrJour, $raison, $adresse, $telephone,$interimaire,$validateur,$info);

	header('location: listConge.php');
?>