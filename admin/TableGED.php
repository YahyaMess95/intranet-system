<!doctype html>
<html lang="en">


<!-- Mirrored from demo.dashboardpack.com/fiori-html-pro/tables-data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Oct 2019 18:31:08 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="fr">

<link rel="stylesheet" href="/css/bootstrap.min.css"  media="screen" />
<link href="../main.087c8d15f89e6bbe3f9e.css" rel="stylesheet"></head>


<center><b><div style="background-color: #b81f44 ; color:white;" ><label>Contenu</label></div></b></center> 
<body >

<div style="zoom:59%;" >


<div >
<center><p style="background-color: #F0F0F0 ; color: black; height: 30px;">Nom du dossier : <?php 

$lien =  substr(str_replace("/","\\" ,$_GET['path']), 33) ;

  echo $lien ?> </p></center>

 </div>              

<form method='post' action='' enctype='multipart/form-data'>
  <center>
    

 <input type="file" name="file[]" id="file" class="btn-wide mb-2 mr-2   btn-transition btn btn-light" multiple>



 <input id="upload" type='submit' name='submit' value='Upload' class="mb-2 mr-2 btn-wide btn-transition btn btn-shadow btn-light">
   </center>
</form>

              
                           
                            <table  id="examplee"  class="table table-hover table-striped table-hover" style="width: 100%;">
                                
                                <thead style="background-color:#b81f44; height: 30px; color: white;">
                                <tr>
                                    <th style="width: 5%">Icon</th >
                                    <th>Nom</th>
                                    <th style="width: 10%"></th>
                                    <th></th>                                      
                                        
                                    
                               
                                   
                                </tr>
                                </thead>
                                <tbody>


<?php 


if (!empty($_GET['path'])) {
    $list = scandir ( $_GET['path']) ; 

}else{

   header("Location:../loading.php"); 

}






// upload 

 


















foreach ($list as $l ) {


 ?>    


<?php if ($l!=".." and $l!="." and  strpos ($l , ".pdf")!=0) {
  ?>
                          
                                <tr>
                                     <td><img src="../imagef/pdf.png" width="20"></td>
                                    <td><?php echo $l ;  ?></td>
                                  <td><a href="<?php echo "../TestGED/".$lien.'/'.$l ;  ?>"class="mb-2 mr-2 btn-wide btn-transition btn btn-shadow btn-light" target="_blank">Télécharger</a></td>
                                    <td></td>
                                </tr>
                     






<?php }  ?>
                   
      




<?php if ($l!=".." and $l!="." and  strpos ($l , ".pdf")==0 and  strpos ($l , ".xls")==0  and  strpos ($l , ".csv")==0 and  strpos ($l , ".xlsx")==0 and  strpos ($l , ".doc")==0 and  strpos ($l , ".docx")==0) {
  ?>
                          
                                <tr>
                                     <td><img src="../imagef/folder.jpg" width="20"></td>
                                    <td><a href="TableGED.php?path=<?php echo $_GET['path'].'/'.$l ;  ?>"><?php echo $l ;  ?></a></td>
                                     <td><a style="background-color: #ED1D40;" href="removeDossier.php?remove=<?php echo $_GET['path'].'/'.$l ;  ?>" class="confirmModalLink btn-wide btn-shadow btn btn-danger " > Supprimer</a></td>
                                 <td> </td>
                                </tr>
                     






<?php }








if(isset($_POST['submit'])){
 
 // Count total files
 $countfiles = count($_FILES['file']['name']);

 // Looping all files
 for($i=0;$i<$countfiles;$i++){
  $filename = $_FILES['file']['name'][$i];
 
  // Upload file
  move_uploaded_file($_FILES['file']['tmp_name'][$i],$_GET['path'].'/'.$filename);
 
 header("Location:TableGED.php?path=".$_GET['path'].""); 





}

}
  ?>


<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script>

 var checkBox = document.getElementById("check").checked;
  // Get the output text
  

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
  alert();
  }
</script>



<?php if ($l!=".." and $l!="." and ( strpos ($l , ".xls")!=0 or strpos ($l , ".csv")!=0 or strpos ($l , ".xlsx")!=0  ) ){
  ?>
                          
                                <tr>
                                     <td><img src="../imagef/excel.jpg" width="20"></td>
                                    <td><?php echo $l ;  ?></td>
  <td><a href="<?php echo "../TestGED/".$lien.'/'.$l ;  ?>" class="mb-2 mr-2 btn-wide btn-transition btn btn-shadow btn-light" target="_blank">Télécharger</a></td>                                    <td></td>

                                </tr>
                     






<?php }  ?>







<?php if ($l!=".." and $l!="." and ( strpos ($l , ".doc")!=0 or strpos ($l , ".docx")!=0  ))
{
  ?>
                          
                                <tr>
                                     <td><img src="../imagef/word.png" width="20"></td>
                                    <td><?php echo $l ;  ?></td>
                                                                    <td><a href="<?php echo $_GET['path'].$l ;  ?>" class="mb-2 mr-2 btn-wide btn-transition btn btn-shadow btn-light" target="_blank">Télécharger
                                    <td></td>
                                </tr>
                     






<?php }  ?>







      
<?php }  ?>
              













                        </tbody>
      

                            </table>





<script>
  

$(document).ready(function () {
    var theHREF;

    $(".confirmModalLink").click(function(e) {
        e.preventDefault();
        theHREF = $(this).attr("href");
        $("#confirmModal").modal("show");
    });

    $("#confirmModalNo").click(function(e) {
        $("#confirmModal").modal("hide");
    });

    $("#confirmModalYes").click(function(e) {
        window.location.href = theHREF;
    });
});











</script>

































<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


           <script type="text/javascript" src="../assets/scripts/main.087c8d15f89e6bbe3f9e.js"></script>





</div>




         </body>




<div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="zoom:80%;">
        
  

      



    
        <div class="modal-content" >
            <div class="modal-header">
              
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="mb-0">
      voulez vous supprimer ce dossier ?                     

                </p>


            </div>
            <div class="modal-footer">
               <a href="#" class="btn" id="confirmModalNo">Non</a>
  <a href="#" class="btn btn-danger" id="confirmModalYes">Oui</a>
            </div>
        </div>

    </div>
</div>


</html>
