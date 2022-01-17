<?php

// DETAILS TO ACCESS DATABASE
$host_name = '127.0.0.1';
$database_name = 'testusername';
$username = 'root';
$password = '';

// CONNECT TO MYSQL DATABASE WITH DETAILS
try {
        $db = new PDO("mysql:host=$host_name;dbname=$database_name;charset=utf8", $username, $password);
        // Ensure PDO will throw exceptions on error
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $error)
    {
        echo $error->getMessage();
    }