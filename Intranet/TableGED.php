<!doctype html>
<html lang="en">


<!-- Mirrored from demo.dashboardpack.com/fiori-html-pro/tables-data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Oct 2019 18:31:08 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="fr">


<link href="main.087c8d15f89e6bbe3f9e.css" rel="stylesheet"></head>


<center><div style="background-color: #e3e7fa" ><label>Contenu</label></div></center> 
<body >

<?php echo $_GET['path']; ?>

    <br>
                
                        
                            <table  id="example"  class="table table-hover table-striped table-hover" style="width: 100%;"  >
                                <thead style="background-color:#8F4DB2; color: white;">

                                <tr>
                                    <th style="width: 5%"></th >
                                    <th style="width: 85%">Nom</th>
                                    <th style="width: 10%">Nom</th>
                                    
                               
                                   
                                </tr>
                                </thead>
                                <tbody>


<?php 
if (!empty($_GET['path'])) {
    $list = scandir ( $_GET['path']) ; 

}else{
$list = scandir ("C:\Users\hp\Desktop\Nouveau dossier") ; 
}
foreach ($list as $l ) {

    


 ?>    


<?php if ($l!=".." and $l!="." and  strpos ($l , ".pdf")!=0) {
  ?>
                          
                                <tr>
                                     <td><img src="imagef/pdf.png" width="20"></td>
                                    <td><?php echo $l ;  ?></td>
                                    <td><a href="<?php echo $_GET['path'].'/'.$l ;  ?>">Télécharger</a></td>
                                </tr>
                     






<?php }  ?>
                   
      




<?php if ($l!=".." and $l!="." and  strpos ($l , ".pdf")==0 ) {
  ?>
                          
                                <tr>
                                     <td><img src="imagef/folder.jpg" width="20"></td>
                                    <td><a href="TableGED.php?path=<?php echo $_GET['path'].'/'.$l ;  ?>"><?php echo $l ;  ?></a></td>
                                 <td></td>
                                </tr>
                     






<?php }  ?>
             








<?php if ($l!=".." and $l!="." and ( strpos ($l , ".xls")!=0 or strpos ($l , ".csv")!=0 or strpos ($l , ".xlsx")!=0  ) ){
  ?>
                          
                                <tr>
                                     <td><img src="imagef/excel.jpg" width="20"></td>
                                    <td><?php echo $l ;  ?></td>
                                    <td><a href="<?php echo $_GET['path'].'/'.$l ;  ?>">Télécharger</a></td>
                                </tr>
                     






<?php }  ?>







<?php if ($l!=".." and $l!="." and ( strpos ($l , ".doc")!=0 or strpos ($l , ".docx")!=0  ))
{
  ?>
                          
                                <tr>
                                     <td><img src="imagef/word.png" width="20"></td>
                                    <td><?php echo $l ;  ?></td>
                                    <td><a href="<?php echo $_GET['path'].'/'.$l ;  ?>">Télécharger</a></td>
                                </tr>
                     






<?php }  ?>







      
<?php }  ?>
              













                        </tbody>
      

                            </table>



















           <script type="text/javascript" src="assets/scripts/main.087c8d15f89e6bbe3f9e.js"></script></body>

<!-- Mirrored from demo.dashboardpack.com/fiori-html-pro/tables-data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Oct 2019 18:31:08 GMT -->
</html>
