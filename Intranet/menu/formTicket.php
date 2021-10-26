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

    <?php 



session_start();


include '../start.php';



     ?>
            <center>
                <div class="app-container app-theme-white body-tabs-shadow">
                    <div class="app-container">
                         <div class="app-page-title">
                        <div class="container fiori-container">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div>
                                      Ticket
                                        <div class="page-title-subheading">
                                        </div>
                                    </div>
                                </div>
                               
                                    </div>
                        </div>
                    </div> 
                        <br><br><br>
                        <h4>Demander un ticket</h4>
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

                                    <form action = "UploadTicket/FctUploadTicket.php" method="POST" enctype="multipart/form-data">
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label for="support" class="">
                                                        <span class="text-danger">*</span> Support :
                                                    </label>
                                                    <input name="support" id="support" type="text" class="form-control" required="required">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label for="equipe" class="">
                                                        <span class="text-danger">*</span> Demandeur :
                                                    </label>
                                                    <input name="equipe" id="equipe" type="text" class="form-control" required="required" value="<?php echo $_SESSION["EmailSession"] ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label for="description" class="">
                                                        <span class="text-danger">*</span> Description :
                                                    </label>
                                                    <input name="description" id="description" type="text" class="form-control" required="required">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label for="nbrJour" class="">
                                                        <span class="text-danger">*</span> N° jour demandé :
                                                    </label>
                                                    <input name="nbrJour" id="nbrJour" type="number" class="form-control" required="required">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label for="dateCreation" class="">
                                                        <span class="text-danger">*</span> Date de Creation :
                                                    </label>
                                                    <input name="dateCreation" id="dateCreation" type="date" class="form-control" required="required">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label for="pieceJointe" class="">
                                                        <span class="text-danger">*</span> Piece Jointe :
                                                    </label>
                                                    <input type="file" name="file" value="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label for="priorite" class="">
                                                        <span class="text-danger">*</span> Priorite :
                                                    </label>
                                                    <select name="priorite" required class="form-control">
                                                      <option value="" selected><h1>--Choisir une option--</h1></option>
                                                      <option value="faible"><h1>Faible</h1></option>
                                                      <option value="moyenne"><h1>Moyenne</h1></option>
                                                      <option value="forte"><h1>Forte</h1></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label for="informer" class="">
                                                        <span class="text-danger">*</span> Informer : 
                                                    </label>
                                                    <select name="informer" id="informer" class="form-control">
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