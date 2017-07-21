<?php

/*
name: Diana Murcia Montoya
date: 05/07/2016
project: Final
file: php/insert.php
 */


function InsertCustomer($first,$last,$address,$city,$state,$zipcode,$phone){
    require("php/DBConnect.php");
    $sql = "INSERT INTO php_customers(first, last, address, city, state, zipcode, phone) VALUES ('".$first ."','".$last."','".$address."','".$city."','".$state."','".$zipcode."','".$phone."' )";
    //echo $sql;
    $conn->query($sql);
    require("php/DBClose.php");
}
?>