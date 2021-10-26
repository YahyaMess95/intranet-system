<?php



   $fichier = 'C:\xampp\htdocs\Intranet\TestGED\yahya';

   if( file_exists ( $fichier))
     unlink( $fichier ) ;

   Alternative: 

   @unlink( $fichier ) ;


  ?>