<?php
include '../partials/dbconnect.php';
if(isset($_POST['csv_submit']))
{
    //allowed file types
    $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 
                'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 
                'application/excel', 'application/vnd.msexcel', 'text/plain');

    if(!empty($_FILES['csv_upload']['name']) && in_array($_FILES['csv_upload']['type'] , $csvMimes )  )
    {
        if(is_uploaded_file($_FILES['csv_upload']['tmp_name']))
        {
            $csvfile = fopen($_FILES['csv_upload']['tmp_name'] , 'r' );
            fgetcsv($csvfile);
            while(($line = fgetcsv($csvfile)) !== FALSE)
            {
                // Get row data
                $city   = strtolower($line[2]);
                $city = str_replace(" ","-",$city);

                $state  = strtolower($line[1]);
                $state = str_replace(" ","-",$state);

                $country = strtolower($line[0]);
                $country_code = strtolower($line[3]);
                $c_code = strtoupper($line['3']);

                $partner_name = $line[4];
                $email = $line[5];
                $organizein_email = $line[6];
                $partner_phone = $line[7];
                $partner_address = $line[8];
                
                $service_code = $line[9];
                $service_code_array = explode(",",$service_code); //used for foreach service details

                $status = $line[10];

                
                    //insertion to partner_details and other
                    $token = md5(rand().time().rand());

                    $clean_state = str_replace(" ","-",$state);

                        //insert into partner details
                    $sql1 = mysqli_query($conn, "INSERT INTO `partners_detail` (`name`, `file`, `filename`, `email`, `organizein_email`, 
                            `city`, `phone`, `address`, `state`, `country`,`service_id`, `status`) 
                            VALUES ('".$partner_name."', '', '$token', '".$email."', 
                            '".$organizein_email."', '".$city."', '".$partner_phone."', 
                            '".$partner_address."', '".$clean_state."','".$c_code."',
                            '".$service_code."','".$status."')");

                    $partnerId = mysqli_insert_id($conn);

                    // creating pages
                    foreach($service_code_array as $rows)
                    {
                        $list_services_sql = mysqli_query($conn, "select name from list_services where service_id = $rows");
                        $fetch_services = mysqli_fetch_array($list_services_sql);
                        
                        $lastpage = str_replace(" ","-",$fetch_services['name']);
                        $lastpage = strtolower($lastpage)."-services";

                        mysqli_query($conn, "insert into rel_services (`service_id`, `partner_id`) values ('$rows', '$partnerId')");

                        /**Update rel_service_city */
                        mysqli_query($conn, "insert into rel_service_city (`service_id`, `city`, `state`, `country_code`) values ('$rows', '".$city."', '".$state."', '".$c_code."')");

                        $sql2 = mysqli_query($conn, "INSERT INTO `created_website` (`website_url`, `partner_id`) VALUES ('http://plotsview.com/ashutosh/$country_code/$state/$city/$lastpage.html', '$partnerId')");

                        if ($sql1 && $sql2) 
                        {
                            
                            if (!file_exists("../$country_code/$state/$city")) 
                            {
                                $clean_service = str_replace(" ","-",$fetch_services['name']);
                                mkdir("../$country_code/$state/$city", 0777, true);
                                $myfileWrite = fopen("../$country_code/$state/$city/$lastpage.html", 'w');
                                $text = file_get_contents("http://plotsview.com/ashutosh/index.php?user=$token&service=$clean_service");
                                fwrite($myfileWrite, $text);
                                fclose($myfileWrite);
                                // $dist = "../".$country_code."/".$state."/".$city."/".$file1;
                                // move_uploaded_file($tmpFile, $dist);
                            }else
                            {
                                $myfileWrite = fopen("../$country_code/$state/$city/$lastpage.html", 'w');
                                $clean_service = str_replace(" ","-",$fetch_services['name']);
                                $text = file_get_contents("http://plotsview.com/ashutosh/index.php?user=$token&service=$clean_service");
                                fwrite($myfileWrite, $text);
                                fclose($myfileWrite);
                                // $dist = "../".$country_code."/".$state."/".$city."/".$file1;
                                // move_uploaded_file($tmpFile, $dist);
                            }
                        }
                        else
                        {
                            echo "SQL Error",mysqli_errno();
                            exit;
                        }

                    } //foreach loop ends here


                //} //else ends here

                      
            } //while loop ends here
                fclose($csvfile); //closes the csv file
                // insertion to db successful

                header("location: index.php?file=managepage.php");
        }
    }
}
?>