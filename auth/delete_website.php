<?php
include '../partials/dbconnect.php';
$actual_link = "https://$_SERVER[HTTP_HOST]";
$id = $_GET['id'];
$sql = "DELETE FROM `partner_details` WHERE partner_id = '$id'"; 
mysqli_query($conn, $sql);

$sql = "DELETE FROM `website_pages` WHERE partner_id = '$id'"; 
mysqli_query($conn, $sql);

$folder = $_GET["folder"];
$files = glob("../$folder/*"); // get all file names
foreach ($files as $file) { // iterate files
    if (is_file($file)) {
        unlink($file); // delete file
    }
}
header("Location: $actual_link/multipageadmin/manage-pages.php");
?>