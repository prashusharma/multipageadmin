<?php
session_start();

include '../partials/dbconnect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $check_email_in_db = mysqli_query($conn, "select password from user_login where `email` = '".$_POST['userid']."'");
    $get_password = mysqli_fetch_assoc($check_email_in_db);
    // print_r("select password from user_login where `email` = '".$_POST['userid']."'"); die;
    if ($_POST["password"] === $get_password["password"]) {
        $_SESSION["isLoggedin"] = true;
        header("LOCATION: ../dashboard.php");
    }else{
        $_SESSION["message"] = "Email or password is incorrect";
        header("LOCATION: ../index.php");
    }
}
?>