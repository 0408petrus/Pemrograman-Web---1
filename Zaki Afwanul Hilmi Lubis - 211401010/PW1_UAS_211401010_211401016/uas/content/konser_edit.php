 <?php
$koneksi=mysqli_connect("localhost","root","","uas");
$id=$_GET["id"];
if(isset($_POST["edit"])){
    $nama=$_POST['nama'];
    $tickets=$_POST['tickets'];
    $price=$_POST['price'];
    $no_hp=$_POST['no_hp'];

    $update=mysqli_query($koneksi,"UPDATE crud SET nama='$nama',tickets='$tickets',price='$price',no_hp='$no_hp' WHERE id='$id'");

    if($update >0){
      echo "<script>  alert('Data Berhasil Diedit');
        document.location.href='konser.php';</script>";
    }

    else{
      echo'<div class ="alert-error"> Data Gagal Ditambah </div>';
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">


</head>
<body>
    </html>
    <form class="shadow-lg p-3 mb-5 bg-body rounded" method="POST">
    <h2 class="judul">Data Edit</h2><br>
  <div class="mb-3">
    <label for="nama" class="form-label">Name</label>
    <input type="text" class="form-control" name="nama" id="nama"></div>
  </div>

  <div class="mb-3">
    <label for="tickets" class="form-label">Job Title</label>
    <input type="text" class="form-control" name="tickets" id="tickets"></div>
  </div>

  <div class="mb-3">
    <label for="price" class="form-label">Total Pay ($)</label>
    <input type="text" class="form-control" name="price" id="price"></div>
  </div>

  <div class="mb-3">
    <label for="nohp" class="form-label">Phone Number</label>
    <input type="number" class="form-control" name="no_hp" id="no_hp"></div>
  </div>
<center>
<br><input type="submit" value="Save" name="edit" class="btn btn-success">
<a class="btn btn-warning" href="konser.php">Back</a> 
</center>
</form>

<center>
<br>
<div class="w-50 p-3">
<table class="shadow-lg p-3 mb-5 bg-body rounded">

          <thead>
            <tr>
              <th>Job Title</th>
              <th>Total Pay</th>
            </tr>
          <thead>
          <tbody>
            <tr>
              <td>Finance Manager</td>
              <td>$17,713</td>
            </tr>
               <tr>
              <td>Project Manager</td>
              <td>$10,901</td>
            </tr>
               <tr>
              <td>Supply Planner</td>
              <td>$7,473</td>
            </tr>
               <tr>
              <td>Intern</td>
              <td>$5,260</td>
            </tr>
          </tbody>
        </table>

</center>
<style>


table td, table th {
  text-align: center;
}
table td.l, table th.l {
  text-align: center;
}
table td.c, table th.c {
text-align: center;
}
table td.r, table th.r {
text-align: center;
}

form {
    margin-top : 30px;
    margin-left: 20em;
margin-right: 20em;
}

h2 {
color:white;
text-align: center;
font-weight: bold;
font-size: 1rem;
line-height: 70px;
background: #333652;
padding: 9px;
border-radius: 50px;
font-size:40px;
}
</style>