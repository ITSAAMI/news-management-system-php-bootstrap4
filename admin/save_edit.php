<?php
include 'Config.php';
$id = $_POST['user_id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$user = $_POST['user'];
$password = $_POST['password'];
$role = $_POST['role'];

echo $sql = "UPDATE `user` SET `first_name`='{$fname}',`last_name`='{$lname}',`username`='{$user}',`pasword`='{$password}',`role`='{$role}' WHERE `user_id` = '{$id}'";
$run = mysqli_query($con, $sql) or die("Querry Not Working ");

if ($run) {
    header("location: users.php");
    mysqli_close($con);
}



?>