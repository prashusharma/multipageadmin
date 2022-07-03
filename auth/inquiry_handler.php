<?php
    include '../partials/dbconnect.php';
    $actual_link = "http://$_SERVER[HTTP_HOST]";

    if(isset($_POST['contact_form'])){
        if($_POST['contact_form'] == 'form-1'){
            //process form1
            $name = $_POST['name'];
            $email = $_POST['email'];
            $website_link = $_POST['website_link'];
            $phone = $_POST['phone'];
            $services = $_POST['services_interested'];
            $form_number = $_POST['contact_form'];

            $sql = "INSERT INTO `inquiry_form`(`full_name`,  `email`, `phone`, `website_link`, `interested_services`,`form_number`) VALUES ('$name','$email','$phone','$website_link','$services','$form_number')";
            mysqli_query($conn, $sql);

            header("Location: $actual_link/multipageadmin/index.php");

        }else if($_POST['contact_form'] == 'form-3'){
            //process form3
            $name = $_POST['name'];
            $email = $_POST['email'];
            $budget = $_POST['budget'];
            $phone = $_POST['phone'];
            $services = $_POST['services_interested'];
            $message = $_POST['message'];
            $company = $_POST['company'];
            $form_number = $_POST['contact_form'];


            $sql = "INSERT INTO `inquiry_form`(`full_name`, `company`, `email`, `phone`, `budget`, `interested_services`, `message`,`form_number`) VALUES ('$name','$company','$email','$phone','$budget','$services','$message','$form_number')";
            mysqli_query($conn, $sql);

            // print_r($sql); exit();
            
            header("Location: $actual_link/multipageadmin/index.php");

        }else if($_POST['contact_form'] == 'form-2'){
            //process form2
            $email = $_POST['email'];
            $website_link = $_POST['website_link'];
            $form_number = $_POST['contact_form'];


            $sql = "INSERT INTO `inquiry_form`( `email`, `website_link`,`form_number`) VALUES ('$email','$website_link','$form_number')";
            mysqli_query($conn, $sql);

            header("Location: $actual_link/multipageadmin/index.php");
        }
    }

?>