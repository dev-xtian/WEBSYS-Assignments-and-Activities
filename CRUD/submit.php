<?php
require_once 'config.php';

$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$birthdate = $_POST['birthdate'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$course_id = $_POST['course_id'];

$sql = "INSERT INTO users
(Firstname, Middlename, Lastname, Birthdate, Gender, Email, Date_Created)
VALUES
('$firstname', '$middlename', '$lastname', '$birthdate', '$gender', '$email', NOW())";

mysqli_query($mysqli, $sql);

$user_id = mysqli_insert_id($mysqli);

$sql = "INSERT INTO user_course (user_ID, course_ID)
VALUES ('$user_id', '$course_id')";

mysqli_query($mysqli, $sql);

header("Location: index.php");
?>