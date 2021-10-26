<!doctype html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    
    <link href="../main.087c8d15f89e6bbe3f9e.css" rel="stylesheet"></head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        body {
          font-family: Arial, sans-serif;
          background-size: cover;
          height: 100vh;
        }

        h1 {
          text-align: center;
          font-family: Tahoma, Arial, sans-serif;
          color: #06D85F;
          margin: 80px 0;
        }

        .box {
          width: 40%;
          margin: 0 auto;
          background: rgba(255,255,255,0.2);
          padding: 35px;
          border: 2px solid #fff;
          border-radius: 20px/50px;
          background-clip: padding-box;
          text-align: center;
        }

        .button {
          font-size: 1em;
          padding: 10px;
          color: #fff;
          border: 2px solid #06D85F;
          border-radius: 20px/50px;
          text-decoration: none;
          cursor: pointer;
          transition: all 0.3s ease-out;
        }
        .button:hover {
          background: #06D85F;
        }

        .overlay {
          position: fixed;
          top: 0;
          bottom: 0;
          left: 0;
          right: 0;
          background: rgba(0, 0, 0, 0.7);
          transition: opacity 500ms;
          visibility: hidden;
          opacity: 0;
        }
        .overlay:target {
          visibility: visible;
          opacity: 1;
        }

        .popup {
          margin: 70px auto;
          padding: 20px;
          background: #fff;
          border-radius: 5px;
          width: 30%;
          position: relative;
          transition: all 5s ease-in-out;
        }

        .popup h2 {
          margin-top: 0;
          color: #333;
          font-family: Tahoma, Arial, sans-serif;
        }
        .popup .close {
          position: absolute;
          top: 20px;
          right: 30px;
          transition: all 200ms;
          font-size: 30px;
          font-weight: bold;
          text-decoration: none;
          color: #333;
        }
        .popup .close:hover {
          color: #06D85F;
        }
        .popup .content {
          max-height: 30%;
          overflow: auto;
        }

        @media screen and (max-width: 700px){
          .box{
            width: 70%;
          }
          .popup{
            width: 70%;
          }
        }
    </style>
</head>
<body>

<?php


session_start();



include '../start.php';

  ?>

            <center>
                <div class="app-container app-theme-white body-tabs-shadow">
                    <div class="app-container">
    <div class="app-page-title">
                        <div class="container fiori-container">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div>
                                      Ajout Suivi
                                        <div class="page-title-subheading">
                                        </div>
                                    </div>
                                </div>
                               
                                    </div>
                        </div>
                    </div> 


                        <br><br><br>
                        <h4>Ajout de Suivie</h4>
                        <br><br>
                        <div class="h-100 d-md-flex d-sm-block bg-white justify-content-center align-items-center col-md-12 col-lg-7">
                            <div class="mx-auto app-login-box col-sm-12 col-md-10 col-lg-9">
                                <div>

                                   

                                  <form method="POST" action="FileFinance.php" enctype="multipart/form-data" >
            <div class="modal-body">
    
  
        <div class="card-body">
          
                                                     
                                            <div class="col-md-6">
                                                   <div class="position-relative form-group">
                                                    <label for="Pays" class="">
                                                        <span class="text-danger">*</span> Pays :
                                                    </label>
                                                    <input name="pays" id="commentaire" type="text" placeholder="Pays..." class="form-control" required="required"   style="width: 400px ; ">
                                                </div>
                                                   <div class="position-relative form-group">
                                                    <label for="Siège" class=""> siège
                                                        <span class="text-danger">*</span>  :
                                                    </label>
                                                    <input name="siege" id="commentaire" type="text" placeholder="Siège.." class="form-control" required="required" style="width: 400px ; ">
                                                </div>

                                                <div class="position-relative form-group">
                                                    <label for="commentaire" class="">
                                                        <span class="text-danger">*</span> Commentaire :
                                                    </label>
                                                    <textarea name="commentaire" id="commentaire" type="text" placeholder="Commentaire.." class="form-control" required="required" style="width: 400px ; height: 300px;"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label for="fichier" class=""><span class="text-danger">* </span>Fichier :</label>
                                                    <input type="file" name="file" value="" required class="form-control" style="width: 400px;">
                                                </div>
                                            </div>
                                       
                                            
                                        
            
                                                 
                                                </div>
            </div>
            <div class="modal-footer">
              <div class="ml-auto" style="margin-right: 50%;">
                                                <input type="submit" name="submit" class="btn-wide btn-pill btn-shadow btn-hover-shine btn btn-danger btn-lg" >
                                            </div>
            </div>

            </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </center>
        <script type="text/javascript" src="../assets/scripts/main.087c8d15f89e6bbe3f9e.js"></script>

</body>
</html>