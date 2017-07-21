<?php
/*
name: Diana Murcia Montoya
date: 05/07/2016
project: Final
file: header.php
 */
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Buy It All!</title>
    <link type="text/css" rel="stylesheet" href="styles/styles.css" />
    <script src="scripts/jquery-2.2.3.min.js"></script>
</head>
<body>
<div id="DivSpace">
<img src="images/butterfly.jpg" class="image" />
<h1>BUY IT ALL!</h1>
</div>
<?php
include "buttons.php";
?>
<div id="DivContainer">
    <div class="SubDivContainer">
<?php
echo "Welcome ".$_SESSION['username'];
?>
    </div>
