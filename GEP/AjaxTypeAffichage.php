<?php



session_start();
include "../crud.php";
$crud=new crud();
$conn=$crud->cnx;




$types = array() ; 


$test = false ; 



$types = $_GET['type1'] ; 

$pieces = explode(",", $types);


if ($types== '' or $_GET['projet1'] == 'aucune choix' ) {


  $test = false ; 


}

else {


for ($i=0; $i < sizeof($pieces) ; $i++) { 

 $crud->affectType( $conn , $_GET['projet1'] ,$_GET['discipline1'],$pieces[$i] , $_SESSION["id"] ) ; 

  $test = true ; 

}




}


if ($test ==  false ) {

  echo "<br><br><br><div class='alert alert-danger fade show' role='alert'>Verifier vos données !!</div>";
}

if ($test ==  true) {
      echo "<br><br><br><div class='alert alert-success fade show' role='alert'>Types ajoutés avec succés</div>";

}







  ?>