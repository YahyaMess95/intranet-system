<?php 
	include "../crud.php";

	$crud=new crud();
	$conn=$crud->cnx;

	$destinataire=$_POST['destinataire'];
	$objet=$_POST['objet'];
	$commentaire=$_POST['commentaire'];
	$fichier=$_POST['fichier'];

	$crud->ajoutTransfer($conn, $destinataire, $objet, $commentaire, $fichier);
	header('location: listTransfer.php');
?>