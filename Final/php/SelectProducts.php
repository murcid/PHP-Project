<?php
/*
name: Diana Murcia Montoya
date: 05/07/2016
project: Final
file: php/SelectProducts.php
*/ 

require("php/DBConnect.php");
$sql = "SELECT * FROM products";
$result = $conn->query($sql);
echo "<br />\n<div id='DivTable'>";
echo "<table class='productTable' border='1'>\n";
echo "<tr><th>ID</th><th>Name</th><th>image</th>";
echo "<th>Price</th><th>Description</th><th>Quantity</th></tr>\n";
if ($result->num_rows > 0) {
    // output data of each row
    $rowNum=0;
    while($row = $result->fetch_assoc()) {
        $rowNum++;
        echo "<tr><td><input id='TbId$rowNum' type='text' name='TbId$rowNum' class='Hidden' value='" . $row["id"]. "' readonly /></td>";
        echo "<td><input id='TbName$rowNum' type='text' name='TbName$rowNum' class='Hidden' value='" . $row["name"]. "' readonly /></td>";
        echo "<td class='Popout'><img src=". $row["image"]. " name=".$row["image"]." class='order'/><span><img src=". $row["image"]. "/></span></td>";
        echo "<td><input id='TbPrice$rowNum' type='text' name='TbPrice$rowNum' class='Hidden' value='" . $row["price"]. "' readonly /></td>";
        echo "<td>" . $row["description"]. "</td>";
        echo "<td class='tdquantity'><p><input id='BtnMinus$rowNum' type='button' name='quantity$rowNum' value='-' onclick='Subtract($rowNum);'/><input id='TBQuantity".$rowNum."' type='number' name='TBquantity$rowNum' value=0 class='tbSmall' readonly /><input id='BtnPlus$rowNum' type='button' value='+' name='quantity$rowNum' onclick='Add($rowNum);'/></p></td>";
        echo "</tr>\n";
    }
}
echo "</table>\n";
echo "</div>";
echo "<div class='DivCustomerBottom'>";
echo "<p>Subtotal &nbsp;&nbsp;&nbsp;"; 
echo "<input id='TbSubtotal' class='right' name='subtotal' type='number' readonly/></p>";
echo "<p>Tax &nbsp;&nbsp;&nbsp;";
echo "<input id='TbTax' name='tax' class='right' type='number' readonly/></p>";
echo "<p>Total &nbsp;&nbsp;&nbsp;";
echo "<input id='TbTotal' name='total' class='right' type='number' readonly/></p>";


echo "</div>";
?>
<script>
    var rows=<?php echo $rowNum; ?>;
</script> 
