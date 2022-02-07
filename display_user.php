<?php
// START SESSION
session_start();

// ERROR CHECK
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// CONNECT TO DATABASE
require_once 'db_connect.php'; 

// GET USER DETAILS
$user_id = $_GET["userId"];
$username = $_GET["username"];
$password = $_GET["password"];

$_SESSION["user_id"] = $user_id;

// echo "$user_id $username $password";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music promotion</title>
</head>
<body>
    <form action="update_user.php" method="POST">
        <label>User id: <?php echo $user_id; ?></label><br><br>
        <label for="username">Username</label>
        <input type="text" id="username" name="username" value = <?php echo $username ?>><br><br>
        <label for="password">Password</label>
        <input type="text" id="password" name="password" value = <?php echo $password ?>><br><br>
        <input type="submit" value="Update">
      </form>
</body>
</html>