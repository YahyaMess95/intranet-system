<!doctype html>
<html>
<head>
<meta charset="utf-8">

<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>

<body style="zoom : 70%;">

<br> 
<input id="myInput" type="text" placeholder="Recherche par Discipline/Type" class="form-control"   style="margin-left: 0.2%; width: 15%; zoom:80%; margin-bottom: 0.5%;">
<table id="example" class="table table-striped" >
  


     <thead style="font-size: 10px;background-color: #b81f44;color:white;">
                                                                    <tr>
                                                    
                                                              <th style="width: 10%" >Code document</th>
                                                              <th style="width: 10%">Désignation</th>
                                                              <th style="width: 15%">Avancement</th>
                                                              <th style="width: 10%">Révision Externe</th>
                                                              <th style="width: 10%">Date Modification</th>
                                                              <th style="width: 10%">Modifié Par</th>
                                                              <th style="width: 10%">Version Interne</th>
                                                              <th style="width: 10%">Etape</th>
                                                              <th style="width: 10%">Download</th>
                                                              <th style="width: 10%">Modifier</th>
                                                        
                                                                    </tr>
                                                                </thead>
                                                          
                                                                  <tbody style="font-size: 10px;" id="myTable">


                                                              
  <?php 
session_start(); 
include "../crud.php";
$crud=new crud();
$conn=$crud->cnx;

 ?>
<?php 

$list = $crud ->afficheFile($conn) ; 


foreach ($list as $key) {
  if (($key['discipline'] ==  $_GET['discipline'])  and ($key['type'] ==  $_GET['Type'])  and ($key['Projet'] ==  $_SESSION['PR']) ) {
  

 ?>


                                                                    <tr    style="word-break: break-all;">
                                                                      
                                                                         <td><b><?php echo $key['Code'] ?></b></td>
                                                                         <td><b><?php echo $key['Designation'] ?></b></td>
                                                                         <td>


                                                                          <div class="progress-bar progress-bar-animated bg-danger progress-bar-striped" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $key['Avancement'] ?>%;"><?php echo $key['Avancement'] ?>%</div> 





                                                                        </td>
                                                                         <td><b><?php echo $key['Rev_Externe'] ?></b></td>
                                                                         <td><b><?php echo $key['Date_Modification'] ?></b></td>
                                                                         <td><b><?php echo $key['Modifie_Par'] ?></b></td>
                                                                         <td><b><?php echo $key['Version_Interne'] ?></b></td>
                                                                         <td><b><?php echo $key['Etape'] ?></b></td>
                                                                         <td><a href="modifFichier/UploadFileGEP/<?php echo $key['Codage'];  ?>" target='_blank'> <b><?php echo $key['Download'] ?></b></a>  </td>
                                                                         <td><b><a href="modifFichier/index.php?des=<?php echo $key['Designation']  ?>&Avancement=<?php echo $key['Avancement'] ?>&revE=<?php echo $key['Rev_Externe']  ?>&VersionI=<?php echo $key['Version_Interne']  ?>&etape=<?php echo $key['Etape']  ?>&id=<?php echo $key['id']  ?>" target="_parent">Modifier</a></b></td>

                                                                   
                                                        



                                                                    </tr>
<?php } }
 ?>


                                          
                                                                  </tbody>
    </table>
<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="jquery.simplePagination.js"></script>
<script>
    $(function() {
      $("#example").simplePagination({
        previousButtonClass: "btn btn-danger",
        nextButtonClass: "btn btn-danger"
      });


    });
  </script>

    <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>



<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });



if ( $("#myInput").val()=='' ) {window.location.href = 'tableF.php?discipline=<?php echo $_GET["discipline"]?>&Type=<?php echo  $_GET["Type"] ?>';}



  });
});
</script>
</body>
</html>
