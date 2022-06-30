<?php

if($_SERVER['REQUEST_METHOD']== 'POST'){
    include 'dbconnect.php';
    $email = $_POST['userid'];
    $password = $_POST['password'];
    // $pass = password_hash($pass, PASSWORD_DEFAULT);
    // var_dump($email); die;

    $sql = "SELECT * from `adminlogin` where user_id = '$email'";
    // print_r($sql);
    $result = mysqli_query($conn, $sql);
    $numRows = mysqli_num_rows($result);
    if($numRows==1){
        $row = mysqli_fetch_assoc($result);
        $hash=$row['password'];
        // var_dump($pass, $ha0sh); die;
        // die($hash . $password);
        if($pass==$hash){
        // if($pass==$hash){
            session_start();
            $_SESSION['loggedin']=true;
            $_SESSION['sno']=$row['sno'];
            $_SESSION['userid']=$email;
            // echo "logged in ". $email;
            header("Location:/multipageAdmin");
        }else{
            echo "something went wrong";
            // header("Location:/multipageAdmin");
            // echo 'User id or password is incorrect.';
        }
        // header("Location: /itforum/index.php");
    }else{
        header("Location:/multipageAdmin");
        echo "user id not found";
    }
}


?>