<?php
session_start();
echo "Welcome " . $_SESSION['user'] . "<br/>";
echo "<a href=\"logout.php\"> LOGOUT </a>";
?>