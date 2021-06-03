<?php
session_start();
if($_SESSION['login'])
{
?><!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>welcome</title>
</head>
<body>
    <button onclick="location.href='watchLog.php';">Watch Log</button> <br>
    <button onclick="location.href='watchUser.php';">Watch User</button>
    <p>Welcome : <?php echo $_SESSION['login'];?> | <a href="logout.php">Logout</a> </p>
    <p><a href="userlog.php">User Access log</a></p>
    <p><a href="userdetail.php">User Detail</a></p>
</body>
</html>
<?php
} 
else{
    header('location:logout.php');
}
?>