<?php 

session_start();
include "../crud.php";
$crud=new crud();
$conn=$crud->cnx;




$today = date("F j, Y, g:i a");

// Upload and Rename File

if (isset($_POST['submit'])  )
{

    if ($_FILES["file"]["name"]=='') {

$crud->ajoutFinance($conn,'vide',$_POST['commentaire'],$_SESSION["EmailSession"],'vide' ,  $_POST['pays'], $_POST['succursale'], $today) ; 


header('Location:ListFichierFinance.php');

        }   
  

    else  {
      
         
    
    $filename = $_FILES["file"]["name"];
    $file_basename = substr($filename, 0, strripos($filename, '.')); // POST file extention
    $file_ext = substr($filename, strripos($filename, '.')); // POST file name
    $filesize = $_FILES["file"]["size"];
    $allowed_file_types = array('.csv','.xls','.xlsx');  

$imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));

    if (in_array($file_ext,$allowed_file_types) && ($filesize < 20000000000))
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
            move_uploaded_file($_FILES["file"]["tmp_name"], "FinancheFolder/" . $newfilename);

$crud->ajoutFinance($conn,$filename,$_POST['commentaire'],$_SESSION["EmailSession"],$newfilename , $_POST['pays'], $_POST['siege'], $today) ; 

header('Location:ListFichierFinance.php');


                 
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