<?php
session_start();
session_destroy();
echo "All session has been destroyed";
echo "a href = \"reg.php\"> go back to registration page </a>";
?>