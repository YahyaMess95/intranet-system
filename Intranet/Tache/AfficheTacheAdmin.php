<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>List des taches</title>
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
                                     Liste des taches
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
	                                
	                                <th>Description</th>
	                                <th>User</th>
                             
                                    <th>Date d'ajout</th>
                                    <th>Commentaire admin</th>
                                    <th>Date limite pour faire le tache </th>
                                    <th>Etat</th>
                                    <th></th>
                                    <th></th>
                                  
                                </tr>
                                </thead>
                                <tbody>
                                    <?php 

                                        include "../crud.php";

                                        $crud=new crud();
                                        $conn=$crud->cnx;

                                        foreach ($crud->affichetache($conn) as $l) {
                                          
                                    ?>
	                                <tr>
                                        <td><?php echo $l["description"]; ?></td>
                                        <td><?php echo $l["admin"]; ?></td>
                              
                                        <td><?php echo $l["dateDajout"]; ?></td>
                                        <td><?php echo $l["commentaire_adm"]; ?></td>
                                        <td><?php echo $l["date_limite"]; ?></td>
                                         <td><?php echo $l["validation"]; ?></td>


                                         <?php 

if ($l['commentaire_adm']=='approuve' or $l['commentaire_adm']=='desapprouve' ) {
    # code...

                                          ?>
                                        <td><button disabled class='btn btn-success' onclick="window.location.href ='approuve.php?id=<?php echo $l["id"] ;   ?>' "  > Approuve</button> </td>
                                        
                                        <td><button class='btn btn-danger' disabled onclick="window.location.href ='desapprouve.php?id=<?php echo $l["id"] ;   ?>' " >Desapprouver</button> </td>
                                        

<?php



} 



else



    { 




     ?>
   <td><button class='btn btn-success'  onclick="window.location.href ='approuve.php?id=<?php echo $l["id"] ;   ?>' "> Approuve</button> </td>
                                        
                                        <td><button class='btn btn-danger' onclick="window.location.href ='desapprouve.php?id=<?php echo $l["id"] ;   ?>' " >Desapprouver </button> </td>
                                    <?php


                                }



                            }





                                ?>
	                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
<script type="text/javascript" src="../assets/scripts/main.087c8d15f89e6bbe3f9e.js"></script>
</body>
</html>