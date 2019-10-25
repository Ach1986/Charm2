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
    // <month:1-12
    $month = 4;
    if ($month == 1){
        echo "January";
    }
    else if($month == 2){
        echo "Febrary";
    }
    else if($month == 3){
        echo "March";
    }
    else if($month == 4){
        echo "April";
    }
    else if($month == 5){
        echo "May";
    }
    else if($month == 6){
        echo "June";
    }
    else if($month == 7){
        echo "July";
    }
    else if($month == 8){
        echo "August";
    }
    else if($month == 9){
        echo "September";
    }
    else if($month == 10){
        echo "October";
    }
    else if($month == 11){
        echo "November";
    }
    else if($month == 12){
        echo "December";
    }   
    else{
        echo "Invalid";
    }
    echo "<br/>";
    ?>

    <?php
    $e = 200;
    if(isset($e)){
        echo 'variable $e exists';
    }
    else{
        echo 'variable $e does not exist';
    }
    
    ?>

    <br>
    <?php
    $quantity = "34";
    if(is_numeric($quantity)){
    $total = 5 * $quantity;
    echo $total;
    }
    else
    {
        echo "Invalid Value";
    }   
    ?>
    
    <br>
    <?php
    // empty will return true
    // if the value is 0 or ""
    $username = "";
    if (empty($username)){
        echo "It is empty";
    }
    else
    {
        echo "Not empty";
    }
    ?>


</body>
</html>