<?php
if(isset($_POST['add_student'])){
    echo "Welcome to our new PHP session";
    //validating echo field
    if(!empty($_POST['full_name']) || 
    !empty($_POST['email']) || 
    !empty($_POST['contact']) || 
    !empty($_POST['dob']) || 
    !empty($_POST['academic'])
    ){
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $dob = $_POST['dob'];
    $academic = $_POST['academic'];
    //printing all the information 
    echo"<h1>Student Name:($full_name)</h1>";
    echo"<p>Email:($email)</p>";
    echo"Contact:($contact)</p>";
    echo"Date of Birth:($dob)</p>";
    echo"Academic:($academic)</p>";
    }else{
        echo "All fields are required<br>";
        echo "Please try again.<a href='index.php'>click here to add student</a>";
    }
}else{
    //redirecting pages in php using header()
    header("location: index.php");
    exit();// or we can also use 'exit;' only
}