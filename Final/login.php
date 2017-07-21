<?php
/*
name: Diana Murcia Montoya
date: 05/07/2016
project: Final
file: login.php
 */
include ('start.php');
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
<div id="DivContainer">
<br />
<form method="POST" >
    <p><label for="TBUserID">User Name</label>
    <input id="TBUserID" name="userID" type="text" required/></p>
    <p><label for="TBPassword">Password</label>
    <input id="TBPassword" name="password" type="password" required/></p>
    <br />
    <input id="TBSubmit" name="submit" class="submitbutton" type="submit" value="LOG IN" />
</form>
</div>
    <script type="text/javascript" src="scripts/scripts.js"></script>
</body>
</html>