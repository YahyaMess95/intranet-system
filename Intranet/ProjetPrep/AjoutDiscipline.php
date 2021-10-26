	

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gestion des disciplines</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
    />
    <meta name="description" content="Choose between regular React Bootstrap tables or advanced dynamic ones.">
    <meta name="msapplication-tap-highlight" content="no">
    <link href="../main.087c8d15f89e6bbe3f9e.css" rel="stylesheet">
    <script type="text/javascript" src="../assets/scripts/main.087c8d15f89e6bbe3f9e.js"></script>
</head>
<body>








<?php 



session_start();
include '../start.php';



 ?>


  	


  	<form action="AjoutDiscipline.php" method="post">
	
		<div>
			<center>
		


				<div class="app-container app-theme-white" >
		        	<div class="app-main__outer">
		            	<div class="app-main__inner">
         <div class="app-page-title">
                        <div class="container fiori-container">
                            <div class="page-title-wrapper ">
                                <div class="page-title-heading">
                                    <div>
                                       Gestion des disciplines
                                        <div class="page-title-subheading">Cliquez sur ajouter 
                                        </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                    
                             
                                
                                </div>        </div>
                        </div>
                    </div>    

<br><br><br>

		                	<div class="container fiori-container" style="zoom:80%; ">
  							
		                	 	<div class="col-lg-3 col-xl-6" >
		                            <div class="main-card mb-3 card">
		 								<div class="card-body">
		                                    <table>
		                                        <tr>
		                                        	<td>
		                                        		<input type="text" name="discipline" placeholder="discipline" class="form-control">
		                                        	</td>
		                                            <td>
		                                            	<center>
		                                            		<input type="submit"  name="submit" value="ajouter" class="btn btn-outline-danger">
		                                            	</center>
		                                            </td>
		                                        </tr>
		                                    </table>
		                                    <div></div>
										</div>
		                            </div>
		                     	</div>

			                    <div class="main-card mb-3 card mt-3">
			                        <div class="card-body">
			                            <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
			                                <thead>
				                                <tr>
					                                <th><center>Discipline</center></th>
					                                <th><center>Date</center></th>
					                                <th><center>Admin</center></th>
				                                    <th><center>EmailAdmin</center></th>
				                                    <th><center>Action</center></th>
				                                </tr>
			                                </thead>
			                                <tbody>

												<?php
													include "../crud.php";
													$crud=new crud();
													$conn=$crud->cnx;
													$today = date("F j, Y, g:i a");

													if (isset($_POST['submit'])  )
													{
														$crud->ajoutDiscipline($conn , $_POST['discipline'] ,$today , $_SESSION['id'] ) ; 
											
													}

													$lista=  $crud-> afficheDiscipline($conn) ;
													
													foreach ($lista as $key ) {
												?>

												<tr>
													<td><?php echo  $key['discipline'] ?></td>
													<td><?php echo  $key['date1'] ?></td>
													<td><?php echo  $key['adder'] ?></td>
													<td><?php echo $crud->GetEmailByID($key['adder'] , $conn ) ;  ?></td>
													<td>
														<a href="SupprimerDiscipline.php?id=<?php echo $key['id'] ?>" class="btn btn-outline-danger">Supprimer</a>
													</td>
												</tr>

				                                <?php } ?>	
												
			                                </tbody>
			                            </table>
			                        </div>
			                    </div>
			                </div>
			            </div>
			        </div>
				</div>
			</center>
		</div>
  	</form>







</div>





</body>
</html>
