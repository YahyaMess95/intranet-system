<?php 
	include "../crud.php";

	$crud=new crud();
	$conn=$crud->cnx;

	if(isset($_POST['submit']))
	{
		$support=$_POST['support'];
		$equipe=$_POST['equipe'];
		$description=$_POST['description'];
		$priorite=$_POST['priorite'];
		$dateCreation=$_POST['dateCreation'];
		$informer=$_POST['informer'];
		$pieceJointe=$_POST['pieceJointe'];

		$crud->ajoutTicket($conn, $support, $equipe, $description, $priorite, $dateCreation, $informer, $pieceJointe);

		header('location: listTicket.php');
	}
?>