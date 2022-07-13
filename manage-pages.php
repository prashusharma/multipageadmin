<?php
session_start();
if (!isset($_SESSION["isLoggedin"])) {
  header('Location: ./index.php');

}
include './partials/dbconnect.php';

?>
<?php include 'partials/header.php' ?>
<!------------------ header section  --------------------------->
<?php include 'partials/loggedin-header.php' ?>
<!------------------ header section end ------------------------>

<section>
  <div class="container">
    <div class="row">
      <?php include 'partials/sidebar.php' ?>
      <div class="col-12 col-md-9 col-lg-9">
        <div class="right-site">
          <h4>Manage Page</h4>
        </div>
        <div class="row">
          <div class="col-12 col-md-4 col-lg-4 my-2">
            <div class="single-contact-filed">
              <h5>Select Form Type</h5>
              <input type="text">
            </div>
          </div>
          <div class="col-12 col-md-4 col-lg-4 my-2">
            <div class="single-contact-filed">
              <h5>Select Date</h5>
              <input type="text">
            </div>
          </div>
          <div class="col-12 col-md-4 col-lg-4 my-2">
            <div class="single-contact-filed">
              <h5>Email Search</h5>
              <input type="text">
            </div>
          </div>
        </div>
        <div class="table-div mt-4">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Country</th>
                <th scope="col">State</th>
                <th scope="col">City</th>
                <th scope="col">Name</th>
                <th scope="col">Link</th>
                <th scope="col">Manage</th>
              </tr>
            </thead>
            <tbody>
              <!-- 1 -->

              <?php
              $actual_link = "https://$_SERVER[https_HOST]";
              $sql = "SELECT * FROM `partner_details`";
              $result = mysqli_query($conn, $sql);
              $sno = 0;
              while ($row = mysqli_fetch_assoc($result)) {

                $no = $row['partner_id'];
                $country = $row['country_selected'];
                $state = $row['state_name'];
                $city = $row['city_name'];
                $name = $row['title'] . $row['partner_first_name'] . $row['partner_last_name'];
                $services = $row['services'];
                $services_array = json_decode($services);
                $sno++;

                echo '<tr>
                <td>' . $sno . '</td>
                <td>' . $country . '</td>
                <td>' . $state . '</td>
                <td>' . $city . '</td>
                <td>' . $name . '</td>
                <td>';

                $serviceSql = mysqli_query($conn, "select website_url from website_pages where partner_id = $no");
                $country = strtolower(str_replace(" ", "-", $country));
                $state = strtolower(str_replace(" ", "-", $state));
                $city = strtolower(str_replace(" ", "-", $city));
                while ($rowdata = mysqli_fetch_assoc($serviceSql)) {
                  echo $rowdata["website_url"]."<br>";
                }

                echo '</td>  
                <td><a href="./auth/create_download_zip.php?folder_structure='.$country.'/'.$city.'">Download</a> / <a href="./edit-page.php?id='.$no.'">Edit</a> / <a href="./auth/delete_website.php?id='.$no.'&folder='.$country.'/'.$city.'">Delete</a></td>
              </tr>';
              }
              ?>
            </tbody>
          </table>
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
  let darkMode = document.querySelector('.checkbox-tbh');
  darkMode.addEventListener('click', function() {
    darkMode.classList.toggle('active');
  })
  let darkModex = document.querySelector('.checkbox-tbhx');
  darkModex.addEventListener('click', function() {
    darkModex.classList.toggle('active');
  })
</script>



<?php
  

?>