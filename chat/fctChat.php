<?php 

session_start();
include "../crud.php";
$crud=new crud();
$conn=$crud->cnx;




$today = date("F j, Y, g:i a");

// Upload and Rename File

if (isset($_POST['submit'])  )
{
  
        
    
    $filename = $_FILES["fichier"]["name"];
    $file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
    $file_ext = substr($filename, strripos($filename, '.')); // get file name
    $filesize = $_FILES["fichier"]["size"];
    $allowed_file_types = array('.doc','.docx','.csv','.pdf','.xls','.xlsx');  

$imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));

    if (in_array($file_ext,$allowed_file_types) && ($filesize < 2000000))
    {   
        // Rename file
        $newfilename = md5($file_basename."".rand ( 1,1000000 )."" ) . $file_ext;
        if (file_exists("UploadTchat/" . $newfilename))
        {
            // file already exists error
            

            echo "You have already uploaded this file.";
        }
        else
        {       
            move_uploaded_file($_FILES["fichier"]["tmp_name"], "UploadTchat/" . $newfilename);



$crud->ajouttchat($conn ,$_SESSION['id'] ,  $_SESSION["To"] , $_POST['tchat'] , $_FILES["fichier"]["name"] ,  $newfilename) ; 
header("Location:chat.php");


                 
        }
    }
    elseif (empty($file_basename))
    {   
        // file selection error
 $crud->ajouttchat($conn ,$_SESSION['id'] ,  $_SESSION["To"] , $_POST['tchat'] , $_FILES["fichier"]["name"] ,  $newfilename ) ; 
header("Location:chat.php");

    } 
    elseif ($filesize > 200000)
    {   
        // file size error

        echo "The file you are trying to upload is too large.";
    }
    else
    {
        // file type error

     
        echo "Only these file typs are allowed for upload: " . implode(', ',$allowed_file_types);
        unlink($_FILES["fichier"]["tmp_name"]);
    }


















}





















































//$crud->ajouttchat($conn ,  $_SESSION["id"], $_SESSION["To"] , $_POST['tchat'] ,$_POST['file'] ) ; 

//header("Location: chat.php"); 
 ?>