<?php

/*
name: Diana Murcia Montoya
date: 05/07/2016
project: Final
file: php/SelectOneOrder.php
 */

require("php/DBConnect.php");

echo "<h2>Order Details</h2>";

$oid=$_GET['oid'];
$sql="SELECT * FROM php_customers c, orders o WHERE c.id=o.customerID AND o.idOrder=$oid"; 
//$sql="SELECT o.idOrder, o.date, o.customerID, o.total, c.id, c.first, c.last from php_customers c, orders o where c.id=o.customerID";
$result = $conn->query($sql);

echo "<br />\n<div id='DivTable'>";
echo "<table class='FirstOrder'>\n";
echo "<tr><th>Customer Name</th><th>Address</th><th>Telephone Number</th>";
echo "<th>Order Number</th><th>Order Date</th></tr>\n";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["first"]."".' '."". $row["last"]. "</td>";
        echo "<td>" . $row["address"].", " . $row["city"]." " . $row["state"]." " . $row["zipcode"]."</td>";
        echo "<td>" . $row["phone"]."</td>";
        echo "<td>" . $row["idOrder"]."</td><td>". $row["date"]. "</td></tr>";

        echo "</table>\n";
        echo "<br /><br/>";
        echo "<h3 style='text-decoration:underline'>Products Ordered</h3>";
        echo "<table class='Order1' border='1'>";

        if($row['p01'] > 0){
             GetProducts("p01",$row['p01'],$conn);
        }
        if($row['p02'] > 0){
            GetProducts("p02",$row['p02'],$conn);
        }
        if($row['p03'] > 0){
            GetProducts("p03",$row['p03'],$conn);
        }
        if($row['p04'] > 0){
            GetProducts("p04",$row['p04'],$conn);
        }
        if($row['p05'] > 0){
            GetProducts("p05",$row['p05'],$conn);
        }
        if($row['p06'] > 0){
            GetProducts("p06",$row['p06'],$conn);
        }
        if($row['p07'] > 0){
            GetProducts("p07",$row['p07'],$conn);
        }
        if($row['p08'] > 0){
            GetProducts("p08",$row['p08'],$conn);
        }
        if($row['p09'] > 0){
            GetProducts("p09",$row['p09'],$conn);
        }
        if($row['p10'] > 0){
            GetProducts("p10",$row['p10'],$conn);
        }
        echo "</table>\n";
        echo "<div class='total'>";
        echo "<table class='Order2' border='1'>\n";
        echo "<tr><th>Subtotal</th><td>$" . $row["subtotal"]."</td></tr>\n";
        echo "<tr><th>Tax</th><td>$" . $row["tax"]."</td></tr>\n";
        echo "<tr><th>Total</th><td>$" . $row["total"]."</td></tr>\n";
        echo "</div>";
        echo "<br />";
        echo "<br />";
    }
} else {
    echo "<tr><td colspan='10'><span class='center'>0 results</span></td></tr>\n";
}
echo "</table>\n";
echo "</div>";


function GetProducts($columnName, $qty, $conn)
{
    $sql="select * from products where Ordercol='".$columnName."'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td class='pp2'>". $row["id"]."</td><td class='Popout'><img src=". $row["image"]. " name=".$row["image"]." class='order'/><span><img src=". $row["image"]. "/></span></td><td class='pp'>". $row["name"]."</td><td class='pp'>$". $row["price"]."</td><td class='pp'>Quantity: ".$qty."</td></tr>";
            }
        }
}
