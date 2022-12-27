<?php
  session_start();
  include "koneksi.php";
  if(!isset($_SESSION['username'])){
    header ("location:login.php");
  }
  if (isset($_SESSION['username'])){
    $username = $_SESSION['username'];
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="index.css">
    <title>SOELTAN</title>
    <!--CDN BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css" integrity="sha512-5PV92qsds/16vyYIJo3T/As4m2d8b6oWYfoqV+vtizRB6KhF1F9kYzWzQmsO6T3z3QG2Xdhrx7FQ+5R1LiQdUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--/CDN BOOTSTRAP-->
    <!--INTERNAL CSS-->
    <style>
      ul li:hover {
        background: #cbd18f;
        transition: 0.5s;
      }

      ul li {
        padding: 12px 0;
        margin-left: 20px;
      }
      
      ul {
        margin-left: 30%;
      }

    </style>
    <!--INTERNAL CSS-->
  </head>
  <body>
    <!--SCRIPT-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!--/SCRIPT-->

    <!--NAVBAR-->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: green; padding: 0;">
      <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <a class="navbar-brand" href="index.php">SD SOELTAN</a>
        
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="siswa.php">Daftar Siswa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href=".\aksi_logout.php">Logout</a>
            </li>
          </ul>
        </div>      
      </div>  
    </nav>
    <!--/NAVBAR-->

    <!--CAROUSEL-->
      <div class="carousel-inner">
          <img style="width: 100%; height: 500px; object-fit: cover;" src="img/upacara.JPG" class="d-block w-100" alt="...">
          <div class="container">
            <div class="carousel-caption text-start" style="margin-bottom: 50px;">
                <h1>Upacara Bendera</h1>
                <p>Untuk mengenang jasa para pahlawan, sekolah mengadakan upacara bendera setiap hari seninnya</p>
            </div>
          </div>
      </div>

    <!--GRID/CARDS-->
    <div style="padding-top: 25px;">
      <div class="container text-center">
        <div class="row">
          <!--KOLOM 1-->
          <div class="col">
            <div class="card" style="width: 25rem; background-color: green;">
              <img src="img/gambar.jpg" class="card-img-top" alt="...">
              <div class="card-body" style="color: white;">
                <h4>Kemendikbudristek dorong pendidikan nonformal bentuk anak berkarakter</h4>
                <p class="card-text">Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi (Kemendikbudristek) RI mendorong pendidikan nonformal membentuk anak berkarakter agar siap menghadapi dunia kerja. "Saat ini kita dihadapkan pada kendala masa depan yang sudah di depan mata.</p>
                <a href="https://www.antaranews.com/berita/2489809/kemendikbudristek-dorong-pendidikan-nonformal-bentuk-anak-berkarakter" class="btn btn-info" target=”_blank” style="background-color:#cbd18f; border: none;">Read More</a>
              </div>
            </div>
          </div>
          <!--KOLOM 2-->
          <div class="col">
            <div class="card" style="width: 25rem; background-color: green;">
              <img src="img/Sekolah.jpeg" class="card-img-top" alt="..." style="height:14.3rem;">
              <div class="card-body" style="color: white;">
                <h4>Mewahnya Sekolah Dasar Soeltan</h4>
                <p class="card-text">memiliki fasilitas olahraga yang lengkap seperti lapangan basket, lapangan bola, lapangan voli, kolam renang dan masih banyak lagi. Akreditasi sekolah kami sudah internasional dimana lulusan kami mendapat banyak penghargaan olimpiade pendidikan. Sekolah Dasar Soeltan memiliki 1000 ruangan yang mana terdiri dari 3 tingkat lantai.</p>
                <a href="mewah.php" class="btn btn-info" style="background-color:#cbd18f; border: none;">Read More</a>
              </div>
            </div>
          </div>
          <!--KOLOM 3-->
          <div class="col">
            <div class="card" style="width: 25rem; background-color: green;">
              <img src="img/Piala.jpeg" class="card-img-top" alt="..." style="height:14.3rem;">
              <div class="card-body" style="color: white;">
                <h4>Sekolah Dasar Soeltan yang berprestasi</h4>
                <p class="card-text">Sekolah Dasar Soeltan telah terakreditasi tingkat internasional sejak tahun 2018, dan telah banyak mendapatkan prestasi-prestasi dari pemerintah seperti Adiwiyata, dan juga murid-murid mendapatkan penghargaan tingkat internasional dalam bidang olahraga, pendidikan seperti olimpiade, dan masih banyak lagi.</p>
                <a href="prestasi.php" class="btn btn-info" style="background-color:#cbd18f; border: none;">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/GRID/CARDS-->

    <!--GRID-->
    <div class="container" style="padding: 25px 0; margin-top: 70px; margin-bottom: 40px;">
      <div class="row">
          <div class="col-md-6">
              <img class="img-fluid" src="img/Sekolah.jpeg" width="500px" style="border-radius: 10px;">
          </div>

          <div class="col-md-6">
            <div style="margin-top: 50px;"></div>
            <h1>Profil Sekolah</h1>
            <p class="lead">Sekolah Dasar Soeltan Medan adalah sekolah dasar yang menjunjung 5 Sila Indonesia, sekolah yang perduli terhadap lingkungan. Para guru mendidik anak muridnya untuk menjadi generasi emas yang nantinya akan menjadi orang-orang hebat. Sekolah Dasar Soeltan sudah terakreditasi Internasional sejak tahun 2018. Sekolah Dasar Soeltan juga telah mendapat banyak prestasi dari pemerintah.</p>
            <p>Sekolah ini memiliki 3 lantai dan 100 ruangan. Staff yang ada sebanyak 1000 meliputi Guru, Satpam, Penjaga Kantin, Cleaning Service.</p>
          </div>
      </div>
    </div>

    <div style="background-color: green; padding: 1px 0;">
      <div class="container">
        <div class="row">
          <div style="color: white;" class="col-md-6">
            <div style="margin-top: 50px;"></div>
            <h1>LATOM</h1>
            <p class="lead">copyright&#169; SDSoeltan</p>
          </div>
        </div>
      </div>
    </div>
    <!--/GRID-->
  </body>
</html>