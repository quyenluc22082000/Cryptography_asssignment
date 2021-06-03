<?php
session_start();
include 'config.php';
if(isset($_POST['login']))
{
    $username = $_POST['username']; // Get username
    $password = $_POST['password']; // get password
    //query for match the user inputs
    // $ret = mysqli_query($con,"SELECT * FROM login WHERE userName='$username' and password='$password'");
    // $num = mysqli_fetch_array($ret);

    //dn: distinguish name
    //uid: user id
    //ou: organization unit
    $role_arr = array("users", "manager", "admin");
    $role = "";
    for($i = 0; $i < count($role_arr); $i++){
        $ldap_dn = "uid=".$username.",ou=".$role_arr[i].",ou=system";
        $ldap_password = $password;    
        if (@ldap_bind($ldap_con, $ldap_dn, $ldap_password)){
            $role = $role_arr[i];
            break;
        }
    }    

    // admin: lam gi cung duoc
    // manager: chi coi duoc user detail vaf user log, them bot user k dba_close
    // user: chi coi duoc thong tin cua chinh user
    //     echo "Bind Successful!" . "<br>";
    // }
    // else {
    //     echo "Invalid user/pass or other error!";
    // }     
    
    // if user inputs match if condition will runn
    if ($role != ""){
        $_SESSION['login'] = $username; // hold the user name in session
        $_SESSION['userDn'] = $ldap_dn; // hold the user dn
        $_SESSION['role'] = $role;
        $_SESSION['id'] = session_id(); // get the current session_id
        // $num['id']; // hold the user id in session

        $uip = $_SERVER['REMOTE_ADDR']; // get the user ip
        $action = "Login";// query for inser user log in to data base
        $log_query = "INSERT into userlog(userId,username,userIp,action) values('".$_SESSION['id']."','".$_SESSION['login']."','$uip','$action')";
        mysqli_query($db_con,$log_query);

        // code redirect the page after login
        $extra = "welcome.php";
        $host = $_SERVER['HTTP_HOST'];
        $uri = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
        header("location:http://$host$uri/$extra");
        exit();
    }
    // If the userinput no matched with database else condition will run
    else
    {
        $_SESSION['msg'] = "Invalid username or password";
        $extra = "index.php";
        $host = $_SERVER['HTTP_HOST'];
        $uri = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
        header("location:http://$host$uri/$extra");
        exit();
    }
}
?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>User login and tracking in PHP using PHP OOPs Concept</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form name="login" method="post">
    <header>Login</header>
    <p style="color:red;"><?php echo $_SESSION['msg'];?><?php echo $_SESSION['msg']="";?></p>
    <label>Username <span>*</span></label>
    <input name="username" type="text" value="" required />
    <label>Password <span>*</span></label>
    <input name="password" type="password" value="" required />
    <button type="submit" name="login">Login</button>
    </form>
</body>
</html>