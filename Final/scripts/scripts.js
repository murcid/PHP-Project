// scripts.js


function Subtract(rowNum) {
    var value = parseInt(document.getElementById("TBQuantity" + rowNum).value);
    if (isNaN(value))
        value = 0;
    if (value > 0) {
        value -= 1;
    }
    document.getElementById("TBQuantity" + rowNum).value = value;
    CalculateTotal();
}

function Add(rowNum) {
    var value = parseInt(document.getElementById("TBQuantity" + rowNum).value);
    if (isNaN(value))
        value = 0;
    value += 1;
    document.getElementById("TBQuantity" + rowNum).value = value;
    CalculateTotal();
}

function CalculateTotal() {
    var subTotal = 0;
    for (var i = 1; i <= rows; i++) {
        var price = parseFloat(document.getElementById("TbPrice" + i).value);
        var quantity = parseFloat(document.getElementById("TBQuantity" + i).value);
        subTotal += (price * quantity);
    }
    var tax = subTotal * .08;
    var total = subTotal + tax;
    var junk = "$ " + (subTotal.toFixed(2).toString());
    document.getElementById("TbSubtotal").value = subTotal.toFixed(2).toString();
    document.getElementById("TbTax").value = tax.toFixed(2).toString();
    document.getElementById("TbTotal").value = total.toFixed(2).toString();
}
