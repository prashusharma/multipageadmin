<?php
session_start();
if (!isset($_SESSION["isLoggedin"])) {
    header('Location: ./index.php');
}
?>
<?php include 'partials/header.php' ?> 

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
                    <div class="main-filed-file">
                        <div class="text-center file-div-">
                            <label for="upload_form">Upload File</label>
                            <input type="file" id="upload_form" hidden />
                            <h4 style="text-align:center; font-weight:bold; font-size: 20px; margin-top: 10px;">Download sample CSV here</h4>

                        </div>
                    </div>
                    <div class="text-center button-upload mt-5">
                        <a href="#">Upload and Create Websites</a>
                    </div>
                </div>
                <div class="col-12 col-md-12">
                    <div class="log-out mt-5 mb-3">
                    <a href="<?="./auth/logout.php"?>">
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
    darkMode.addEventListener('click', function(){
        darkMode.classList.toggle('active');
    })
    let darkModex = document.querySelector('.checkbox-tbhx');
    darkModex.addEventListener('click', function(){
        darkModex.classList.toggle('active');
    })
</script>