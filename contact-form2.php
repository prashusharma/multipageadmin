<?php
session_start();
if (!isset($_SESSION["isLoggedin"])) {
    header('Location: ./index.php');
}
include './partials/dbconnect.php';
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
                <form action="./auth/page-handler.php" method="post">
                    <input type="hidden" name="add_extra_code" value="true">
                    <div class="right-site">
                        <h4>Add scripts/codes</h4>
                    </div>
                    <div class="code-box-wraper mb-4">
                        <div class="header-code-box">Add Code in Header</div>
                        <textarea name="header_code" id="" rows="8"></textarea>
                    </div>
                    <div class="code-box-wraper mb-4">
                        <div class="header-code-box">Add Code in Footer</div>
                        <textarea name="footer_code" id="" rows="8"></textarea>
                    </div>
                    <div class="code-box-wraper mb-4">
                        <div class="header-code-box header-code-box2">Add a Message in Top Menu Bar ( All websites – Promotional )</div>
                        <textarea name="top_header_message" id="" rows="8"></textarea>
                    </div>
                    <div class="text-start mt-5 mb-5">
                        <button class="create-website" href="#" type="submit">Save All</button>
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