<?php
// scanning all the sessions if 'user' session
// is found it will redirect to home.php
session_start();
if(isset($_SESSION['user'])){
    header("location:home.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="login.php" method="POST">
        <label>Username </label> <br>
        <input type="text" name="username"><br>
        <label>Password </label><br>
        <input type="Password" name="password"><br>
        <input type="submit" name="submit" value= "GO">
    </form>
</body>
</html>