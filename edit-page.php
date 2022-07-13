<?php
session_start();
if (!isset($_SESSION["isLoggedin"])) {
    header('Location: ./index.php');
}
include './partials/dbconnect.php';
?>
<?php include 'partials/header.php' ?>
<style>
    .admin-div-filed div {
        width: 60%;
    }

    .admin-div-filed div input {
        outline: none;
        border: 1px solid #33404f;
    }

    .main-box-admin2 {
        padding-right: 35px !important;
    }

    .main-box-edit-page {
        background-color: #33404f !important;
    }

    .admin-div-filed2 textarea {
        width: 100%;
        outline: none;
        border: 1px solid #33404f;
        padding: 4px 10px !important;
        box-shadow: 0px 0px 5px rgb(0 0 0 / 30%);
    }

    .result-edit-div {
        display: flex;
        justify-content: start;
        align-items: center;
        margin-bottom: 20px;
        font-style: italic;
    }

    .result-edit-div div.result-header {
        font-style: italic;
        margin-right: 15px;
        padding: 15px 20px;
        font-size: 20px;
        background-color: #7f7f7f;
        color: #fff;
        font-weight: 600;
    }

    .result-edit-div {
        background-color: #d1d1d1;
    }

    .result-edit-div div.location-selecet {
        display: flex;
        justify-content: start;
        flex-direction: column;
        font-size: 14px;
        font-style: italic;
    }
</style>
<!------------------ header section  ------------------------>
<?php include 'partials/loggedin-header.php' ?>
<!------------------ header section end ------------------------>
<style>
    .country-section .selection,
    .services .selection {
        display: block !important;
    }

    .country-section .select2-container--default .select2-selection--single,
    .services .select2-container--default .select2-selection--single {
        border-radius: unset !important;
        border: 2px solid #dadada !important;
    }

    .country-section .select2-container .select2-selection--single,
    .services .select2-container .select2-selection--single {
        height: 33px;
    }
</style>
<section>
    <div class="container">
        <div class="row">
            <?php include 'partials/sidebar.php' ?>
            <div class="col-12 col-md-9 col-lg-9 mx-auto">
                <div class="right-site">
                    <h4>Edit Page</h4>
                </div>
                <div class="row">
                    <div class="col-12 col-md-9 col-lg-9 mx-auto">
                        <h4 class="text-center mb-4">Select a City Web Page to Edit</h4>
                        <!-- 1 -->
                        <div class="admin-div-filed admin-div-filed2 d-flex align-items-center mb-4">
                            <h4 style="font-weight:600; font-size:16px;">Select City Page to Edit</h4>
                            <div class="country-section">
                                <!-- <input style="box-shadow: none; border:1px solid #ddd; background-color:#f6fcfe;" type="text"> -->

                                <select name="country" class="country-name form-control p-2">
                                    <?php
                                    // print_r($country); exit();
                                    $selectcountrystatecity =  mysqli_query($conn, "SELECT * FROM `partner_details`");
                                    $i = 0;
                                    while ($rowselect = mysqli_fetch_assoc($selectcountrystatecity)) {
                                        if ($i == 0) $id = $rowselect["partner_id"];
                                        $i++;
                                    ?>
                                        <option value='<?= $rowselect["partner_id"] ?>' <?= (isset($_GET["id"])) ? (($rowselect["partner_id"] == $_GET["id"]) ? "selected" : "") : "" ?>><?= $rowselect["city_name"] . " / " . $rowselect["state_name"] . " / " . $rowselect["country_name"] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="result-edit-div">
                            <div class="result-header">
                                Result
                            </div>
                            <div class="location-selecet">
                                <b>Bangalore-(select)</b>
                                <b>Bangalore Web-(select)</b>
                            </div>
                        </div>
                        <h5 class="text-center mb-4">Select 1 Page to edit</h5>
                        <!-- <div class="main-form- change-pass-form">
                                    <div class="change-pass-header">
                                        <h4 class="mb-4">Change Password</h4>
                                    </div>
                                    <div>
                                        <div class="single-filed">
                                            <h5>Current Password</h5> 
                                            <div class="right right-input">
                                                <input type="text">
                                            </div>
                                        </div>
                                        <div class="single-filed">
                                            <h5>New Password</h5> 
                                            <div class="right right-input">
                                                <input type="text">
                                            </div>
                                        </div>
                                        <div class="single-filed ">
                                            <h5>Reenter New Password</h5> 
                                            <div class="right right-input">
                                                <input type="text">
                                            </div>
                                        </div>
                                        
        
                                    </div>
                                </div> -->
                        <div class="main-box main-box-edit-page main-box-admin main-box-admin2">
                            <span style="color: #fff; font-weight: bold; text-decoration: underline;">Update details on Website</span>
                            <div class="input-filed mt-3">
                                <?php
                                $id = (isset($_GET['id'])) ? $_GET['id'] : $id;
                                // print_r($id); exit();
                                // $sql = "SELECT * FROM `partner_details` where id = ".$_GET["id"];
                                $sql = "SELECT * FROM `partner_details` WHERE `partner_id`='$id'";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result);
                                $rowselect["city_name"];
                                $default_description = $rowselect["city_name"]." SEO Company is a leading SEO & Web Design Agency that provides unmatched ".$rowselect["city_name"]." SEO services. We deliver more leads and traffic to your online business in ".$rowselect["city_name"]." and surrounding burrows, call Quod maiores quaerat SEO Company today.";

                                $default_keywords = $rowselect["city_name"]." SEO Company ,".$rowselect["city_name"]."  Social Media Company,".$rowselect["city_name"]." PPC Company ,".$rowselect["city_name"]."  Digital Marketing Company ,".$rowselect["city_name"]." Web Design Company ,".$rowselect["city_name"]." Graphic design agency";
                                ?>
                                <form class="px-4" action="./auth/page-handler.php" method="post">
                                    <!-- 1 -->
                                    <input type="hidden" name="edit_page_website" value="true">

                                    <input type="hidden" name="partner_id" value="<?= $row['partner_id'] ?>">
                                    <div class="admin-div-filed admin-div-filed2">
                                        <h4>Phone Number</h4>
                                        <div>
                                            <input type="text" value="<?= $row['partner_phone'] ?>" name="phone">
                                        </div>
                                    </div>
                                    <!-- 2 -->
                                    <div class="admin-div-filed admin-div-filed2">
                                        <h4>WhatsApp Number</h4>
                                        <div>
                                            <input type="text" value="<?= $row["whatsapp"] ?>" name="whatsapp">
                                        </div>
                                    </div>
                                    <!-- 3 -->
                                    <div class="admin-div-filed admin-div-filed2">
                                        <h4>Email</h4>
                                        <div>
                                            <input type="text" value="<?= $row['partner_email'] ?>" name="email">
                                        </div>
                                    </div>
                                    <!-- 4 -->
                                    <div class="admin-div-filed admin-div-filed2">
                                        <h4>Add Massage to Top Header Only to The Selected City</h4>
                                        <div>
                                            <textarea id="" rows="4" name="special_top_message"><?= $row['special_top_message'] ?></textarea>
                                        </div>
                                    </div>
                                    <!-- 5 -->
                                    <div class="admin-div-filed admin-div-filed2">
                                        <h4>Add any Special Script to Header only to the selected city</h4>
                                        <div>
                                            <textarea name="special_header_script" rows="4"><?= $row['special_header_script'] ?></textarea>
                                        </div>
                                    </div>
                                    <!-- 6 -->
                                    <div class="admin-div-filed admin-div-filed2">
                                        <h4>New HTML Code update</h4>
                                        <div>
                                            <textarea name="" id="" rows="6" name="new_html"></textarea>
                                        </div>
                                    </div>
                                    <!-- 7 -->
                                    <div class="admin-div-filed admin-div-filed2">
                                        <h4>1<sup>st</sup> Keyword update in Content</h4>
                                        <div>
                                            <input type="text" value="" name="">
                                        </div>
                                    </div>
                                    <!-- 8 -->
                                    <div class="admin-div-filed admin-div-filed2">
                                        <h4>2<sup>nd</sup> Keyword update in Content</h4>
                                        <div>
                                            <input type="text" value="" name="">
                                        </div>
                                    </div>
                                    <!-- 9 -->
                                    <span style="color: #fff; font-weight: bold; text-decoration: underline;">Meta Tags Update</span>
                                    <div class="admin-div-filed admin-div-filed2 mt-3">
                                        <h4>Title</h4>
                                        <div>
                                            <input type="text" value="<?= ($row['meta_title'] == "") ? $row["city_name"] : $row['meta_title'] ?>" name="title">
                                        </div>
                                    </div>
                                    <!-- 10 -->
                                    <div class="admin-div-filed admin-div-filed2">
                                        <h4>Description</h4>
                                        <div>
                                            <input type="text" value="<?= ($row['meta_description'] != "")?$row['meta_description']:$default_description ?>" name="description">
                                        </div>
                                    </div>
                                    <!-- 11 -->
                                    <div class="admin-div-filed admin-div-filed2">
                                        <h4>Keywords</h4>
                                        <div>
                                            <input type="text" value="<?= ($row['meta_keyword'] != "")?$row['meta_keyword']:$default_keywords ?>" name="keywords">
                                        </div>
                                    </div>
                                    <!-- <div class="admin-div-filed admin-div-filed2">
                                        <h4>URL Update</h4>
                                        <div>
                                            <input style="color: gray;" type="text" name="url_update" value="www.Organizein.com/">
                                        </div>
                                    </div> -->

                                    <br>
                                    <br>
                                    <div style="width: 100% ; " class="text-center mb-5">
                                        <button type="submit" style="background-color:#fcbe32; width: 100%; color: rgb(0, 0, 0);" class="create-website" href="#">Save Web Page</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
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
    // let darkMode = document.querySelector('.checkbox-tbh');
    // darkMode.addEventListener('click', function() {
    //     darkMode.classList.toggle('active');
    // })
    // let darkModex = document.querySelector('.checkbox-tbhx');
    // darkModex.addEventListener('click', function() {
    //     darkModex.classList.toggle('active');
    // })
    $(document).ready(function() {
        $('.country-name').select2({
            ajax: {
                url: "./auth/server_side_call.php",
                type: "post",
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        searchTerm: params.term // search term
                    };
                },
                processResults: function(response) {
                    return {
                        results: response
                    };
                },
                cache: true
            }
        });
        $('.country-name').change(function() {
            window.location = "./edit-page.php?id=" + $(this).val();
        });
    });
</script>