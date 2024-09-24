<?php

// creating database connection to php
$host = "localhost"; // host name
$user = "root";  // db user
$password = ""; // according to  your databse 
// if you are using xampp  mysql then put password
// blank

$db_name = "day_nine"; // database name

// creating connection in procedure oriented
$con = mysqli_connect($host, $user, $password, $db_name);
if($con){
    echo "connection established";
    
    if(isset($_POST['add_country'])){
        // inserting data into databse table 
    $name = $_POST['name'];
    $continent = $_POST['continent'];
    $region = $_POST['region'];
    //$continent = "asia";
    //$region = "central south asia";

    $sql = "INSERT INTO country(`name`, `continent`, `region`)
    VALUES('{$name}', '{$continent}', '{$region}')";

    // executing insert query
    if(mysqli_query($con, $sql) > 0){
        echo "data inserted successfully";
    } else {
        echo "error in inserting data. meassage: {$mysqli_error}";
    }

    }
    
}  else {
    die("connection fialed, message: {$mysqli_error}");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 9 - Database connection & data insertion</title>
</head>
<body>
    <section>
        <h1>Add Country</h1>
        <form action="index.php" method="post">
            <label for="name">Country Name:</label>
            <input type="text" name="name" id="name"><br></br>
            <label for="continent">Continent:</label>
            <input type="text" name="continent" id="continent"><br></br>
            <label for="region">Region:</label>
            <input type="text" name="region" id="region"><br></br>
            <input type="submit" value="Add Country" name="add_country">
</form>
    </section>
    
</body>
</html>
