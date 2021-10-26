


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



<body>
    <div style="background-color: #F8F8F8;">      
<div class="app-page-title">
                        <div class="container fiori-container">
                            <div class="page-title-danger">
                                <div class="page-title-heading">
                                    <div>
                                       Profil
                                        <div class="page-title-subheading">Vous trouvez vos données ici 
                                        </div>
                                    </div>
                                </div>
                                       </div>
                        </div>
                    </div>


                     <div class="container fiori-container" >
                        <div class="row mt-4">
                            <div class="col-md-4">
                                <div class="card-hover-shadow profile-responsive card-border border-danger mb-3 card">
                                    <div class="dropdown-menu-header">
                                        <div class="dropdown-menu-header-inner ">
                                            <div class="menu-header-content">
                                             

                    <?php


include "../crud.php";

    $crud=new crud();
    $conn=$crud->cnx;

$user = $crud->afficheUser($conn) ; 

foreach ($user as $key ) {
    


if ($key['id']==$_SESSION['id']) {
    
 $_SESSION["date1"] =  $key['date1']  ;




                              ?>



                                                <div class="avatar-icon-wrapper btn-hover-shine mb-2 avatar-icon-xl " >





                                                    <div class=" rounded"><img src="PhotoProfil/<?php echo $key["photo"] ?>" style='width: 100px; height: 100px;' ></div>
                                                </div>
                                                    <div  style=" color: grey;">
                                                        <?php
                                                            echo "<h5 class='menu-header-title'>".$key["prenom"]." ".$key["nom"]."</h5>";
                                                          ?>
                                                        
                                                    </div>



                                                        <?php 

                                                    
                                                            }}
                                                                ?>

                                                <div class="menu-header-btn-pane pt-2">
                                                    <div role="group" class="btn-group text-center">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-0 card-body" >
                                        <div class="tab-content">
                                            <div class="tab-pane active show" id="tab-2-eg1" >
                                                <ul class="list-group list-group-flush">
                                                    <li id="toggle" class="list-group-item " style="display: none; color: grey;" >
                                                        <div class="widget-content p-0" >
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left mr-3">
                                                    

                    <?php




foreach ($user as $key ) {
    


if ($key['id']==$_SESSION['id']) {
    
 $_SESSION["date1"] =  $key['date1']  ;




                              ?>


                                                                  <?php 

                                                                echo "Email : ". $key["email"]; 
                                                                echo "<br><br>";
                                                                echo "Spécialité : ".$key["specialite"];
                                                                echo "<br><br>";
                                                                echo "Sexe : ".$key["sexe"];
                                                                echo "<br><br>";
                                                                echo "Role : ".$key["role"];
                                                                echo "<br><br>";
                                                                echo "Cin : ".$key["cin"];
                                                                echo "<br><br>";
                                                                echo "Date d'inscrit : ".$key["date1"];
                                                                echo "<br><br>";
                                                                echo "Telephone : ".$key["telephone"];
                                                                echo "<br><br>";
                                                            }}
                                                                ?>









                                                  
                                                                <div class="widget-content-right">
                                                                    <div class="icon-wrapper m-0">
                                                                        <div class="progress-circle-wrapper">
                                                                                <small></small>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-center d-block card-footer">
                                        <input type="submit" id="profil" class="btn-shadow-primary btn btn-outline-danger btn-lg" value="Plus de Details"> </button>
                                    </div>
                                    <br>
                                </div>
                            </div>
                         


 <div  class="col-md-8">
                                <div class="card-hover-shadow profile-responsive card-border border-danger mb-3 card">
                                    <div class="dropdown-menu-header">
                                        <div class="dropdown-menu-header-inner ">
                                            

                                      <form  action="fileUp.php" method="POST" enctype="multipart/form-data" >
                            <fieldset>
                            <h3 style="color: #1A3139; margin-left:35%;font-family: arial;font-style: bold; color: #D92550; ">Modifier le profil</h3>
                            <br><br>

                            <?php





foreach ($user as $key ) {
    


if ($key['id']==$_SESSION['id']) {
    





                              ?>
                          <div class="form-row" style="color: grey;" >
                            <div class="form-group col-md-6">
                              <label for="email">Email</label>
                              <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $key["email"] ?>" required>
                            </div>
                            <div class="form-group col-md-6">
                              <label for="password">Password</label>
                              <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="<?php echo $key["password"] ?>" required>
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                                <label style="color : black ;">Nom</label>
                            
                                <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom" value="<?php echo $key["nom"] ?>" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label style="color : black ;" >Prenom</label>
                                <input type="text" class="form-control" name="prenom" id="inputAddress" placeholder="Prenom"value="<?php echo $key["prenom"] ?>" required>
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                                <label style="color : black ;" >Role</label>
                                <input type="text" class="form-control" name="role" id="role1" placeholder="Role" required value="<?php echo $key["role"] ?>">
                            </div>
                             <div class="form-group col-md-6">
                                <label style="color : black ;" >Cin</label>
                                <input type="text" class="form-control" name="cin" id="cin" placeholder="Cin" value="<?php echo $key["cin"] ?>" required maxlength="8">
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                                <label style="color : black ;" >Telephone</label>
                                <input type="text" class="form-control" name="telephone" id="telephone" placeholder="Telephone" value="<?php echo $key["telephone"] ?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label style="color : black ;">Sexe</label><br>
                                <select name="sexe" class="form-control" required>
                                    <option value="femme">Femme</option>
                                    <option value="homme" selected="selected">Homme</option>
                                </select>
                            </div>
                          </div>
                          <div class="form-row"> 
                            <div class="form-group col-md-6">
                                <label style="color : black ;">Specialité</label>
                                <input type="text" class="form-control" name="specialite" id="specialite" placeholder="Telephone" value="<?php echo $key["specialite"] ?>">

                            </div>


                            <div  class="form-group col-md-6" >                                
                            
                            <br> 
                             <input  type="file" id="modifpdp" name="file" class="btn-shadow-primary  btn-lg btn btn-outline-danger" value="Modifier la photo de profil"> 

                            </div></div>
                          <br>


<?php 
}

                          }
      
 ?>



                



                          <button type="submit" class=" btn btn-outline-danger" style="margin-left: 300px;" name="submit">Modifier</button>
                        </form>














                                        </div></div>


                </div>













</div>






            
    </div>
    
    <div class="app-drawer-overlay d-none animated fadeIn"></div></div>

    <script type="text/javascript" src="../assets/scripts/main.087c8d15f89e6bbe3f9e.js"></script></body>

<!-- Mirrored from demo.dashboardpack.com/fiori-html-pro/widgets-profile-boxes.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Oct 2019 18:31:08 GMT -->
</html>
<script>
    $(document).ready(function(){
        $("#profil").click(function(){
           
                $("#toggle").show();
            });
    });
</script>

