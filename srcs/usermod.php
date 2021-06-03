<?php
    $ldap_dn = "";
    $ldap_user = "";    
    if(isset($_SESSION)){
        $ldap_dn = $_SESSION['userDn'];
        $ldap_user = $_SESSION['login'];        
    }

    function addUser()
    {
        //prepare data
        $info["cn"] = "John Jones";
        $info["sn"] = "Jones";
        $info["objectClass"] = "inetOrgPerson";
    
        // add data to directory
        
        $ldap_con = ldap_add($ldap_con, $ldap_dn, $info);

        if($ldap_con)
            echo "Add successful!";
        else
            echo "Add Failed!";
        ldap_close($ldap_con);
    }
    
    function changeUser()
    {
        // cant delete its own account, check it before delete
        $entry['mail'] = "example@gmail.com";
        $entry['role'] = 'user';
        // add attribute when its not exist, replace with new value
        $ldap_con = ldap_mod_replace($ldap_con, $ldap_dn, $entry);
        if($ldap_con)
            echo "Replace successful!";
        else
            echo "Replace Failed!";
        
        $filter = "uid=*,ou=users,ou=system";
    
    }

    function deleteUser()
    {
        // ldap_delete ( resource $ldap , string $dn , array|null $controls = null ) : bool
        ldap_delete($ldap_con, $ldap_dn);
    }       
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
</head>
<body>
    
</body>
</html>