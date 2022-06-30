<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "upintern");
// $conn = mysqli_connect("135.148.161.67", "plotsview", "Mark@123#$", "plotsvie_ashutosh");
if (isset($_POST['addNewPage'])) {

    if ($_POST['select-city-partner'] == '') {
        $_POST['select-city-partner'] = 2;
    }

    if ($_POST['addNewPage']=="submited") {


        /**Insert partner details */

        $token = md5(rand().time().rand());

        $file = $_FILES['formFile'];

        $tmpFile = $file['tmp_name'];

        $file1 = $file['name'];

        $city = strtolower($_POST['city-name']);

        $city = str_replace(" ","-", $city);



        $state = strtolower($_POST['state-name']);

        $state = str_replace(" ", "-", $state);

        $country = strtolower($_POST['country-select']);

        $servicePageArray = $_POST['select-service-page'];
        

        $sql1 = mysqli_query($conn, "INSERT INTO `partners_detail` (`name`, `file`, `filename`, `email`, `organizein_email`, `city`, `phone`, `address`, `state`, `country`,`service_id`, `status`) VALUES ('".$_POST['city-partner-name']."', '$file1', '$token', '".$_POST['email']."', '".$_POST['organizein-email']."', '".$_POST['city-name']."', '".$_POST['partner-phone']."', '".$_POST['partner-Address']."', '".$_POST['state-name']."','".$_POST['country-select']."','".implode(",",$_POST['select-service-page'])."','".$_POST['select-city-partner']."')");

        $partnerId = mysqli_insert_id($conn);

        /**Creating Page */

        foreach($servicePageArray as $value){
            $flistSer = mysqli_query($conn, "select name from list_services where service_id = $value");
            $fetchResult = mysqli_fetch_assoc($flistSer);

            $lastpage = str_replace(' ', '-', $fetchResult['name']);

            $lastpage = strtolower($lastpage)."-services";

            mysqli_query($conn, "insert into rel_services (`service_id`, `partner_id`) values ('$value', '$partnerId')");

            /**Update rel_service_city */
        mysqli_query($conn, "insert into rel_service_city (`service_id`, `city`, `state`, `country_code`) values ('$value', '".$_POST['city-name']."', '".$_POST['state-name']."', '".$_POST['country-select']."')");


        $sql2 = mysqli_query($conn, "INSERT INTO `created_website` (`website_url`, `partner_id`) VALUES ('http://localhost/ashutosh/$country/$state/$city/$lastpage.html', '$partnerId')");


        if ($sql1 && $sql2) 
        {
            if (!file_exists("../$country/$state/$city")) 
            {
                mkdir("../$country/$state/$city", 0777, true);
                $myfileWrite = fopen("../$country/$state/$city/$lastpage.html", 'w');
                $text = file_get_contents("http://localhost.com/ashutosh/index.php?user=$token");
                fwrite($myfileWrite, $text);
                fclose($myfileWrite);
                $dist = "../".$country."/".$state."/".$city."/".$file1;
                move_uploaded_file($tmpFile, $dist);
            }else
            {
                $myfileWrite = fopen("../$country/$state/$city/$lastpage.html", 'w');
                $text = file_get_contents("http://localhost.com/ashutosh/index.php?user=$token");
                fwrite($myfileWrite, $text);
                fclose($myfileWrite);
                $dist = "../".$country."/".$state."/".$city."/".$file1;
                move_uploaded_file($tmpFile, $dist);
            }
        }

        }
        header("LOCATION: ./index.php?file=managepage.php");

    }elseif($_POST['addNewPage'] != "submited"){
        $dataToUpdate = mysqli_query($conn, "select website_url from created_website where partner_id = '".$_POST['addNewPage']."'");

        $url = mysqli_fetch_assoc($dataToUpdate);
        $file = explode('/',$url['website_url']);
        $length = count($file);
        $mainfolder = $file[$length-4];
        $medfolder = $file[$length-3];
        $folder = $file[$length-2];
        $file = $file[$length-1];
        
        unlink("../$mainfolder/$medfolder/$folder/$file");
        /**Update partner details */

        $token = md5(rand().time().rand());

        $file = $_FILES['formFile'];

        $tmpFile = $file['tmp_name'];

        $file1 = $file['name'];

        $city = strtolower($_POST['city-name']);

        $city = str_replace(" ","-", trim($city));

        $state = strtolower(trim($_POST['state-name']));

        $state = str_replace(" ", "-", $state);

        $country = strtolower($_POST['country-select']);

        $partnerId = $_POST['addNewPage'];

        $update1 = mysqli_query($conn, "UPDATE `partners_detail` SET `name`= '".$_POST['city-partner-name']."',`file`='$file1',`filename`='$token',`email`='".$_POST['email']."',`organizein_email`='".$_POST['organizein-email']."',`phone`= '".$_POST['partner-phone']."',`address`='".$_POST['partner-Address']."', `state`='".$_POST['state-name']."',`country`='".$_POST['country-select']."', `status` = '".$_POST['select-city-partner']."', `service_id`= '".implode(",",$_POST['select-service-page'])."',`city`='".$_POST['city-name']."' WHERE partner_id = '".$_POST['addNewPage']."'");

        mysqli_query($conn, "DELETE FROM rel_services WHERE partner_id = '".$_POST['addNewPage']."'");
        mysqli_query($conn, "DELETE FROM created_website WHERE partner_id = '".$_POST['addNewPage']."'");

        foreach($_POST['select-service-page'] as $value){
            mysqli_query($conn, "insert into rel_services (`service_id`, `partner_id`) values ('$value', '".$_POST['addNewPage']."')");
            
            $lastpage = mysqli_query($conn, "select name from list_services where service_id = '$value'");
            $lastpage = mysqli_fetch_assoc($lastpage);

            $lastpage = str_replace(" ", "-", $lastpage['name']);
            $lastpage = strtolower($lastpage)."-services";

            $update2 = mysqli_query($conn, "INSERT INTO `created_website` SET `website_url`='http://localhost.com/ashutosh/$country/$state/$city/$lastpage.html', partner_id='".$_POST['addNewPage']."'");
            if ($update1 && $update2) {
                if (!file_exists("../$country/$state/$city")) {

                    mkdir("../$country/$state/$city", 0777, true);
                    $myfileWrite = fopen("../$country/$state/$city/$lastpage.html", 'w');
                    $text = file_get_contents("http://localhost.com/ashutosh/index.php?user=$token");
                    fwrite($myfileWrite, $text);
                    fclose($myfileWrite);

                    $dist = "../".$country."/".$state."/".$city."/".$file1;
                    move_uploaded_file($tmpFile, $dist);
                }else{
                    $myfileWrite = fopen("../$country/$state/$city/$lastpage.html", 'w');
                    $text = file_get_contents("http://localhost.com/ashutosh/index.php?user=$token");
                    fwrite($myfileWrite, $text);
                    fclose($myfileWrite);
                    $dist = "../".$country."/".$state."/".$city."/".$file1;
                    move_uploaded_file($tmpFile, $dist); 
                }
            }
        }
        header("LOCATION: ./index.php?file=managepage.php");
    }
}elseif(isset($_GET['delete'])){

    if($_GET['delete'] != ''){

        $delete2 = mysqli_query($conn, "delete from partners_detail where partner_id = '".$_GET['delete']."'");
        if ($delete2) {
            $partnerId = $_GET['delete'];

            $selectFile = mysqli_query($conn, "select website_url from created_website where  partner_id = '".$_GET['delete']."'");
            while ($url = mysqli_fetch_assoc($selectFile)) {
                $file = explode('/',$url['website_url']);
                $length = count($file);
                $mainfolder = $file[$length-4];
                $midfolder = $file[$length-3];
                $folder = $file[$length-2];
                $file = $file[$length-1];
                unlink("../$mainfolder/$midfolder/$folder/$file");    
            }
            mysqli_query($conn, "DELETE FROM created_website where partner_id = '".$_GET['delete']."'");
            header("LOCATION: ./index.php?file=managepage.php");
        }

    }

}elseif (isset($_POST['partner_id'])) {

    if ($_POST['partner_id'] != '') {

        $updateStatus = mysqli_query($conn, "update partners_detail set status = '".$_POST['status']."' where partner_id = '".$_POST['partner_id']."'");

        $selectFile = mysqli_query($conn, "select filename from partners_detail where partner_id = '".$_POST['partner_id']."'");
        $filename = mysqli_fetch_assoc($selectFile);

        $web = mysqli_query($conn, "select * from created_website where partner_id = '".$_POST['partner_id']."'");
        while ($url = mysqli_fetch_assoc($web)) {
            if ($updateStatus) {
                $token = $filename['filename'];
                $file = explode('/',$url['website_url']);
                $length = count($file);
                $mainfolder = $file[$length-4];
                $medfolder = $file[$length-3];
                $folder = $file[$length-2];
                $file = $file[$length-1];
                $myfileWrite = fopen("../$mainfolder/$medfolder/$folder/$file", 'w');
                $text = file_get_contents("https://upinterns.com/mainServer/index.php?user=$token");
                fwrite($myfileWrite, $text);
                fclose($myfileWrite);
            }
        }
    }
    print_r('1');
}elseif(isset($_POST['codehandlar'])){

    if ($_POST['codehandlar'] != '') {

        $added = mysqli_query($conn, "UPDATE `header_code` SET `code`= '".$_POST['codehandlar']."' WHERE code_id = 1");

        if ($added) {
            $selectFile = mysqli_query($conn, "select created_website.website_url, partners_detail.filename from created_website, partners_detail where partners_detail.partner_id = created_website.partner_id");
            while ($url = mysqli_fetch_assoc($selectFile)) {
                $token = $url['filename'];
                $file = explode('/',$url['website_url']);
                $length = count($file);
                $mainfolder = $file[$length-4];
                $medfolder = $file[$length-3];
                $folder = $file[$length-2];
                $file = $file[$length-1];
                $myfileWrite = fopen("../$mainfolder/$medfolder/$folder/$file", 'w');
                $text = file_get_contents("https://upinterns.com/mainServer/index.php?user=$token");
                fwrite($myfileWrite, $text);
                fclose($myfileWrite);
            }
            header("LOCATION: ./index.php?file=codehandlar.php");

        }

    }

}

if (isset($_POST['login'])) {
    $login = mysqli_query($conn, "select id, password from member where email = '".$_POST['email']."'");
    if ($check = mysqli_fetch_assoc($login)) {
        if(password_verify($_POST['password'], $check['password'])){
            $_SESSION["user_id"] = $check['id'];
            header("LOCATION: ./index.php");
        }else {
            header("LOCATION: ./login.php?mess=Invalid credential try again.");
        }
    }
}

if (isset($_POST["checkCity"])) {
    $checkCity = mysqli_query($conn, "SELECT * FROM `list_services` WHERE service_id NOT IN (SELECT rel_service_city.service_id FROM rel_service_city WHERE city LIKE '%".$_POST["checkCity"]."%' AND state LIKE '%".$_POST["state"]."%' AND country_code = '".$_POST["country"]."')");
    while ($row = mysqli_fetch_assoc($checkCity)) { 
        if($row['service_id'] != 8){
        ?>
<option value="<?php echo $row['service_id']?>"><?php echo $row['name']?></option>
<?php }
    }
}

if (isset($_POST["partnerCheck"])) {
    $checkPartner = mysqli_query($conn, "select rel_service_city.city from rel_service_city where state = '".$_POST["state"]."' AND country_code = '".$_POST["country"]."' GROUP BY rel_service_city.city");
    $city = "";
    while ($row = mysqli_fetch_assoc($checkPartner)) {
        $city .= $row["city"].",";
    }
    if ($city != '') {
        echo "<br> Listed City: ".rtrim($city, ",");
    }
}

if (isset($_POST["comment____area___from"])) {
    echo "We will Give response as soon as possible"; 
}
?>