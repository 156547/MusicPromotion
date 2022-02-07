<?php
// ERROR CHECK
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// CONNECT TO DATABASE
require_once 'db_connect.php'; 

// GET USER TO DELETE
$user_id = $_GET["link"];

// DELETE USER
$query = $db->prepare("DELETE FROM tblUsers WHERE userId = $user_id");
$query->execute();

header("Location: delete.php");