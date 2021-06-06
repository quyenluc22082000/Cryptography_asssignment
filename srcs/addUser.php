<?php
    include 'config.php';
    
    //check role

    //check new user info

    if(isset($_POST['add-user'])){
        $entry['user-id'] = $_POST['user-id'];
        $entry['userpassword'] = $_POST['password'];
        $entry['cn'] = $_POST['fname'];
        $entry['sn'] = $_POST['lname'];
        $entry['mail'] = $_POST['email'];
        $entry['mobile'] = $_POST['phone'];
         
        //ldap_add ( resource $ldap , string $dn , array $entry , array|null $controls = null ) : bool
        $add_dn = "uid=".$_POST['user-id'].",ou=user,ou=system";
        if(ldap_add($ldap_con, $add_dn, $entry)){
            $extra = "home.php";
            $host = $_SERVER['HTTP_HOST'];
            $uri = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
            header("location:http://$host$uri/$extra");
            exit(); 
        }
    }
?>