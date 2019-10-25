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
    session_start();
    if(isset($_POST['submit'])){
        $Username = $_POST['username'];
        $Password = $_POST['password'];
            if(!isset($_SESSION['user'])){
            $_SESSION['user'] = $Username;
            header("location:home.php");
        }
        else{
            header("location:home.php");
        }
    }
        else{
            header("location:reg.php");
        }
          
    ?>
</body>
</html>