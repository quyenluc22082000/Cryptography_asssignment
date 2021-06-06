<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'crypt_db');

// 3307 is the MySQL port number on some mutual configured laptops
$db_con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME, 3307);
if(!$db_con)
  $db_con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$ldap_con = ldap_connect("127.0.0.1", 10389);
    
// set LDAP version 
ldap_set_option($ldap_con, LDAP_OPT_PROTOCOL_VERSION, 3);
ldap_set_option($ldap_con, LDAP_OPT_REFERRALS, 0);
?>

<!-- <form name="login" method="post" >
  <header>Login</header>
  <p style="color:red;">
    </p>
  <label>Username <span>*</span></label>
  <input name="username" type="text" value="" required />
  <label>Password <span>*</span></label>
  <input name="password" type="password" value="" required />
  <button type="submit" name="login">Login</button>
</form> -->