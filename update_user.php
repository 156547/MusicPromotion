<?php
// START SESSION
session_start();

// ERROR CHECK
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// CONNECT TO DATABASE
require_once 'db_connect.php'; 

// GET USER DETAILS TO UPDATE
$user_id = $_SESSION["user_id"];
$username = $_POST["username"];
$password = $_POST["password"];

// UPDATE USER DETAILS
$query = $db->prepare("UPDATE `tblusers` SET `username`='$username',`password`='$password' WHERE $user_id");
$query->execute();

header("Location: update.php");
?>