<?php


include '../crud.php';

$crud=new crud();
$conn=$crud->cnx;

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];
$password=$_POST['password'];
$role=$_POST['role'];
$cin=$_POST['cin'];
$telephone=$_POST['telephone'];
$sexe=$_POST['sexe'];
$specialite=$_POST['specialite'];


$today = date("F j, Y, g:i a");

$crud->ajoutUser($conn ,$nom ,$prenom,$email , $password , $role,$cin,$telephone,$sexe,$specialite,$today );

header('location: ListUsers.php');

?>