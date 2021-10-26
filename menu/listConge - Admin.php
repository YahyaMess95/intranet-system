<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>List des Congés</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
    />
    <meta name="description" content="Choose between regular React Bootstrap tables or advanced dynamic ones.">
    <meta name="msapplication-tap-highlight" content="no">
    <link href="../main.087c8d15f89e6bbe3f9e.css" rel="stylesheet"></head>
<body>
             <?php 



session_start();


include '../start.php';



     ?>
              <div class="app-container app-theme-white body-tabs-shadow">
                    <div class="app-container">
                         <div class="app-page-title">
                        <div class="container fiori-container">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div>
                                     Liste des congés pour l'admin
                                        <div class="page-title-subheading">
                                        </div>
                                    </div>
                                </div>
                               
                                    </div>
                        </div>
                    </div> 

                    <div class="main-card mb-3 card mt-4" style="width: 80%; margin-left: 10%;">
                        <div class="card-body">
                            <table  id="example" class="table table-hover table-striped table-bordered">
                                <thead>
                                <tr>
	                                <th>Nom complet</th>
	                                <th>Date debut</th>
	                                <th>Date fin</th>
                                    <th>N° Jour</th>
                                    <th>Raison</th>
                                    <th>Adresse</th>
                                    <th>Telephone</th>
                                    <th>Interimaire</th>
                                    <th>Validateur</th>
                                    <th>Info</th>
                                    <th>Etat</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php 

                                        include "../crud.php";
                                        $crud=new crud();
                                        $conn=$crud->cnx;
                                        foreach ($crud->afficherConge($conn) as $l) {  ?>
	                                <tr>
                                        <td><?php echo $l["nomComplet"]; ?></td>
                                        <td><?php echo $l["dateDebut"]; ?></td>
                                        <td><?php echo $l["dateFin"]; ?></td>
                                        <td><?php echo $l["nbrJour"]; ?></td>
                                        <td><?php echo $l["raison"]; ?></td>
                                        <td><?php echo $l["adresse"]; ?></td>
                                        <td><?php echo $l["telephone"]; ?></td>
                                        <td><?php echo $l["interimaire"]; ?></td>
                                        <td><?php echo $l["validateur"]; ?></td>
                                        <td><?php echo $l["info"]; ?></td>

                                        <td>


                                            <?php  
                                            if ($l["etat"]=="Non Traité"){ ?>
                                                <form action="modifierConge.php" method="post">
                                                    <input type="hidden" name="id" value="<?php echo $l["id"]; ?>">
                                                    <input type="submit" name="Approuver" value="approuve">
                                                    
                                                    <input type="submit" name="Desapprouver" value="desapprouve">
                                                   
                                                </form>
                                            <?php }
                                            if ($l["etat"]!="Non Traité") { 
                                                echo $l["etat"];
                                            } ?>
                                        </td>
                                    </tr>
                                    <?php } ?>
	                               
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            
<script type="text/javascript" src="../assets/scripts/main.087c8d15f89e6bbe3f9e.js"></script>
</body>
</html>