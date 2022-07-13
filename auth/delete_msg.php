<?php
include '../partials/dbconnect.php';    
$actual_link = "https://$_SERVER[HTTP_HOST]";
    $id = $_GET['id'];
    $sql = "DELETE FROM `inquiry_form` WHERE id = '$id'";
    // print_r($sql); die;
    mysqli_query($conn, $sql);
    header("Location: $actual_link/multipageadmin/contact-form1.php");
?>