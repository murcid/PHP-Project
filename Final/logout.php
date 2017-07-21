<?php
/*
name: Diana Murcia Montoya
date: 05/07/2016
project: Final
file: logout.php
 */

session_start();
session_unset();
session_destroy();
header ("location: login.php");
?>