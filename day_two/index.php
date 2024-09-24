<?php
    // array in php
    $countries = array(); //method one
    $capitals = []; // method two


    $cities = array(
        "Kathmandu", "Pokhara", "Butwal", "Lalitpur"
    );

    $lakes = ["Phewa", "Rara", "Begnas", "Tilico"];
    // all those arays defined above are single dimenssional array

    // accessing data of array with index
    echo "First Lake:" .$lakes[0];
    echo "Second Lake: $lakes[1]";
    echo "<br>";
    // adding data to array
    $lakes[] = "Kailali"; // adding at the end of array


    // all items in array
    echo $lakes;
    echo "<br>";
    print_r($lakes); // adding at the end of array
    echo "<br>";
    var_dump($lakes); // built in function in php
    echo "<br>";

    // passing data to specific index with array
    $lakes[1] = "She-Phoksundo"; // if data or item exist then it will updata the element of the particioant index
    var_dump($lakes); echo "<br";
    
    // Removing data from array
    unset($lakes);
    var_dump($lakes);
    echo "<br>";

    // to access elements of the array wen can use loop
    for($i = 0; $i < count($cities); $i++){
        echo "Index: $i, value: $cities[$i] <br>";
    }

    // assoiative array
    $items = [
        "title" => "Door Lock",
        "price" => "550.00",
        "quantity" => "Random Black",
        "brand" => "Indian XZ",
        "description" => "A metal made premium quatity door lock"
    ];

    // accessing data of assoiative array
    echo "title: {$items['title']}";
    echo "title:" .$items['title'];
    echo "<br>";
    var_dump($items)
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 2 - PHP array</title>
</head>
<body>
    <section>
        <h1>Day 2 -PHP Array</1>
    </section>
</body>
</html>