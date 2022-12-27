<html>
<head>
<link rel="stylesheet" type="text/css" href="add.css">
    <title>Daftar</title>
</head>
 
<body>

<nav id="nav">
        <div>
          <h1>ADD</h1>
        </div>
      </nav>

    <br/><br/>
 
    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>NISN</td>
                <td><input type="text" name="nisn"></td>
            </tr>
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr> 
                <td>Nomor HP</td>
                <td><input type="text" name="nohp"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input id="tambah" type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
    
    <?php
 
    if(isset($_POST['Submit'])) {
        $nisn = $_POST['nisn'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $nohp = $_POST['nohp'];

        
        include_once("koneksi.php");
                
        $result = mysqli_query($mysqli, "INSERT INTO daftarsiswa(nisn,nama,alamat,nohp) VALUES('$nisn','$nama','$alamat','$nohp')");
        
        echo "<h2>Siswa telah terdaftar <a href='siswa.php'>Lihat Daftar</a></h2>";
    }
    ?>

<a id="button" href="siswa.php">Back to Riwayat</a>

</body>
</html>
