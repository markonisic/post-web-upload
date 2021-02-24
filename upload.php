<?php
$target_dir = $_SERVER['DOCUMENT_ROOT']."/upload/"; //MUST MAKE SURE chmod 777 or 755 for this directory
$target_file = $target_dir . basename($_FILES["fileupload"]["name"]); //fileToUpload variable is important! This variable is used in Curl later
$uploadOk = 1;
$fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if file already exists
if (file_exists($target_file)) {
    echo "You file already exists. The fille will be overwritten.";
    move_uploaded_file($_FILES["fileupload"]["tmp_name"], $target_file);
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "The file was overwritten.";
// if everything is ok, try to upload file
} else {
    echo "filename:[". $_FILES["fileupload"]["name"]."]<br>";
    if (move_uploaded_file($_FILES["fileupload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileupload"]["name"]). " has been uploaded.<br>";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
