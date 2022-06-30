<div class="title fs-2">

    Add New Pages</div>

<div class="mb-2 mt-3 text-center fs-1">Provide details to create a web page</div>

<div class="p-2 pb-5 content mx-auto bg-light">

    <?php
        include './config.php';

        if (isset($_GET['edit'])) {

            $partnerResult = mysqli_query($conn,  "SELECT * FROM `partners_detail` where partner_id = '".$_GET['edit']."'");

            $partnerdetail = mysqli_fetch_assoc($partnerResult);

        }

        $listcountries = mysqli_query($conn, "select * from list_countries");
        ?>

    <form action="./action_page.php" method="POST" enctype="multipart/form-data">

        <div class="text-end p-2">Main website details</div>

        <hr>

        <div class="main-website-info mx-5">
            <div class="row g-3 mb-3">
                <div class="col-md-6">
                    <label for="country-select" class="form-label">Country Select</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><img src="https://flagcdn.com/16x12/<?php echo (isset($_GET['edit'])) ? strtolower($partnerdetail['country']) : 'af' ?>.png" alt=""></span>
                        </div>
                        <select name="country-select" class="select2 form-control">
                            <?php while($row = mysqli_fetch_assoc($listcountries)){ ?>
                            <option value="<?php echo $row['country_code']?>"
                                <?php echo (isset($_GET['edit'])) ? (($partnerdetail['country'] == $row['country_code']) ? 'selected' : '') : '' ?>>
                                <?php echo $row['country_name']?>
                            </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">

                    <label for="state-name" class="form-label">State Name</label>

                    <input type="text" class="form-control" id="state-name" name="state-name"
                        value="<?php echo (isset($_GET['edit'])) ? $partnerdetail['state'] : ''?>" required>

                </div>



            </div>
            <div class="mb-3 mt-3">

                <label for="city-name" class="form-label">City Name <span class="text-muted message"
                        style="font-size: 80%;"></span></label>

                <input type="text" class="form-control" id="city-name" name="city-name"
                    value="<?php echo (isset($_GET['edit'])) ? $partnerdetail['city'] : ''?>">
                <span class="text-muted"></span>
            </div>

            <input type="hidden" name="addNewPage"
                value="<?php echo (isset($_GET['edit'])) ? (($_GET['edit'] != '') ? $_GET['edit'] : '') : 'submited' ?>">
            <div class="mb-3">

                <label for="select-service-page mb-3" class="form-label">Select service page?</label>
                <div class="form-check form-switch mb-3">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                    <label class="form-check-label" for="flexSwitchCheckDefault">All Services Digital marketing &
                        Software IT</label>
                </div>
                <select id="select-service-page" class="form-control select2" name="select-service-page[]"
                    multiple="multiple" style="height: 50px !important;">
                    <?php if(isset($_GET['edit'])) : ?>
                    <?php 
                                    $partnerdetail1 = explode(",",$partnerdetail["service_id"]);
                                    $checkCity = mysqli_query($conn, "SELECT * FROM `list_services`");
                                    while ($row = mysqli_fetch_assoc($checkCity)) { 
                                        if($row['service_id'] != 8){ ?>
                    <option value="<?php echo $row['service_id']?>"
                        <?php echo (in_array($row['service_id'], $partnerdetail1)) ? "selected" : "" ?>>
                        <?php echo $row['name']?></option>
                    <?php }
                                    } ?>
                    <?php endif ?>
                </select>

            </div>

        </div>

        <div class="text-end px-2 pt-5">Partner details</div>

        <hr>

        <div class="partner-details mx-5">
            <div class="mb-5">
                <div class="form-group row align-items-center justify-content-center">
                    <label for="select-city-partner" class="form-label mr-3">Select Partner Status: </label>
                    <label class="switch">
                        <input type="checkbox" id="select-city-partner" name="select-city-partner" value="1"
                            <?php echo (isset($_GET['edit'])) ? (($partnerdetail['status'] == 1) ? 'checked' : '') : '' ?>>
                        <span class="slider"></span>
                    </label>
                </div>
                <!-- <label for="select-city-partner" class="form-label">Select City Partner</label>

                <select id="select-city-partner" class="select2 form-control" name="select-city-partner">

                    <option value="1">Active</option>

                    <option value="2">In Active</option>

                </select> -->

            </div>


            <div id="partner" style="display: none;">
                <div class="mb-3">

                    <label for="city-partner-name" class="form-label">City Partner Name</label>

                    <input type="text" class="form-control" id="city-partner-name" name="city-partner-name"
                        value="<?php echo (isset($_GET['edit'])) ? $partnerdetail['name'] : ''?>">

                </div>



                <div class="mb-3">

                    <label for="formFile" class="form-label">Partner pic upload</label>

                    <input class="form-control" type="file" id="formFile" name="formFile">

                </div>



                <div class="mb-3">

                    <label for="email" class="form-label">Partner personal Email</label>

                    <input type="email" class="form-control" id="email" name="email"
                        value="<?php echo (isset($_GET['edit'])) ? $partnerdetail['email'] : ''?>">

                </div>



                <div class="mb-3">

                    <label for="organizein-email" class="form-label">Partner Organizein Email</label>

                    <input type="email" class="form-control" id="organizein-email" name="organizein-email"
                        value="<?php echo (isset($_GET['edit'])) ? $partnerdetail['organizein_email'] : ''?>">

                </div>

                <div class="mb-3">

                    <label for="partner-phone" class="form-label">Partner Phone</label>

                    <input type="phone" class="form-control" id="partner-phone" name="partner-phone"
                        value="<?php echo (isset($_GET['edit'])) ? $partnerdetail['phone'] : ''?>">

                </div>

                <div class="mb-3">

                    <label for="partner-address" class="form-label">Partner Address</label>

                    <input type="text" class="form-control" id="partner-Address" name="partner-Address"
                        value="<?php echo (isset($_GET['edit'])) ? $partnerdetail['address'] : ''?>">

                </div>
            </div>

            <div class="form-check form-switch mb-3">
                <input class="form-check-input" type="checkbox" required>
                <label class="form-check-label">Are You Confirmed To Create This partner ?</label>
            </div>

            <input type="submit" value="Create website" class="btn w-75 btn-primary mx-auto"
                style="display: block !important;">

        </div>

    </form>

</div>