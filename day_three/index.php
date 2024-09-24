<?php
//foreach loop and functions in php
$countries = [
"name" => "Nepal",
"capital" => "Kathmandu",
"continent" => "Asia",
"region" => "South East Asia",
"currency" => "Rupee"

];

$items = array(
    "vegitables" => ["Potatoes", "Tomatoes", "Cabbage"],
    "Fruits" => ["Apple", "Banana", "Orange", "Pear"],
    "beverage" => ["Soda", "Smoothie", "Coffee", "Beer", "Coke"]
);

//foreach loop is an advanced version of for loop


foreach($countries as $key => $value){
    echo "<h1> key: {$key}, value: {$value} </h1>";

}

//if the value are array then we need to convert them into string using loop

foreach($items as $key => $value){
    echo "<h3> key: {$key}</h3>  ";
    //implementing another foreach loop for the values that are inside the array
    foreach($value as $data){
        echo "<p> {$data} </p>";
    }
    echo "<hr>";
}

$orders = [
    "customers" => [
        "name" => "Sushil Nemkul",
        "address" => "Kathmandu",
        "phone" => "9845645646",
    ],
    "items" => [
        "title" => "Laptop",
        "price" => 50000,
        "quantity" => 2,
        "date" => "2022-02-02"
    ],
    "Payment" => [
        "method" => "Cash",
        "amount" => 10000,
        "date" => "2022-02-02"
    ]

];

//first layer 
 foreach($orders as $key => $value){
 //customer, items and payments
 echo "Title: {$key}<br>";
 //second layer - seperate data of customer, items and payment
 foreach($value as $sub_key => $sub_value){
 echo "Sub Title: {$sub_key}, data : {$sub_value}<br>";
 }
}

$customers = [];
$order_items = [];
$payments = [];
foreach($orders as $key => $value){
    if($key == "customers"){
        $customers[] = $value; // it will store the customers data
    }else if($key == "items"){
            $order_items[] = $value;// it will store the items data
           }       else if($key == "Payment"){
                $payments[] = $value; // it will store the payment data
        }
    }

    var_dump($customers); echo "<br>";
    print_r($customers); echo "<br>";
    var_dump($order_items); echo "<br>";
    var_dump($payments); echo "<br>";
    ?>