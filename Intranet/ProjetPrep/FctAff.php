<?php 

include "../crud.php";
$crud=new crud();
$conn=$crud->cnx;


$hidden=array();

$hidden =$_POST['nesrine'] ; 


foreach ($hidden as $key ) {

    $crud->ajoutUserSelonProjet($conn ,  $_POST['projet'],$_POST['titre'],  $key );


   echo  $key."<br>"  ;
} 
header('Location:AffectationProjetUser.php');

?>