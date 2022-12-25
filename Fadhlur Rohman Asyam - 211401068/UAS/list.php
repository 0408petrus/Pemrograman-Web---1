<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>
 
 <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftarkan Diri Anda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheet.css">
  </head>
  <body>
    <div class="container">
    <nav class="navbar" style="background-color: #e3f2fd;">
        <ul class="nav nav-tabs" >
         <li class="nav-item">
           <a class="nav-link active" aria-current="page" href="index.html">JBBUKU</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="profile.php">Profile</a>
         </li>
         <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a>
           <ul class="dropdown-menu">
             <li><a class="dropdown-item" href="list.php">Daftarkan Diri Anda Disini</a></li>
             <li><hr class="dropdown-divider"></li>
             <li><a class="dropdown-item" href="https://www.periplus.com/">Separated link</a></li>
           </ul>
         </li>
         <li class="nav-item">
           <a class="nav-link disabled">Disabled</a>
         </li>
        </ul>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
       </nav>
       <figure class="text-center mt-5">
        <blockquote class="blockquote">
        <p>Daftar Para Peserta</p>
        </blockquote>
        <figcaption class="blockquote-footer">
        <cite title="Source Title">Selamat datang! Salam Sejahtera Untuk semuanya</cite>
        </figcaption>
      </figure>
      <a href="add.php" type="button" class="btn btn-primary mb-3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
        </svg>Tambah</a>
        <table class="table table-hover table-bordered align-middle">
        <thead>
          <tr>
            <th scope="col">Nama</th>
            <th scope="col">Nomor HP</th>
            <th scope="col">Email</th>
            <th scope="col">aksi</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['name']."</td>";
        echo "<td>".$user_data['mobile']."</td>";
        echo "<td>".$user_data['email']."</td>";    
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </tbody>
      </table>


      <div class="footer mt-10">
        <div class="footer-logo">WEBSITE</div>
        <div class="footer-list">
        <ul>
            <li>About</li>
            <li>Other</li>
            <li>Content</li>
        </ul>
        </div>
      </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>