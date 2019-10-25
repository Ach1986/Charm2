1. Initialization =>
10 - 100
=> 10
2. Condition
<= 100

3. Increment / decrement
++ / $val = $val + 1

4. Statement
echo $val;

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Loops:
    <?php
    for ($val = 10;$val<=100;$val++){
        echo $val . "<br/>";
    }
    ?>

    <?php
    for ($val = 1;$val<=10;$val++){
        echo $val . " - Hello" . "<br/>";
    }
    ?>

    For Loop
    <?php
    //for ($val = 1;$val<=10;$val++){
    //    echo $val . " - Hello" . "<br/>";
    //}
    ?>
    While Loops
    <?php
    $init = 0;
    while($init < 10){
        echo $init . ", ";
        $init ++;
    }
    ?>

    Foreach Loop
    <?php
    echo "<br/>";
    $data = array("John","Doe",24,"Cebu");
        foreach($data as $person){
        echo $person . "<br>";
    }
    ?>

<?php
    echo "<br/>";
    $data = array(
        "first_name" =>"Kevin",
        "last_name" =>"Skoglund",
        "address" => "123 Main Street",
        "city" => "Beverly Hills",
        "state" => "CA",
        "zip_code" => "90210");
        foreach($data as $person){
        echo $person . "<br>";
    }
    ?>

    Foreach for associative array
    <?php
    $person = array(
        "first_name" => "Kevin", 
        "last_name"  => "Skoglund",
        "address"    => "123 Main Street",
        "city"       => "Beverly Hills",
        "state"      => "CA",
        "zip_code"   => "90210"
      );

    foreach($person as $att => $value){
      echo $att . " - " . $value . "<br/>";
    }
      ?>


        <hr>
      <?php
      $product_info = array(
          "product_code" => "P-001",
          "product" => "LG TV 50\"",
          "price" => 23000,
          "brand" => "LG",
          "stock" => 5,
      );
      foreach($product_info as $key => $values){
        if (is_numeric($values)){
            $values = number_format($values);
        }  
        echo $key . " - " . $values . "<br/>";
      }
      ?>


</body>
</html>