<!DOCTYPE html>

<?php

session_start();

include "../crud.php";
$crud= new crud();
$conn=$crud->cnx;

include '../start.php';
  


?>
<html>
<head>




    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <link href="../main.087c8d15f89e6bbe3f9e.css" rel="stylesheet">
</head>
<body>

<br>
<div style="margin-left: 68%; " >

     <select data-live-search="true"  class="selectpicker" data-style="btn-danger" id="project" onchange="return loadIframe('gep', 'GEP.php')">
          <option disabled selected>Aucun choix</option>
                    <?php

            foreach ($crud->afficheProjet($conn) as $key ) {
              echo "<option style='color:#E20E54;'>".$key['designation']."</option>";
            }



              ?>
            </select>
                	

</div>

<br>


<center>
	

<iframe src="GEP.php" height="800" width="100%" id="gep"></iframe>


</center>


<?php  


include '../end.php';


  ?>


<script type="text/javascript">

function loadIframe(iframeName, url) {


 
    var $iframe = $('#' + iframeName);
    if ( $iframe.length ) {
        $iframe.attr('src',url+"?PR="+document.getElementById("project").value);   
        return false;

    }
    return true;

}



</script>





<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

 <script type="text/javascript" src="../assets/scripts/main.087c8d15f89e6bbe3f9e.js"></script>

</body>
</html>



