<?php include 'partials/header.php' ?>

<!------------------ header section  ------------------------>
<!-- <header>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="header-navigation">
                    <div class="logo-">
                        <a href=""><img src="./img/organizein-logo-main-1.png" class="img-fluid" alt="logo"></a>
                    </div>
                    <div class="header-icon-div">
                        <h5 class="text-start">Organizein – Multi Page Admin Login</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header> -->
<?php include 'partials/loggedout-header.php' ?>
<!------------------ header section end ------------------------>

<section>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12 col-xl-12 mx-auto">
                <div class="login-box-wraper">
                    <div class="shape- shape-2 mt-5">
                        <div class="main-box main-box-admin">
                            <h4 class="pt-3 mb-5">Confirm your database and Domain details</h4>
                            <div class="input-filed">
                                <form class="px-4" action="">
                                    <!-- 1 -->
                                    <div class="admin-div-filed">
                                        <h4>Domain Name</h4>
                                        <div>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <!-- 2 -->
                                    <div class="admin-div-filed">
                                        <h4>Database Name</h4>
                                        <div>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <!-- 3 -->
                                    <div class="admin-div-filed">
                                        <h4>User Name</h4>
                                        <div>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <!-- 4 -->
                                    <div class="admin-div-filed">
                                        <h4>Db Password</h4>
                                        <div>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <!-- 5 -->
                                    <div class="admin-div-filed">
                                        <h4>Database Host</h4>
                                        <div>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <!-- 6 -->
                                    <div class="admin-div-filed">
                                        <h4>Table Prefix</h4>
                                        <div>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="mt-2">
                                        <input type="submit" value="Submit" />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
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