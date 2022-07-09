<?php
session_start();
if (!isset($_SESSION["isLoggedin"])) {
    header('Location: ./index.php');
}
include './partials/dbconnect.php';
?>
<?php include 'partials/header.php' ?>
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
    <!------------------ header section  ------------------------>
        <?php include 'partials/loggedin-header.php' ?>
    <!------------------ header section end ------------------------>

    <section>
        <div class="container">
            <div class="row">
            <?php include 'partials/sidebar.php' ?>
                <div class="col-12 col-md-9 col-lg-9 mx-auto">
                    <div class="right-site">
                        <h4>Add admins</h4>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-9 col-lg-9 mx-auto">
                            <form action="./auth/new_admin.php" method="POST">
                                <input type="hidden" name="add_admin">
                                <div class="main-box main-box-admin main-box-admin2">
                                    <h4 class="pt-3 mb-5 text-center">Add Another Admin</h4>
                                    <div class="input-filed">
                                        <form class="px-4" action="">
                                            <!-- 1 -->
                                           <div class="admin-div-filed admin-div-filed2">
                                                <h4>New admin email</h4>
                                                <div>
                                                    <input type="text" name="new_admin_email">
                                                </div>
                                           </div>
                                           <!-- 2 -->
                                           <div class="admin-div-filed admin-div-filed2">
                                                <h4>Admin Password</h4>
                                                <div>
                                                    <input type="text" name="new_admin_password">
                                                </div>
                                            </div>
                                            <!-- 3 -->
                                            <div class="admin-div-filed admin-div-filed2">
                                                <h4> Confirm Admin Password</h4>
                                                <div>
                                                    <input type="text" name="confirm_admin_password">
                                                </div>
                                           </div>
                                            <br>
                                            <br>
                                            <div style="display: flex ; justify-content: center;">
                                            <div style="width: 40% ; " class="text-center mb-5">
                                                <button type="submit" style="background-color:#036081; width: 100%; color: #fff; border: none;" class="create-website">Add admin</button>
                                            </div>
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