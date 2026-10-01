<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $file = $_FILES["file"];

    $fileName = $file['name'];
    $fileSize = $file['size'];
    $uploadOk = 1;
    $fileExtesion = strtolower(pathinfo($fileName,PATHINFO_EXTENSION));
    $maxSize = 50 * 1024 * 1024;

    $allowedExtensions = [
        "jpg", "jpeg", "png", "gif", "webp", "tiff",
        "doc", "docx",
        "xls", "xlsx",
        "ppt", "pptx"
    ];

    if(!in_array($fileExtesion, $allowedExtensions)){
        echo 'Sorry only "jpg", "jpeg", "png", "gif", "webp", "tiff", "doc", "docx", "xls", "xlsx", "ppt", and "pptx" is allowed.';
        $uploadOk = 0;
    }

    if($fileSize > $maxSize){
        echo "Your file is too large, maximum size is 50mb";
        $uploadOk = 0;
    }

    if($uploadOk != 0){
        echo "File Sucessfully Uploaded.";
    }else{
        die(" Failed to upload file.");
    }
}
?>