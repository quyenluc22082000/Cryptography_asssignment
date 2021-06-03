<?php
// session_start();
// include 'config.php';

// if(isset($_POST['login']))
// {
//     $username=$_POST['username']; // Get username
//     $password=$_POST['password']; // get password
//     //query for match the user inputs
//     $ret=mysqli_query($con,"SELECT * FROM login WHERE userName='$username' and password='$password'");
//     $num=mysqli_fetch_array($ret);
//     // if user inputs match if condition will runn
//     if($num>0)
//     {
//         $_SESSION['login']=$username; // hold the user name in session
//         $_SESSION['id']=$num['id']; // hold the user id in session
//         $uip=$_SERVER['REMOTE_ADDR']; // get the user ip
//         $action="Login";// query for inser user log in to data base
//         mysqli_query($con,"insert into userlog(userId,username,userIp,action) values('".$_SESSION['id']."','".$_SESSION['login']."','$uip','$action')")
//         // code redirect the page after login
//         $extra="welcome.php";
//         $host=$_SERVER['HTTP_HOST'];
//         $uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
//         header("location:http://$host$uri/$extra");
//         exit();
//     }
//     // If the userinput no matched with database else condition will run
//     else
//     {
//         $_SESSION['msg']="Invalid username or password";
//         $extra="index.php";
//         $host = $_SERVER['HTTP_HOST'];
//         $uri = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
//         header("location:http://$host$uri/$extra");
//         exit();
//     }
// }
?>

<?php
$username = $_POST['username'];
$password = $_POST['password'];


$ldapconfig['host'] = 'LDAP SERVER';//CHANGE THIS TO THE CORRECT LDAP SERVER
$ldapconfig['port'] = '389';
$ldapconfig['basedn'] = 'dc=LDAP_SERVER,dc=com';//CHANGE THIS TO THE CORRECT BASE DN
$ldapconfig['usersdn'] = 'cn=users';//CHANGE THIS TO THE CORRECT USER OU/CN
$ds=ldap_connect($ldapconfig['host'], $ldapconfig['port']);

ldap_set_option($ds, LDAP_OPT_PROTOCOL_VERSION, 3);
ldap_set_option($ds, LDAP_OPT_REFERRALS, 0);
ldap_set_option($ds, LDAP_OPT_NETWORK_TIMEOUT, 10);

$dn="uid=".$username.",".$ldapconfig['usersdn'].",".$ldapconfig['basedn'];

if ($bind=ldap_bind($ds, $dn, $password)) {
  echo("Login correct");//REPLACE THIS WITH THE CORRECT FUNCTION LIKE A REDIRECT;
} else {

  echo("Unable to bind to server.</br>");

  echo("msg:'".ldap_error($ds)."'</br>".ldap_errno($ds)."");

  if ($bind=ldap_bind($ds)) {

    $filter = "(cn=*)";

    if (!($search=@ldap_search($ds, $ldapconfig['basedn'], $filter))) {
      echo("Unable to search ldap server<br>");
      echo("msg:'".ldap_error($ds)."'</br>");
    } else {
      $number_returned = ldap_count_entries($ds,$search);
      $info = ldap_get_entries($ds, $search);
      echo "The number of entries returned is ". $number_returned."<p>";
      for ($i=0; $i<$info["count"]; $i++) {
        var_dump($info[$i]);
      }
    }
  } else {
    echo("Unable to bind anonymously<br>");
    echo("msg:".ldap_error($ds)."<br>");
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<form action="" method="post">
<input name="username">
<input type="password" name="password">
<input type="submit" value="Submit">
</form>
</body>
</html>