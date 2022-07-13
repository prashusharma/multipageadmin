<?php
session_start();
if (!isset($_SESSION["isLoggedin"])) {
  header('Location: ./index.php');
}
include 'partials/dbconnect.php';
$actual_link = "https://$_SERVER[https_HOST]";

mysqli_query($conn, "update inquiry_form set new_inquiry = 0");
?>
<?php include 'partials/header.php' ?>
<!------------------ header section  ------------------------>
<?php include 'partials/loggedin-header.php' ?>
<!------------------ header section end ------------------------>

<section>
  <div class="container">
    <div class="row">
      <?php include 'partials/sidebar.php' ?>
      <div class="col-12 col-md-9 col-lg-9">
        <div class="right-site">
          <h4>Contact Forms</h4>
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
                <th scope="col">Date</th>
                <th scope="col">From</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Quote</th>
                <th scope="col">Full Message</th>
                <th scope="col">Manage</th>
              </tr>
            </thead>
            <tbody>
              <!-- 1 -->
              <?php
              include './partials/dbconnect.php';
              $actual_link = "https://$_SERVER[https_HOST]";
              $sql = "SELECT * FROM `inquiry_form` ORDER BY `id` DESC";
              $result = mysqli_query($conn, $sql);
              $sno = 0;
              while ($row = mysqli_fetch_assoc($result)) {

                $id = $row['id'];
                $name = $row['full_name'];
                $company = $row['company'];
                $email = $row['email'];
                $phone = $row['phone'];
                $budget = $row['budget'];
                $message = $row['message'];
                $form_number = $row['form_number'];
                $date = $row['date'];
                $website_link = $row['website_link'];
                $current_url = $row['from_website'];
                $ip = $row['ip'];
                $country = $row['country'];
                $city = $row['city'];
                $message_url = $row['message_url'];
                $sno++;
              ?>
                <tr>
                  <td><?= $sno ?> </td>
                  <td><?= $date ?> </td>
                  <td><?= $form_number ?> </td>
                  <td><?= $name ?> </td>
                  <td><?= $email ?> </td>
                  <td><?= $phone ?> </td>
                  <td><?= $budget ?> </td>
                  <td><?= $message ?> </td>
                  <td class="edit-delet"><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal-<?= $id ?>">View</a> /
                    <a href="./auth/delete_msg.php?id=<?= $id ?>">Delete</a>
                  </td>
                </tr>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal-<?= $id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <h4 class="mb-5">Massage Details</h4>
                        <!-- 1 -->
                        <form action="<?= $actual_link ?>/multipageadmin/auth/inquiry_handler.php" method="post">
                        <input type="hidden" name="edit_message" value="edit" />
                        <input type="hidden" name="id" value="<?= $id ?>">
                          <div class="signle-table-filed">
                            <h5>Form Name</h5>
                            <div>
                              <input name="form_number" type="text" value="<?= $form_number ?>" >
                            </div>
                          </div>
                          <!-- 2 -->
                          <div class="signle-table-filed">
                            <h5>Date</h5>
                            <div>
                              <input name="date" type="text" value="<?= $date ?>" >
                            </div>
                          </div>
                          <!-- 3 -->
                          <div class="signle-table-filed">
                            <h5> Name</h5>
                            <div>
                              <input name="name" type="text" value="<?= $name ?>" >
                            </div>
                          </div>
                          <!-- 4 -->
                          <div class="signle-table-filed">
                            <h5>Email</h5>
                            <div>
                              <input name="email" type="text" value="<?= $email ?>" >
                            </div>
                          </div>
                          <!-- 5 -->
                          <div class="signle-table-filed">
                            <h5>Phone</h5>
                            <div>
                              <input name="phone" type="text" value="<?= $phone ?>" >
                            </div>
                          </div>
                          <!-- 6 -->
                          <div class="signle-table-filed">
                            <h5>Budget</h5>
                            <div>
                              <input name="budget" type="text" value="<?= $budget ?>" >
                            </div>
                          </div>
                          <!-- 7 -->
                          <div class="signle-table-filed">
                            <h5>Company Name</h5>
                            <div>
                              <input name="company" type="text" value="<?= $company ?>" >
                            </div>
                          </div>
                          <!-- 8 -->
                          <div class="signle-table-filed">
                            <h5>Website Link</h5>
                            <div>
                              <input name="website_link" type="text" value="<?= $website_link ?>" >
                            </div>
                          </div>
                          <!-- 9 -->
                          <div class="signle-table-filed">
                            <h5>From website</h5>
                            <div>
                              <input name="from_website" type="text" value="<?= $current_url ?>">
                            </div>
                          </div>
                          <!-- 10 -->
                          <div class="signle-table-filed">
                            <h5>Massage</h5>
                            <div>
                              <input name="message" type="text" value="<?= $message ?>" >
                            </div>
                          </div>
                          <!-- 11 -->
                          <div class="signle-table-filed">
                            <h5>Massage URL</h5>
                            <div>
                              <textarea name="message_url" id="" rows="5"><?=$message_url?> </textarea>
                            </div>
                          </div>
                          <!-- 12 -->
                          <div class="signle-table-filed">
                            <h5>City</h5>
                            <div>
                              <input name="city" value="<?=$city?>" type="text">
                            </div>
                          </div>
                          <!-- 13 -->
                          <div class="signle-table-filed">
                            <h5>Country</h5>
                            <div>
                              <input name="coutry" value="<?=$country?>"  type="text">
                            </div>
                          </div>
                          <!-- 14 -->
                          <div class="signle-table-filed">
                            <h5>IP</h5>
                            <div>
                              <input name="ip"  value="<?=$ip?>"  type="text">
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                          </div>
                        </form>
                      </div>

                    </div>
                  </div>
                </div>
              <?php } ?>
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
<footer>
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-12 text-center">
        <a href="">www.organizein.com | Multi-Page Admin Panel</a>
      </div>
    </div>
  </div>
</footer>
<!-- popup table  -->

<!-- bootstrap5 link  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script type="text/javascript">
  // let popupClose = document.querySelector('.close-btn');
  // let mainPopup = document.querySelector('.popup-wraper');
  // let tablepopup = document.querySelector('.table-popup');

  // function visible() {
  //   tablepopup.classList.toggle('visible');
  //   mainPopup.classList.toggle('visible');
  // }
</script>
</body>

</html>