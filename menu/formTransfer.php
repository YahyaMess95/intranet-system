<!doctype html>
<html lang="en">


<!-- Mirrored from demo.dashboardpack.com/fiori-html-pro/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Oct 2019 18:28:54 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Helpdesk - This is an example dashboard created using build-in elements and components.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
    />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <link href="../main.087c8d15f89e6bbe3f9e.css" rel="stylesheet"></head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
            <center>


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
                                      Transfert des Fichiers
                                        <div class="page-title-subheading">
                                        </div>
                                    </div>
                                </div>
                               
                                    </div>
                        </div>
                    </div> 
                        <br><br><br>
                        <h4>Transfer des fichiers</h4>
                        <br><br>
                        <div class="h-100 d-md-flex d-sm-block bg-white justify-content-center align-items-center col-md-12 col-lg-7">
                            <div class="mx-auto app-login-box col-sm-12 col-md-10 col-lg-9">
                                <div>

                                    <?php
                                        include "../crud.php";

                                        $crud=new crud();
                                        $conn=$crud->cnx;

                                        $lista = $crud->afficheUser($conn) ;
                                    ?>

                                    <form action = "UploadTransfere/FctUploadTransfere.php" method="POST" enctype="multipart/form-data" >
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label for="objet" class="">
                                                        <span class="text-danger">*</span> Objet :
                                                    </label>
                                                    <input name="objet" id="objet" placeholder="Objet.." type="text" class="form-control" required="required">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label for="commentaire" class="">
                                                        <span class="text-danger">*</span> Commentaire :
                                                    </label>
                                                    <input name="commentaire" id="commentaire" type="text" placeholder="Commentaire.." class="form-control" required="required">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label for="fichier" class=""><span class="text-danger">* </span>Fichier :</label>
                                                    <input type="file" name="file" value="" required class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label for="destinataire" class="">
                                                        <span class="text-danger">*</span> Destinataire : 
                                                    </label>
                                                    <select name="destinataire" id="destinataire" class="form-control">
                                                        <?php 
                                                            foreach ($lista as $key ) {
                                                        ?>
                                                        <option><?php echo $key['email'];?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div><br>
                                            </div>
                                            <div class="ml-auto">
                                                <input type="submit" name="submit" class="btn-wide btn-pill btn-shadow btn-hover-shine btn btn-danger btn-lg" style="margin-right: 350px">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </center>

                <script type="text/javascript" src="../assets/scripts/main.087c8d15f89e6bbe3f9e.js"></script>

</body>
</html>