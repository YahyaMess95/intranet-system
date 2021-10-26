<?php  






if (isset($_POST['path']) ){
	


$dossier= $_POST['path'] ;  



$nom = "C:/xampp/htdocs/Intranet/TestGED/".$dossier."/"; // Le nom du répertoire à créer

    // Vérifie si le répertoire existe :
    if (is_dir($nom)) {
                      echo 'Le répertoire existe déjà!';  
                      }
    // Création du nouveau répertoire
    else { 
          mkdir($nom);
          }





}
 header("Location: AjoutDossier.php"); 


?>