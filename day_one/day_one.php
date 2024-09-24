<?php
    $item_tittle = "Gaming Laptop";
    $brand = "Acer";
    $price = 1300000.00;
    $quantity = 12;
    $desc = "13th gen Gaming laptop with FHD";

    // displaying variable with html tags
    echo "<h1>Name: $item_tittle</h1>";
    echo "<h2>Description: $item_description</h2>";
    echo "<hr>";
    echo "<p>Price: $price</p>";
    echo "<p>Quantity: $quantity</p>";

    // total price
    $total = $price * $quantity; // total price 
    echo "<h2>Total: $total";

    $discount = 3550.45; // discount
    $total_after_discount = $total - $discount; // total after discount
    echo "<h2>Discount: $discount</h2>";
    echo "<h2>Total after discount: $total_after_discount</h2>";

    $vat_amount = $price * (13/100); // var amount

    // calculating total including vat
    $total_with
    


?>