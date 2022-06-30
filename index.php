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
                        <div class="shape-">
                            <div class="main-box">
                                <h4>Login to Admin</h4>
                                <div class="input-filed">
                                    <form action="./partials/handleLogin.php" method="POST">
                                        <div>
                                            <input type="text" placeholder="User ID" name="userid" />
                                        </div>
                                        <div>
                                            <input type="password" placeholder="Password" name="password" />
                                        </div>
                                        <div>
                                            <input type="submit" value="Login" />
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
    darkMode.addEventListener('click', function(){
        darkMode.classList.toggle('active');
    })
    let darkModex = document.querySelector('.checkbox-tbhx');
    darkModex.addEventListener('click', function(){
        darkModex.classList.toggle('active');
    })
</script>