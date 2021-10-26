
<?php 



session_start();
include '../start.php';


 ?>


<!doctype html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Multi Select - Create fancy multi select dropdown menus for a better user experience.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
    />
    <meta name="description" content="Create fancy multi select dropdown menus for a better user experience.">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

<link href="../main.087c8d15f89e6bbe3f9e.css" rel="stylesheet">



    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <link href="../main.087c8d15f89e6bbe3f9e.css" rel="stylesheet">

     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css" >
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

</head>
<body style="zoom:80%;">



                                  
<?php

include "../crud.php";

$crud=new crud();
$conn=$crud->cnx;


  ?>









  <div class="app-container app-theme-white body-tabs-shadow">
                    <div class="app-container">
                         <div class="app-page-title">
                        <div class="container fiori-container">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div>
                                      Affecter les personnels dans les projets
                                        <div class="page-title-subheading">
                                        </div>
                                    </div>
                                </div>
                               
                                    </div>
                        </div>
                    </div> 


                   <div style="margin-left: 25%;">
                        <br><br><br>
                        <h4 style="margin-left: 10%;">Affecter les personnels dans les projets</h4>
                        <br><br>
                        <div class="h-100 d-md-flex d-sm-block bg-white justify-content-center align-items-center col-md-12 col-lg-7">
                            <div class="mx-auto app-login-box col-sm-12 col-md-10 col-lg-9">
                                <div>
                                   

                          <form method="POST" action="FctAff.php">
                                        
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label for="support" class="">
                                                        <span class="text-danger">*</span> Titre :
                                                    </label>
                                                        <input type="text" name="titre" class="form-control" required>
                                                    </div>
                                            </div>
                                            <div class="col-md-12">



                                                <div class="position-relative form-group">
                                                    <label for="equipe" class="">
                                                        <span class="text-danger">*</span> Projet :
                                                    </label>
                                                        <select class="form-control" name="projet">
                                            <?php

                                                $listProjet = $crud->afficheProjet($conn) ; 
                                                foreach ($listProjet as $key){
                                            ?>
                                                    <option value="<?php echo $key['id'] ?>"><?php echo $key['projet'] ?></option>    
                                            <?php 
                                                }  
                                            ?>
                                        </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label for="description" class="">
                                                        <span class="text-danger">*</span> Users :
                                                    </label>



            <select data-live-search="true" class="form-control selectpicker" data-size="5" data-style="btn-danger" name="nesrine[]" multiple="multiple">
                    <?php $lista=  $crud-> afficheUser($conn) ;
                    foreach ($lista as $key ) {
                       ?>

                                     <option value= '<?php echo $key['email'] ?>' ><?php echo $key['email'] ?></option>                                     
                                      
               <?php
                }
              ?>

            </select>                               </div>
                                            </div>
                                            
                                            <div class="ml-auto" style="margin-right: 350px">
                     <input type="submit" name="submit" value="Affecter" class="btn-wide btn-danger btn-lg" >

                                                
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div> 
        </center>













































<script type="text/javascript" src="../assets/scripts/main.087c8d15f89e6bbe3f9e.js"></script></body>

<!-- Mirrored from demo.dashboardpack.com/fiori-html-pro/forms-input-selects.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Oct 2019 18:31:11 GMT -->
</html>
