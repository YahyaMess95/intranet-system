<?php



session_start();
include "../../acces/crud.php";
include "../../acces/user.php";

$crud=new crud();
$conn=$crud->cnx;


$random= rand ( 1 , 1000000000000000) ;  





$target_dir = "ImageUpload/";
$target_file = $target_dir . basename($random.$_FILES["photo"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["photo"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image."  ;

        header("Location:../index.php?1=1");
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";

        header("Location:../index.php?2=1");
    $uploadOk = 0;
}
// Check file size
if ($_FILES["photo"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;

          header("Location:../index.php?1=3");
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";

        header("Location:../index.php?1=4");
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";

   


      // if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded.";

$crud->modifierPhoto( $random.$_FILES["photo"]["name"],$_SESSION["EmailSession"],$conn);

   if ($_SESSION["speciality"] == "Entrepreneur" ) {
    

header("Location:../index.php");
}

else {
    header("Location:../indexE.php");

}









    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>