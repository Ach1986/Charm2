<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST['submit'])){
        // echo "OK";
        $fName = $_POST['firstname'];
        $lName = $_POST['lastname'];
        $age = $_POST['pAge'];
        if (empty($fName) || empty($lName) || empty($age)){
           // echo "Please fill out completely! <br/>";
    
            if(empty($fName)){
                echo "First Name is empty! <br/>";
            }
            if(empty($lName)){
                echo "Last Name is empty! <br/>";
            }
            if(empty($age)){
                echo "Invalid age! <br/>";
            }
            echo "<a href=\"post.php\">Go back </a>";
        }
        else{
        echo "Welcome $fName $lName <br/> Age is $age";
    }
}

    else{
        // echo "GO to post.php first";
        header("location:post.php");
    }       
    ?>

</body>
</html>