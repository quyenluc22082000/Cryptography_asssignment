<?php
    session_start();
    include 'config.php';
    // check role

    // find user then delete
    if(isset($_GET['uid'])){
        $del_uid = $_GET['uid'];
        $del_role = $_GET['role'];
    }
    // ldap_delete ( resource $ldap , string $dn , array|null $controls = null ) : bool
    $ldap_dn = "uid=".$del_uid.",ou=".$del_role.",ou=system";
    if(ldap_delete($ldap_con, $ldap_dn)){
        $userId_db = $_SESSION['id'];
        $username_db = $_SESSION['login'];
        $uip = $_SERVER['REMOTE_ADDR']; // get the user ip
        $action = "Deleted user ".$del_uid; // query for inser user log in to data base
        $log_query = "INSERT into userlog(userId,username,userIp,action) values('$userId_db','$username_db','$uip','$action')";
        if(!mysqli_query($db_con, $log_query))
            echo "Cant deleted user log!";

        $extra = "home.php";
        $host = $_SERVER['HTTP_HOST'];
        $uri = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
        header("location:http://$host$uri/$extra");
        exit(); 
    }
    else{}
?>