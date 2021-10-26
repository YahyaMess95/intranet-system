


<?php   session_start();  ?>


<!doctype html>
<html lang="en">


<!-- Mirrored from demo.dashboardpack.com/fiori-html-pro/components-modals.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Oct 2019 18:30:51 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <base target="_parent" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Admin-Dossier</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
    />
    <meta name="description" content="Wide selection of modal dialogs styles and animations available.">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

<link href="../main.087c8d15f89e6bbe3f9e.css" rel="stylesheet"></head>
<body>




<?php 


include '../start.php';

 ?>





            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="container fiori-container">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div>
                                        Ajout des dossiers 
                                        <div class="page-title-subheading">Cliquez sur ajouter 
                                        </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                    
                                    <button type="button"class="btn-wide mb-2 mr-2   btn-transition btn btn-light" data-target="#exampleModal"  data-toggle="modal">
                                            <span class="btn-icon-wrapper pr-1 opacity-7">
                                                <i class="fa fa-plus"></i>
                                            </span>
                                      Ajouter
                                    </button>
                                
                                </div>        </div>
                        </div>
                    </div>                
                            

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="main-card mb-3 card">
                                        <div class="card-body">
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <iframe src="treeview/treeview.php"  name="_top"  height="600" width="1660"  ></iframe>
                                       
                                          
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                   
                </div>
                       </div>
        </div>
    
</div>

<div class="app-drawer-overlay d-none animated fadeIn"></div><script type="text/javascript" src="../assets/scripts/main.087c8d15f89e6bbe3f9e.js"></script></body>

<!-- Mirrored from demo.dashboardpack.com/fiori-html-pro/components-modals.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Oct 2019 18:30:52 GMT -->
</html>

<!-- Large modal -->


<!-- Small modal -->



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        
	

			



		<form action="AddFunction.php" method="POST">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ajouter un dossier</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="false">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="mb-0">
			voulez vous mettre le chemin de dossier ?		                	

                </p>

				<div>




						
<input type="text" name="path" class="form-control" placeholder="\xxxx\xxxx\xxxx\" value="\">


					

				</div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input  type="submit" class="btn btn-danger" value="Ajouter">
            </div>
        </div>

					</form>
    </div>
</div>


