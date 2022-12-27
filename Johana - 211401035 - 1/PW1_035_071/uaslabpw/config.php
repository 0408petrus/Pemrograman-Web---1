<?php
/* Database credentials. Assuming you are running MySQL server with default setting (user 'root' with no password) */

$server = "localhost";
$user = "root";
$pass = "";
$database = "proyek";

/* Attempt to connect to MySQL database */
$link = mysqli_connect($server, $user, $pass, $database);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


?>