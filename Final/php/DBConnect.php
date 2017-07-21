<?php
/*
name: Diana Murcia Montoya
date: 05/07/2016
project: Final
file: php/DBConnect.php
 */
require("DBCredentials.php");

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>