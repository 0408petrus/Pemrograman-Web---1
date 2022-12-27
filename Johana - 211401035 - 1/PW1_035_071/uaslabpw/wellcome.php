<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style type="text/css">
        .page-header{ font: 14px sans-serif; text-align: center; }
        .row{ display: -ms-flexbox; display: flex; -ms-flex-wrap: wrap; flex-wrap: wrap; margin-right: -15px; margin-left: -15px;}

    </style>
</head>
<body>

    <!--navbar-->
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <div class="container">
                <a class="navbar-brand" href="welcome.php">
                    <img src="img/university.png" alt="Bootstrap" width="50" height="50">
                    SMA MEDAN
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="welcome.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Pendaftaran
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="create.php">Daftar Baru</a></li>
                            <li><a class="dropdown-item" href="index.php">Pendaftar</a></li>
                            <li><hr class="dropdown-divider"></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="logout.php">Logout</a></form></div>
                    </li>
                    </ul>
                </div>
        </div>
    </nav>
    <!--navbar-->
    <!--header-->
    <div class="page-header">
        <h1> Welcome to SMA MEDAN</h1>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
        <a href="index.php" class="btn btn-primary">Penerimaan Siswa Baru</a>
    </p>
    </div>
    <!--end of header-->
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <img src="https://akcdn.detik.net.id/community/media/visual/2021/06/03/sma-unggul-del-1_169.jpeg?w=700&q=90" alt="...">
            </div>
            <div class="col">
            <div class="row">
 				<!-- <h5 class="card-title"></h5> -->
                 <p class="card-text">
                    <br>
                    <br>
                    <br>
					Sistem Online Pendaftaran Penerimaan Peserta Didik Baru (PPDB) SMA Medan dibuka tanggal 24 Juni 2022 sampai dengan 04 Juli 2022.
					<br><br>
					1. Pendaftaran PPDB Mengutamakan Calon Siswa dari Warga Kota Medan.
					<br>
					2. Pembatalan pendaftaran Tanggal 04 Juli 2022 pukul.14:00 WIB.
					<br>
					3. Bijak dalam memilih jalur PPDB
					<br><br>
					TETAP PATUHI PROTOKOL KESEHATAN 5 M
				</p>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <div class="container text-center">
        <div class="row">
            <div class="col-md-4">
			<div class="card border-light mb-3 wow fadeInUp" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
				<div class="card-header" style="padding: 0.2rem 0.2rem;">
					<h6>Jadwal Pendaftaran</h6>
				</div>
				<div class="card-body" style="padding: 0.6rem;">
					<table class="table table-sm" style="margin-bottom: 0rem; font-size: 12px;">
					    <tbody>
					    	<tr>
						        <th>Awal</th>
						    	<td>:</td>
						    	<!-- <td>24 Juni 2022</td> -->
						    	<td>24 Juni 2022</td>
						    </tr>
					    	<tr>
						    	<th>Akhir</th>
						    	<td>:</td>
						    	<td>04 Juli 2022</td>
						    </tr>
					    </tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card border-light mb-3 wow fadeInUp" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
				<div class="card-header" style="padding: 0.2rem 0.2rem;">
					<h6>Jadwal Pengumuman</h6>
				</div>
				<div class="card-body" style="padding: 0.6rem;">
					<center>
						<span>06 Juli 2022</span>
					</center>
				</div>
			</div>
		</div>
		<div class="col-md-4">
		    <div class="card border-light mb-3 wow fadeInUp" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
				<div class="card-header" style="padding: 0.2rem 0.2rem;">
					<h6>Jadwal Daftar Ulang</h6>
				</div>
				<div class="card-body" style="padding: 0.6rem;">
					<table class="table table-sm" style="margin-bottom: 0rem; font-size: 12px;">
					    	<tbody>
					    		<tr>
						            <th>Awal</th>
						    	    <td>:</td>
						    	    <td>07 Juli 2022</td>
						    	</tr>
					    		<tr>
						    		<th>Akhir</th>
						    		<td>:</td>
						    		<td>08 Juli 2022</td>
						    	</tr>
					    	</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
        </div>
    </div>
    <!--Program kerja-->
    <div class="p-3 mb-2 bg-dark text-white"><b><h3>PROGRAM YANG MENDUKUNG MISI KAMI</h3></b></div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="img/pendidikan.png" alt="..." width="600" height="400">
            </div>   
            <div class="col">
                <h1 class="test-center"> PENDIDIKAN</h1>
                     Berawal dari keyakinan SMA bahwa memiliki bekal pendidikan berkualitas akan menjadi 
                    dasar pembentukan potensi dan kompetensi sumber daya manusia, kami kemudian mendirikan SMA, Sekolah NOAH,
                    dan berbagai unit pendidikan. Unit pendidikan kami mengusung metode pendidikan berkarakter, yang hendaknya akan menjadi fondasi kuat dalam . . .
            </div>
            <br>
            <br>
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <br>
                    <br>
                    <br>
                    <h1 class="test-center">SOSIAL & KEMANUSIAAN</h1>
                    Berawal dari keyakinan SMA bahwa memiliki bekal pendidikan berkualitas akan menjadi 
                    dasar pembentukan potensi dan kompetensi sumber daya manusia, kami kemudian mendirikan SMA, Sekolah NOAH,
                    dan berbagai unit pendidikan. Unit pendidikan kami mengusung metode pendidikan berkarakter, yang hendaknya akan menjadi fondasi kuat dalam . . .
                </div>   
                <div class="col">
                    <img src="img/sosial.png" alt="..." width="600" height="400">
                </div>
        </div>
    </div>
    </div>
    </div>
        <br>
        <br>
        <br>
    <!-- Site footer -->
    <footer class="site-footer">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <h6>About</h6>
              <p class="text-justify">SMA <i>kami menyediakan pelajaran tambahan </i>selain pendidikan SMA pada umumnya kami juga mengajar siswa mengenai C, UI Design dan sebagainya. Sebagai bekal bagi anak didik</p>
            </div>
  
            <div class="col-xs-6 col-md-3">
              <h6>Jurusan Tersedia</h6>
              <ul class="footer-links">
                <li><a href="http://scanfcode.com/category/c-language/">C</a></li>
                <li><a href="http://scanfcode.com/category/front-end-development/">UI Design</a></li>
                <li><a href="http://scanfcode.com/category/back-end-development/">PHP</a></li>
                <li><a href="http://scanfcode.com/category/java-programming-language/">Java</a></li>
                <li><a href="http://scanfcode.com/category/android/">Android</a></li>
                <li><a href="http://scanfcode.com/category/templates/">Templates</a></li>
              </ul>
            </div>
  
            <div class="col-xs-6 col-md-3">
              <h6>Quick Links</h6>
              <ul class="footer-links">
                <li><a href="http://scanfcode.com/about/">About Us</a></li>
                <li><a href="http://scanfcode.com/contact/">Contact Us</a></li>
                <li><a href="http://scanfcode.com/contribute-at-scanfcode/">Contribute</a></li>
                <li><a href="http://scanfcode.com/privacy-policy/">Privacy Policy</a></li>
                <li><a href="http://scanfcode.com/sitemap/">Sitemap</a></li>
              </ul>
            </div>
          </div>
          <hr>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12">
              <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by 
           <a href="#">Scanfcode</a>.
              </p>
            </div>
  
            <div class="col-md-4 col-sm-6 col-xs-12">
              <ul class="social-icons">
                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
              </ul>
            </div>
          </div>
        </div>
  </footer>
</body>
</html>