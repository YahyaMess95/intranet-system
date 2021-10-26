<?php 

include "../crud.php";


$crud=new crud();
$conn=$crud->cnx;
session_start();


$test = false ; 

foreach ($crud->afficheUser($conn) as $l ) {
    if ( strcmp($l["email"], $_POST["email"])  == 0  and strcmp($l["password"], $_POST["password"])  == 0 )  {
       // header("Location:../chat/chat.php");

    // Set session variables
    $_SESSION["EmailSession"] = $_POST["email"];

    $_SESSION["password"] = $_POST["password"] ;
    $_SESSION["id"] =  $l["id"];
    $_SESSION["nom"] = $l["nom"];
    $_SESSION["prenom"] = $l["prenom"];
    $_SESSION["specialite"] = $l["specialite"];
    $_SESSION["email"] = $l["email"];
    $_SESSION["photo"] = $l["photo"];
    $_SESSION["sexe"] = $l["sexe"];
    $_SESSION["role"] = $l["role"];
    $_SESSION["cin"] =  $l["cin"];
    $_SESSION["date1"] =  $l["date1"];
    $_SESSION["telephone"] =  $l["telephone"];



$test = true ; 
break ; 
}   
else {
$test = false ;
}}

if ($test ==  true ) {


  header("Location:Acceuil.php");


}
else
{


  header("Location:login.php?error=1");

   
}






  ?>
