<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap 5 link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- google font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- custome css  -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/contactForms.css">

    <title>Create Account</title>
</head>
<body>
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
                        <h4>Manage Page</h4>
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
                                <th scope="col">Country</th>
                                <th scope="col">State</th>
                                <th scope="col">City</th>
                                <th scope="col">Name</th>
                                <th scope="col">Link</th>
                                <th scope="col">Manage</th>     
                              </tr>
                            </thead>
                            <tbody>
                                <!-- 1 -->
                              <tr>
                                <td>1</td>
                                <td>India</td>
                                <td>KA</td>
                                <td>Bangalore </td>
                                <td>Main</td>
                                <td>Organizein.com/In/Bangalore</td>
                                <td>Download / Edit / Delete</td>
                              </tr>
                              <!-- 2 -->
                              <tr>
                                <td>1</td>
                                <td>India</td>
                                <td>KA</td>
                                <td>Bangalore </td>
                                <td>Main</td>
                                <td>Organizein.com/In/Bangalore</td>
                                <td>Download / Edit / Delete</td>
                              </tr>
                              <!-- 3 -->
                              <tr>
                                <td>1</td>
                                <td>India</td>
                                <td>KA</td>
                                <td>Bangalore </td>
                                <td>Main</td>
                                <td>Organizein.com/In/Bangalore</td>
                                <td>Download / Edit / Delete</td>
                              </tr>
                              <!-- 4 -->
                              <tr>
                                <td>1</td>
                                <td>India</td>
                                <td>KA</td>
                                <td>Bangalore </td>
                                <td>Main</td>
                                <td>Organizein.com/In/Bangalore</td>
                                <td>Download / Edit / Delete</td>
                              </tr>
                              <!-- 5 -->
                              <tr>
                                <td>1</td>
                                <td>India</td>
                                <td>KA</td>
                                <td>Bangalore </td>
                                <td>Main</td>
                                <td>Organizein.com/In/Bangalore</td>
                                <td>Download / Edit / Delete</td>
                              </tr>
                              <!-- 6 -->
                              <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td> </td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>
                              <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td> </td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>
                              <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td> </td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>
                              <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td> </td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>
                              <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td> </td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>
                              <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td> </td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>
                              <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td> </td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>
                              <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td> </td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>
                              <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td> </td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>
                              <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td> </td>
                                <td></td>
                                <td></td>
                                <td></td>
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
    <!-- bootstrap5 link  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
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
</body>
</html>