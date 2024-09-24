<?php
    $obtained_marks = 56.67;

    if($obtained_marks < 0 && $obtained_marks > 60) {
        echo "Marks must be between 0 and 60<br>";
    } else if ($obtained_marks >= 0 && $obtained_marks <= 23.99){
        echo "You are fail<br>";
    } else if($obtained_marks >= 24 && $obtained_marks <= 39.99){
        echo "You have obtained second division<br>";
    } else if($obtained_marks >= 40 && $obtained_marks <= 49.99){
        echo "You have obtained first division<br>";
    } else if($obtained_marks >= 50 && $obtained_marks <= 60) {
        echo "You have obtained Distinction<br>";
    }

?>