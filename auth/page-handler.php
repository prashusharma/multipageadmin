<?php
if($_SERVER['REQUEST_METHOD']== 'POST'){
    include './partials/dbconnect.php';
    $country = $_POST['country'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $fist_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address']; 
    $description = $_POST['description'];
    $linkedin = $_POST['linkedin_url'];
    $photo = "https://www.dmarge.com/most-likeable-person-world-the-rock";

    $existsql = "SELECT * FROM `partner_details` WHERE city_name = '$city'";
    $result = mysqli_query($conn, $existsql);
    if($numRows>0){
        echo '<h2>The city name already exists</h2>';
    }else{
        $sql = "INSERT INTO `partner_details`( `country_selected`, `state_name`, `city_name`, `partner_first_name`, `partner_last_name`, `partner_phone`, `partner_email`, `partner_address`, `partner_discription`, `partner_linkedin`, `partner_photo`) VALUES ('$country','$state','$city','$fist_name','$last_name','$phone','$email','$address','$description','$linkedin','$photo')";
    }
} 

if (isset($_POST["create_single_page"])) { 
    $curl = curl_init(); 
    curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://'.$_SERVER["HTTP_HOST"].'/multipageadmin/partnerwebsiteresources/index.php?partner_id='.$id,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
    ));

    $response = curl_exec($curl); 
    curl_close($curl); 


    if (!file_exists('../india/bihar')) {
        mkdir('../india/bihar', 0777, true);
    }
    $myfile = fopen("../india/bihar/seo-marketing.php", "w") or die("Unable to open file!"); 
    fwrite($myfile, $response);
    fclose($myfile);
}

if (isset($_POST["create_bullk_page"])) {
    $curl = curl_init(); 
    curl_setopt_array($curl, array(
      CURLOPT_URL => 'http://'.$_SERVER["HTTP_HOST"].'/multipageadmin/partnerwebsiteresources/index.php?partner_id='.$id,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
    ));
    
    $response = curl_exec($curl); 
    curl_close($curl); 
    
    
    if (!file_exists('../india/bihar')) {
        mkdir('../india/bihar', 0777, true);
    }
    $myfile = fopen("../india/bihar/seo-marketing.php", "w") or die("Unable to open file!"); 
    fwrite($myfile, $response);
    fclose($myfile);
} 
?>