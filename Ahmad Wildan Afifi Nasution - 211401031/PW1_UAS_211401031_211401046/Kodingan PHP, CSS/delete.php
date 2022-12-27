<?php
include_once("koneksi.php");
 
$nisn = $_GET['nisn'];
 
$result = mysqli_query($mysqli, "DELETE FROM daftarsiswa WHERE nisn=$nisn");
 
header("Location:siswa.php");
?>