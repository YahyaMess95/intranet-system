<!doctype html>
<html lang="en">


<!-- Mirrored from demo.dashboardpack.com/fiori-html-pro/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Oct 2019 18:28:54 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Helpdesk - This is an example dashboard created using build-in elements and components.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
    />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <link href="../main.087c8d15f89e6bbe3f9e.css" rel="stylesheet"></head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>

    <div class="ui-theme-settings">
        <button type="button" id="TooltipDemo" class="btn-open-options btn-outline-danger " style="background-color: #b81f44;">
            <img src="../icons/help.png" width="70%">

        </button>
        <div class="theme-settings__inner" >
            <div class="scrollbar-container">
                <div class="theme-settings__options-wrapper" style="zoom:80%;">
                    <h3 class="themeoptions-heading">Menu
                    </h3>
                    <div class="p-3">   
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper" >
                                        <div class="widget-content-left">
                                            <div class="widget-heading" ><i class="fas fa-shield-alt"></i>  Autorisation :
                                            </div>
                                            <br>
                                            <table>
                                                <tr>
                                                    <td> 
                                                        <div class="widget-danger" style="margin-left: 10px">
                                                            <a href="http://localhost:4343/Intranet/menu/formAutorisation.php" class="btn btn-outline-danger">Demander une autorisation</a>
                                                        </div>
                                                    </td>
                                                    <td> 
                                                        <div class="widget-subheading" style="margin-left: 10px"> 
                                                            <a href="http://localhost:4343/Intranet/menu/listAutorisation.php" class="btn btn-outline-dark">Consulter les demandes d'autorisations</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading"><i class="fas fa-calendar-week"></i>  Congé :
                                            </div>
                                            <br>
                                            <table>
                                                <tr>
                                                    <td>
                                                        <div class="widget-danger" style="margin-left: 10px">
                                                            <a href="http://localhost:4343/Intranet/menu/formConge.php" class="btn btn-outline-danger">Demander un congé</a>
                                                        </div>
                                                    </td>
                                                    <td>                                            
                                                        <div class="widget-subheading" style="margin-left: 10px">
                                                            <a href="http://localhost:4343/Intranet/menu/listConge.php" class="btn btn-outline-dark">Consulter les demandes de congé</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading"><i class="fas fa-ticket-alt"></i>  Ticket :
                                            </div>
                                            <br>
                                            <table>
                                                <tr>
                                                    <td>
                                                        <div class="widget-danger" style="margin-left: 10px">
                                                            <a href="http://localhost:4343/Intranet/menu/formTicket.php" class="btn btn-outline-danger">Demander une ticket</a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="widget-subheading" style="margin-left: 10px"> 
                                                            <a href="http://localhost:4343/Intranet/menu/listTicket.php" class="btn btn-outline-dark">Consulter les demandes des tickets</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading"><i class="fas fa-share-square"></i>  Transfer :
                                            </div>
                                            <br>
                                            <table>
                                                <tr>
                                                    <td>
                                                        <div class="widget-danger" style="margin-left: 10px">
                                                            <a href="http://localhost:4343/Intranet/menu/formTransfer.php" class="btn btn-outline-danger">Transferer un fichier</a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="widget-subheading" style="margin-left: 10px">
                                                            <a href="http://localhost:4343/Intranet/menu/listTransfer.php" class="btn btn-outline-dark">Consulter les transfers des fichiers</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </li>  


                             <li class="list-group-item">
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading"><i class="fas fa-adjust" ></i>  Nouveautés :
                                            </div>
                                            <br>
                                            <table>
                                                <tr>
                                                    <td>
                                                        <div class="widget-danger" style="margin-left: 10px">
                                                            <a href="http://localhost:4343/Intranet/menu/formNouveaute.php" class="btn btn-outline-danger">Création des nouveautés </a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="widget-subheading" style="margin-left: 10px">
                                                            <a href="http://localhost:4343/Intranet/menu/listNouveaute.php" class="btn btn-outline-dark">Consulter vos nouveautés</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </li>



 <li class="list-group-item">
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading"><i class="fas fa-tasks"></i>  Les taches :
                                            </div>
                                            <br>
                                            <table>
                                                <tr>
                                                    <td>
                                                        <div class="widget-danger" style="margin-left: 10px">
                                                            <a href="http://localhost:4343/Intranet/Tache/AjoutTache.php" class="btn btn-outline-danger"> Creer des taches </a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="widget-subheading" style="margin-left: 10px">
                                                            <a href="http://localhost:4343/Intranet/Tache/AfficheTache.php" class="btn btn-outline-dark"> Consulter vos taches</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </li>









                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>



<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="zoom:80%;">
    <div class="modal-dialog" role="document">
        
    

            



        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ajouter un dossier</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="false">&times;</span>
                </button>
            </div>
    <form method="POST" action="../finance/FileFinance.php" enctype="multipart/form-data" >
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

















</body>

<!-- Mirrored from demo.dashboardpack.com/fiori-html-pro/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Oct 2019 18:29:25 GMT -->
</html>
