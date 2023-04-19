<?php

$target_folder = "C:\Users\loren\OneDrive\Área de Trabalho\Fotos"; 
$target_file = $target_folder . basename($_FILES["fileUpload"]["name"]); 
$uploadFlag = 1; 
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); 

if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadFlag = 1;
  } else {
    echo " File is not an image.";
    $uploadFlag = 0;
  }
}

if (file_exists($target_file)) {
  echo " File already exists.";
  $uploadFlag = 0;
}

if ($_FILES["fileUpload"]["size"] > 500000) {
  echo " Your file is too large.";
  $uploadFlag = 0;
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo " Only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadFlag = 0;
}

if ($uploadFlag == 0) {
  echo " File was not uploaded.";
} else {
  if (move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file)) {
    echo " The file ". htmlspecialchars( basename( $_FILES["fileUpload"]["name"])). " has been uploaded. ";
  } else {
    echo " Ooopps, there was an error uploading your file.";
  }
}
?>