<?php
session_start();
include '../start.php';


include "../crud.php";
$crud=new crud();
$conn=$crud->cnx;


$today = date("F j, Y, g:i a");


if (isset($_POST['submit'])  )
{
  

$crud->ajoutProjet($conn , $_POST['nom'] ,$today , $_SESSION['id'] , $_POST['designation'] ) ; 



}

  ?>



  <!DOCTYPE html>
  <html>
  <head>
  		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>List des transfers</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
    />
    <meta name="description" content="Choose between regular React Bootstrap tables or advanced dynamic ones.">
    <meta name="msapplication-tap-highlight" content="no">
    <link href="../main.087c8d15f89e6bbe3f9e.css" rel="stylesheet">
    <script type="text/javascript" src="../assets/scripts/main.087c8d15f89e6bbe3f9e.js"></script>
  </head>
  <body >
  





<div>


<center>
		<br><br><br><br><br><br>
	<div class="app-container app-theme-white" style="zoom:80%;">
	        <div class="app-main__outer">
	            <div class="app-main__inner">
	                <div class="container fiori-container">
	                	 <div class="col-lg-3 col-xl-6" >
	                                        <div class="main-card mb-3 card">
	 											<div class="card-body">
	 												<form action="AjouterProjet.php" method="post" >
	                                            	<table>

	                                            		<tr><td><input type="text" name="nom" placeholder="nom" class="form-control"></td>
	                                            			<td><input type="text" name="designation" placeholder="designation" class="form-control"></td>
	                                            			<td><center><input type="submit"  name="submit" value="ajouter" class="btn btn-outline-danger"></center></td>
	                                            		</tr>
	                                            	</table>
			</form>
													<div>
														
													</div>
												</div>
	                                        </div>
	                     </div>
	                    <div class="main-card mb-3 card mt-3">
	                        <div class="card-body">
	                            <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
	                                <thead>
	                                <tr>
		                                <th><center>Reference</center></th>
		                                <th><center>Date</center></th>
		                                <th><center>Admin</center></th>
	                                    <th><center>EmailAdmin</center></th>
	                                    <th><center>Designation</center></th>
	                                    <th></th>


	                                </tr>
	                                </thead>

	                                <tbody>
	                                    <?php 

											$lista=  $crud->afficheProjet($conn) ;
											foreach ($lista as $key ) {
	 									?>

		                                <tr>
	                                        <td><?php echo  $key['projet'] ?></td>
	                                        <td><?php echo  $key['date1'] ?></td>
	                                        <td><?php echo  $key['adder'] ?></td>
	                                        <td><?php echo $crud->GetEmailByID($key['adder'] , $conn ) ;  ?></td>
	                                        <td><?php echo  $key['designation'] ?></td>
	                                        <td><a href="SupprimerProjet.php?id=<?php echo $key['id'] ?> " class="  btn btn-outline-danger"> Supprimer          </a></td>
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
</center>
  







  </body>
  </html>

