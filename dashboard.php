<?php
session_start();
if (!isset($_SESSION["isLoggedin"])) {
    header('Location: ./index.php');
}
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
                        <h4 style="margin-bottom: -8px;">Dashboard! </h4>
                        <span style="font-style:italic; font-size:12px; color: rgba(46, 46, 46, 0.767); font-weight: 600;">Welcome Admin to the dashboard</span>
                    </div>
                    <div class="row">

                        <div class="col-12 col-md-4 signle-box-dashboard mb-3">
                            <div>
                                <h1>4k</h1>
                            </div>
                            <p>Total Pages Created</p>
                        </div>

                        <div class="col-12 col-md-4 signle-box-dashboard mb-3">
                            <div>
                                <h1>53k</h1>
                            </div>
                            <p>Total Cities</p>
                        </div>

                        <div class="col-12 col-md-4 signle-box-dashboard mb-3">
                            <div>
                                <h1>153k</h1>
                            </div>
                            <p>Total Emails so far</p>
                        </div>

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