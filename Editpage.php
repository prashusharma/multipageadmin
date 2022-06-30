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
            border: 1px solid #33404f;
        }
        .main-box-admin2{
            padding-right:35px !important ;
        }
        .main-box-edit-page{
            background-color: #33404f !important;
        }
        .admin-div-filed2 textarea{
            width: 100%;
            outline: none;
            border: 1px solid #33404f;
            padding: 4px 10px !important;
            box-shadow: 0px 0px 5px rgb(0 0 0 / 30%);
        }
        .result-edit-div{
            display: flex;
            justify-content: start;
            align-items: center;
            /* padding: 5px ; */
            /* border: 1px solid; */
            margin-bottom: 20px;
            font-style: italic;
        }
        .result-edit-div div.result-header{
            font-style: italic;
            margin-right: 15px;
            padding: 15px 20px;
            font-size: 20px;
            background-color: #7f7f7f;
            color: #fff;
            font-weight: 600;
        }
        .result-edit-div{
            background-color: #d1d1d1;
        }
        .result-edit-div div.location-selecet{
            display: flex;
            justify-content: start;
            flex-direction: column;
            font-size: 14px;
            font-style: italic;
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
                        <h4>Edit Page</h4>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-9 col-lg-9 mx-auto">
                            <h4 class="text-center mb-4">Select a City Web Page to Edit</h4>
                            <!-- 1 -->
                            <div class="admin-div-filed admin-div-filed2 d-flex align-items-center mb-4">
                                <h4 style="font-weight:600; font-size:16px;">Select City Page to Edit</h4>
                                <div>
                                    <input style="box-shadow: none; border:1px solid #ddd; background-color:#f6fcfe;" type="text">
                                </div>
                           </div>

                            <div class="result-edit-div">
                               <div class="result-header">
                                    Result
                               </div>
                               <div class="location-selecet">
                                    <b>Bangalore-(select)</b>
                                    <b>Bangalore Web-(select)</b>
                               </div>
                            </div>
                            <h5 class="text-center mb-4">Select 1 Page to edit</h5>
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
                                <div class="main-box main-box-edit-page main-box-admin main-box-admin2">
                                    <span style="color: #fff; font-weight: bold; text-decoration: underline;">Update details on Website</span>
                                    <div class="input-filed mt-3">
                                        <form class="px-4" action="">
                                            <!-- 1 -->
                                           <div class="admin-div-filed admin-div-filed2">
                                                <h4>Phone Number</h4>
                                                <div>
                                                    <input type="text">
                                                </div>
                                           </div>
                                           <!-- 2 -->
                                           <div class="admin-div-filed admin-div-filed2">
                                                <h4>WhatsApp Number</h4>
                                                <div>
                                                    <input type="text">
                                                </div>
                                            </div>
                                            <!-- 3 -->
                                            <div class="admin-div-filed admin-div-filed2">
                                                <h4>Email</h4>
                                                <div>
                                                    <input type="text">
                                                </div>
                                           </div>
                                           <!-- 4 -->
                                           <div class="admin-div-filed admin-div-filed2">
                                                <h4>Add Massage to Top Header Only to The Selected City</h4>
                                                <div>
                                                    <textarea name="" id="" rows="4"></textarea>
                                                </div>
                                            </div>
                                            <!-- 5 -->
                                            <div class="admin-div-filed admin-div-filed2">
                                                <h4>Add any Special Script to Header only to the selected city</h4>
                                                <div>
                                                    <input type="text">
                                                </div>
                                           </div>
                                           <!-- 6 -->
                                           <div class="admin-div-filed admin-div-filed2">
                                                <h4>New HTML Code update</h4>
                                                <div>
                                                    <textarea name="" id="" rows="6"></textarea>
                                                </div>
                                            </div>
                                            <!-- 7 -->
                                            <div class="admin-div-filed admin-div-filed2">
                                                <h4>1<sup>st</sup> Keyword update in Content</h4>
                                                <div>
                                                    <input type="text">
                                                </div>
                                           </div>
                                           <!-- 8 -->
                                           <div class="admin-div-filed admin-div-filed2">
                                                <h4>2<sup>nd</sup> Keyword update in Content</h4>
                                                <div>
                                                    <input type="text">
                                                </div>
                                            </div>
                                            <!-- 9 -->
                                            <span style="color: #fff; font-weight: bold; text-decoration: underline;">Meta Tags Update</span>
                                            <div class="admin-div-filed admin-div-filed2 mt-3">
                                                <h4>Title</h4>
                                                <div>
                                                    <input type="text">
                                                </div>
                                            </div>
                                            <!-- 10 -->
                                            <div class="admin-div-filed admin-div-filed2">
                                                <h4>Description</h4>
                                                <div>
                                                    <input type="text">
                                                </div>
                                           </div>
                                           <!-- 11 -->
                                           <div class="admin-div-filed admin-div-filed2">
                                                <h4>Keywords</h4>
                                                <div>
                                                    <input type="text">
                                                </div>
                                            </div>
                                            <div class="admin-div-filed admin-div-filed2">
                                                <h4>URL Update</h4>
                                                <div>
                                                    <input style="color: gray;" type="text" value="www.Organizein.com/">
                                                </div>
                                            </div>
                                            
                                            
                                        </form>
                                    </div>
                                </div>
                                
                                
                                    
                                
                            </form>
                            <br>
                            <br>
                            <div style="width: 100% ; " class="text-center mb-5">
                                <a style="background-color:#fcbe32; width: 100%; color: rgb(0, 0, 0);" class="create-website" href="#">Save Web Page</a>
                            </div>
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