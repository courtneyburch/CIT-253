<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables and Arithmetic Operations</title>
</head>
<body>

<?php
    //assign variables
    $number_one = 25;
    $number_two = 32;
    //assing arithmetic opertations
    $addition = $number_one + $number_two;
    $difference = $number_two - $number_one;
    $product = $number_one * $number_two;
    $division = $number_two / $number_one;
    $remainder = $number_two % $number_one;
    //display opertations
    echo $number_one ." + " .$number_two ." = ".$addition ."<br/>";
    echo $number_two ." - " .$number_one ." = " .$difference ."<br/>";
    echo $number_one ." * " .$number_two ." = " .$product ."<br/>";
    echo $number_two ." / " .$number_one ." = " .$division ."<br/>";
    echo $number_two ." % " .$number_one ." = " .$remainder ."<br/";
?>
    
</body>
</html>