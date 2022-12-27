<?php

include_once("koneksi.php");
 
$result = mysqli_query($mysqli, "SELECT * FROM daftarsiswa ORDER BY nama ASC");
?>
 
<html>
<head>    
<link rel="stylesheet" type="text/css" href="siswa.css">
    <title>Daftar Siswa</title>
</head>
 
<body>

<nav id="nav">
        <div>
          <h1>DAFTAR SISWA</h1>
        </div>
      </nav>

    <table width='80%' border=2>
 
    <tr>
        <th>NISN</th> <th>Nama</th> <th>Alamat</th> <th>NoHP</th> <th> Pilihan </th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['nisn']."</td>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['alamat']."</td>";
        echo "<td>".$user_data['nohp']."</td>";     
        echo "<td><a href='edit.php?nisn=$user_data[nisn]'>Edit</a> | <a href='delete.php?nisn=$user_data[nisn]'>Delete</a></td></tr>";        
    }
    ?>
    </table>

    <a id="bhome" href=".\index.php">Back to Home</a>
    <a id="button" href="add.php">Daftar</a>    
    
</body>
</html>
