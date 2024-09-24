<?php
if(isset($_POST['calculate'])){
    //accessing form data using $_REQUEST method
    $marked_price = $_REQUEST['marked_price'];
    $discount_percent = $_REQUEST['discount'];
    $vat_percent = $_REQUEST['vat_percent'];

    //validating marked price
    if(!empty($_POST['marked_price']) && !empty($_POST['discount'])){
        $discount_amount = 0;
        if($marked_price <= 0)
        {
            echo "<h3>marked price cannot be less than or equal to 0</h3>";
        }else{
            $actual_mp = $marked_price;
            if($discount_percent <= 0 || $discount_percent > 100){
                echo "<h3>Discount must be between 0 and 100</h3>";
            }else{
                $actual_dp = $discount_percent;
                $discount_amount = $actual_dp *(1/100);
                $vat_amount = $vat_percent * (1/100);
                $total = $marked_price - $discount_amount + $vat_amount;
        
                echo "<h3> marked price: {$actual_mp}</h3>";
                echo "<h3>Discount Amount: {$discount_amount}</h3>";
                echo "<h3>VAT Amount: {$vat_amount}</h3>";
                echo "<h3>Total: {$total}</h3>";
            }
        }
        
       
    }else{
        echo "<h3> Please enter the required price and discount percent first</h3>";
    }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 7 : form handling with $_REQUEST method</title>
</head>
<body>
    <section>
        <h1>Day 7 : Form handling with $_REQUEST method</h1>
        <form action="index.php" method="POST">
            <label for="marked_price">Marked Price</label>
            <input type="number" name="marked_price" id="marked_price" required><br><br>

            <label for="discount">Discount</label>
            <input type="number" name="discount" id="discount" required><br><br>

            <label for="vat_percent">VAT in percentage</label>

            <input type="number" name="vat_percent" id="vat_percent" readonly value="15"><br><br>

            <button type="submit" name="calculate">Calculate</button>
        </form>
    </section>
</body>
</html>