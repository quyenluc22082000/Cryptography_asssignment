<?php
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
        $extra = "home.php";
        $host = $_SERVER['HTTP_HOST'];
        $uri = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
        header("location:http://$host$uri/$extra");
        exit(); 
    }
    else{}
?>