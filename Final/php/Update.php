<?php
/*
name: Diana Murcia Montoya
date: 05/07/2016
project: Final
file: php/Update.php
 */

function UpdateCustomer($id, $first, $last, $address, $city, $state, $zipcode, $phone){
    require("DBConnect.php");
    // Run query

	$sql = "UPDATE php_customers SET first = '{$first}', last = '{$last}', address = '{$address}', city = '{$city}', state = '{$state}', zipcode = '{$zipcode}', phone = '{$phone}' WHERE id = '{$id}'";
    $conn->query($sql);
    require("php/DBClose.php");
}