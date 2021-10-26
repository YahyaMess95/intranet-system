<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body  >
    <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
              
                <div class="card-body" style="zoom:70%;">
                    <h2 class="title">Modification fichier</h2>
                    <form method="POST" action="fileUp.php"  enctype="multipart/form-data">
                    
                        <div class="row row-space">
                            


                             <div class="col-2">
                                <label>Designation</label>
                               <div class="input-group">
                                    <input class="input--style-2" type="text" placeholder="Désignation" name="des" value="<?php echo $_GET['des'] ?>" required>
                               </div>
                            </div>
                            <div class="col-2">
                                <label>Avancement</label>
                               <div class="input-group">
                                    <input class="input--style-2" type="number" placeholder="Avancement" name="avancement" max="100" value="<?php echo $_GET['Avancement'] ?>"  required>
                               </div>
                            </div>  

                             <div class="col-2">
                                <label> Révision Externe</label>
                               <div class="input-group">
                                    <input class="input--style-2" type="text" placeholder="Rev_Externe" name="Rev_Externe" value="<?php echo $_GET['revE'] ?>" required>
                               </div>
                            </div>
                       

                         
                            <div class="col-2">
                                <label>Version Interne</label>
                               <div class="input-group">
                                    <input class="input--style-2" type="text" placeholder="Version_Interne" name="Version_Interne" value="<?php echo $_GET['VersionI'] ?>" required>
                               </div>
                            </div>  

                             
<div class="col-2">
    <label>Etape</label>
                               <div class="input-group">
                                    <input class="input--style-2" type="text" placeholder="Etape" name="etape" value="<?php echo $_GET['etape'] ?>"  required>
                               </div>
                            </div> 

                             
<div class="col-2">
    <label>Fichier</label>
                               <div class="input-group">
                                    <input class="input--style-2" type="file"  name="file" accept=".doc,.docx,.csv,.pdf,.xls,.xlsx" >
                               </div>
                            </div> 

                            <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>" > 
                        </div>





                                                <div class="p-t-30">
                            <button class="btn btn--radius" style="background-color: #b81f44;" type="submit" name="submit">Modifier</button>
                            <a href="../GEP.php" style="margin-left: 3%;">    Retourner</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->