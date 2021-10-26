<?php

session_start();


include "../crud.php";
$crud=new crud();
$conn=$crud->cnx;




$today = date("F j, Y, g:i a");


if (isset($_POST['submit'])  )
{
  

$crud->ajoutTache($conn , $_POST['description'] ,$_SESSION["EmailSession"] ,'a faire',$_POST['date1'] , 'Encore vide' , $today) ; 

  header("Location:AfficheTache.php");

}

?>