<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $number = $_POST["number"];
    if(is_numeric($number)) {
        if($number % 2 == 0) {
            echo "<h1>O número $number é PAR.</h1>";
        } else{
            echo "<h1>O número $number é IMPAR.</h1>";
        } 
    }
}