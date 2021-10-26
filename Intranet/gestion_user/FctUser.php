<?php 

include "../config.php";


class crudU{
		public $cnx;
	function __construct(){
		$c=new config();
        $this->cnx=$c->cnx;	
	}
	function login($conn ){
		$req="SELECT * FROM user " ;
		$liste=$conn->query($req);
		//var_dump($liste);
		return $liste->fetchAll();		
	}	
	function afficherId($conn){
	$req="SELECT * FROM user "  ;
		$liste=$conn->query($req);

		foreach ($liste as $l) {
			if ( strcmp($l["email"],  $_POST["email"]) == 0 and  strcmp($l["password"],  $_POST["password"]) == 0  ){
			
				$_SESSION["id"] = $l["id"];
			}
		}
		return $_SESSION["id"];
	}
	function afficherNom($conn){
	$req="SELECT * FROM user "  ;
		$liste=$conn->query($req);

		foreach ($liste as $l) {
			if ( strcmp($l["email"],  $_POST["email"]) == 0 and  strcmp($l["password"],  $_POST["password"]) == 0  ){
			$_SESSION["nom"] = $l["nom"];
			}
		}
		return $_SESSION["nom"];
	}
	function afficherPrenom($conn){
		$req="SELECT * FROM user "  ;
		$liste=$conn->query($req);

		foreach ($liste as $l) {
			if ( strcmp($l["email"],  $_POST["email"]) == 0 and  strcmp($l["password"],  $_POST["password"]) == 0  ){
			
				$_SESSION["prenom"] = $l["prenom"];
			}
		}
		return $_SESSION["prenom"];
		}
	function afficherSpecialite($conn){
		$req="SELECT * FROM user "  ;
		$liste=$conn->query($req);

		foreach ($liste as $l) {
			if ( strcmp($l["email"],  $_POST["email"]) == 0 and  strcmp($l["password"],  $_POST["password"]) == 0  ){
				
				$_SESSION["specialite"] = $l["specialite"];
			}
		}
		return $_SESSION["specialite"];
		}
	function afficherEmail($conn){
		$req="SELECT * FROM user "  ;
		$liste=$conn->query($req);

		foreach ($liste as $l) {
			if ( strcmp($l["email"],  $_POST["email"]) == 0 and  strcmp($l["password"],  $_POST["password"]) == 0  ){
			
				$_SESSION["email"] = $l["email"];
			}
		}
		return $_SESSION["email"];
		}
	function afficherPhoto($conn){$req="SELECT * FROM user "  ;
		$liste=$conn->query($req);

		foreach ($liste as $l) {
			if ( strcmp($l["email"],  $_POST["email"]) == 0 and  strcmp($l["password"],  $_POST["password"]) == 0  ){
		
				$_SESSION["photo"] = $l["photo"];
			}
		}
		return $_SESSION["photo"];
		}
	function afficherSexe($conn){
		$req="SELECT * FROM user "  ;
		$liste=$conn->query($req);

		foreach ($liste as $l) {
			if ( strcmp($l["email"],  $_POST["email"]) == 0 and  strcmp($l["password"],  $_POST["password"]) == 0  ){
			
				$_SESSION["sexe"] = $l["sexe"];
			}
		}
		return $_SESSION["sexe"];
		}
	
	function afficherRole($conn){
		$req="SELECT * FROM user "  ;
		$liste=$conn->query($req);

		foreach ($liste as $l) {
			if ( strcmp($l["email"],  $_POST["email"]) == 0 and  strcmp($l["password"],  $_POST["password"]) == 0  ){
		
				$_SESSION["role"] = $l["role"];
			}
		}
		return $_SESSION["role"];
		}
	function afficherCin($conn){
		$req="SELECT * FROM user "  ;
		$liste=$conn->query($req);

		foreach ($liste as $l) {
			if ( strcmp($l["email"],  $_POST["email"]) == 0 and  strcmp($l["password"],  $_POST["password"]) == 0  ){
		
				$_SESSION["cin"] = $l["cin"];
			}
		}
		return $_SESSION["cin"];
		}
	function afficherDate($conn){
		$req="SELECT * FROM user "  ;
		$liste=$conn->query($req);

		foreach ($liste as $l) {
			if ( strcmp($l["email"],  $_POST["email"]) == 0 and  strcmp($l["password"],  $_POST["password"]) == 0  ){
			
				$_SESSION["date1"] = $l["date1"];
			}
		}
		return $_SESSION["date1"];
		}
	function afficherTelephone($conn){
		$req="SELECT * FROM user "  ;
		$liste=$conn->query($req);

		foreach ($liste as $l) {
			if ( strcmp($l["email"],  $_POST["email"]) == 0 and  strcmp($l["password"],  $_POST["password"]) == 0  ){

				$_SESSION["telephone"] = $l["telephone"];
			}
		}
		return $_SESSION["telephone"];
		}

	function GetUsers($conn){
		$req="SELECT * FROM user" ;
		
		$liste=$conn->query($req);
		return $liste->fetchAll();	
	}

	function modifier($conn, $id, $nom, $prenom, $specialite, $email, $password,  $sexe, $role, $cin,  $telephone){
		$req="UPDATE user SET nom='".$nom."', prenom='".$prenom."', specialite='".$specialite."', email='".$email."', password='".$password."', sexe='".$sexe."', role='".$role."', cin='".$cin."', date1='". $_SESSION["date1"]."', telephone='".$telephone."' where id=".$id." ";
		//echo $req;
		$conn->query($req);
	}




		function modifier2($conn, $id, $nom, $prenom, $specialite, $email, $password,  $sexe, $role, $cin,  $telephone , $photo){
		$req="UPDATE user SET nom='".$nom."', prenom='".$prenom."', specialite='".$specialite."', email='".$email."', password='".$password."', sexe='".$sexe."', role='".$role."', cin='".$cin."', date1='". $_SESSION["date1"]."', telephone='".$telephone."', photo='".$photo."' where id=".$id." ";
		//echo $req;
		$conn->query($req);
	}
	

}
 ?>