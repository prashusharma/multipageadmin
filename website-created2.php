<?php
session_start();
if (!isset($_SESSION["isLoggedin"])) {
    header('Location: ./index.php');
}
?>
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
                                    <a class="icon" href="Contact%20Form.html">
                                        
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
                                      <li class="text-start"><a class="dropdown-item" href="dashboard.html">Dashboard</a></li>
                                      <li class="text-start"><a class="dropdown-item" href="My%20Accoun.html">Change Password</a></li>
                                      <li class="text-start"><a class="dropdown-item" href="adminlogin.html">Database Details</a></li>
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
            <?php include'partials/sidebar.php' ?>
                <div class="col-12 col-md-9 col-lg-9">
                    <div class="right-site">
                        <h4>Add a New Page > Add Single Page</h4>
                    </div>
                    <form action="">
                        <div class="main-form- change-pass-form">
                            <div class="change-pass-header mb-3">
                                <h4 class="text-start"> <img style="width: 65px; margin-top: -5px;" src="./img/Screenshot_14.png" alt="" class="img-fluid"> Website Creator</h4>
                            </div>
                            <div>
                                <div class="single-filed">
                                    <h5>Main Website Link</h5> 
                                    <div class="right rightX">
                                        <a style="color: #000;" href="https://organizein.com/us/las-vegas-digital-marketing">https://organizein.com/us/las-vegas-digital-marketing</a>
                                    </div>
                                </div>
                                <div class="single-filed">
                                    <h5>Web Design</h5> 
                                    <div class="right rightX">
                                        <a href="https://organizein.com/us/las-vegas-web-design">https://organizein.com/us/las-vegas-web-design</a>
                                    </div>
                                </div>
                                <div class="single-filed">
                                    <h5>Social Media</h5> 
                                    <div class="right rightX">
                                        <a href="www.organizein.com/us/las-vegas-social-media">www.organizein.com/us/las-vegas-social-media</a>
                                    </div>
                                </div>  
                                <div class="single-filed">
                                    <h5>Email Marketing</h5> 
                                    <div class="right rightX">
                                        <a href="https://organizein.com/us/las-vegas-email-marketing">https://organizein.com/us/las-vegas-email-marketing</a>
                                    </div>
                                </div>  
                            </div>
                            <div class="button-button-websites">
                                <a href="">Edit details</a> <a class="delete-button" href="">Delete</a>
                            </div>
                        </div>
                        <br>
                        <br>
                        <br>
                        <br>
                        
                            
                        
                    </form>
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