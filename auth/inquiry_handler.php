<?php
    include '../partials/dbconnect.php';
    $actual_link = "https://$_SERVER[HTTP_HOST]";
    // $current_url=$actual_link.$_SERVER['REQUEST_URI']; 

    if(isset($_POST['contact_form'])){
        if($_POST['contact_form'] == 'form-1'){
            //process form1
            $name = $_POST['name'];
            $email = $_POST['email'];
            $current_url = $_POST['current_url'];
            $website_link = $_POST['website_link'];
            $phone = $_POST['phone'];
            $services = $_POST['services_interested'];
            $form_number = $_POST['contact_form']; 
            
            $to      ="nisargnaik@gmail.com"; 
            $subject = $name.' filled form-1 on website '.$current_url; 
            $email_message = "Email of user: ".$email."\nPhone number: ".$phone."\nServices: ".$services."\nWebsite link: ".$website_link;  
            mail($to, $subject, $email_message);  

            $sql = "INSERT INTO `inquiry_form`(`full_name`, `from_website` ,`email`, `phone`, `website_link`, `interested_services`,`form_number`) VALUES ('$name','$current_url','$email','$phone','$website_link','$services','$form_number')";
            mysqli_query($conn, $sql);

            header("Location: https://organizein.com/thank-you/");
            exit();

        }else if($_POST['contact_form'] == 'form-3'){
            //process form3
            $name = $_POST['name'];
            $email = $_POST['email'];
            $current_url = $_POST['current_url'];
            $budget = $_POST['budget'];
            $phone = $_POST['phone'];
            $services = $_POST['services_interested'];
            $message = $_POST['message'];
            $company = $_POST['company'];
            $form_number = $_POST['contact_form'];

            $to      ='nisargnaik@gmail.com'; 
            $subject = $name.' filled form-3 on website '.$current_url; 
            $email_message = "Email of user: ".$email."\nPhone number: ".$phone."\nInquiry for: ".$message."\nCompany for: ".$company."\nBudget for: ".$budget."\nServices for: ".$services;   
            mail($to, $subject, $email_message);
            $sql = "INSERT INTO `inquiry_form`(`full_name`,`from_website` , `company`, `email`, `phone`, `budget`, `interested_services`, `message`,`form_number`) VALUES ('$name','$current_url','$company','$email','$phone','$budget','$services','$message','$form_number')";
            mysqli_query($conn, $sql);

            // print_r($sql); exit();
            
            header("Location: https://organizein.com/thank-you/");
            exit();

        }else if($_POST['contact_form'] == 'form-2'){
            //process form2
            $email = $_POST['email'];
            $website_link = $_POST['website_link'];
            $form_number = $_POST['contact_form'];
            $current_url = $_POST['current_url'];

            $to      ='nisargnaik@gmail.com'; 
            $subject = 'filled form-2 on website '.$current_url; 
            $email_message = 'Email of user: '.$email.'
Website of user: '.$website_link;  
            mail($to, $subject, $email_message);

            $sql = "INSERT INTO `inquiry_form`( `email`,`from_website` , `website_link`,`form_number`) VALUES ('$email','$current_url', '$website_link','$form_number')";
            mysqli_query($conn, $sql);
            header("Location: https://organizein.com/thank-you/");
            exit();
        }
    }

    if(isset($_POST['edit_message'])){
        if($_POST['edit_message']=='edit'){
            $id = $_POST['id'];
            $message_url = $_POST['message_url'];
            $form_number = $_POST['form_number'];
            $date = $_POST['date'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $budget = $_POST['budget'];
            $company = $_POST['company'];
            $website_link = $_POST['website_link'];
            $from_website = $_POST['from_website'];
            $message = $_POST['message'];
            $name = $_POST['name'];
            $message_url = $_POST['message_url'];
            $city = $_POST['city'];
            $country = $_POST['coutry'];
            $ip = $_POST['ip'];

            $sql = "UPDATE `inquiry_form` SET  `full_name` = '$name' , `company` = '$company', `email` = '$email', `phone` = '$phone', `website_link` = '$website_link', `from_website` = '$from_website', `budget` = '$budget', `message` = '$message', `date` = '$date', `form_number` = '$form_number', `ip` = '$ip', `message_url` = '$message_url', `city` = '$city', `country` = '$country' WHERE  `id` = '$id'";

            // print_r($sql); exit();
            mysqli_query($conn, $sql);

            header("Location: $actual_link/multipageadmin/contact-form1.php");
            exit();
        }
    }

?> 
