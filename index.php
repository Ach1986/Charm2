<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<!-- this is a comment -->
   <!-- <?php // echo "Hello PHP" ?> <br> -->
   <!-- <?php // echo "Hello MySQL" ?> -->
   <?php // echo "another" ?>
   <?php
   // Echo is used to display text
   echo "Hello" ;
   echo "<br/>" ;
   echo "Web Development" ;
   echo "<br/>";

   $number = 100;
   $number2 = 500;
   echo $number; 
   echo "<br/>";
   $firstname = "john" ;
   $lastname = "Doe";
   echo $firstname . " " . $lastname; 
   echo "<br/>";
   echo "Welcome, {$firstname} {$lastname}";
   ?>
   <hr>
   <?php
   $price = 30;
   echo $price . "<br/>";
   $price = 40;
   echo "New Price" . $price . "<br/>";
   define ("pi" ,3.14);
   echo "The value of pi is ". pi;
   ?>
   <hr>
   <?php
   $text = " the quick brown fox" . "<br/>";
   echo "Original Text ; $text";
   echo ucfirst($text);
   echo ucwords($text);
   echo strtolower($text);
   echo strtoupper($text);
   ?>
   <hr>
   <?php
   $user = "John ";
   echo str_repeat($user, 5);
   echo "<br/>";
   $product = "computer";
   $product2 = "smartphone";
   //display = > com-001;
   //display = > sma-1;
   echo substr($product,0,3) . "-001" . "<br/>";
   echo substr($product2,5,5) . "-001";
   echo "<br/>";
   $text2 = "the quick brown fox jumps over the lazy dog ";
   echo strpos($text2, "fox") . "<br/>";
   $item = "watermelon";
   echo 'the length of $item is ' . strlen($item);
   //str_replace(oldttext,newtext,$variable);
   echo "<br/>";
   echo str_replace("quick","slow",$text2);

   ?>
</body>
</html>