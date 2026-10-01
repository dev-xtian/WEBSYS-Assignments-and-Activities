<?php 
require 'db.php';

$errors =[];

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if(empty($errors)){
        $name_n = mysqli_real_escape_string($mysqli, $name);
        $email_e = mysqli_real_escape_string($mysqli, $email);
        $password_p = mysqli_real_escape_string($mysqli, $password);
    }
}

$sql = "INSERT INTO users(id, name, email, password) VALUES (NULL, '$name_n', '$email_m', '$password_p')";

if(mysqli_query($mysqli, $sql)){
    header('index.php');
}else{
    echo 'error';
}
?>