<?php



session_start();
include "../crud.php";
$crud=new crud();
$conn=$crud->cnx;




$disciplines = array() ; 


$test = false ; 



$disciplines = $_GET['discipline'] ; 

$pieces = explode(",", $disciplines);


if ($disciplines == ''  ) {


	$test = false ; 


}

else {


for ($i=0; $i < sizeof($pieces) ; $i++) { 

	$crud->affectDiscipline( $conn , $_SESSION['PR'] ,$pieces[$i] , $_SESSION["id"] ) ; 
	$test = true ; 

}




}


if ($test ==  false ) {
	echo "<div class='alert alert-danger fade show' role='alert'>Verifier vos données !!</div>";
}

if ($test ==  true) {
	    echo "<div class='alert alert-success fade show' role='alert'>Disciplines ajoutés avec succés</div>";

}







  ?>