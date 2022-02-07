<?php
// ERROR CHECK
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// CONNECT TO DATABASE
require_once 'db_connect.php';

// SELECT ALL USERS FROM TABLE
$query = $db->prepare("SELECT * FROM tblUsers");
$query->execute();    

while($row = $query->fetch(PDO::FETCH_ASSOC)){
    echo "<div><a href='display_user.php?userId=$row[userId]&username=$row[username]&password=$row[password]'>$row[userId]</a> $row[username]</div>";
}
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
</body>
</html>
