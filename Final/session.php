<?PHP
/*
name: Diana Murcia Montoya
date: 05/07/2016
project: Final
file: session.php
 */ 

session_start();

if (!(isset($_SESSION['username']) && $_SESSION['password'] != '')) {

    header ("Location: login.php");
}
?>