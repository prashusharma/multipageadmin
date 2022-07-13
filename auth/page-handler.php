<?php
include '../partials/dbconnect.php';
$actual_link = "https://$_SERVER[HTTP_HOST]";



if (isset($_POST["create_single_page"])) {

    $country = json_decode($_POST['country'])[0];
    $country_name = json_decode($_POST['country'])[1];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $selected_title = $_POST['title'];
    $fist_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $description = $_POST['description'];
    $linkedin = $_POST['linkedin_url'];
    $services = $_POST["services"];

    // print_r($services); exit();

    $photo = "https://www.dmarge.com/most-likeable-person-world-the-rock";

    $existsql = "SELECT count(*) as check_row FROM `partner_details` WHERE city_name = '$city' and state_name = '$state' and json_contains(`services`, '" . json_encode($services) . "')";
    $result = mysqli_query($conn, $existsql);
    $numRows = mysqli_fetch_assoc($result)["check_row"];
    // die($numRows);
    if ($numRows > 0) {
        echo '<h2>The city name already exists</h2>';
        header("LOCATION: ../add-single-page.php");
        exit();
    } else {
        $sql = "INSERT INTO `partner_details`(`country_selected`, `country_name`, `state_name`, `city_name`, `title`, `partner_first_name`, `partner_last_name`, `partner_phone`, `partner_email`, `partner_address`, `partner_discription`, `partner_linkedin`, `partner_photo`, `services`) VALUES ('$country','$country_name','$state','$city','$selected_title','$fist_name','$last_name','$phone','$email','$address','$description','$linkedin','$photo', '" . json_encode($services) . "')";
        $result1 = mysqli_query($conn, $sql);
    }
    $id = mysqli_insert_id($conn);

    foreach ($services as $service) {
        $response = file_get_contents('https://' . $_SERVER["HTTP_HOST"] . '/multipageadmin/partnerwebsiteresources/index.php?partner_id=' . urlencode($id) . '&service=' . urlencode($service));
        //    print_r($response); exit();
        $country = strtolower(str_replace(" ", "-", $country));
        $state = strtolower(str_replace(" ", "-", $state));
        $city = strtolower(str_replace(" ", "-", $city));

        if (!file_exists('../../' . $country . '/' . $city)) {
            mkdir('../../' . $country . '/' . $city, 0777, true);
        }
        $myfile = fopen('../../' . $country . '/' . $city . '/' . strtolower(str_replace(" ", "-", $service)) . '.php', "w") or die("Unable to open file!");
        fwrite($myfile, $response);
        fclose($myfile);


        $url = "$actual_link/$country/$city/" . strtolower(str_replace(" ", "-", $service)) . ".php";

        $sql3 = "INSERT INTO `website_pages`(`partner_id`, `website_url`, `status`) VALUES ('$id', '$url', '1')";
        mysqli_query($conn, $sql3);
        // sleep( 6000 );
    }



    if ($result1) {
        header("Location: /multipageadmin/manage-pages.php");
        exit();
    }
}

if (isset($_POST["create_bullk_page"])) {

    // adding code for uploading a csv data to mysql.

    if (isset($_FILES['csv'])) {
        $csv_file = $_FILES['csv']['tmp_name'];
        if (is_file($csv_file)) {
            if (($handle = fopen($csv_file, "r")) !== FALSE) {
                $var_name = 0;
                while (($csv_data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                    if ($var_name++ == 0) continue;
                    // echo '<pre>', print_r($csv_data, 1), '</pre>';
                    $services = explode(",", $csv_data[13]);
                    if (!$services[0]) continue;

                    $existsql = "SELECT count(*) as check_row FROM `partner_details` WHERE city_name = '$csv_data[2]' and state_name = '$csv_data[1]' and json_contains(`services`, '" . json_encode($services) . "')";
                    $results = mysqli_query($conn, $existsql);
                    $numRows = mysqli_fetch_assoc($results)["check_row"];
                    // print_r("<br>" . $numRows);
                    if ($numRows > 0) continue;
                    else {

                        $sql2 = "INSERT INTO `partner_details`( `country_selected`,`country_name`, `state_name`, `city_name`, `title`, `partner_first_name`, `partner_last_name`, `partner_phone`, `partner_email`, `partner_address`, `partner_discription`, `partner_linkedin`, `partner_photo`, `services`) VALUES ('$csv_data[0]','$csv_data[1]','$csv_data[2]','$csv_data[3]','$csv_data[4]','$csv_data[5]','$csv_data[6]','$csv_data[7]','$csv_data[8]','$csv_data[9]','$csv_data[10]','$csv_data[11]','$csv_data[12]', '" . json_encode($services) . "')";
                        if (mysqli_query($conn, $sql2)) {
                            $id = mysqli_insert_id($conn);
                            foreach ($services as $service) {
                                $service = trim($service);

                                $response = file_get_contents($actual_link . '/multipageadmin/partnerwebsiteresources/index.php?partner_id=' . urlencode($id) . '&service=' . urlencode($service));

                                $country = strtolower(str_replace(" ", "-", $csv_data[0]));
                                $state = strtolower(str_replace(" ", "-", $csv_data[2]));
                                $city = strtolower(str_replace(" ", "-", $csv_data[3]));

                                if (!file_exists('../../' . $country . '/' . $city)) {
                                    mkdir('../../' . $country . '/' . $city, 0777, true);
                                }

                                $myfile = fopen('../../' . $country . '/' . $city . '/' . strtolower(str_replace(" ", "-", $service)) . '.php', "w") or die("Unable to open file!");
                                fwrite($myfile, $response);
                                fclose($myfile);

                                $url = "$actual_link/$country/$city/" . strtolower(str_replace(" ", "-", $service)) . ".php";

                                $sql3 = "INSERT INTO `website_pages`(`partner_id`, `website_url`, `status`) VALUES ('$id', '$url', '1')";
                                mysqli_query($conn, $sql3);
                            }
                        }
                    }
                }
                fclose($handle);

                // header("LOCATION : ../manage-pages.php");
                header("Location: $actual_link/multipageadmin/manage-pages.php");
                exit();
            } else {
                // header("LOCATION : ../new-page.php");
                header("Location: $actual_link/multipageadmin/new-page.php");
                exit();
            }
        } else {
            // header("LOCATION : ../new-page.php");
            header("Location: $actual_link/multipageadmin/new-page.php");
            exit();
        }
    } else {
        // header("LOCATION : ../new-page.php");
        header("Location: $actual_link/multipageadmin/new-page.php");
        exit();
    }
}


if (isset($_POST["add_extra_code"])) {

    $sql = "UPDATE `extra_code` SET `header_code`='" . $_POST["header_code"] . "',`footer_code`='" . $_POST["footer_code"] . "',`top_header_message`='" . $_POST["top_header_message"] . "' WHERE 1";
    mysqli_query($conn, $sql);

    // print_r($services); exit(); 

    $existsql = "SELECT * FROM `partner_details`";
    $result = mysqli_query($conn, $existsql);

    while ($row = mysqli_fetch_assoc($result)) {
        $services = json_decode($row["services"]); 
        foreach ($services as $service) {
            $service = trim($service);
            $response = file_get_contents('https://' . $_SERVER["HTTP_HOST"] . '/multipageadmin/partnerwebsiteresources/index.php?partner_id=' . urlencode($row["partner_id"]) . '&service=' . urlencode($service));
            //    print_r($response); exit();
            $country = strtolower(str_replace(" ", "-", $row["country_selected"]));
            $state = strtolower(str_replace(" ", "-", $row["state_name"]));
            $city = strtolower(str_replace(" ", "-", $row["city_name"]));

            if (!file_exists('../../' . $country . '/' . $city)) {
                mkdir('../../' . $country . '/' . $city, 0777, true);
            }
            $myfile = fopen('../../' . $country . '/' . $city . '/' . strtolower(str_replace(" ", "-", $service)) . '.php', "w") or die("Unable to open file!");
            fwrite($myfile, $response);
            fclose($myfile);
            // sleep( 6000 );
        }
    }

    header("Location: $actual_link/multipageadmin/contact-form2.php");
    exit();
}


if (isset($_POST["edit_page_website"])) {
    // print_r($_POST); exit();

    $sql = "UPDATE `partner_details` SET `partner_phone`='".$_POST["phone"]."', `whatsapp`='".$_POST["whatsapp"]."', `partner_email`='".$_POST["email"]."', `meta_title`='".$_POST["title"]."',`meta_description`='".$_POST["description"]."',`meta_keyword`='".$_POST["keywords"]."',`special_top_message`='".$_POST["special_top_message"]."',`special_header_script`='".$_POST["special_header_script"]."' WHERE  `partner_id`='".$_POST["partner_id"]."'";
    mysqli_query($conn, $sql);

    // print_r($services); exit(); 

    $existsql = "SELECT * FROM `partner_details` WHERE  `partner_id`='".$_POST["partner_id"]."'";
    $result = mysqli_query($conn, $existsql);

    while ($row = mysqli_fetch_assoc($result)) {
        $services = json_decode($row["services"]); 
        foreach ($services as $service) {
            $service = trim($service);
            $response = file_get_contents('https://' . $_SERVER["HTTP_HOST"] . '/multipageadmin/partnerwebsiteresources/index.php?partner_id=' . urlencode($row["partner_id"]) . '&service=' . urlencode($service));
            //    print_r($response); exit();
            $country = strtolower(str_replace(" ", "-", $row["country_selected"]));
            $state = strtolower(str_replace(" ", "-", $row["state_name"]));
            $city = strtolower(str_replace(" ", "-", $row["city_name"]));

            if (!file_exists('../../' . $country . '/' . $city)) {
                mkdir('../../' . $country . '/' . $city, 0777, true);
            }
            $myfile = fopen('../../' . $country . '/' . $city . '/' . strtolower(str_replace(" ", "-", $service)) . '.php', "w") or die("Unable to open file!");
            fwrite($myfile, $response);
            fclose($myfile);
            // sleep( 6000 );
        }
    }

    header("Location: $actual_link/multipageadmin/edit-page.php");
    exit();
}