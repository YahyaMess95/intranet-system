<?PHP
include "config.php";
class crud{
	public $cnx;
	function __construct(){

		$c=new config();
        $this->cnx=$c->cnx;	
	}
	







	function GetEmailByID($id , $conn )
{
		

$req="SELECT * FROM user";
$liste=$conn->query($req);

$email = '' ; 
foreach ($liste as $key) {


if ($key['id'] == $id) {
	


$email = $key['email'] ;  



}


}


		return $email;	

		
}



	function GetPhotoByID($id , $conn ){
		$req="SELECT * FROM user";
		$liste=$conn->query($req);


foreach ($liste as $key) {


if ($key['id'] = $id) {
	


$photo = $key['photo'] ;  


}
}



		return $photo;	
		
	}




















	function ajouttchat($conn ,$idTo , $idFrom , $contenu , $file , $code){

		$req="INSERT INTO message(idFrom,idTo,contenu, date1 , fichier, code) 
		VALUES ('".$idTo."','".$idFrom."','".$contenu."','".date("Y-m-d h:i:sa")."','".$file."','".$code."')";
		
		$conn->query($req);
}




	function afficheChat($conn){
		$req="SELECT * FROM message order by  date1 desc";
		$liste=$conn->query($req);




		return $liste->fetchAll();	
		
	}



	function modifier( $domaine ,$prenom,$nom,$email,$num_tel,$sexe,$pays,  $description,$conn){

		$req="UPDATE inscrit SET nom='".$nom."',prenom='".$prenom."',numTel='".$num_tel."',sexe='".$sexe."',pays='".$pays."',description='".$description."',domaine='".$domaine."'where email='".$email."'";
		//echo $req;
		$conn->query($req);
	}












	function supprimerPost($conn,$ref){
		$req="DELETE FROM post WHERE id='".$ref."'";
		$conn->query($req);
			
		
	}





//************************************************************************************************//










	function login($conn ){
		$req="SELECT * FROM inscrit " ;
		
		$liste=$conn->query($req);
		//var_dump($liste);
		return $liste->fetchAll();	
		
	}




function Details($conn ){
	$req="SELECT * FROM inscrit" ;
		
		$liste=$conn->query($req);
		//var_dump($liste);
		return $liste->fetchAll();	
		
	}





	function modifierPhoto( $photo,$email,$conn){

		$req="UPDATE inscrit SET photo='".$photo."'where email='".$email."'";
		//echo $req;
		$conn->query($req);
	}



	function modifiercv( $cv,$email,$conn){

		$req="UPDATE inscrit SET cv='".$cv."'where email='".$email."'";
		//echo $req;
		$conn->query($req);
	}



	function ajoutPost($conn , $titre ,$description , $specialite , $emailContact , $dateDeposte  , $dateDexpiration ,  $postedBy,$document , $password){

		$req="INSERT INTO post(	titre,description,specialite,emailContact,dateDeposte,dateDexpiration,document,postedby, password) 
		VALUES ('".$titre."','".$description."','".$specialite."','".$emailContact."','".$dateDeposte."','".$dateDexpiration."','".$postedBy."','".$document."','".$password."')";
		
		$conn->query($req);
}






	function test($conn  ){
		$req="SELECT * FROM inscrit" ;
		
		$liste=$conn->query($req);
		//var_dump($liste);
		return $liste->fetchAll();	
		
	}



function GetID($conn , $email)

{
	$req="SELECT id FROM inscrit where email='".$email."'"  ;
		$liste=$conn->query($req);
		//var_dump($liste);
		return $liste->fetch();	
		
	}





	function afficherPost($conn , $id){
	$req="SELECT * FROM post where postedby='".$id."'"  ;
		$liste=$conn->query($req);
		//var_dump($liste);
		return $liste->fetchAll();	
		
	}



	function afficherPostParIdEtEmail($conn , $id , $password){
	$req="SELECT * FROM post where id='".$id."' and password='".$password."'"  ;
		$liste=$conn->query($req);
		//var_dump($liste);
		return $liste->fetchAll();	
		
	}



	function afficherEmployes($conn){
	$req="SELECT * FROM inscrit where speciality='employe' and domaine!=''" ;
		
		$liste=$conn->query($req);
		//var_dump($liste);
		return $liste->fetchAll();	
		
	}



	function afficherAllPost($conn){
	$req="SELECT * FROM post order by   dateDeposte desc " ;
		
		$liste=$conn->query($req);
		//var_dump($liste);
		return $liste->fetchAll();	
		
	}





	function afficherPostParId($conn , $id ){
	$req="SELECT * FROM post where id='".$id."' "  ;
		$liste=$conn->query($req);
		//var_dump($liste);
		return $liste->fetchAll();	
		
	}










	function ajoutProjet($conn , $projet ,$date , $adder , $des ){

		$req="INSERT INTO projet(projet	, date1	 , adder , designation) 
		VALUES ('".$projet."','".$date."','".$adder."','".$des."')";
		
		$conn->query($req);
}







	function ajoutType($conn , $type ,$date , $adder  )
{
		$req="INSERT INTO type(type,date1,adder) 
		VALUES ('".$type."','".$date."','".$adder."')";
		$conn->query($req);
}




	function ajoutDiscipline($conn , $discipline ,$date , $adder  ){

		$req="INSERT INTO discipline(discipline	, date1	, adder ) 
		VALUES ('".$discipline."','".$date."','".$adder."')";
		
		$conn->query($req);
}

function ajoutUserSelonProjet($conn , $idProjet,$NomGroupe ,  $email ){

		$req="INSERT INTO affectprojet(NomGroupe,IdProjet	, email	  ) 
		VALUES ('".$NomGroupe."','".$idProjet."','".$email."')";
		
		$conn->query($req);
}






//**************************Supprimer*********************************************//






	function supprimerProjet($conn,$ref){
		$req="DELETE FROM projet WHERE id='".$ref."'";
		$conn->query($req);
			
		
	}







	function supprimerDiscipline($conn,$ref){
		$req="DELETE FROM discipline WHERE id='".$ref."'";
		$conn->query($req);
			
		
	}

	function supprimerType($conn,$ref){
		$req="DELETE FROM type WHERE id='".$ref."'";
		$conn->query($req);
			
		
	}

//***************************************************************************************************//


	function afficheProjet($conn){
		$req="SELECT * FROM projet order by  date1 desc";
		$liste=$conn->query($req);




		return $liste->fetchAll();	
		
	}











	function GetProjetByID($conn , $id){
		$req="SELECT * FROM projet";
		$liste=$conn->query($req);



foreach ($liste as $key ) {


if ($id == $key['id']) {
	$projet =  $key['projet']  ; 
}


}


		return $projet;	
		
	}







	function afficheDiscipline($conn){
		$req="SELECT * FROM discipline ";
		$liste=$conn->query($req);




		return $liste->fetchAll();	
		
	}






	function afficheType($conn){
		$req="SELECT * FROM type order by  date1 desc";
		$liste=$conn->query($req);




		return $liste->fetchAll();	
		
	}

//*******************************************************************************************************/




function affectDiscipline($conn,  $Projet ,$Nom , $Admin){

		$req="INSERT INTO affectdiscipline( Projet	 , Nom , 	Admin) 
		VALUES ('".$Projet."','".$Nom."','".$Admin."')";
		
		$conn->query($req);
}






function affectType( $conn , $projet,$discipline,$type, $admin)
{

		$req="INSERT INTO affecttype( projet, discipline, type, admin) 
		VALUES ('".$projet."','".$discipline."','".$type."','".$admin."')";
		
		$conn->query($req);
}


//******************************************************************************************************************/



	function afficheDisciplineParProjet($conn){
		$req="SELECT * FROM affectdiscipline ";
		$liste=$conn->query($req);




		return $liste->fetchAll();	
		
	}



function afficheTypeParDiscipline($conn)
{
		$req="SELECT * FROM affecttype ";
		$liste=$conn->query($req);




		return $liste->fetchAll();	
		
	}

//***************************************************************************************




function CreerFile($conn , $code, $designation, $avancement , $revEx , $DateM , $ModifP , $VersionIn , $etape , $download ,$codage , $discipline , $type )

{

$req="INSERT INTO affectfichier( Code , Designation	 , Avancement ,Rev_Externe , Date_Modification , Modifie_Par , Version_Interne , Etape , Download ,Codage , discipline , type , projet) 

		VALUES ('".$code."','".$designation."','".$avancement."','".$revEx."','".$DateM."','".$ModifP."','".$VersionIn."','".$etape."','".$download."','".$codage."','".$discipline."','".$type."','".$_SESSION['PR']."')";
		
		$conn->query($req);


}



function afficheFile($conn)
{
		$req="SELECT * FROM affectfichier";
		$liste=$conn->query($req);




		return $liste->fetchAll();	
		
	}








	function modifierFichier( $designation ,$avancement,$revEx,$date,$ModifPar,$VI,$etape,  $id ,$conn){

		$req="UPDATE affectfichier SET Designation='".$designation."',Avancement='".$avancement."',Rev_Externe='".$revEx."', Date_Modification ='".$date."',Modifie_Par='".$ModifPar."',Version_Interne='".$VI."',Etape='".$etape."'where id='".$id."'";
		//echo $req;
		$conn->query($req);
	}

	function modifierFichier1( $designation ,$avancement,$revEx,$date,$ModifPar,$VI,$etape,  $id ,  $download ,$Codage , $conn){

		$req="UPDATE affectfichier SET Designation='".$designation."',Avancement='".$avancement."',Rev_Externe='".$revEx."', Date_Modification ='".$date."',Modifie_Par='".$ModifPar."',Version_Interne='".$VI."',Etape='".$etape."',Download='".$download."',Codage='".$Codage."'where id='".$id."'";
		//echo $req;
		$conn->query($req);
	}


//************************************************************************************************************//

	function ajoutConge($conn, $nomComplet, $dateDebut, $dateFin, $nbrJour, $raison, $adresse, $telephone, $interimaire, $validateur, $info){
		$req="INSERT INTO conge (nomComplet, dateDebut, dateFin, nbrJour, raison, adresse, telephone, interimaire, validateur, info, etat) VALUES ('".$nomComplet."', '".$dateDebut."', '".$dateFin."', '".$nbrJour."', '".$raison."', '".$adresse."', '".$telephone."', '".$interimaire."', '".$validateur."', '".$info."', 'Non Traité')";
		$conn->query($req);
	}

	function afficherConge($conn){
		$req="SELECT * FROM conge ";
		$liste=$conn->query($req);

		return $liste->fetchAll();	
	}

	function modifierConge($conn, $id, $etat){
		$req="UPDATE conge SET etat='".$etat."' where id='".$id."'";
		//echo $req;
		$conn->query($req);
	}

	function ajoutAutorisation($conn, $nomComplet, $dateSortie, $heureSortie, $heureRetour, $raison, $destination, $motif, $validateur){
		$req="INSERT INTO autorisation (nomComplet, dateSortie, heureSortie, heureRetour, raison, destination, motif, validateur, etat) VALUES ('".$nomComplet."', '".$dateSortie."', '".$heureSortie."', '".$heureRetour."', '".$raison."', '".$destination."', '".$motif."', '".$validateur."', 'Non Traitée')";
		$conn->query($req);
	}

	function afficherAutorisation($conn){
		$req="SELECT * FROM autorisation ";
		$liste=$conn->query($req);

		return $liste->fetchAll();	
	}

	function modifierAutorisation($conn, $id, $etat){
		$req="UPDATE autorisation SET etat='".$etat."' where id='".$id."'";
		//echo $req;
		$conn->query($req);
	}

	function ajoutTicket($conn, $support, $equipe, $description, $priorite, $dateCreation, $informer, $pieceJointe){
		$req="INSERT INTO ticket (support, equipe, description, priorite, dateCreation, informer, pieceJointe) VALUES ('".$support."', '".$equipe."', '".$description."', '".$priorite."', '".$dateCreation."', '".$informer."', '".$pieceJointe."')";
		$conn->query($req);
	}

	function afficherTicket($conn){
		$req="SELECT * FROM ticket ";
		$liste=$conn->query($req);

		return $liste->fetchAll();	
	}

	function supprimerTicket($conn,$ref){
		$req="DELETE FROM ticket WHERE id='".$ref."'";
		$conn->query($req);
	}

	function ajoutTransfer($conn, $destinataire, $objet, $commentaire, $fichier , $sender , $date1){
		$req="INSERT INTO transfer (destinataire, objet, commentaire, fichier , sender , date1 ) VALUES ('".$destinataire."', '".$objet."', '".$commentaire."', '".$fichier."', '".$sender."', '".$date1."')";
		$conn->query($req);
	}

	function afficherTransfer($conn){
		$req="SELECT * FROM transfer order by date1 desc ";
		$liste=$conn->query($req);

		return $liste->fetchAll();	
	}

	function supprimerTransfer($conn,$ref){
		$req="DELETE FROM transfer WHERE id='".$ref."'";
		$conn->query($req);
	}

	function ajoutPointage($conn, $id_user, $Type, $ip, $cnxDate){
		$req="INSERT INTO pointage (id_user, Type, ip, cnxDate) VALUES ('".$id_user."', '".$Type."', '".$ip."', '".$cnxDate."')";
		$conn->query($req);
	}
	
	function afficherPointage($conn){
		$req="SELECT * FROM pointage ";
		$liste=$conn->query($req);

		return $liste->fetchAll();	
	}

	function modifierPointage($conn, $id, $cnxDate){
		$req="UPDATE pointage SET cnxDate='".$cnxDate."' where id='".$id."'";
		//echo $req;
		$conn->query($req);
	}

	/**
    * Get current user IP Address.
    * @return string
    */
    function get_ip_address() {
        if ( isset( $_SERVER['HTTP_X_REAL_IP'] ) ) {
            return $_SERVER['HTTP_X_REAL_IP'];
        } elseif ( isset( $_SERVER['HTTP_X_FORWARDED_FOR'] ) ) {
            // Proxy servers can send through this header like this: X-Forwarded-For: client1, proxy1, proxy2
            // Make sure we always only send through the first IP in the list which should always be the client IP.
            return (string) self::is_ip_address( trim( current( explode( ',', $_SERVER['HTTP_X_FORWARDED_FOR'] ) ) ) );
        } elseif ( isset( $_SERVER['REMOTE_ADDR'] ) ) {
            return $_SERVER['REMOTE_ADDR'];
        }
        return '';
    }
    //*********************************************Notificiation************************************************************//


function ajoutNouv($conn, 	$titre	, $description , 	$admin , $date){
		$req="INSERT INTO Nouveaute (titre ,description	, admin , date1) VALUES ('".$titre."', '".$description."', '".$admin."', '".$date."')";
		$conn->query($req);
	}

function afficherNouv($conn){
		$req="SELECT * FROM Nouveaute order by date1 desc limit 5 ";
		$liste=$conn->query($req);

		return $liste->fetchAll();	
	}


	function supprimerNouveaut($conn,$ref){
		$req="DELETE FROM Nouveaute WHERE id='".$ref."'";
		$conn->query($req);
	}


	function afficheFinance($conn){
		$req="SELECT * FROM finance order by date1 desc";
		$liste=$conn->query($req);


		return $liste->fetchAll();	
		
	}



		function ajoutFinance($conn , $FichierNom ,$Comment , $Admin , $Code , $pays , $succursale , $date1 ){

		$req="INSERT INTO finance(FichierNom ,Comment , Admin , Code , pays , succursale , date1) 
		VALUES ('".$FichierNom."','".$Comment."','".$Admin."','".$Code."','".$pays."','".$succursale."','".$date1."')";
		
		$conn->query($req);
}





	function supprimerFinance($conn,$id){
		$req="DELETE FROM finance WHERE Id='".$id."'";
		$conn->query($req);
					
	}

//*******************************************************************************************************//





		function ajoutTache($conn , $description ,$admin,$validation,$date_limite , $commentaireAdm , $dateDajout){

		$req="INSERT INTO tache(description , admin , validation , date_limite , commentaire_adm ,dateDajout) 
		VALUES ('".$description."','".$admin."','".$validation."','".$date_limite."','".$commentaireAdm."','".$dateDajout."')";
		
		$conn->query($req);
}


	


	function affichetache($conn){
		$req="SELECT * FROM tache order by dateDajout desc";
		$liste=$conn->query($req);


		return $liste->fetchAll();	
		
	}







	function supprimerTache($conn,$id){
		$req="DELETE FROM tache WHERE Id='".$id."'";
		$conn->query($req);
					
	}









	function modifierTache( $conn , $id , $nom){

		$req="UPDATE tache SET commentaire_adm='".$nom."'where id='".$id."'";
		//echo $req;
		$conn->query($req);
	}





	function modifierTacheU( $conn , $id , $nom){

		$req="UPDATE tache SET validation='".$nom."'where id='".$id."'";
		$conn->query($req);
	}




//***************************************************************************************************//



function ajoutFacture($conn , $nom ,$code,$admin,$date1,$finance)
{

		$req="INSERT INTO facture(nom,code,admin,date1,finance) 
		VALUES ('".$nom."','".$code."','".$admin."','".$date1."','".$finance."')";
		$conn->query($req);
}

function afficheFacture($conn)
{
		$req="SELECT * FROM facture order by date1 desc ";
		$liste=$conn->query($req);
		return $liste->fetchAll();	
}

function supprimerFacture($conn,$id)
{
		$req="DELETE FROM facture WHERE id='".$id."'";
		$conn->query($req);
					
}


function ajoutUser($conn , $nom ,$prenom,$email , $password , $role,$cin,$telephone,$sexe,$specialite,$date1 )
{
		$req="INSERT INTO user(nom	, prenom	, email, password, role,cin,telephone,sexe,specialite , date1) 
		VALUES ('".$nom."','".$prenom."','".$email."','".$password."','".$role."','".$cin."','".$telephone."','".$sexe."','".$specialite."','".$date1."')";
		$conn->query($req);
}



function afficheUser($conn)
{
		$req="SELECT * FROM user order by date1 desc";
		$liste=$conn->query($req);
		return $liste->fetchAll();	
}


//***************************************************************************************************************//

	function afficheSuivie($conn){
		$req="SELECT * FROM suivie order by date1 desc";
		$liste=$conn->query($req);


		return $liste->fetchAll();	
		
	}



		function ajoutSuivie($conn , $FichierNom ,$Comment , $Admin , $Code , $pays , $succursale , $date1 ){

		$req="INSERT INTO suivie(FichierNom ,Comment , Admin , Code , pays , succursale , date1) 
		VALUES ('".$FichierNom."','".$Comment."','".$Admin."','".$Code."','".$pays."','".$succursale."','".$date1."')";
		
		$conn->query($req);
}





	function supprimerSuivie($conn,$id){
		$req="DELETE FROM suivie WHERE Id='".$id."'";
		$conn->query($req);
					
	}








function ajoutSuivofact($conn , $nom ,$code,$admin,$date1,$finance)
{

		$req="INSERT INTO suivifact(nom,code,admin,date1,finance) 
		VALUES ('".$nom."','".$code."','".$admin."','".$date1."','".$finance."')";
		$conn->query($req);
}

function afficheSuivifact($conn)
{
		$req="SELECT * FROM suivifact order by date1 desc ";
		$liste=$conn->query($req);
		return $liste->fetchAll();	
}

function supprimerSuivifact($conn,$id)
{
		$req="DELETE FROM suivifact WHERE id='".$id."'";
		$conn->query($req);
					
}



















}

?>