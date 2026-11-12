<?php
require 'config.php';

$id = $_GET['id'];

$sql = "DELETE FROM user_course WHERE user_ID = '$id'";
mysqli_query($mysqli, $sql);

$sql = "DELETE FROM users WHERE user_ID = '$id'";
mysqli_query($mysqli, $sql);

header("Location: index.php");
exit();
?>