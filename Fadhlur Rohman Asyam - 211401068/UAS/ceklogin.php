<?php
session_start();
include_once("config.php");
$username = $_POST['username'];
$password = md5($_POST['password']);

$query = mysqli_query($mysqli, "SELECT * FROM user WHERE username='$username' AND password='$password'");
$user_data = mysqli_fetch_array($query);
$jml = mysqli_num_rows($query);

if($jml == 0)
{
    $_SESSION['username'] = $data['username'];
    $_SESSION['password'] = $data['password'];
    header('location: index.html');
}
else
{
    echo '<p align="center>Login Gagal</p>';
    echo '<meta http-equiv"refresh" content="2;url=login.php">';
}
?>