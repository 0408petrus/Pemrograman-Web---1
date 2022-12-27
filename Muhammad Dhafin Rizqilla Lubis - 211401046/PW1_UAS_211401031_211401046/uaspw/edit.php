<?php
include_once("koneksi.php");
 
if(isset($_POST['update']))
{	
    $nisn = $_POST['nisn'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $nohp=$_POST['nohp'];
        
    $result = mysqli_query($mysqli, "UPDATE daftarsiswa SET nama='$nama',alamat='$alamat',nohp='$nohp' WHERE nisn=$nisn");
    
    header("Location: siswa.php");
}
?>
<?php
$nisn = $_GET['nisn'];
 
$result = mysqli_query($mysqli, "SELECT * FROM daftarsiswa WHERE nisn=$nisn");
 
while($user_data = mysqli_fetch_array($result))
{
    $nama = $user_data['nama'];
    $alamat = $user_data['alamat'];
    $nohp = $user_data['nohp'];
}
?>
<html>
<head>	
    <link rel="stylesheet" type="text/css" href="editt.css">
    <title>Edit</title>
</head>
 
<body>

<nav id="nav">
        <div>
          <h1>EDIT</h1>
        </div>
      </nav>

    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama" value=<?php echo $nama;?>></td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td><input type="text" name="alamat" value=<?php echo $alamat;?>></td>
            </tr>
            <tr> 
                <td>NoHP</td>
                <td><input type="text" name="nohp" value=<?php echo $nohp;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="nisn" value=<?php echo $_GET['nisn'];?>></td>
                <td><input id="edit" type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
    <a id="button" href="siswa.php">Daftar Siswa</a>
</body>
</html>
