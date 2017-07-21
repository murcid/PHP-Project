<?php

/*
name: Diana Murcia Montoya
date: 05/07/2016
project: Final
file: php/selectcustomers.php
 */

require("php/DBConnect.php");
$sql = "SELECT * FROM php_customers";
$result = $conn->query($sql);
echo "<br />\n<div id='DivTable'>";
echo "<table class='customerTable' border='1'>\n";
echo "<tr><th>ID</th><th>First Name</th><th>Last Name</th>";
echo "<th>Street Address</th><th>City</th><th>State</th>";
echo "<th>Zip Code</th><th>Phone number</th></tr>\n";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td>";
        echo "<td>" . $row["first"]. "</td>";
        echo "<td>" . $row["last"]. "</td>";
        echo "<td>" . $row["address"]. "</td>";
        echo "<td>" . $row["city"]. "</td>";
        echo "<td>" . $row["state"]. "</td>";
        echo "<td>" . $row["zipcode"]. "</td>";
        echo "<td>" . $row["phone"]. "</td></tr>\n";
    }
} else {
    echo "<tr><td colspan='3'><span class='center'>0 results</span></td></tr>\n";
}
echo "</table>\n";
echo "</div>";