<?php
session_start();
if (!isset($_SESSION["isLoggedin"])) {
    header('Location: ./index.php');
}
?>
<?php include 'partials/header.php' ?>

 
<?php include './partials/loggedin-header.php' ?>

<section>
    <div class="container">
        <div class="row">
            <?php include 'partials/sidebar.php' ?>
            <div class="col-12 col-md-9 col-lg-9">
                <div class="right-site">
                    <h4 style="margin-bottom: -8px; padding-bottom:10px ;">Add a New Page > Bulk Create Multi Pages </h4>
                </div>
                <div class="change-pass-header">
                    <h4 class="text-center my-5" style="font-size: 20px;">Upload CSV file with all the details to generate Webpages</h4>

                </div>
                <form action="./auth/page-handler.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="create_bullk_page" value="true">
                    <div class="main-filed-file">
                        <div class="text-center file-div-">
                            <label for="csv">Upload File</label>
                            <input type="file" id="csv" name="csv" hidden />
                            <h4 style="text-align:center; font-weight:bold; font-size: 20px; margin-top: 10px;">Download sample CSV here</h4>

                        </div>
                    </div>
                    <div class="text-center button-upload mt-5 ">
                        <button class="create-website" type="submit" name="csv_upload" value="import file" style="background-color: #21b1ec;">Update and Create Websites</button>
                    </div>
                </form>
            </div>
            <div class="col-12 col-md-12">
                <div class="log-out mt-5 mb-3">
                    <a href="<?= "./auth/logout.php" ?>">
                        <i class="fa-solid fa-right-from-bracket"></i> Logout</a>
                </div>
            </div>
        </div>

    </div>
</section>


<!---------------- footer section start  -------------->
<?php include 'partials/footer.php' ?>

<script type="text/javascript">
    let darkMode = document.querySelector('.checkbox-tbh');
    darkMode.addEventListener('click', function() {
        darkMode.classList.toggle('active');
    })
    let darkModex = document.querySelector('.checkbox-tbhx');
    darkModex.addEventListener('click', function() {
        darkModex.classList.toggle('active');
    })
</script>




<!-- <?php
include './partials/dbconnect.php';
if(isset($_FILES['csv'] )){
    $csv_file = $_FILES['csv']['tmp_name'];
    if(is_file($csv_file)){
        if(($handle = fopen($csv_file, "r")) !==FALSE){
            while(($csv_data = fgetcsv($handle, 1000, ",")) !==FALSE){
                $NUM = COUNT($csv_data);
                for($c=0; $c<$num; $c++){
                    $column[$c] = $csv_data[$c];
                }
                $inserted = $db->query("INSERT INTO `partner_details`( `country_selected`, `state_name`, `city_name`, `title`, `partner_first_name`, `partner_last_name`, `partner_phone`, `partner_email`, `partner_address`, `partner_discription`, `partner_linkedin`, `partner_photo`) VALUES ('$column[0]','$column[1]','$column[2]','$column[3]','$column[4]','$column[5]','$column[6]','$column[7]','$column[8]','$column[9]','$column[10]','$column[11]')");
            }
            $msg =" Data uploaded succesfully";
            fclose($handle);
        }else{
            $msg = "Unable to read the format try again";
        }
    }else{
        $msg ="CCSV format file not found";
    }
}else{
    $msg ="Please try again";
}

?> -->