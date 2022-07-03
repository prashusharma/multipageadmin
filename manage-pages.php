<?php
session_start();
if (!isset($_SESSION["isLoggedin"])) {
  header('Location: ./index.php');

}
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
              include './partials/dbconnect.php';
              $actual_link = "http://$_SERVER[HTTP_HOST]";
              $sql = "SELECT * FROM `partner_details`";
              $result = mysqli_query($conn, $sql);
              while ($row = mysqli_fetch_assoc($result)) {

                $no = $row['partner_id'];
                $country = $row['country_selected'];
                $state = $row['state_name'];
                $city = $row['city_name'];
                $name = $row['title'] . $row['partner_first_name'] . $row['partner_last_name'];
                $services = $row['services'];
                $services_array = json_decode($services);


                echo '<tr>
                <td>' . $no . '</td>
                <td>' . $country . '</td>
                <td>' . $state . '</td>
                <td>' . $city . '</td>
                <td>' . $name . '</td>
                <td>';
                $country = str_replace(" ", "-", $country);
                $state = str_replace(" ", "-", $state);
                $city = str_replace(" ", "-", $city);
                for ($i = 0; $i < count($services_array); $i++) {
                  echo $actual_link. '/'. 'multipageadmin/' . $country . '/' . $state . '/' . $city . '/' . $services_array[$i] . ".html<br>";
                }

                echo '</td>  
                <td>Download / Edit / Delete</td>
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