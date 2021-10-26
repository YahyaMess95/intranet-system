	<?php 
session_start();
include '../start.php';
 ?>

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


  	
		<div>
			<center>
	
				<div class="app-container app-theme-white" >
		        	<div class="app-main__outer">
		            	<div class="app-main__inner">
         <div class="app-page-title">
                        <div class="container fiori-container">
                            <div class="page-title-wrapper ">
                                <div class="page-title-heading border-danger" >
                                    <div>
                                       Ajouter un utilisateur 
                                        <div class="page-title-subheading">Cliquez sur ajouter 
                                        </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">

		</div>
	</div>
</div>
</div>
<br> 
  <div  class="col-md-6">
                                <div class="card-hover-shadow profile-responsive card-border border-danger mb-3 card">
                                    <div class="dropdown-menu-header">
                                        <div class="dropdown-menu-header-inner ">

                                    </div>
                                    </div>    		
										<h3 style="color: #B81F44;">Ajouter un utilisateur</h3>

                    <form  action="AjoutUs.php" method="POST"  >
                          
                          <div class="form-row" style="color: grey;" >
                            <div class="form-group col-md-6">
                              <label for="email">Email</label>
                              <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                            </div>
                            <div class="form-group col-md-6" style="color: grey;">
                              <label for="password">Password</label>
                              <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                            </div>
                          </div>
                          <div class="form-row" style="color: grey;">
                            <div class="form-group col-md-6">
                                <label >Nom</label>
                            
                                <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom" required>
                            </div>
                            <div class="form-group col-md-6" style="color: grey;">
                                <label style="color : grey ;" >Prenom</label>
                                <input type="text" class="form-control" name="prenom" id="inputAddress" placeholder="Prenom" required>
                            </div>
                          </div>
                          <div class="form-row" style="color: grey;">
                            <div class="form-group col-md-6">
                                <label>Role</label>
                                <input type="text" class="form-control" name="role" id="role1" placeholder="Role" required>
                            </div>
                             <div class="form-group col-md-6" style="color: grey;">
                                <label style="color : grey ;" >Cin</label>
                                <input type="text" class="form-control" name="cin" id="cin" placeholder="Cin" required maxlength="8">
                            </div>
                          </div>
                          <div class="form-row" style="color: grey;">
                            <div class="form-group col-md-6">
                                <label >Telephone</label>
                                <input type="text" class="form-control" name="telephone" id="telephone" placeholder="Telephone" >
                            </div>
                            <div class="form-group col-md-6" style="color: grey;">
                                <label>Sexe</label><br>
                                <select name="sexe" class="form-control" required>
                                    <option value="femme">Femme</option>
                                    <option value="homme" selected="selected">Homme</option>
                                </select>
                            </div>
                          </div>
                          <div class="form-row" style="color: grey;"> 
                            <div class="form-group col-md-6" style="margin-left: 220px;">
                                <label style="color : grey ;">Specialité</label>
                                <input type="text" class="form-control" name="specialite" id="specialite" placeholder="specialite" >
                            </div>


                            <div  class="form-group col-md-6" >                                
                            
                            <br> 
                          
                            </div></div>
                          <br>

                          <button type="submit" class=" btn btn-outline-danger" name="submit">Ajouter un utilisateur</button>
                        </form>

									</div>





</body>
</html>
