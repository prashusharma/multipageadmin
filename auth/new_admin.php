<?php
include '../partials/dbconnect.php';

if(isset($_POST['add_admin'])){
    $email = $_POST['new_admin_email'];
    $password = $_POST['new_admin_password'];
    // print_r($password); exit();
    $cPassword = $_POST['confirm_admin_password'];
    if($password == $cPassword){
        $sql = "INSERT INTO `user_login`( `email`, `password`) VALUES ('$email','$password')";
        mysqli_query($conn, $sql);
        header('location: ../dashboard.php');
    }else{
        echo 'The confirm password did not match with password entered';
    }
}

?>