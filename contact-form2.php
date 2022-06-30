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
                                <div>
                                    <a class="icon" href="contact-form1.php">
                                        
                                        <i class="fa-solid fa-envelope">
                                            <span>0</span>
                                        </i>
                                    
                                        <span>
                                            Website Email
                                        </span>
                                    </a>
                                </div>
                                <div>
                                  <div class="dropdown">
                                    <a class="dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" href="#">
                                      <i class="fa-solid fa-user"></i>
                                  
                                      <span>
                                          My Account
                                      </span>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                      <li class="text-start"><a class="dropdown-item" href="dashboard.php">Dashboard</a></li>
                                      <li class="text-start"><a class="dropdown-item" href="my-account.php">Change Password</a></li>
                                      <li class="text-start"><a class="dropdown-item" href="admin-login.php">Database Details</a></li>
                                    </ul>
                                  </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header> -->
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
                    <div class="code-box-wraper mb-4">
                        <div class="header-code-box">Add Code in Header</div>
                        <textarea name="" id="" rows="8"></textarea>
                    </div>
                    <div class="code-box-wraper mb-4">
                        <div class="header-code-box">Add Code in Footer</div>
                        <textarea name="" id="" rows="8"></textarea>
                    </div>
                    <div class="code-box-wraper mb-4">
                        <div class="header-code-box header-code-box2">Add a Message in Top Menu Bar ( All websites – Promotional )</div>
                        <textarea name="" id="" rows="8"></textarea>
                    </div>
                    <div class="text-start mt-5 mb-5">
                        <a class="create-website " href="#">Save All</a>
                    </div>
                </div>
                <div class="col-12 col-md-12">
                    <div class="log-out mt-5 mb-3">
                        <a href="login.html">
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