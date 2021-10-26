

<?php 










session_start();
include "../crud.php";
$crud=new crud();
$conn=$crud->cnx;





echo '


  <div class="card">
                                                                    <div id="headingTwo" class="b-radius-0 card-header">
                                                                        <button type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="text-left m-0 p-0 btn btn-link btn-block">
                                                                            <span style="color : #E20E54;">Choisissez les disciplines</span>
                                                                        </button>
                                                                    </div>
                                                                    <div data-parent="#accordion" id="collapseTwo" class="collapse show">
                                                                        <div class="card-body">
                                                                         
                                                                                 <div class="position-relative form-group"><label for="exampleEmail4">Disciplines</label>

      


      

                                                                                <select class="form-control" id="discipline1"  onchange="afficheType()">

                                                                                	<option>aucun choix</option>

                                                                                ';
                                                                                    
                                                                                      foreach ($crud->afficheDisciplineParProjet($conn) as $key ) {

                                                                                      	if ($_GET['projet1']==$key['Projet']) {
                                                                                      		
                                                                                      
              echo "<option style='font-size:18px; color:#E20E54;' value=".$key['Nom']."   '>".$key['Nom']."</option>";
            }	}



              

echo '

          

                                                                            </select> 




                                                                          </div>
                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>

 

';



?>