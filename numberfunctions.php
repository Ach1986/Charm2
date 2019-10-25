<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    $myvalue = -200;
    echo abs($myvalue);
    ?>

    Exponential: pow(base,power)
    <?php
    echo "<br/>";
    echo pow (2,8);
    ?>

    Square Root: sqrt(value)
    <?php
    echo "<br/>";
    echo sqrt(144);
    ?>

    Modulo:
    <?php
    echo "<br/>";
    echo fmod(2000,100);
    ?>

    Random Value:Body
    <?php
    echo "<br/>";
    echo rand(1,100);
    ?>

    Ceil vs Floor
    <?php
    echo "<br/>";
    echo "Ceil of 74.5 " . ceil(74.5) . "<br/>";
    echo "Floor of 74.5 " . floor(74.5) . "<br/>";
    echo "Round of 74.4 => " . round(74.4). "<br/>";
    ?>
    
    Number Format
    <?php
    echo "<br/>";
    $value = 23435.34;
    echo number_format($value,2);
    ?>

    Increment vs Decrement
    <?php
    echo "<br/>";
    $queue = 2;
    $queue*=10;
    echo $queue;
    ?>

    Array
    <?php
    echo "<br/>";
    $number = array(23,45,64,34,13,4);
    echo $number[2];
    ?>


</body>
</html>