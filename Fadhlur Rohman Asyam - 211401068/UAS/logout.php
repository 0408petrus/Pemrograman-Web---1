<?php
session_start();
session_unset();
session_destroy();
 
echo "<p align='center'>anda telah logout</p>";
echo "<meta http-equiv='refresh' content='2; url=login.php'>";
?>
