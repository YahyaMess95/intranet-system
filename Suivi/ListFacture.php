<?php


session_start();
include "../crud.php";
$crud=new crud();
$conn=$crud->cnx;



?>

 <?php 



include '../start.php';



     ?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AjouterFinance</title>
   
    <meta name="msapplication-tap-highlight" content="no">
    <link href="../main.087c8d15f89e6bbe3f9e.css" rel="stylesheet">
    <script type="text/javascript" src="../assets/scripts/main.087c8d15f89e6bbe3f9e.js"></script>


<center>
	
	<div class="app-container app-theme-white" style="zoom:100%;">

    <div class="app-page-title" style="font-size: 10px;">
                        <div class="container fiori-container">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div>
                                     Factures : <?php echo $_GET['pays'].'/'.$_GET['date1'].'/'.$_GET['siege'] ?>
                                        <div class="page-title-subheading">
                                        </div>
                                    </div>
                                </div>
                               
                                    </div>
                        </div>
                    </div> 

<br><br><br><br>



    <form method="POST" action="FileFacture.php" enctype="multipart/form-data" >


<input type="file" name="file" class="btn btn-danger" required>


<input type="hidden" name="idAdmin" value="<?php echo $_GET['Id'] ?>">
<input type="hidden" name="date1" value="<?php echo $_GET['date1'] ?>">
<input type="hidden" name="siege" value="<?php echo $_GET['siege'] ?>">
<input type="hidden" name="pays" value="<?php echo $_GET['pays'] ?>">

<button class="btn btn-shadow btn-light"  name="submit" style="width: 100px;height: 35px;"> upload</button>
</form>

	        <div class="app-main__outer">
	            <div class="app-main__inner">
	                <div class="container fiori-container" style="margin-right: 30%; zoom:80%;">
	                
  			<div class="main-card mb-3 card mt-3" style="width: 120%;" >
	                        <div class="card-body">
												<table  style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
															<thead>
																<tr>
																	
																<th><center>Nom du Facture</center></th>
																
																<th><center>Admin</center></th>
																<th><center>Date</center></th>
																<th><center>download</center></th>
																<th></th>
																
																</tr>
															</thead>
															<tbody>
																<?php 

																$lista=  $crud-> afficheSuivifact($conn) ;

																foreach ($lista as $key ) {
																	

if ($_GET['Id'] == $key['finance']) {
	# code...


																 ?>

																<tr style="word-break: break-all;">
																	


																<td><?php echo  $key['nom'] ?>  </td>
																<td><?php echo  $key['admin'] ?> </td>
																<td><?php echo  $key['date1'] ?> </td>
																<td><center><a href="FactureFolder/<?php echo  $key['code'] ?>"  class="mb-2 mr-2 btn-wide btn-transition btn btn-shadow btn-light">Télécharger</a></center>   </td>
<td> <center> <a href="SupprimerFacture.php?IdF=<?php echo $key['id']?>&Id=<?php echo $key['finance'] ?>&pays=<?php echo $_GET['pays'] ?>&date1=<?php echo $_GET['date1'] ?>&siege=<?php echo $_GET['siege'] ?> " class="btn-icon-vertical btn-rounded btn-transition btn btn-outline-danger"> Supprimer</center></a></td>


																</tr>

																<?php 
																}}
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
