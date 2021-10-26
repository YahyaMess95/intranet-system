<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>List des transfers</title>
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
                                     Liste des transferts
                                        <div class="page-title-subheading">
                                        </div>
                                    </div>
                                </div>
                               
                                    </div>
                        </div>
                    </div> 

                    <div class="main-card mb-3 card mt-4" style="width: 80%; margin-left: 10%;">
                        <div class="card-body">
                            <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                                <thead>
                                <tr>
	                                <th>Destinataire</th>
	                                <th>Nom</th>
	                                <th>Commentaire</th>
                                    <th>Download</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php 

                                        include "../crud.php";

                                        $crud=new crud();
                                        $conn=$crud->cnx;

                                        foreach ($crud->afficherTransfer($conn) as $l) {
                                            //echo "id = ".$l["id"];
                                            if ($_SESSION["EmailSession"] == $l["sender"] ) {
                                               
                                            
                                    ?>
	                                <tr>
                                        <td><?php echo $l["destinataire"]; ?></td>
                                        <td><?php echo $l["objet"]; ?></td>
                                        <td><?php echo $l["commentaire"]; ?></td>
 <td><center> <a href="UploadTransfere/<?php echo $l['fichier']; ?>" class="mb-2 mr-2 btn-wide btn-transition btn btn-shadow btn-light">  Telecharger  </a></center></td>                                        
                                    <?php } }?>
	                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
       
<script type="text/javascript" src="../assets/scripts/main.087c8d15f89e6bbe3f9e.js"></script>
</body>
</html>