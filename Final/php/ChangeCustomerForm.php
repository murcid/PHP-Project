<?php

/*
name: Diana Murcia Montoya
date: 05/07/2016
project: Final
file: php/ChangeCustomerForm.php
 */ 

function GetForm($id)
{
	require "php/DBConnect.php";
    $sql = "SELECT * FROM php_customers WHERE id = '$id'";
    $result = $conn->query($sql);
    echo "<br />\n<div id='DivForm'>";
    echo '<form action="ChangeCustomers.php" method="post">';
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo '<p>Customer ID &nbsp;&nbsp;<input id="id" type="text" name="id" value="'.$row["id"].'" readonly/></p>';
            echo '<p>First Name &nbsp;&nbsp;<input id="FName" type="text" name="first" value="'.$row["first"].'" required/></p>';
            echo '<p>Last Name &nbsp;&nbsp;<input id="LName" type="text" name="last" value="'.$row["last"].'" required/></p>';
            echo '<p>Street Address &nbsp;&nbsp;<input id="Address" type="text" name="address" value="'.$row["address"].'" required/></p>';
            echo '<p>City &nbsp;&nbsp;<input id="City" type="text" name="city" value="'.$row["city"].'" required/></p>';
            $mystate = $row["state"];
?>

<p>
    State &nbsp;
    <select id="DDBState" name="state" required>
        <option value="">Please make a selection...</option>
        <option value="AL" <?PHP if($mystate=="AL") echo "selected";?>>Alabama</option>
        <option value="AK" <?PHP if($mystate=="AK") echo "selected";?>>Alaska</option>
        <option value="AZ" <?PHP if($mystate=="AZ") echo "selected";?>>Arizona</option>
        <option value="AR" <?PHP if($mystate=="AR") echo "selected";?>>Arkansas</option>
        <option value="CA" <?PHP if($mystate=="CA") echo "selected";?>>California</option>
        <option value="CO" <?PHP if($mystate=="CO") echo "selected";?>>Colorado</option>
        <option value="CT" <?PHP if($mystate=="CT") echo "selected";?>>Connecticut</option>
        <option value="DE" <?PHP if($mystate=="DE") echo "selected";?>>Delaware</option>
        <option value="DC" <?PHP if($mystate=="DC") echo "selected";?>>District of Columbia</option>
        <option value="FL" <?PHP if($mystate=="FL") echo "selected";?>>Florida</option>
        <option value="GA" <?PHP if($mystate=="GA") echo "selected";?>>Georgia</option>
        <option value="HI" <?PHP if($mystate=="HI") echo "selected";?>>Hawaii</option>
        <option value="ID" <?PHP if($mystate=="ID") echo "selected";?>>Idaho</option>
        <option value="IL" <?PHP if($mystate=="IL") echo "selected";?>>Illinois</option>
        <option value="IN" <?PHP if($mystate=="IN") echo "selected";?>>Indiana</option>
        <option value="IA" <?PHP if($mystate=="IA") echo "selected";?>>Iowa</option>
        <option value="KS" <?PHP if($mystate=="KS") echo "selected";?>>Kansas</option>
        <option value="KY" <?PHP if($mystate=="KY") echo "selected";?>>Kentucky</option>
        <option value="LA" <?PHP if($mystate=="LA") echo "selected";?>>Louisiana</option>
        <option value="ME" <?PHP if($mystate=="ME") echo "selected";?>>Maine</option>
        <option value="MD" <?PHP if($mystate=="MD") echo "selected";?>>Maryland</option>
        <option value="MA" <?PHP if($mystate=="MA") echo "selected";?>>Massachusetts</option>
        <option value="MI" <?PHP if($mystate=="MI") echo "selected";?>>Michigan</option>
        <option value="MN" <?PHP if($mystate=="MN") echo "selected";?>>Minnesota</option>
        <option value="MS" <?PHP if($mystate=="MS") echo "selected";?>>Mississippi</option>
        <option value="MO" <?PHP if($mystate=="MO") echo "selected";?>>Missouri</option>
        <option value="MT" <?PHP if($mystate=="MT") echo "selected";?>>Montana</option>
        <option value="NE" <?PHP if($mystate=="NE") echo "selected";?>>Nebraska</option>
        <option value="NV" <?PHP if($mystate=="NV") echo "selected";?>>Nevada</option>
        <option value="NH" <?PHP if($mystate=="NH") echo "selected";?>>New Hampshire</option>
        <option value="NJ" <?PHP if($mystate=="NJ") echo "selected";?>>New Jersey</option>
        <option value="NM" <?PHP if($mystate=="NM") echo "selected";?>>New Mexico</option>
        <option value="NY" <?PHP if($mystate=="NY") echo "selected";?>>New York</option>
        <option value="NC" <?PHP if($mystate=="NC") echo "selected";?>>North Carolina</option>
        <option value="ND" <?PHP if($mystate=="ND") echo "selected";?>>North Dakota</option>
        <option value="OH" <?PHP if($mystate=="OH") echo "selected";?>>Ohio</option>
        <option value="OK" <?PHP if($mystate=="OK") echo "selected";?>>Oklahoma</option>
        <option value="OR" <?PHP if($mystate=="OR") echo "selected";?>>Oregon</option>
        <option value="PA" <?PHP if($mystate=="PA") echo "selected";?>>Pennsylvania</option>
        <option value="RI" <?PHP if($mystate=="RI") echo "selected";?>>Rhode Island</option>
        <option value="SC" <?PHP if($mystate=="SC") echo "selected";?>>South Carolina</option>
        <option value="SD" <?PHP if($mystate=="SD") echo "selected";?>>South Dakota</option>
        <option value="TN" <?PHP if($mystate=="TN") echo "selected";?>>Tennessee</option>
        <option value="TX" <?PHP if($mystate=="TX") echo "selected";?>>Texas</option>
        <option value="UT" <?PHP if($mystate=="UT") echo "selected";?>>Utah</option>
        <option value="VT" <?PHP if($mystate=="VT") echo "selected";?>>Vermont</option>
        <option value="VA" <?PHP if($mystate=="VA") echo "selected";?>>Virginia</option>
        <option value="WA" <?PHP if($mystate=="WA") echo "selected";?>>Washington</option>
        <option value="WV" <?PHP if($mystate=="WV") echo "selected";?>>West Virginia</option>
        <option value="WI" <?PHP if($mystate=="WI") echo "selected";?>>Wisconsin</option>
        <option value="WY" <?PHP if($mystate=="WY") echo "selected";?>>Wyoming</option>
    </select>
    <?php
            echo '<p>Zip Code &nbsp;&nbsp;<input id="Zipcode" type="text" name="zipcode" value="'.$row["zipcode"].'" required/></p>';
            echo '<p>Phone Number &nbsp;&nbsp;<input id="Phone" type="text" name="phone" value="'.$row["phone"].'" required/></p>';
            echo "<br /><br /><br />";
            echo '<input id="BtnSubmit" class="submitbutton" name="update" type="submit" value="Save" /> &nbsp;&nbsp;&nbsp;&nbsp;';
            echo '<input id="BtnReset" class="submitbutton" name="reset" type="reset" value="Reset" />';
        }
    }
    echo "</form>\n";
    echo "</div>";
	require "php/DBClose.php";
}
    ?>
