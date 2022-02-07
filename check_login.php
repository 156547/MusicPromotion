<?php

// ERROR CHECK
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// CONNECT TO DATABASE
require_once 'db_connect.php';   

// GET USERNAME AND PASS FROM FORM
$username=$_POST['username']; 
$password=$_POST['password']; 

try{
    // CHECK USERNAME AND PASS EXIST IN DATABASE
    $query = $db->prepare("SELECT * FROM `tblUsers` WHERE `username` = :username AND `password` =:password");
    $query->execute(array('username' => $username, 'password' => $password));    
    $row = $query->fetch(PDO::FETCH_ASSOC);
    if($row){
        echo 'succesful';
    }
    else{
        echo 'incorrect';
    }

}
catch(Exception $exception){
    echo $exception;
}