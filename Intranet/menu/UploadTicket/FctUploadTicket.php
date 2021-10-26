<?php 

session_start();
include "../../crud.php";
$crud=new crud();
$conn=$crud->cnx;




$today = date("F j, Y, g:i a");

// Upload and Rename File

if (isset($_POST['submit'])  )
{

    if ($_FILES["file"]["name"]=='') {


$support=$_POST['support'];
        $equipe=$_POST['equipe'];
        $description=$_POST['description'];
        $priorite=$_POST['priorite'];
        $dateCreation=$_POST['dateCreation'];
        $informer=$_POST['informer'];
        $pieceJointe=$_POST['pieceJointe'];

        $crud->ajoutTicket($conn, $support, $_SESSION["EmailSession"], $description, $priorite, $dateCreation, $informer, 'vide');

        header('location: ../listTicket.php');



        }   
  

    else  {
      
         
    
    $filename = $_FILES["file"]["name"];
    $file_basename = substr($filename, 0, strripos($filename, '.')); // POST file extention
    $file_ext = substr($filename, strripos($filename, '.')); // POST file name
    $filesize = $_FILES["file"]["size"];
    $allowed_file_types = array('.pdf','.jpg','.png');  

$imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));

    if (in_array($file_ext,$allowed_file_types) && ($filesize < 20000000000))
    {   
        // Rename file
        $newfilename = md5($file_basename."".rand ( 1,1000000 )."" ) . $file_ext;
        if (file_exists("UploadTicket/" . $newfilename))
        {
            // file already exists error
            

            echo "You have already uploaded this file.";
        }
        else
        {       
            move_uploaded_file($_FILES["file"]["tmp_name"],  $newfilename);


$support=$_POST['support'];
        $equipe=$_POST['equipe'];
        $description=$_POST['description'];
        $priorite=$_POST['priorite'];
        $dateCreation=$_POST['dateCreation'];
        $informer=$_POST['informer'];
        $pieceJointe=$_POST['pieceJointe'];

        $crud->ajoutTicket($conn, $support, $_SESSION["EmailSession"], $description, $priorite, $dateCreation, $informer, $newfilename);

        header('location: ../listTicket.php');
                 
        }
    }
    elseif (empty($file_basename))
    {   
        // file selection error


    } 

    else
    {
        // file type error

     
        echo "Only these file typs are allowed for upload: " . implode(', ',$allowed_file_types);
        unlink($_FILES["file"]["tmp_name"]);
    }


}
} 





 ?>