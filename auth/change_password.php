<?php

session_start();
$user_id = $_SESSION['id'];

include '../partials/dbconnect.php';
$sql = "SELECT * FROM `user_login` where id = $user_id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if (isset($_POST['change_password'])) {
    $new_password = $_POST['new_password'];
    // print_r($row['password']); exit();
    if($_POST['current_password']==$row['password']){
        if($_POST['new_password']==$_POST['confirm_password']){
            $sql = "UPDATE `user_login` SET `password`='$new_password' WHERE id = $user_id";
            mysqli_query($conn, $sql);
            header('location: ../dashboard.php');
        }else{
            echo 'Password and confirm password did not match';
        }
    }else{
        echo 'The current password did not match';
    }
}
