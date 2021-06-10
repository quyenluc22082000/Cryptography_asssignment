<?php
    session_start();
    include 'config.php';

    if(isset($_POST["otpSubmit"])){
        $OTP_input = $_POST["otp"];
        $query = "SELECT * from otp_expired WHERE email = '".$_SESSION["email"]."' AND is_expired = 0";
        $res = mysqli_query($db_con, $query);
        if(!$res)
            echo "Cant query";
        else{
            $row = mysqli_fetch_assoc($res);  
            if($OTP_input == $row["otp"]){
                $query = "UPDATE `otp_expired` SET `is_expired`= 1  WHERE otp = '".$OTP_input."'";
                $res = mysqli_query($db_con, $query);
                if(!$res)
                    echo "Cannot update expired";
                $_SESSION['validated'] = TRUE;
            }                      
        }
    }
    if(isset($_SESSION['validated'])){
        $userId_db = $_SESSION['id'];
        $username_db = $_SESSION['login'];
        $uip = $_SERVER['REMOTE_ADDR']; // get the user ip
        $action = "Login"; // query for inser user log in to data base
        $log_query = "INSERT into userlog(userId,username,userIp,action) values('$userId_db','$username_db','$uip','$action')";
        if(!mysqli_query($db_con, $log_query))
            echo "Cant Insert user log!";

        if($_SESSION['role'] == "user"){
            header("Location:detailInformation.php");
        }
        else{
            header("Location:home.php");
        }   
    }
    
?>