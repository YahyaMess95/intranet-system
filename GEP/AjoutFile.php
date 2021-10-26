<?php



session_start();
include "../crud.php";
$crud=new crud();
$conn=$crud->cnx;


$test = false ; 



$today = date("F j, Y, g:i a");




if ($_GET['Ref'] == '' or $_GET['Des']=='' or $_GET['Version_Int']=='' or $_GET['Etape']=='' or $_GET['discipline2']== 'aucun choix' or $_GET['type2']=='aucun choix' ) {
	
$test = false ; 
	

}
else  {


$crud->CreerFile($conn , $_GET['Ref'], $_GET['Des'], 0 , '--' , $today , $_SESSION["EmailSession"] , $_GET['Version_Int'] , $_GET['Etape'] , '--' ,'--' , $_GET['discipline2'] , $_GET['type2'] , $_SESSION['PR']  ) ; 
$test = true ; 


}











if ($test ==  false ) {
	echo "<div class='alert alert-danger fade show' role='alert'>Verifier vos données !!</div>";
}

if ($test ==  true) {
	    echo "<div class='alert alert-success fade show' role='alert'>Fichier ajouté avec succés</div>";

}






  ?>