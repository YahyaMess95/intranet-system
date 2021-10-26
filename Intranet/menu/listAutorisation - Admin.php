

    <?php 



session_start();


include '../start.php';



     ?>
<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>List des autorisations</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
    />
    <meta name="description" content="Choose between regular React Bootstrap tables or advanced dynamic ones.">
    <meta name="msapplication-tap-highlight" content="no">
    <link href="../main.087c8d15f89e6bbe3f9e.css" rel="stylesheet"></head>
<body>


              <div class="app-container app-theme-white body-tabs-shadow">
                    <div class="app-container">
                         <div class="app-page-title">
                        <div class="container fiori-container">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div>
                                     Liste des autorisations pour l'admin
                                        <div class="page-title-subheading">
                                        </div>
                                    </div>
                                </div>
                               
                                    </div>
                        </div>
                    </div> 
                    

                    <div class="main-card mb-3 card mt-4" style="width: 80%; margin-left: 10%;">
                        <div class="card-body" >
                            <table  id="example" class="table table-hover table-striped table-bordered">
                                <thead>
                                <tr>
	                                <th>Nom complet</th>
	                                <th>Date sortie</th>
                                    <th>Heure sortie</th>
                                    <th>Heure retour</th>
                                    <th>Raison</th>
                                    <th>Destination</th>
                                    <th>Motif</th>
                                    <th>Validateur</th>
                                    <th>Etat</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php 

                                        include "../crud.php";

                                        $crud=new crud();
                                        $conn=$crud->cnx;

                                        foreach ($crud->afficherAutorisation($conn) as $l) {
                                            //echo "id = ".$l["id"];
                                    ?>
	                                <tr>
                                        <td><?php echo $l["nomComplet"]; ?></td>
                                        <td><?php echo $l["dateSortie"]; ?></td>
                                        <td><?php echo $l["heureSortie"]; ?></td>
                                        <td><?php echo $l["heureRetour"]; ?></td>
                                        <td><?php echo $l["raison"]; ?></td>
                                        <td><?php echo $l["destination"]; ?></td>
                                        <td><?php echo $l["motif"]; ?></td>
                                        <td><?php echo $l["validateur"]; ?></td>
                                        
                                        <td><?php  
                                            if ($l["etat"]=="Non Traitée"){ ?>
                                                <form action="modifierAutorisation.php" method="post">
                                                    <input type="hidden" name="id" value="<?php echo $l["id"]; ?>">
                                                    <input type="submit" name="Approuver" value="approuvee" class="btn-success">
                                                    
                                                    <input type="submit" name="Desapprouver" value="desapprouvee" class="btn-danger">
                                                   
                                                </form>
                                            <?php }
                                            if ($l["etat"]!="Non Traitée") { 
                                                echo $l["etat"];
                                            } ?>
                                        </td>

                                    <?php } ?>
	                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
        </div>
<div class="app-drawer-overlay d-none animated fadeIn"></div>
<script type="text/javascript" src="../assets/scripts/main.087c8d15f89e6bbe3f9e.js"></script>
</body>
</html>