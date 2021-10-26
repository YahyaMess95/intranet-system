
<?php

session_start();
include '../start.php';

include "../crud.php";
$crud=new crud();
$conn=$crud->cnx;




$today = date("F j, Y, g:i a");


if (isset($_POST['submit'])  )
{
  

$crud->ajoutType($conn , $_POST['type'] ,$today , $_SESSION['id'] ) ; 



}

?>


<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AjouterType</title>
   
    <meta name="msapplication-tap-highlight" content="no">
    <link href="../main.087c8d15f89e6bbe3f9e.css" rel="stylesheet">
    <script type="text/javascript" src="../assets/scripts/main.087c8d15f89e6bbe3f9e.js"></script>
</head>
<body>




<form action="AjoutType.php" method="post">
  	


<center>

	<div class="app-container app-theme-white" >
	        <div class="app-main__outer">
	            <div class="app-main__inner">


       <div class="app-page-title">
                        <div class="container fiori-container">
                            <div class="page-title-wrapper ">
                                <div class="page-title-heading">
                                    <div>
                                     Gestion de types 
                                        <div class="page-title-subheading">Cliquez sur ajouter 
                                        </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                    
                             
                                
                                </div>        </div>




                        </div>
                    </div>   <br><br>

	                <div class="container fiori-container" style="zoom:80%;">
	                	 <div class="col-lg-3 col-xl-6" >
	                                        <div class="main-card mb-3 card">
	 											<div class="card-body">
	                                            	<table>
	                                            		<tr><td><input type="text"  class="form-control" name="type" placeholder="Type"   required="true" ></td>
	                                            			
	                                            			<td><input type="submit"  name="submit" value="Ajouter Type" class=" btn-transition btn btn-outline-danger"  ></td>
	                                            		</tr>
	                                            	</table>
			
													<div>
														
													</div>
												</div>
	                                        </div>
	                          </div>
  			<div class="main-card mb-3 card mt-3">
	                        <div class="card-body">
												<table  style="width: 80%;" id="example" class="table table-hover table-striped table-bordered">
															<thead>
																<tr>
																	
																<th><center>Type</center></th>
																<th><center>Date</center></th>
																<th><center>Admin</center></th>
																<th><center>EmailAdmin</center></th>
																<th></th>
																</tr>
															</thead>
															<tbody>
																<?php 

																$lista=  $crud-> afficheType($conn) ;

																foreach ($lista as $key ) {
																	
																 ?>

																<tr>
																	
																<td> <?php echo  $key['type'] ?>  </td>
																<td><?php echo  $key['date1'] ?>  </td>
																<td><?php echo  $key['adder'] ?> </td>

																<td><?php echo $crud->GetEmailByID($key['adder'] , $conn ) ;  ?> </td>


																<td> <a href="SupprimerType.php?id=<?php echo $key['id'] ?>" class="btn-icon-vertical btn-rounded btn-transition btn btn-outline-danger"> Supprimer</a></td>

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
</body>
</html>

