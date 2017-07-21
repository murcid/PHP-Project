<?php

/*
name: Diana Murcia Montoya
date: 05/07/2016
project: Final
file: php/SelectOrders.php
 */

require("php/DBConnect.php");
//$sql = "SELECT * FROM orders";
$sql="SELECT o.idOrder, o.date, o.customerID, o.total, c.id, c.first, c.last from php_customers c, orders o where c.id=o.customerID";

$result = $conn->query($sql);
echo "<br />\n<div id='DivTable'>";
echo "<form method='post' action='ViewOrder.php'>";
echo "<table class='MyOrders' border='1'>\n";
echo "<tr><th>Order Number</th><th>Customer Full Name</th>";
echo "<th>Order Date</th><th>Total</th><th></th></tr>\n";
if ($result->num_rows > 0) {
    // output data of each row
    $rowNum=0;
    while($row = $result->fetch_assoc()) {
        $rowNum++;
        echo "<tr><td><input id='OrderID$rowNum' type='text' name='OrderID$rowNum' class='Hidden' value='" . $row["idOrder"]. "' readonly /></td>";
        echo "<td>" . $row["first"]."".' '."". $row["last"]. "</td>";
        echo "<td>" . $row["date"]. "</td>";
        echo "<td> $" . $row["total"]. "</td>";
        echo "<td><button type='button' name='submit' class='submitbutton' onclick='window.location = \"ViewOrder.php?oid=$rowNum\"' value='$rowNum' >view order</button></td>";
    }
} else {
    echo "<tr><td colspan='8'><span class='center'>0 results</span></td></tr>\n";
}
echo "</table>\n";
echo "</form>";
echo "</div>";