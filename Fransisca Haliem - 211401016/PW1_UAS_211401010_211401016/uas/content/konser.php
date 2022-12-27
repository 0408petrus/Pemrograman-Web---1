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
    <link rel="stylesheet" href="../css/main.css">

</head>

<body>
    
    <div class="wrapper">

        <header>
          <a class="navbar-brand" href="#">
          </a>

            <!-- <a href="#" class="logo text-dark fs-3">Uni<span>lever.</span></a> -->


            <nav>                
                <ul>
                    <li><a class="btn btn-outline-secondary" href="index.html#products">Products</a></li>
                    <li><a class="btn btn-outline-secondary" href="index.html#hiring">Hiring</a></li>
                    <li><a class="btn btn-outline-secondary" href="konser.php">Data</a></li>
                    <li><a class="btn btn-outline-secondary" href="portofolio.php">Portofolio</a></li>
                    <li><a class="btn btn-outline-danger" href="aksi_logout.php">Logout</a></li>
                </ul>
            </nav>

        </header>
<h2 class="judul">Hiring Data</h2>
<br>
<table class="shadow-lg p-3 mb-5 bg-body rounded">
    <thead>
        <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Job Title</th>
            <th>Total Pay ($)</th>
            <th>Phone Number</th>
            <th>Edit | Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $koneksi=mysqli_connect("localhost","root","","uas");
        $query = mysqli_query($koneksi, "SELECT * FROM crud");
        $no = 0;
        while($data = mysqli_fetch_array($query)){
            $no++;
            ?>
            <tr>
                <td><?php echo $no;?></td>
                <td><?php echo $data['nama'];?></td>
                <td><?php echo $data['tickets'];?></td>
                <td><?php echo $data['price'];?></td>
                <td><?php echo $data['no_hp'];?></td>
        
        <td>
            <a class="btn btn-warning" href="konser_edit.php?id=<?= $data['id']?>">Edit</a>
            <a class="btn btn-danger" href="konser_hapus.php?id=<?= $data['id']?>">Delete</a>
    <?php
        }
        ?>
        </tbody>
    </table>

    <center>
    <a class="btn btn-success" href="konser_tambah.html">Add</a>
    <a class="btn btn-warning" href="index.html">Back</a> 
    </center>
    <br><br><br><br>

<style>
*{
  font-family: sans;
}

h2 {
  text-align: center;
  font-weight: bold;
  font-size: 3rem;
  margin-top: 2em;
  line-height: 3.3rem;
}


a {
    color: black;
}


table {
  border-spacing: 1;
  border-collapse: collapse;
  background: white;
  border-radius: 6px;
  overflow: hidden;
  max-width: 800px;
  width: 100%;
  margin: 0 auto;
  position: relative;
  text-align: center;
}

table td, table th {
  padding-left: 8px;
  text-align: center;
  
}
table thead tr {
  height: 60px;
  background: #333652;
  font-size: 18px;
  color: white;
  text-align: center;
}

table thead tr td {
    text-align: center;
}

table tbody tr {
  height: 80px;
  border-bottom: 1px solid #000000;
  border-bottom-width: 2px ;
  text-align: center;
}

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

</style>
</body>
</html>