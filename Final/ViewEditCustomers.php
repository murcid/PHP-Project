<?php
/*
name: Diana Murcia Montoya
date: 05/07/2016
project: Final
file: ViewEditCustomers.php
 */
include "session.php";
include "header.php";
require "php/DBConnect.php";
require "php/selectcustomers.php";

?>
<form action="ChangeCustomers.php" method="POST">
    <p>
        Select Customer To Edit
        <select id="CustomerID" name="customerID" required>
            <option value="">Choose a customer.. </option>
<?php
$sql = "SELECT id, first, last FROM php_customers";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<option value ='".$row["id"]."'";
//if ($customerID==$row["id"])
//    echo "selected ";
echo ">".$row["first"]." ".''." ".$row["last"]."</option>\n";
    }
}
?>
</select>
</p>
    <input id="BtnSubmit" class="submitbutton" name="submit" type="submit" value="submit" />
</form>
<?php

require "php/DBClose.php";
include "footer.php";
?>
