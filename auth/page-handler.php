<?php
include '../partials/dbconnect.php';



if (isset($_POST["create_single_page"])) {

    $country = $_POST['country'];
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
    $services = array("seo-marketing", "email-marketing", "web-design");

    $photo = "https://www.dmarge.com/most-likeable-person-world-the-rock";

    $existsql = "SELECT count(*) as check_row FROM `partner_details` WHERE city_name = '$city' and state_name = '$state'";
    $result = mysqli_query($conn, $existsql);
    $numRows = mysqli_fetch_assoc($result)["check_row"];
    // die($numRows);
    if ($numRows > 0) {
        echo '<h2>The city name already exists</h2>';
        header("LOCATION: ../add-single-page.php");
        exit();
    } else {
        $sql = "INSERT INTO `partner_details`( `country_selected`, `state_name`, `city_name`, `title` ,`partner_first_name`, `partner_last_name`, `partner_phone`, `partner_email`, `partner_address`, `partner_discription`, `partner_linkedin`, `partner_photo`) VALUES ('$country','$state','$city','$selected_title','$fist_name','$last_name','$phone','$email','$address','$description','$linkedin','$photo')";
        $result1 = mysqli_query($conn, $sql);
    }

    foreach ($services as $service) {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://' . $_SERVER["HTTP_HOST"] . '/multipageadmin/partnerwebsiteresources/index.php?partner_id=' . $id,
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

        if (!file_exists('../' . str_replace(" ", "-", $country) . '/' . str_replace(" ", "-", $state) . '/' . str_replace(" ", "-", $city))) {
            mkdir('../' . str_replace(" ", "-", $country) . '/' . str_replace(" ", "-", $state) . '/' . str_replace(" ", "-", $city), 0777, true);
        }
        $myfile = fopen('../' . str_replace(" ", "-", $country) . '/' . str_replace(" ", "-", $state) . '/' . str_replace(" ", "-", $city) . '/' . $service . '.php', "w") or die("Unable to open file!");
        fwrite($myfile, $response);
        fclose($myfile);
    }



    if ($result1) {
        header("Location: /multipageAdmin/manage-pages.php");
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

                    $existsql = "SELECT count(*) as check_row FROM `partner_details` WHERE city_name = '$csv_data[2]' and state_name = '$csv_data[1]'";
                    $results = mysqli_query($conn, $existsql);
                    $numRows = mysqli_fetch_assoc($results)["check_row"];

                    if ($numRows > 0) {
                        continue;
                    } else {
                        $services = array("seo-marketing", "email-marketing", "web-design");

                        $sql2 = "INSERT INTO `partner_details`( `country_selected`, `state_name`, `city_name`, `title`, `partner_first_name`, `partner_last_name`, `partner_phone`, `partner_email`, `partner_address`, `partner_discription`, `partner_linkedin`, `partner_photo`) VALUES ('$csv_data[0]','$csv_data[1]','$csv_data[2]','$csv_data[3]','$csv_data[4]','$csv_data[5]','$csv_data[6]','$csv_data[7]','$csv_data[8]','$csv_data[9]','$csv_data[10]','$csv_data[11]')";
                        if (mysqli_query($conn, $sql2)) {
                            $id = mysqli_insert_id($conn);
                            foreach ($services as $service) {
                                $curl = curl_init();
                                curl_setopt_array($curl, array(
                                    CURLOPT_URL => 'http://' . $_SERVER["HTTP_HOST"] . '/multipageadmin/partnerwebsiteresources/index.php?partner_id=' . $id,
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

                                if (!file_exists('../' . str_replace(" ", "-", $csv_data[0]) . '/' . str_replace(" ", "-", $csv_data[1]) . '/' . str_replace(" ", "-", $csv_data[2]))) {
                                    mkdir('../' . str_replace(" ", "-", $csv_data[0]) . '/' . str_replace(" ", "-", $csv_data[1]) . '/' . str_replace(" ", "-", $csv_data[2]), 0777, true);
                                }

                                $myfile = fopen('../' . str_replace(" ", "-", $csv_data[0]) . '/' . str_replace(" ", "-", $csv_data[1]) . '/' . str_replace(" ", "-", $csv_data[2]) . '/' . $service . '.php', "w") or die("Unable to open file!");
                                fwrite($myfile, $response);
                                fclose($myfile);
                                // $actual_link = "http://$_SERVER[HTTP_HOST]";

                                // $url = $actual_link.'/multipageadmin/' . str_replace(" ", "-", $csv_data[0]) . '/' . str_replace(" ", "-", $csv_data[1]) . '/' . str_replace(" ", "-", $csv_data[2]) . '/' . $service . '.php';

                                // $sql3 = "INSERT INTO `website_pages`(`partner_id`, `website_url`, `status`) VALUES ('$id', '$url', '1')";
                                // mysqli_query($conn, $sql3);
                            }
                        }
                    }
                }
                $msg = " Data uploaded succesfully";
                fclose($handle);

                header("LOCATION : ../manage-pages.php");
            } else {
                $msg = "Unable to read the format try again";
                header("LOCATION : ../new-page.php");

            }
        } else {
            $msg = "CCSV format file not found";
            header("LOCATION : ../new-page.php");
        }
    } else {
        $msg = "Please try again";
        header("LOCATION : ../new-page.php");
    }
}
