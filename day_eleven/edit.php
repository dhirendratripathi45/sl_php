<?php
$id = $_GET['id'];

//creating connection 
$host = "localhost";
$user = "root";
$password = "";
$db_name = "day_nine";
$con = mysqli_connect($host, $user, $password, $db_name);
//empty array to hold table data
$data = array();
if($con){
    $sql = "SELECT * FROM country WHERE id = {$id}";
    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_array($result)){
            $data = array(
                "id" => $row['id'],
                "name" => $row['name'],
                "continent" => $row['continent'],
                "region" => $row['region']
            );
        }
    }
}else{
    die("Connection failed: Error Message:{$mysqli_error}");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 11: Editing data in html form</title>
</head>
<body>
    <section>
        <h1>Update country details</h1>
        <form action="update.php" method="post">
            <label for="name"> Country Name</label>
            <input type="text" name="name" id="name" value="<?php echo $data['name']; ?>"><br><br>

            <label for="continent">Continent</label>
            <input type="text" name="continent" id="continent" value="<?php echo $data['continent']; ?>"><br><br>

            <label for="region">Region</label>
            <input type="text" name="region" id="region" value="<?php echo $data['region']; ?>"><br><br>

            <input type="submit" value="Update Country" name="update_country">
    </section>
</body>
</html>