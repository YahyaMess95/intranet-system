<?php 

if (empty($_SESSION["EmailSession"]) or empty($_SESSION["password"])  or empty($_SESSION["id"])) {
   header('location:../gestion_user/login.php') ;
}

 ?>




<html lang="en">


<!-- Mirrored from demo.dashboardpack.com/fiori-html-pro/charts-chartjs.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Oct 2019 18:31:10 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">

    <title>TRAGEDEL</title>

    
    <link rel="icon" href="../intranet.png" />

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <style type="text/css">
        
#demoFont {
font-family: "Comic Sans MS", cursive, sans-serif;
font-size: 31px;
letter-spacing: 0.6px;
word-spacing: 2px;
color: #000000;
font-weight: 700;
text-decoration: none solid rgb(68, 68, 68);
font-style: italic;
font-variant: small-caps;
text-transform: uppercase;
color:white;
}



    </style>

<link href="main.087c8d15f89e6bbe3f9e.css" rel="stylesheet">

</head>
<body>
<?php include '../menu/menu.php'; ?>


<div class="app-container app-theme-white "  style="zoom:80%;">
        <div class="app-top-bar top-bar-text-light" style="background-color: #b81f44;" >
            <div class="container fiori-container ">


                <div class="top-bar-left">
                    <ul class="nav">
                        <li class="nav-item">
                          
                        </li>
                    
                    </ul>
                </div>
                <div class="top-bar-right">
                    <ul class="nav">
                        <li class="nav-item mr-1">
                            <a href="javascript:void(0);" class="nav-link">
                                Contacter L'admin
                            </a>
                        </li>
                   
                    </ul>
                </div>
            </div>
        </div>
        <div class="app-header header-shadow bg-light header-text-dark">

            <div class="container fiori-container">

                
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                

                <img src="../intranet.png" width="10%"  onclick="test('yahyadd')" >


<script type="text/javascript">
    
function test(session) {

    if (session == 'yahya') {
window.open('../gestion_user/Acceuil.php', '_top');

    }
    else
    {
alert('tu n') ; 

    }
    // body...
}


</script>

                <ul class="horizontal-nav-menu">
             


<li class="dropdown">
                        <a  data-toggle="dropdown" data-offset="10" data-display="static" aria-expanded="false">
                            <i class="nav-icon-big typcn typcn-document"></i>
                            <span>Projet</span>
                            <i class="nav-icon-pointer icon ion-ios-arrow-down"></i>
                        </a>
                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-rounded">
                      
                                        
                                            <div class="nav flex-column">
                                                <a href="../admin/AjoutDossier.php" class="dropdown-item-desc dropdown-item">
                                                    <span>GED</span>
                                                   
                                                </a>
                                                <div class="divider"></div>
                                                <a href="../GEP/GepIntegration.php"  class="dropdown-item-desc dropdown-item">
                                                    <span>GEP</span>
                                                   
                                                </a>
                                                <div class="divider"></div>
                                                <a href="../menu/FichierPriveRecu.php" class="dropdown-item-desc dropdown-item">
                                                    <span>Fichiers privés réçues</span>
                                                   
                                                </a>


 <div class="divider"></div>
                                                <a href="#" class="dropdown-item-desc dropdown-item">
                                                    <span>Statistiques </span>
                                                   
                                                </a>


 <div class="divider"></div>
                                                <a href="../Tache/AfficheTacheAdmin.php" class="dropdown-item-desc dropdown-item">
                                                    <span>Gestion des Taches </span>
                                                   
                                                </a>
                                            </div>
                                        
                        </div>
                    </li>


<li class="dropdown">
                        <a  data-toggle="dropdown" data-offset="10" data-display="static" aria-expanded="false">
                            <i class="nav-icon-big typcn typcn-document"></i>
                            <span>Communication</span>
                            <i class="nav-icon-pointer icon ion-ios-arrow-down"></i>
                        </a>
                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-rounded">
                      
                                        
                                            <div class="nav flex-column">
                                                <a href="#" class="dropdown-item-desc dropdown-item">
                                                    <span>Email</span>
                                                   
                                                </a>
                                                <div class="divider"></div>
                                                <a href="#" class="dropdown-item-desc dropdown-item">
                                                    <span>Chat</span>
                                                   
                                                </a>
                                               
                                            </div>
                                        
                        </div>
                    </li>





<li class="dropdown">
                        <a  data-toggle="dropdown" data-offset="10" data-display="static" aria-expanded="false">
                            <i class="nav-icon-big typcn typcn-document"></i>
                            <span>Finance</span>
                            <i class="nav-icon-pointer icon ion-ios-arrow-down"></i>
                        </a>
                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-rounded">
                      
                                        
                                            <div class="nav flex-column">
                                                <a href="../finance/ListFichierFinance.php" class="dropdown-item-desc dropdown-item">
                                                    <span>Des fichiers prototypes</span>
                                                </a>
                                                <div class="divider"></div>
                                                <a href="#" class="dropdown-item-desc dropdown-item"  data-target="#exampleModal1"  data-toggle="modal">

                                                    <span>Ajouter des fichiers</span>
                                                </a>
                                               
                                            </div>
                                        
                        </div>
                    </li>






<li class="dropdown">
                        <a  data-toggle="dropdown" data-offset="10" data-display="static" aria-expanded="false">
                            <i class="nav-icon-big typcn typcn-document"></i>
                            <span>Services</span>
                            <i class="nav-icon-pointer icon ion-ios-arrow-down"></i>
                        </a>
                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-rounded">
                      
                                        

                                            <div class="nav flex-column">
                                                <a href="" class="dropdown-item-desc dropdown-item">
                                                    <span>La suivie</span>
                                                   
                                                </a>
                                               
                                            </div>
                                                <div class="divider"></div>

                                            <div class="nav flex-column">
                                                <a href="../menu/listAutorisation - Admin.php" class="dropdown-item-desc dropdown-item">
                                                    <span>Gestion des autorisations</span>
                                                   
                                                </a>
                                               
                                            </div>   <div class="divider"></div>

                                            <div class="nav flex-column">
                                                <a href="#" class="dropdown-item-desc dropdown-item">
                                                    <span>Voir les tickets</span>
                                                   
                                                </a>
                                               
                                            </div>   <div class="divider"></div>

                                            <div class="nav flex-column">
                                                <a href="../menu/listConge - Admin.php" class="dropdown-item-desc dropdown-item">
                                                    <span>Gestion des congés</span>
                                                   
                                                </a>
                                               
                                            </div>
                            

                                                <div class="divider"></div>
                                             <div class="nav flex-column">
                                                <a href="#" class="dropdown-item-desc dropdown-item">
                                                    <span>Météo</span>
                                                   
                                                </a>
                                               
                                            </div>
                                        
                        </div>
                    </li>





                </ul>      



                  <div class="app-header-right">
                    
                    
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="50" class="rounded" src="../gestion_user/PhotoProfil/<?php echo $_SESSION['photo'] ?>" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="rm-pointers dropdown-menu-lg dropdown-menu dropdown-menu-right">
                                            <div class="dropdown-menu-header">
                                                <div class="dropdown-menu-header-inner bg-danger">
                                                    <div class="menu-header-image opacity-2" style="background-image: url('assets/images/dropdown-header/city1.jpg');"></div>
                                                    <div class="menu-header-content text-left">
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-wrapper">
                                                                
                                                                <div class="widget-content-left">
                                                                    <div class="widget-heading"> <?php echo $_SESSION['nom'].' '.$_SESSION['prenom']  ?>
                                                                    </div>
                                                                    <div class="widget-subheading opacity-8"><?php echo $_SESSION['specialite'] ?>
                                                                    </div>
                                                                </div>
                                                                <div class="widget-content-right mr-2">
                                                                    <button class="btn-pill btn-shadow btn-shine btn btn-focus"><a href="../Logout.php" style="color : white ;">Déconnexion</a>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="scroll-area-xs" style="height: 100px;">
                                                <div class="scrollbar-container ps">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item-header nav-item">Activités
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="../gestion_user/profile.php" class="nav-link">Editer ptofil
                                                                
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>        </div>
                <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
                </div>
            </div>
        </div>    <div class="app-main">
            <div class="app-main__outer">
                
                     














