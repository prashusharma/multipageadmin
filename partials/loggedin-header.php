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
                                    <a class="icon" href="contact-form1.php">
                                        
                                        <i class="fa-solid fa-envelope">
                                            <?php
                                            $datequery = mysqli_query($conn, "select count(*) as new_notfication from inquiry_form where  REPLACE(date, '-', '') > ".(date("Ymd")-1)." and new_inquiry = 1"); 
                                            $nums = mysqli_fetch_assoc($datequery); 
                                            if($nums["new_notfication"]) :
                                            ?> 
                                            <span style="background-color: #4ceb34; color: black;"><?=$nums["new_notfication"]?></span> 
                                            <?php endif ?>
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
        </header>