<?php
session_start();
if (isset($_SESSION['user_id'])) {
    header("LOCATION: ./index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!----------------------- custom css  ----------------------->
    <link rel="stylesheet" href="../style css/admin.css">
    <!---------------------- fontawesome  ------------------------>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
</head>

<body>
    <!----------------------------- Header Section --------------------------->
    <div class="admin-header d-flex justify-content-between p-2">
        <img src="../images/organizein-logo-main.png" alt=""> <span><span>Add New Website</span> <span class="mx-3">My
                Account</span></span>
    </div>
    <!-- Admin Control Content -->
    <div class="container my-5">
        <div class="text-center fs-2 my-3">
            Login to Organizein City Page Management
        </div>
        <div class="admin-login p-3">
            <form action="./action_page.php" method="post">
                <div class="m-5">
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                        <div class="form-text text-danger"><?php echo $mess?></div>
                    </div>
                    <div class="text-end mb-3"><a href="/forget-password" class="text-danger">Forget Password</a></div>
                    <button class="btn btn-secondary w-100" name="login">LOG IN</button>

                    <?php if(isset($_GET['mess'])) : ?>
                    <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    
                        <strong><?php echo $_GET['mess']?></strong>
                    </div>
                    <?php endif ?>

                </div>
            </form>
        </div>
    </div>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <!---------------------- jQuery link  --------------------->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    $(document).ready(function() {

    });
    </script>
</body>

</html>