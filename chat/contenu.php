    <!doctype html>
<html lang="en">


<!-- Mirrored from demo.dashboardpack.com/fiori-html-pro/apps-chat.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Oct 2019 18:30:49 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Chat </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
    />
    <meta name="description" content="">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

<link href="../main.087c8d15f89e6bbe3f9e.css" rel="stylesheet">

  <meta http-equiv="refresh" content="10">
  <base target="_blank">

</head>
<body>





       














<?php
session_start();

include "../crud.php";
$crud= new crud();
$conn=$crud->cnx;


if (empty($_GET["To"])) {
     $_GET['To'] = $_SESSION["To"]  ; 
}
else {
    
  $_SESSION["To"] =$_GET['To']  ;
    }


$listchat = $crud->afficheChat($conn) ; 
foreach ($listchat as $l ) {
   

if ($l['idFrom'] ==  $_SESSION["id"] and $_GET['To'] == $l['idTo']  ) {
    


echo "         <div class='float-right '>
                                                <div class='chat-box-wrapper chat-box-wrapper-right' >
                                                    <div style=' -webkit-hyphens: auto;
  -moz-hyphens: auto;
  -ms-hyphens: auto;
  hyphens: auto;' >
                                                        <div class='chat-box' style='background-color: red; color : white ;' > ".$l['contenu']."</div>
                                                        
                                                        <a href=UploadTchat/".$l['code']."> ".$l['fichier']."</a>  ||
                                                        <small class='opacity-6'>
                                                            <i class='fa fa-calendar-alt mr-1'></i>
                                                            ".$l['date1']."
                                                            
                                                           
                                                        </small>


                                                    </div>
                                                    <div>
                                                        <div class='avatar-icon-wrapper ml-1'>
                                                            <div class='badge badge-bottom btn-shine '></div>
                                                            <div class='avatar-icon avatar-icon-lg rounded'><img
                                                                    src='../assets/images/avatars/".$crud->GetPhotoByID($_SESSION["id"]  , $conn)."'
                                                                    alt=''></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><br><br><br><br><br> ";

}


if ($l['idFrom'] ==  $_GET['To']  and $_SESSION["id"] == $l['idTo'] ) {
    echo " <div class='chat-box-wrapper'>
                                                <div>
                                                    <div class='avatar-icon-wrapper mr-1'>
                                                        <div class='badge badge-bottom btn-shine' ></div>
                                                        <div class='avatar-icon avatar-icon-lg rounded'>
                                                            <img
                                                                    src='../assets/images/avatars/".$crud->GetPhotoByID($_GET['To'] ,$conn)."'
                                                                    alt=''></div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class='chat-box'>".$l['contenu']."</div>
                                                          <a href=UploadTchat/".$l['code']."> ".$l['fichier']."</a>   ||
                                                    <small class='opacity-6'>
                                                        <i class='fa fa-calendar-alt mr-1'></i>
                                                        ".$l['date1']."
                                                    </small>
                                                </div>
                                            </div> <br><br><br><br><br>



                                            ";
                             
}



}



?>

       
    </div>


<div class="app-drawer-overlay d-none animated fadeIn"></div>




<script type="text/javascript">
    


    success: function(data){
   if(data.success == true){ // if true (1)
      setTimeout(function(){// wait for 5 secs(2)
           location.reload(); // then reload the page.(3)
      }, 5000); 
   }
}
</script>




































<div class="app-drawer-overlay d-none animated fadeIn"></div><script type="text/javascript" src="../assets/scripts/main.087c8d15f89e6bbe3f9e.js"></script></body>

<!-- Mirrored from demo.dashboardpack.com/fiori-html-pro/apps-chat.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Oct 2019 18:30:49 GMT -->
</html>
