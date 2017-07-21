<?php
/*
name: Diana Murcia Montoya
date: 05/07/2016
project: Final
file: AddOrder.php
 */
include "session.php";
$customerID = "";
$date = "";
$error ="";
$isValid = true;
$submitted=false;

if (isset($_POST['submit'])) {
	$submitted=true;
    $error="";

    //customer ID
    if (!empty($_POST["customerID"])) {
        $customerID=$_POST["customerID"];
    } else {
        $isValid=false;
    }

    //Date
    if (!empty($_POST["date"])) {
        $date=$_POST["date"];
    } else {
        $isValid=false;
    }

    //To check if they have selected at least one item
    if (empty($_POST["subtotal"]) || ($_POST["subtotal"] == 0)) {
        $isValid=false;
        $error = "You have not selected any items yet!";
    }
}
if (($submitted==true)&&($isValid==true)){
	require("php/insertOrder.php");
	InsertOrder($_POST["customerID"], $_POST["date"], $_POST["TBquantity1"], $_POST["TBquantity2"], $_POST["TBquantity3"], $_POST["TBquantity4"], $_POST["TBquantity5"], $_POST["TBquantity6"], $_POST["TBquantity7"], $_POST["TBquantity8"], $_POST["TBquantity9"], $_POST["TBquantity10"], $_POST["subtotal"], $_POST["tax"], $_POST["total"]);
	header('Location: ViewOrders.php');
}else{
    include "header.php";
?>
<form action="AddOrder.php" method="POST">
    <div class="DivCustomer">
        <p>
            Customer Name &nbsp;&nbsp;&nbsp;
            <select id="CustomerID" name="customerID" required>
                <option value="">Choose a customer.. </option>
                <?php
    include "php/DBConnect.php";
    $sql = "SELECT id, first, last FROM php_customers";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<option value ='".$row["id"]."'";                 
            if ($customerID==$row["id"])
            echo "selected";
            echo ">".$row["first"]." ".''." ".$row["last"]."</option>\n";
        }
    }
                ?>
            </select>
        </p>
        <!--Datepicker Does not work in IE 11.-->
        <p>
            Order Date &nbsp;&nbsp;&nbsp;
            <input id="date" type="text" name="date" value="<?php echo $date; ?>"required/>
        </p>
    </div>
<?php
    include "php/SelectProducts.php";
}
?>
<br/>
<p class="error"><?php echo $error; ?></p>
<br />
<input id="BtnSubmit" class="submitbutton" name="submit" type="submit" value="Submit Order" />
</form>
<br />
<?php
include "footer.php";
?>
