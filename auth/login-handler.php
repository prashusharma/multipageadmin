<?php
session_start();

include '../partials/dbconnect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $check_email_in_db = mysqli_query($conn, "select id,password from user_login where `email` = '".$_POST['userid']."'");
    $get_data = mysqli_fetch_assoc($check_email_in_db);
    // print_r("select password from user_login where `email` = '".$_POST['userid']."'"); die;
    if ($_POST["password"] === $get_data["password"]) {
        $_SESSION["isLoggedin"] = true;
        $_SESSION['id'] = $get_data['id'];
        header("LOCATION: ../dashboard.php");
        exit();
    }else{
        $_SESSION["message"] = "Email or password is incorrect";
        header("LOCATION: ../index.php");
        exit();
    }
}
?>