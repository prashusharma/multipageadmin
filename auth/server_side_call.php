<?php
include '../partials/dbconnect.php';
$actual_link = "https://$_SERVER[https_HOST]";


if (!isset($_POST['searchTerm'])) {
    $fetchData = mysqli_query($conn, "SELECT * FROM `partner_details` order by partner_id limit 5");
} else {
    $search = $_POST['searchTerm'];
    $fetchData = mysqli_query($conn, "SELECT * FROM `partner_details` where city_name like '%" . $search . "%' limit 5");
}

$data = array();
while ($row = mysqli_fetch_array($fetchData)) {
    $data[] = array("id" => $row['partner_id'], "text" => $row['city_name']." / ".$row['state_name']." / ".$row['country_name']);
}
echo json_encode($data);

