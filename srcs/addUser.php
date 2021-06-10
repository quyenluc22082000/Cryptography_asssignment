<?php
    session_start();
    include 'config.php';
    
    //check role

    //check new user info

    if(isset($_POST['add-user'])){
        $entry['objectClass'] = "inetOrgPerson";
        $entry['uid'] = $_POST['user-id'];
        $entry['userpassword'] = $_POST['password'];
        $entry['cn'] = $_POST['fname'];
        $entry['sn'] = $_POST['lname'];
        $entry['mail'] = $_POST['email'];
        $entry['mobile'] = $_POST['phone'];
        
        //ldap_add ( resource $ldap , string $dn , array $entry , array|null $controls = null ) : bool
        $add_dn = "uid=".$_POST['user-id'].",ou=user,ou=system";
        if(ldap_add($ldap_con, $add_dn, $entry)){
            $userId_db = $_SESSION['id'];
            $username_db = $_SESSION['login'];
            $uip = $_SERVER['REMOTE_ADDR']; // get the user ip
            $action = "Add new user ".$entry['sn']; // query for inser user log in to data base
            $log_query = "INSERT into userlog(userId,username,userIp,action) values('$userId_db','$username_db','$uip','$action')";
            if(!mysqli_query($db_con, $log_query))
            echo "Cant add new user log!";

            $extra = "home.php";
            $host = $_SERVER['HTTP_HOST'];
            $uri = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
            header("location:http://$host$uri/$extra");
            exit(); 
        }
    }
?>