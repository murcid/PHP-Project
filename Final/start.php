<?php
/*
name: Diana Murcia Montoya
date: 05/07/2016
project: Final
file: start.php
*/
require "php/DBConnect.php";
session_start();

if (isset($_POST['submit'])) {

    $myusername = $_POST['userID'];
    $mypassword = $_POST['password'];

    $sql = "SELECT id FROM login WHERE username='$myusername' AND password='$mypassword'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
            $_SESSION['username']= $myusername;
            $_SESSION['password']= $mypassword;
            header ('location: index.php');
        }
    }
    else {
        require "logout.php";
    }
    require "php/DBClose.php";
}

?>