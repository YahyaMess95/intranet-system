<?php 

session_start ();

// On détruit les variables de notre session
session_unset ();

// On détruit notre session
session_destroy ();

  $_SESSION["EmailSession"] = '';

    $_SESSION["password"] = '' ;
    $_SESSION["id"] = '';
    $_SESSION["nom"] = '';
    $_SESSION["prenom"] = '';
    $_SESSION["specialite"] = '';
    $_SESSION["email"] = '';
    $_SESSION["photo"] = '';
    $_SESSION["sexe"] = '';
    $_SESSION["role"] = '';
    $_SESSION["cin"] = '';
    $_SESSION["date1"] = '';
    $_SESSION["telephone"] = '';


header('location:/intranet/') ; 


 ?>