
<?php
require 'config.php';

$id = $_POST['user_id'];
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$birthdate = $_POST['birthdate'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$course_id = $_POST['course_id'];


$sql = "UPDATE users SET
        Firstname = '$firstname',
        Middlename = '$middlename',
        Lastname = '$lastname',
        Birthdate = '$birthdate',
        Gender = '$gender',
        Email = '$email'
        WHERE user_ID = '$id'";

mysqli_query($mysqli, $sql);


$sql = "UPDATE user_course SET
        course_ID = '$course_id'
        WHERE user_ID = '$id'";

mysqli_query($mysqli, $sql);


header("Location: index.php");
exit();
?>
