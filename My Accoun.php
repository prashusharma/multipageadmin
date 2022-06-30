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
    <link rel="stylesheet" href="./css/myaccount.css">
    <link rel="stylesheet" href="./css/login.css">
    <title>My Account</title>
    <style>
        .admin-div-filed div{
            width: 60%;
        }
        .admin-div-filed div input{
            outline: none;
            border: 1px solid #00b0f0;
        }
        .main-box-admin2{
            padding-right:35px !important ;
        }
    </style>
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
                <div class="col-12 col-md-9 col-lg-9 mx-auto">
                    <div class="right-site">
                        <h4>My Account</h4>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-9 col-lg-9 mx-auto">
                            <form action="">
                                <!-- <div class="main-form- change-pass-form">
                                    <div class="change-pass-header">
                                        <h4 class="mb-4">Change Password</h4>
                                    </div>
                                    <div>
                                        <div class="single-filed">
                                            <h5>Current Password</h5> 
                                            <div class="right right-input">
                                                <input type="text">
                                            </div>
                                        </div>
                                        <div class="single-filed">
                                            <h5>New Password</h5> 
                                            <div class="right right-input">
                                                <input type="text">
                                            </div>
                                        </div>
                                        <div class="single-filed ">
                                            <h5>Reenter New Password</h5> 
                                            <div class="right right-input">
                                                <input type="text">
                                            </div>
                                        </div>
                                        
        
                                    </div>
                                </div> -->
                                <div class="main-box main-box-admin main-box-admin2">
                                    <h4 class="pt-3 mb-5 text-center">Change Password</h4>
                                    <div class="input-filed">
                                        <form class="px-4" action="">
                                            <!-- 1 -->
                                           <div class="admin-div-filed admin-div-filed2">
                                                <h4>Current Password</h4>
                                                <div>
                                                    <input type="text">
                                                </div>
                                           </div>
                                           <!-- 2 -->
                                           <div class="admin-div-filed admin-div-filed2">
                                                <h4>New Password</h4>
                                                <div>
                                                    <input type="text">
                                                </div>
                                            </div>
                                            <!-- 3 -->
                                            <div class="admin-div-filed admin-div-filed2">
                                                <h4>Reenter Password</h4>
                                                <div>
                                                    <input type="text">
                                                </div>
                                           </div>
                                            <br>
                                            <br>
                                            <div style="width: 100% ; " class="text-center mb-5">
                                                <a style="background-color:#036081; width: 100%; color: #fff;" class="create-website" href="#">Change Password</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                
                                
                                    
                                
                            </form>
                        </div>
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