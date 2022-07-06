<?php
include '../partials/dbconnect.php';    
$actual_link = "http://$_SERVER[HTTP_HOST]";
    $id = $_GET['no'];
    $sql = "DELETE FROM `partner_details` WHERE id = '$id'";
    // print_r($sql); die;
    mysqli_query($conn, $sql);
    header("Location: $actual_link/multipageadmin/manage-pages.php");
?>