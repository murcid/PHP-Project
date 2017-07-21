<?php

/*
name: Diana Murcia Montoya
date: 05/07/2016
project: Final
file: php/insertOrder.php
 */


function InsertOrder($customerID,$date,$TBquantity1,$TBquantity2,$TBquantity3,$TBquantity4,$TBquantity5,$TBquantity6,$TBquantity7,$TBquantity8,$TBquantity9,$TBquantity10,$subtotal,$tax,$total){
    require("php/DBConnect.php");
    $sql = "INSERT INTO orders(customerID, date, p01, p02, p03, p04, p05, p06, p07, p08, p09, p10, subtotal, tax, total) VALUES (".$customerID.",'".$date."',".$TBquantity1.",".$TBquantity2.",".$TBquantity3.",".$TBquantity4.",".$TBquantity5.",".$TBquantity6.",".$TBquantity7.",".$TBquantity8.",".$TBquantity9.",".$TBquantity10.",".$subtotal.",".$tax.",".$total." )";
    //echo $sql;
    $conn->query($sql);
    require("php/DBClose.php");
}
?>