    <div class="row">
        <div class="col">
            <div class="title fs-2">
                Import and Create Multiple Pages
            </div>
        </div>
        <div class="col text-end">
            <a href="index.php?file=csv_upload.php">
                <button class="btn btn-success">Upload CSV file</button>
            </a>
            <footer class="blockquote-footer">Upload CSV with all city and details it will auto generate all pages</footer>
        </div>
    </div>

    <div class="my-5 container">
        <?php 

        include './config.php';

        $searchQuery = "";
        if (isset($_GET['country'])) {
            if($_GET['country'] != ""){
                $searchQuery .= " AND country = '".$_GET['country']."'"; 
            }
        }
        if(isset($_GET['key-search'])){
            if ($_GET['key-search'] != "") {
                $searchQuery .= " AND (city like '%".$_GET['key-search']."%' or keyword like '%".$_GET['key-search']."%') ";
            }
        }
        ?>
        <form action="" method="get">
            <div class="search-bar row mb-3">
                <input type="hidden" name="file" value="managepage.php">
                <div class="col-md-4">
                    <select class="select-country form-control select2" name="country">
                        <option value="">Select Country</option>
                        <?php 
                        $selCou = mysqli_query($conn, "select * from list_countries");
                        while($country = mysqli_fetch_assoc($selCou)){
                        ?>
                        <option value="<?php echo $country['country_code'] ?>"
                            <?php echo (isset($_GET['country'])) ? (($_GET['country'] == $country['country_code']) ? 'selected' : '' ) : '' ?>>
                            <?php echo $country['country_name'] ?>
                        </option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="Search" name="key-search"
                        value="<?php echo (isset($_GET['key-search'])) ? $_GET['key-search'] : '' ?>">
                </div>
                <div class="col-md-4">
                    <button class="btn btn-primary w-100">Search</button>
                </div>
            </div>
        </form>
        <table class="table table-bordered border-success">
            <thead>
                <th class="bg-primary text-light">No</th>
                <th class="bg-primary text-light" style="width: 40px">City</th>
                <th class="bg-primary text-light">State</th>
                <th class="bg-primary text-light">Country</th>
                <th class="bg-primary text-light">Website Link</th>
                <!-- <th class="bg-primary text-light">Status</th> -->
                <th class="bg-primary text-light">Manage</th>
            </thead>
            <tbody>
                <?php 
                    $partnerWeb = mysqli_query($conn, "SELECT  city, country,state, partner_id, filename, status FROM `partners_detail` where status != 3  $searchQuery ORDER BY partner_id DESC");
                    $row = 1;
                    while($data = mysqli_fetch_assoc($partnerWeb)){
                    ?>
                <tr>
                    <td>
                        <?php echo $row ?>
                    </td>
                    <td>
                        <?php echo $data['city'] ?>
                    </td>
                    <td>
                        <?php echo $data['state'] ?>
                    </td>
                    <td>
                        <?php echo $data['country']?>
                    </td>
                    <td>
                        <?php
                        $fetchWeb = mysqli_query($conn, "select * from `created_website` where partner_id = '".$data['partner_id']."'");
                        while($resultFetch = mysqli_fetch_assoc($fetchWeb)){
                            echo "<a href='".$resultFetch['website_url']."' target='_blank'>".rtrim($resultFetch['website_url'], ".html")."</a><br>";
                        }
                        ?>
                    </td>
                
                    <!-- <td>
                        <select name="" id="" class="form-control status" style="width: 150px;" data-partnerid="<?php echo $data['partner_id']?>">
                            <option value="1" <?php# echo ($data['status'] == 1) ? 'selected' : ''?>>Active</option>
                            <option value="2" <?php# echo ($data['status'] == 2) ? 'selected' : ''?>>In Active</option>
                        </select>
                    </td> -->
                    <td>
                        <a class="btn btn-warning px-3 text-decoration-none w-100 my-1"
                            href="./index.php?file=addnewpage.php&edit=<?php echo $data['partner_id']?>">EDIT</a>
                        <a class="btn btn-danger px-3 text-decoration-none w-100 m-0"
                            href="./action_page.php?delete=<?php echo $data['partner_id']?>&token=<?php echo $data['filename']?>">DELETE</a>
                    </td>
                </tr>
                <?php
                    $row++;
                        } 
                        ?>
            </tbody>
        </table>
    </div>
