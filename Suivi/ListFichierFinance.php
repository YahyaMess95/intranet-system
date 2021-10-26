<?php


session_start();
include "../crud.php";
$crud=new crud();
$conn=$crud->cnx;





include '../start.php';



     ?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AjouterFinance</title>
   
    <meta name="msapplication-tap-highlight" content="no">
    <link href="../main.087c8d15f89e6bbe3f9e.css" rel="stylesheet">
    <script type="text/javascript" src="../assets/scripts/main.087c8d15f89e6bbe3f9e.js"></script>
<form action="AjoutFinance.php" method="post">
  	


<center>
	
	<div class="app-container app-theme-white" style="zoom:100%;">

    <div class="app-page-title">
                        <div class="container fiori-container">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div>
                                     Suivie
                                        <div class="page-title-subheading">
                                        </div>
                                    </div>
                                </div>
                               
                                    </div>
                        </div>
                    </div> 

<br><br><br><br>

                    <h3 style="margin-right: 82%;" ><a href="AjoutSuivie.php" class="text-danger">Ajouter une suivie</a> </h3>
	        <div class="app-main__outer">
	            <div class="app-main__inner">
	                <div class="container fiori-container" style="margin-right: 50%; zoom:80%;">
	                


  			<div class="main-card mb-3 card mt-3" style="width: 200%;" >

	                        <div class="card-body">
												<table  style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
															<thead>
																<tr>
																	
																<th><center>Nom du Fichier</center></th>
																<th><center>Commentaire</center></th>
																<th><center>Admin</center></th>
																<th><center>Pays</center></th>
																<th><center>Date</center></th>
																<th><center>siege</center></th>
																
																<th><center>Telechager</center></th>
																<th><center>Voir les factures </center></th>
																<th><center>Action</center></th>

																
																</tr>
															</thead>
															<tbody>
																<?php 

																$lista=  $crud->afficheSuivie($conn) ;

																foreach ($lista as $key ) {
																	
																 ?>

																<tr style="word-break: break-all;">
																	
																<td> <?php echo  $key['FichierNom'] ?>  </td>
																<td><?php echo  $key['Comment'] ?>  </td>
																<td><?php echo  $key['Admin'] ?> </td>
<td><?php echo  $key['pays'] ?> </td>
<td><?php echo  $key['date1'] ?> </td>
<td><?php echo  $key['succursale'] ?> </td>


																<td> <center><a href="FinancheFolder/<?php echo  $key['Code'] ?>"  class="mb-2 mr-2 btn-wide btn-transition btn btn-shadow btn-light" >Téléchager </center></a>  </td>
																

																

																<td> <center> <a href="ListFacture.php?Id=<?php echo $key['Id'] ?>&pays=<?php echo $key['pays'] ?>&date1=<?php echo $key['date1'] ?>&siege=<?php echo $key['succursale'] ?>"  class="mb-2 mr-2 btn-wide btn-transition btn btn-shadow btn-light"> Voir les factures</center></a></td>

<td> <center> <a href="SupprimerFinance.php?Id=<?php echo $key['Id'] ?>&pays=<?php echo $key['pays'] ?>&date1=<?php echo $key['date1'] ?>&siege=<?php echo $key['succursale'] ?>" class="btn-icon-vertical btn-rounded btn-transition btn btn-outline-danger"> Supprimer</center></a></td>
																</tr>

																<?php 
																}
																 ?>
																</tbody>
																</table>
															</div>
														</div>
													</div>
                                               </div>
                                            </div>
                                        </div>
                                    </div>                            
  </form>





<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="zoom:80%;">
    <div class="modal-dialog" role="document">
        
    

            



        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ajouter un dossier</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="false">&times;</span>
                </button>
            </div>
    <form method="POST" action="../finance/FileFinance.php" enctype="multipart/form-data" >
            <div class="modal-body">
    
  
        <div class="card-body">
          
                                                     
                                            <div class="col-md-6">
                                                   <div class="position-relative form-group">
                                                    <label for="Pays" class="">
                                                        <span class="text-danger">*</span> Pays :
                                                    </label>
                                                    <input name="pays" id="commentaire" type="text" placeholder="Pays..." class="form-control" required="required"   style="width: 400px ; ">
                                                </div>
                                                   <div class="position-relative form-group">
                                                    <label for="Siège" class=""> siège
                                                        <span class="text-danger">*</span>  :
                                                    </label>
                                                    <input name="siege" id="commentaire" type="text" placeholder="Siège.." class="form-control" required="required" style="width: 400px ; ">
                                                </div>

                                                <div class="position-relative form-group">
                                                    <label for="commentaire" class="">
                                                        <span class="text-danger">*</span> Commentaire :
                                                    </label>
                                                    <textarea name="commentaire" id="commentaire" type="text" placeholder="Commentaire.." class="form-control" required="required" style="width: 400px ; height: 300px;"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label for="fichier" class=""><span class="text-danger">* </span>Fichier :</label>
                                                    <input type="file" name="file" value="" required class="form-control" style="width: 400px;">
                                                </div>
                                            </div>
                                       
                                            
                                        
            
                                                 
                                                </div>
            </div>
            <div class="modal-footer">
              <div class="ml-auto" style="margin-right: 50%;">
                                                <input type="submit" name="submit" class="btn-wide btn-pill btn-shadow btn-hover-shine btn btn-danger btn-lg" >
                                            </div>
            </div>

            </form>
        </div>

    </div>
</div>
