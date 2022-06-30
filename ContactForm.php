<?php include 'partials/header.php' ?>
    <!------------------ header section  ------------------------>
        <header>
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
        </header>
    <!------------------ header section end ------------------------>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-3 col-lg-3">
                    <div class="left-site-menu">
                        <ul>
                            <li class="first-child"><a href="dashboard.html">Dashboard</a></li>
                            <li><a href="template.html">Templates</a></li>
                            <li><a href="NewPage.html">New Page</a></li>
                            <li><a href="Manage%20Pages.html">Manage Page</a></li>
                            <li><a href="Contact%20Form.html">Contact Forms</a></li>
                            <li><a class="active" href="ContactForm.html">Script / Code</a></li>
                            <li><a href="Editpage.html">Edit / Update Page</a></li>
                        </ul>
                    </div>
                </div>
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