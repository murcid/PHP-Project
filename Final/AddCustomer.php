<?php
/*
name: Diana Murcia Montoya
date: 05/07/2016
project: Final
file: AddCustomer.php
 */
include "session.php";

$first = "";
$last = "";
$address = "";
$city = "";
$state = "";
$zipcode = "";
$phone = "";
$isValid = true;
$submitted=false;

if (isset($_POST['submit'])) {
	$submitted=true;

    //First Name
    if (!empty($_POST["first"])) {
        $first=$_POST["first"];
    } else {
        $isValid=false;
    }

    //Last Name
    if (!empty($_POST["last"])) {
        $last=$_POST["last"];
    } else {
        $isValid=false;
    }

    //Address
    if (!empty($_POST["address"])) {
        $address=$_POST["address"];
    } else {
        $isValid=false;
    }

    //City
    if (!empty($_POST["city"])) {
        $city=$_POST["city"];
    } else {
        $isValid=false;
    }

    //State
    if (!empty($_POST["state"])) {
        $state=$_POST["state"];
    } else {
        $isValid=false;
    }

    //Zip Code
    if (!empty($_POST["zipcode"])) {
        $zipcode=$_POST["zipcode"];
    } else {
        $isValid=false;
    }

    //Phone Number
    if (!empty($_POST["phone"])) {
        $phone=$_POST["phone"];
    } else {
        $isValid=false;
    }

}
if (($submitted==true)&&($isValid==true)){
	require("php/insert.php");
	InsertCustomer($_POST["first"], $_POST["last"], $_POST["address"], $_POST["city"], $_POST["state"], $_POST["zipcode"], $_POST["phone"]);
	header('Location: ViewEditCustomers.php');
}else{

include "header.php";
?>
<h1>ADD A NEW CUSTOMER</h1>
<h3>Please Fill In The Customer Information</h3>
<form action="Addcustomer.php" method="post">
  
     <p>
        First Name &nbsp;&nbsp;
        <input id="FName" type="text" name="first" value="<?php echo $first; ?>" required>
    </p>
    <p>
        Last Name &nbsp;&nbsp;
        <input id="LName" type="text" name="last" value="<?php echo $last; ?>" required>
    </p>
    <p>
        Address &nbsp;&nbsp;
        <input id="Address" type="text" name="address" value="<?php echo $address; ?>" required>
    </p>
    <p>
        City &nbsp;&nbsp;
        <input id="City" type="text" name="city" value="<?php echo $city; ?>" required>
    </p>
    <p>
        State &nbsp;&nbsp;
        <select id="DDBState" name="state" required>
            <option value="">Please enter a state...</option>
            <option value="AL">Alabama</option>
            <option value="AK">Alaska</option>
            <option value="AZ">Arizona</option>
            <option value="AR">Arkansas</option>
            <option value="CA">California</option>
            <option value="CO">Colorado</option>
            <option value="CT">Connecticut</option>
            <option value="DE">Delaware</option>
            <option value="DC">District of Columbia</option>
            <option value="FL">Florida</option>
            <option value="GA">Georgia</option>
            <option value="HI">Hawaii</option>
            <option value="ID">Idaho</option>
            <option value="IL">Illinois</option>
            <option value="IN">Indiana</option>
            <option value="IA">Iowa</option>
            <option value="KS">Kansas</option>
            <option value="KY">Kentucky</option>
            <option value="LA">Louisiana</option>
            <option value="ME">Maine</option>
            <option value="MD">Maryland</option>
            <option value="MA">Massachusetts</option>
            <option value="MI">Michigan</option>
            <option value="MN">Minnesota</option>
            <option value="MS">Mississippi</option>
            <option value="MO">Missouri</option>
            <option value="MT">Montana</option>
            <option value="NE">Nebraska</option>
            <option value="NV">Nevada</option>
            <option value="NH">New Hampshire</option>
            <option value="NJ">New Jersey</option>
            <option value="NM">New Mexico</option>
            <option value="NY">New York</option>
            <option value="NC">North Carolina</option>
            <option value="ND">North Dakota</option>
            <option value="OH">Ohio</option>
            <option value="OK">Oklahoma</option>
            <option value="OR">Oregon</option>
            <option value="PA">Pennsylvania</option>
            <option value="RI">Rhode Island</option>
            <option value="SC">South Carolina</option>
            <option value="SD">South Dakota</option>
            <option value="TN">Tennessee</option>
            <option value="TX">Texas</option>
            <option value="UT">Utah</option>
            <option value="VT">Vermont</option>
            <option value="VA">Virginia</option>
            <option value="WA">Washington</option>
            <option value="WV">West Virginia</option>
            <option value="WI">Wisconsin</option>
            <option value="WY">Wyoming</option>
        </select>
    </p>
    <p>
        Zip Code &nbsp;&nbsp;
        <input id="ZipCode" type="text" name="zipcode" value="<?php echo $zipcode; ?>" required>
    </p>
    <p>
        Phone Number &nbsp;&nbsp;
        <input id="PhoneNo" type="text" name="phone" value="<?php echo $phone; ?>" required>
    </p>
    <br />

    <input id="BtnSubmit" class="submitbutton" name="submit" type="submit" value="submit" />
    <input id="BtnReset" class="submitbutton" name="reset" type="reset" value="Reset" />

    <?php
}
    ?>
</form>
<br />
<?php
include "footer.php";
?>