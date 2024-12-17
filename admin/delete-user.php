<?php
include 'config.php';
$id = $_GET['del_id'];

$sql = "DELETE FROM `user` WHERE `user_id` = '$id';";

$run = mysqli_query($con, $sql);

header("location: users.php");

mysqli_close($con);
?>