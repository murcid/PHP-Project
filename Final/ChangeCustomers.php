<?php
/*
name: Diana Murcia Montoya
date: 05/07/2016
project: Final
file: ChangeCustomers.php
 */
include "session.php";
include "header.php";
//$id = "";
$id=$_POST["customerID"];
include "php/ChangeCustomerForm.php";
GetForm($id);
if (isset($_POST['update'])) {
    $id=$_POST["id"];
    $first=$_POST["first"];
    $last=$_POST["last"];
    $address=$_POST["address"];
    $city=$_POST["city"];
    $state=$_POST["state"];
    $zipcode=$_POST["zipcode"];
    $phone =$_POST["phone"];


    include "php/Update.php";
    UpdateCustomer($_POST["id"], $_POST["first"], $_POST["last"], $_POST["address"], $_POST["city"], $_POST["state"], $_POST["zipcode"], $_POST["phone"]);
    header ('location: ViewEditCustomers.php');
}
include "footer.php";
?>