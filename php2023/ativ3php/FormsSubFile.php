<?php

$currentDiretory = getcwd();
$targetDiretory = "C:\Users\loren\OneDrive\Área de Trabalho\txt"; 

$errors = [];

$fileExtensionsAllowed = ['txt']; 

$fileName = $_FILES['fileUpload']['name']; 
$fileSize = $_FILES['fileUpload']['size']; 
$fileTmpName  = $_FILES['fileUpload']['tmp_name']; 
$fileType = $_FILES['fileUpload']['type']; 
$fileParts = explode('.', $fileName); 
$fileExtension = strtolower(end($fileParts)); 


$uploadPath = $currentDiretory . $targetDiretory . basename($fileName); 

if (isset($_POST['submit'])) {

  if (! in_array($fileExtension,$fileExtensionsAllowed)) {
    $errors[] = "This file extension is not allowed. txt file";
  }


  if (file_exists($uploadPath)) {
    $errors[] = " File already exists.";
  }

  if ($fileSize > 2000000) {
    $errors[] = "File exceeds maximum size (2M)";
  }

  if (empty($errors)) {
    $didUpload = move_uploaded_file($fileTmpName, $uploadPath);

    if ($didUpload) {
      echo "The file " . basename($fileName) . " has been uploaded";
    } else {
      echo "OHooo! An error occurred.";
    }
  } else {
    foreach ($errors as $error) {
      echo "<br> Were found error(s). <br>". $error;
    }
  }

}
?>