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
                <?php include'partials/sidebar.php' ?>
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
                                <h5 >Select Date</h5>
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
                              <tr>
                                <td>1</td>
                                <td>12 / May</td>
                                <td>orm 1</td>
                                <td>James Mark</td>
                                <td>James@..</td>
                                <td>989877</td>
                                <td>$590</td>
                                <td>Here is the details, etc etc …………. ….</td>
                                <td onclick="visible()" class="edit-delet">View / Delete</td>
                              </tr>
                              <!-- 2 -->
                              <tr>
                                <td>2</td>
                                <td>12 / May</td>
                                <td>orm 1</td>
                                <td>James Mark</td>
                                <td>James@..</td>
                                <td>989877</td>
                                <td>$590</td>
                                <td>Here is the details, etc etc …………. ….</td>
                                <td onclick="visible()" class="edit-delet">View / Delete</td>
                              </tr>
                              <!-- 3 -->
                              <tr>
                                <td>3</td>
                                <td>12 / May</td>
                                <td>orm 1</td>
                                <td>James Mark</td>
                                <td>James@..</td>
                                <td>989877</td>
                                <td>$590</td>
                                <td>Here is the details, etc etc …………. ….</td>
                                <td onclick="visible()" class="edit-delet">View / Delete</td>
                              </tr>
                              <!-- 4 -->
                              <tr>
                                <td>4</td>
                                <td>12 / May</td>
                                <td>orm 1</td>
                                <td>James Mark</td>
                                <td>James@..</td>
                                <td>989877</td>
                                <td>$590</td>
                                <td>Here is the details, etc etc …………. ….</td>
                                <td onclick="visible()" class="edit-delet">View / Delete</td>
                              </tr>
                              <!-- 5 -->
                              <tr>
                                <td>5</td>
                                <td>12 / May</td>
                                <td>orm 1</td>
                                <td>James Mark</td>
                                <td>James@..</td>
                                <td>989877</td>
                                <td>$590</td>
                                <td>Here is the details, etc etc …………. ….</td>
                                <td onclick="visible()" class="edit-delet">View / Delete</td>
                              </tr>
                              <!-- 6 -->
                              
                              <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td onclick="visible()" class="edit-delet"></td>
                              </tr><tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="edit-delet"></td>
                              </tr><tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="edit-delet"></td>
                              </tr><tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="edit-delet"></td>
                              </tr><tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="edit-delet"></td>
                              </tr><tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="edit-delet"></td>
                              </tr><tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="edit-delet"></td>
                              </tr><tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="edit-delet"></td>
                              </tr><tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="edit-delet"></td>
                              </tr><tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="edit-delet"></td>
                              </tr><tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="edit-delet"></td>
                              </tr><tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="edit-delet"></td>
                              </tr><tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="edit-delet"></td>
                              </tr><tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="edit-delet"></td>
                              </tr><tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="edit-delet"></td>
                              </tr><tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="edit-delet"></td>
                              </tr><tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="edit-delet"></td>
                              </tr>
                            </tbody>
                          </table>
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
      <!-- popup table  -->
      <div class="popup-wraper">
        <div class="table-popup">
            <h4 class="mb-5">Massage Details</h4>
            <!-- 1 -->
            <div class="signle-table-filed">
              <h5>Form Name</h5> 
              <div>
                  <input type="text">
              </div>
            </div>
            <!-- 2 -->
            <div class="signle-table-filed">
              <h5>Date</h5> 
              <div>
                  <input type="text">
              </div>
            </div>
            <!-- 3 -->
            <div class="signle-table-filed">
              <h5> Name</h5> 
              <div>
                  <input type="text">
              </div>
            </div>
            <!-- 4 -->
            <div class="signle-table-filed">
              <h5>Email</h5> 
              <div>
                  <input type="text">
              </div>
            </div>
            <!-- 5 -->
            <div class="signle-table-filed">
              <h5>Phone</h5> 
              <div>
                  <input type="text">
              </div>
            </div>
            <!-- 6 -->
            <div class="signle-table-filed">
              <h5>Quote</h5> 
              <div>
                  <input type="text">
              </div>
            </div>
            <!-- 7 -->
            <div class="signle-table-filed">
              <h5>Company Name</h5> 
              <div>
                  <input type="text">
              </div>
            </div>
            <!-- 8 -->
            <div class="signle-table-filed">
              <h5>Website Link</h5> 
              <div>
                  <input type="text">
              </div>
            </div>
            <!-- 9 -->
            <div class="signle-table-filed">
              <h5>Form Name</h5> 
              <div>
                  <input type="text">
              </div>
            </div>
            <!-- 10 -->
            <div class="signle-table-filed">
              <h5>Massage</h5> 
              <div>
                  <input type="text">
              </div>
            </div>
            <!-- 11 -->
            <div class="signle-table-filed">
              <h5>Massage URL</h5> 
              <div>
                  <textarea name="" id="" rows="5"></textarea>
              </div>
            </div>
            <!-- 12 -->
            <div class="signle-table-filed">
              <h5>City</h5> 
              <div>
                  <input type="text">
              </div>
            </div>
            <!-- 13 -->
            <div class="signle-table-filed">
              <h5>Country</h5> 
              <div>
                  <input type="text">
              </div>
            </div>
            <!-- 14 -->
            <div class="signle-table-filed">
              <h5>IP</h5> 
              <div>
                  <input type="text">
              </div>
            </div>
            <span class="close-btn"><i onclick="visible()" class="fa-solid fa-xmark"></i></span>
        </div>
    </div>
    <!-- bootstrap5 link  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script type="text/javascript">

    let popupClose = document.querySelector('.close-btn');
    let mainPopup = document.querySelector('.popup-wraper');
    let tablepopup = document.querySelector('.table-popup');
    function visible(){
      tablepopup.classList.toggle('visible');
      mainPopup.classList.toggle('visible');
    }
</script>
</body>
</html>