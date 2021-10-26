<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<title></title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
    />
    <meta name="description" content="Basic example of a Bootstrap 4 table with sort, search and filter functionality.">
    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

	<!-- Font Awesome -->
	<!-- Bootstrap core CSS -->
	
	<!-- Material Design Bootstrap -->
	

<script src="jquery3.3.1.js"></script>
<script src="table.js"></script>
<script src="treeviewjquery.js"></script>

<script src="jquery.simplePagination.js"></script>


<?php 


session_start();


if (!empty($_GET["PR"]) and !empty($_SESSION["PR"]) ) {
  $_SESSION["PR"] =$_GET['PR']  ; 
}
if (empty($_GET["PR"]) and !empty($_SESSION["PR"]) ) {

     $_GET['PR'] = $_SESSION["PR"]  ; 
}
if (!empty($_GET["PR"]) and empty($_SESSION["PR"]) ) {
    
  $_SESSION["PR"] =$_GET['PR']  ;
    }
if (empty($_GET["PR"]) and empty($_SESSION["PR"]) )  {

header("Location:../loading.php"); 


}

 ?>




     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

<style type="text/css">
$thick : 3px;
$pad : 0.7em;
$extra : calc(#{$pad} * 1.2);
$color : #f26522;



  a {
    color: white;
    padding: $pad $extra;
    display: inline-block;
    border: $thick solid transparent;
    position: relative;
    font-size: 1.5em;
    cursor: pointer;
    letter-spacing: 0.07em;

    .text {
      // padding: 0 0.3em;
      font-family: proxima-nova, monospace;
      transform: translate3d(0,$pad,0);
      display: block;
      transition: transform 0.4s cubic-bezier(.2,0,0,1) 0.4s;
    }

    &:after {
      position: absolute;
      content: '';
      bottom: -$thick;
      left: $extra;
      right: $extra;
      height: $thick;
      background: $color;
      // z-index: -1;
      transition: 
        transform 0.8s cubic-bezier(1,0,.37,1) 0.2s,
        right 0.2s cubic-bezier(.04,.48,0,1) 0.6s,
        left 0.4s cubic-bezier(.04,.48,0,1) 0.6s;
      transform-origin: left;
    }

  }

  .line {
    position: absolute;
    background: $color;

    &.-right,
    &.-left {
      width: $thick;
      bottom: -$thick;
      top: -$thick;
      transform: scale3d(1,0,1);
    }  

    &.-top,
    &.-bottom {
      height: $thick;
      left: -$thick;
      right: -$thick;
      transform: scale3d(0,1,1);
    }

    &.-right {
      right: -$thick;
      transition: transform 0.1s cubic-bezier(1,0,.65,1.01) 0.23s;
      transform-origin: top;
    }

    &.-top {
      top: -$thick;
      transition: transform 0.08s linear 0.43s;
      transform-origin: left;
    }

    &.-left {
      left: -$thick;
      transition: transform 0.08s linear 0.51s;
      transform-origin: bottom;
    }

    &.-bottom {
      bottom: -$thick;
      transition: transform 0.3s cubic-bezier(1,0,.65,1.01);
      transform-origin: right;
    }  
  }

  a:hover,
  a:active {

    .text {
      transform: translate3d(0,0,0);
      transition: transform 0.6s cubic-bezier(.2,0,0,1) 0.4s;
    }

    &:after {
      transform: scale3d(0,1,1);
      right: -$thick;
      left: -$thick;
      transform-origin: right;
      transition: 
        transform 0.2s cubic-bezier(1,0,.65,1.01) 0.17s,
        right 0.2s cubic-bezier(1,0,.65,1.01),
        left 0s 0.3s;
    }

    .line {
      transform: scale3d(1,1,1);

      &.-right {
        transition: transform 0.1s cubic-bezier(1,0,.65,1.01) 0.2s;
        transform-origin: bottom;
      }

      &.-top {
        transition: transform 0.08s linear 0.4s;
        transform-origin: right;
      }

      &.-left {
        transition: transform 0.08s linear 0.48s;
        transform-origin: top;
      }

      &.-bottom {
        transition: transform 0.5s cubic-bezier(0,.53,.29,1) 0.56s;
        transform-origin: left;
      }
    }

  }
}
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #3e8e41;
}

#myInput {
  box-sizing: border-box;
  background-image: url('searchicon.png');
  background-position: 14px 12px;
  background-repeat: no-repeat;
  font-size: 16px;
  padding: 14px 20px 12px 45px;
  border: none;
  border-bottom: 1px solid #ddd;
}

#myInput:focus {outline: 3px solid #ddd;}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f6f6f6;
  min-width: 230px;
  overflow: auto;
  border: 1px solid #ddd;
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}


    .treeview-animated {
      font-size: 16px;
      font-weight: 400;

      background: white;
    }

    .treeview-animated hr {
      border-color: #FF195F;
    }

    .treeview-animated.w-20 {
      width: 20rem;
    }

    .treeview-animated h6 {
      font-size: 1.4em;
      font-weight: 500;
      color: #FF195F;

    }

    .treeview-animated ul {
      position: relative;
      list-style: none;
      padding-left: 0;
    }

    .treeview-animated-list ul {
      padding-left: 1em;
      margin-top: 0.1em;
      background: white;
      border-left: 3px solid #DF2D2D;
    }

    .treeview-animated-element {
      padding: 0.2em 0.2em 0.2em 1em;
      cursor: pointer;
      transition: all .1s linear;
      border: 2px solid transparent;
      border-right: 0px solid transparent;


    }

    .treeview-animated-element:hover {
      background-color: lightgray;
    }

    .treeview-animated-element.opened {
      color: #ffac47;
      border: 2px solid #ffac47;
      border-right: 0px solid transparent;
      background-color: #D65050;
    }

    .treeview-animated-element.opened:hover {
      color: #ffac47;
      background-color: #FF195F;
    }

    .treeview-animated-items-header {
      display: block;
      padding: 0.4em;
      margin-right: 0;
      border-bottom: 2px solid transparent;
    }


    .treeview-animated-items-header:hover {
      background-color: lightgrey;
    }

    .treeview-animated-items-header.open {
      transition: all .1s linear;
      background-color: #F37B71;

      border-bottom: 2px solid #DF2D2D;
    }

    .treeview-animated-items-header.open span {
      color: white;
    }

    /*w hia ma7loula ki t3adi 3liha el souris twali bel couleur hedha*/
    .treeview-animated-items-header.open:hover {

      color: #DF2D2D;
      background-color: lightgrey;
    }

    .treeview-animated-items-header.open div:hover {
      background-color: #FAB7B7;
    }

    .treeview-animated-items-header .fa-angle-right {
      transition: all .1s linear;
      font-size: .8rem;
    }
    /*couleur de plus */
    .treeview-animated-items-header .fas {
      position: relative;
      transition: all .2s linear;
      transform: rotate(90deg);
      color: darkgrey;
    }
   	/*couleur de moins */
    .treeview-animated-items-header .fa-minus-circle {
      position: relative;
      color: grey;
      transform: rotate(180deg);
    }
    .hello{
    	font-size: 13px;
    }
  </style>


<!-- Remember to include jQuery :) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<link href="../main.087c8d15f89e6bbe3f9e.css" rel="stylesheet">
<!-- jQuery Modal -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.min.css">
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.jquery.min.js"></script>













</head>
<body  style="zoom : 70%; background-color: #FCFCFC;">


<?php



include "../crud.php";
$crud= new crud();
$conn=$crud->cnx;








  ?>





                                            <div class="card-body modal" id="ex1" style="zoom:100%; background-color: #F5F3F3">
                                                <div id="smartwizard2" class="forms-wizard-alt">
                                                    <ul class="forms-wizard">
                                                       
                                                        <li>
                                                            <a href="#step-12">
                                                                <em>2</em><span>Discipline</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#step-22">
                                                                <em>3</em><span>valider</span>
                                                            </a>
                                                        
                                                    </ul>
                                                    <div class="form-wizard-content">


                                   


                                                        <div id="step-12">
                                                            <div id="accordion" class="accordion-wrapper mb-3">
                                                                <div class="card">
                                                                    <div id="headingTwo" class="b-radius-0 card-header">
                                                                        <button type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="text-left m-0 p-0 btn btn-link btn-block">
                                                                            <span style="color : #E20E54;">Choisissez les disciplines</span>
                                                                        </button>
                                                                    </div>
                                                                    <div data-parent="#accordion" id="collapseTwo" class="collapse show">
                                                                        <div class="card-body">
                                                                         
                                                                                 <div class="position-relative form-group"><label for="exampleEmail4">Disciplines</label>

                                                                                  
                                                                        <select data-live-search="true" class="form-control selectpicker" id="discipline" multiple>
                                                                              <?php

            foreach ($crud->afficheDiscipline($conn) as $key ) {

              ?>
          

              <option style='font-size:15px; color:#E20E54;' value="<?php echo $key['discipline'] ?>"> <?php echo $key['discipline'] ?> </option>;
          

<?php             }



              ?>
          

                                                                            </select> 




                                                                          </div>
                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        


  <div id="step-22">


                                                            <div class="no-results" style="background-color: #FFFFFF;">
                                                                <div class="swal2-icon swal2-success swal2-animate-success-icon">
                                                                    <div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>
                                                                    <span class="swal2-success-line-tip"></span>
                                                                    <span class="swal2-success-line-long"></span>
                                                                    <div class="swal2-success-ring"></div>
                                                                    <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
                                                                    <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div>
                                                                </div>
                                                                <div class="results-subtitle mt-4">Trés bien !</div>
                                                                <div class="results-title">Rèviser vos choix s'il vous plait avant de confirmer !</div>
                                                                <div class="mt-3 mb-3"></div>
                                                                <div class="text-center">
                                                                    <button  onclick="verif_pass()" class="btn-shadow btn-wide btn btn-success btn-lg">Confimer</button>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="divider"></div>
                                                <div class="clearfix">
                                                    <button type="button" id="next-btn2" class="btn-shadow btn-wide float-right btn-pill btn-hover-shine btn ladda-button mb-2 mr-2 btn btn-danger">


    <span class="ladda-label">Slide Up
    </span>
                                                                    <span class="ladda-spinner">
    </span>
                                                                </button>

                                                                

                                                    <button type="button" id="prev-btn2" class="btn-shadow float-right btn-wide btn-pill mr-3 btn btn-outline-secondary">Previous</button>
                                                </div>
 <div id="txtHint"></div>
                                            </div>




  


<!-- Link to open the modal -->








                                            <div class="card-body modal" id="ex2" style="zoom:100%; background-color: #F5F3F3">
                                          




<input type="text" id="projet1" value="<?php echo $_SESSION['PR'] ?>" style='display: none ;'>
<br>



 <div id="txtHint1"></div>
<br>

     <div id="accordion2" class="accordion-wrapper mb-3" style="display: none ; ">
                                                                <div class="card">
                                                                    <div id="headingTwo" class="b-radius-0 card-header">
                                                                        <button type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="text-left m-0 p-0 btn btn-link btn-block">
                                                                            <span style="color : #E20E54;">Choisissez le type </span>
                                                                        </button>
                                                                    </div>
                                                                    <div data-parent="#accordion" id="collapseTwo" class="collapse show">
                                                                        <div class="card-body">
                                                                           
                                                                            <div class="position-relative form-group"><label for="exampleEmail4">Type</label>
                                                                             
                                                                            
                                                                                <select data-live-search="true" class="form-control selectpicker" id="type1" multiple="multiple" data-style="btn-danger" data-size="5"  onchange="DisableBTN()" >
                                                                                 
            <?php

            foreach ($crud->afficheType($conn) as $key ) {
              echo "<option style='color:#E20E54;'>".$key['type']."</option>";
            }



              ?>
            </select>
                                                                         




                                                                          </div>
                                                                         
                                                                          
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                                                              <button type="button" id="next-btn22" class="btn-shadow btn-wide float-right btn-pill btn-hover-shine btn ladda-button mb-2 mr-2 btn btn-danger"  onclick="AffecterType()">


    <span class="ladda-label">Slide Up
    </span>
                                                                    <span class="ladda-spinner">
    </span>
                                                                </button>


<div id="txtHint3"></div>

                                             
                                            </div>    

                                            <div class="card-body modal" id="ex3" style="zoom:100%; background-color: #F5F3F3">
                                          



<div class="card">
                                                                    <div id="headingTwo" class="b-radius-0 card-header">
                                                                        <button type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="text-left m-0 p-0 btn btn-link btn-block">
                                                                            <span style="color : #E20E54;"> Choisir un Discipline </span>
                                                                        </button>
                                                                    </div>
                                                                    <div data-parent="#accordion" id="collapseTwo" class="collapse show">
                                                                        <div class="card-body">

                <select data-live-search="true" class="form-control selectpicker" data-size="5" id="discipline2"  data-style="btn-danger"  onchange ="selectType1()" >
                                                                                  <option selected disabled selected>aucun choix</option>
            <?php

            foreach ($crud->afficheDisciplineParProjet($conn) as $key ) {

              if ($_SESSION['PR'] == $key['Projet']) {
              echo "<option style='color:#E20E54;'>".$key['Nom']."</option>";
              }
              
            }



              ?>
            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
<br>
                                   
<div id="txtHint4"></div>


<br>

<div class="card" style="display: none ;" id="blockFile">
                                                                    <div id="headingTwo" class="b-radius-0 card-header">
                                                                        <button type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="text-left m-0 p-0 btn btn-link btn-block">
                                                                            <span style="color : #E20E54;">Creer un fichier </span>
                                                                        </button>
                                                                    </div>
                                                                    <div data-parent="#accordion" id="collapseTwo" class="collapse show" >
                                                                        <div class="card-body">

                                                                             <div class="position-relative form-group"><label for="exampleEmail4">Code document</label>
                                                       
                                                       <input type="text" id="Ref" class="form-control btn-danger">

                                                                          </div>
                                                                           
                                                                            <div class="position-relative form-group"><label for="exampleEmail4">Désignation</label>
                                                       
                                                       <input type="text" id="Des" class="form-control btn-danger">

                                                                          </div>
                                                                         

                                                                            <div class="position-relative form-group"><label for="exampleEmail4">Version interne</label>
                                                       
                                                       <input type="text" id="Version_Int" class="form-control btn-danger">

                                                                          </div>
                                                                          


                                                                                <div class="position-relative form-group"><label for="exampleEmail4">Etape</label>
                                                       
                                                       <input type="text" id="Etape" class="form-control btn-danger">

                                                                          </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

<br>
<button type="button" id="next-btn22" class="btn-shadow btn-wide float-right btn-pill btn-hover-shine btn ladda-button mb-2 mr-2 btn btn-danger"  onclick="AffecterFile ()">


    <span class="ladda-label">Creer
    </span>
                                                                    <span class="ladda-spinner">
    </span>
                                                                </button>
                                             



                                             <div id="txtHint5"></div>

                                            </div>




  


<!-- Link to open the modal -->






































  

  


<!-- Link to open the modal -->
<div>

<br>

<a class="btn-link" href="#ex1" rel="modal:open">
<button style="width:3.5%; margin-left: 0.3%;"  class="mb-2 mr-2 border-0 btn-transition btn btn-outline-light"  >
<img src="../icons/discipline.png" width="60%;">
<br>
Discipline
</button>

</a>


<a class="btn-link" href="#ex2" rel="modal:open" onclick="selectProjet()">
<button style="width:3.5%; margin-left: 0.2%; " class="mb-2 mr-2 border-0 btn-transition btn btn-outline-light"   >
<img src="../icons/type.png" width="60%;">

<br>
Type
</button>

</a>









<script>


  //*******************************************************************************//

function sleep(milliseconds) { 
    let timeStart = new Date().getTime(); 
    while (true) { 
      let elapsedTime = new Date().getTime() - timeStart; 
      if (elapsedTime > milliseconds) { 
        break; 
      } 
    } 
  }
//********************************************************************************//

function verif_pass() {

  var select1 = document.getElementById("discipline");
    var selected1 = [];
    for (var i = 0; i < select1.length; i++) {
        if (select1.options[i].selected) selected1.push(select1.options[i].value);
    }



        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
    
            if (this.readyState == 4 && this.status == 200) 
        
            {

if (this.responseText == "<div class='alert alert-success fade show' role='alert'>Disciplines ajoutés avec succés</div>")
 {
    window.open("GepIntegration.php", '_top');

          }}
                             document.getElementById("txtHint").innerHTML = this.responseText;
    };
      
        xmlhttp.open("GET", "AjoutEtude.php?discipline="+selected1, true);
        xmlhttp.send(); 
   


    
    }





//****************************************************************************************************************//


function selectType1() 
{
  var projet = document.getElementById("discipline2").value;
  
    
    var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

                
                             document.getElementById("txtHint4").innerHTML = this.responseText;
                
            }



                
            } ;


           
        xmlhttp.open("GET", "AffichageAjaxType.php?discipline2="+projet, true);
        xmlhttp.send();


         }
//***************************************************************************************************************//

function selectProjet() {
  var projet = document.getElementById("projet1").value;
  
    
    var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

                
                             document.getElementById("txtHint1").innerHTML = this.responseText;
                
            }



                
            } ;


           
        xmlhttp.open("GET", "AjaxDisclineAffichage.php?projet1="+projet, true);
        xmlhttp.send(); }
//**********************************************************************************************************************//

function afficheType () {
document.getElementById("accordion2").style.display = 'block';

}



//*****************************************************************************************************************************//

function afficheFileBlock () {
document.getElementById("blockFile").style.display = 'block';

}



//**************************************************************************************************************************//
function  DisableBTN() {
 document.getElementById('next-btn22').disabled = false; 
}

//*********************************************************************//
function AffecterType () {



var projet1 = document.getElementById("projet1").value;
var discipline1 = document.getElementById("discipline1").value;
var select1 = document.getElementById("type1")    ;
    var selected1 = [];
    for (var i = 0; i < select1.length; i++) {
        if (select1.options[i].selected) selected1.push(select1.options[i].value);
    }




        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
    
            if (this.readyState == 4 && this.status == 200) 
        
            {

if (this.responseText == "<br><br><br><div class='alert alert-success fade show' role='alert'>Types ajoutés avec succés</div>")
 {
    window.open("GepIntegration.php", '_top');

          }}
                             document.getElementById("txtHint3").innerHTML = this.responseText;
    };
      
        xmlhttp.open("GET", "AjaxTypeAffichage.php?type1="+selected1+"&projet1="+projet1+"&discipline1="+discipline1, true);
        xmlhttp.send(); 



}
//********************************************************************************************************************************//



function AffecterFile () {



var code = document.getElementById("Ref").value;
var designation = document.getElementById("Des").value;
var versionInterne = document.getElementById("Version_Int").value;
var etape = document.getElementById("Etape").value;
var discipline = document.getElementById("discipline2").value;
var type = document.getElementById("type2").value;



        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
    
            if (this.readyState == 4 && this.status == 200) 
        
            {

if (this.responseText == "<div class='alert alert-success fade show' role='alert'>Fichier ajouté avec succés</div>")
 {
    window.open("GepIntegration.php", '_top');

          }}
                             document.getElementById("txtHint5").innerHTML = this.responseText;
    };
      
        xmlhttp.open("GET", "AjoutFile.php?Ref="+code+"&Des="+designation+"&Version_Int="+versionInterne+"&Etape="+etape+"&discipline2="+discipline+"&type2="+type, true);
        xmlhttp.send(); 



}






</script>










<a class="btn-link" href="#ex3" rel="modal:open">
<button style="width:3.5%; margin-left: 0.2%; " class="mb-2 mr-2 border-0 btn-transition btn btn-outline-light">
<img src="../icons/file.png" width="60%;">

<br>
Fichier
</button>

</a>




&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class="mb-2 mr-2 btn btn-danger" style="font-size: 150%; font-family: Arial; "> <?php echo $_SESSION['PR']; ?> </div>

                                                                             
         
  
<script>
$(document).ready(function(){
  $("#myInput1").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myList li").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });













});
</script>




</div>
<input id="myInput1" type="text" placeholder="Recherche par Discipline/Type" class="form-control"   style="margin-left: 0.2%; width: 15%; zoom:80%;">

<div>
	<td>
  		<div class="treeview-animated w-90 border border-secondary mx-1 my-1" style=" width: 100%;">
	   
					






          	    <ul class="treeview-animated-list mb-3" >
						    	<li class="treeview-animated-items">
							        <a class="treeview-animated-items-header">
							        	<i class="fas fa-plus-circle"></i>
							        	<span class="hello"></i>Projet : <?php echo $_SESSION['PR'] ?> 
</span>
							        </a>

							        <ul class="nested" id="myList">




    

               
                
               





<?php


$ListaDisc = $crud->afficheDisciplineParProjet($conn) ; 


$ListaType = $crud->afficheTypeParDiscipline($conn) ; 



foreach ($ListaDisc as $key1 ) {
    


    if ($key1['Projet']==$_SESSION['PR']) {
?>

							          	<li class="treeview-animated-items">
							            	<a class="treeview-animated-items-header">
							              		<i class="fas fa-plus-circle"></i>
							              		<span class="hello">
							              			</i>Discipline:<?php echo  $key1['Nom'] ?></span>
							              	</a>

 <?php 
              
                foreach ($ListaType as $key2 ) {
                if ($key1['Projet']==$key2['projet'] and $key1['Nom']==$key2['discipline'] ) {
                
               ?>

							            	<ul class="nested">

              
								                <a class="treeview-animated-items-header">
								              		<i class="fas fa-plus-circle"></i>
								              		<span class="hello">
								              			</i>Type:-<?php echo  $key2['type'] ?>
								              		</span>
							              	    </a>  
                        
								              	<ul class="nested">
									           <table style="max-width: 100%;"  class="mb-0 table" id="example">
  											
  														  
														   	<tr class="clickable js-tabularinfo-toggle" data-toggle="collapse" id="row1" data-target=".row1">
														      <td colspan="8">
														      <iframe src="tableF.php?discipline=<?php echo $key1['Nom'] ?>&Type=<?php echo  $key2['type'] ?>" width="100%" height="390" ></iframe>
														      </td>
														    </tr>

  														  </tr>
  													</tbody>
												</table>    

   
                         		
				   				            	</ul> 

                  
							            	</ul>
							                    
                                  <?php   }  

    }
 ?>
							          </li>
							                         <?php 


          
  }}  ?>
							        </ul>
 
						      	</li>





	</td>
	


</div>    
	
            
<div class="app-drawer-overlay d-none animated fadeIn"></div><script type="text/javascript" src="assets/scripts/main.087c8d15f89e6bbe3f9e.js"></script>



<script type="text/javascript">
  
 $(document).ready(function(){
   $('.js-tabularinfo').bootstrapTable({
        escape: false,
        showHeader: false
      });
}); 
</script>
<script type="text/javascript">
	$('#tablePreview tr').hover(function() {
    $(this).addClass('hover');
}, function() {
    $(this).removeClass('hover');
});
</script>
<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */

function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}
function filterFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}
</script>

<script type="text/javascript" src="../assets/scripts/main.087c8d15f89e6bbe3f9e.js"></script></body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</body>
</html>