<?php 

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