<?php 

session_start();

if (!isset($_SESSION['username'])) 
{
    header("Location: login.php");
}
include 'connection.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dashboard</title>
        <!--Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/Logo Kos.png">
        <!--CDN-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    <body>
    <!--Navbar-->
        <nav class="navbar fixed-top bg-light">
            <div class="container" style="padding-left: 40px;">
              <a class="navbar-brand">
                <img src="assets/img/Logo Kos.png"width="30" height="24" class="d-inline-block align-text-top">
                Dashboard
              </a>
              <span class="col-sm-1">
                <a href="logout.php"><button class="btn btn-outline-danger" type="button">Logout</button></a> 
              </span>
            </div>
        </nav>
    <!--Content-->
        <center>
        <div class="content" style="padding-top: 50px;">
            <h3>Welcome, <?php echo $_SESSION['username'] ."!"; ?></h3>
            <h4 class="text-muted">What're you gonna do today?</h4>
            <div class="container" id="container">
                <div class="row">
                    <div class="col-sm-6 pt-5 pt-lg-5" data-aos="fade-up" data-aos-duration="1000">
                        <div class="card" style="width: 18rem; padding-top: 10px; text-align: center;">
                            <center><img src="assets/img/Product.png" class="card-img-top" style="width: 60px; height: 60px;"></center>
                            <div class="card-body">
                            <a href="manage_product.php" style="text-decoration: none;">
                            <h5 class="card-title">Manage Product</h5>
                            <p class="card-text">Let you manage the products</p>
                            </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm pt-lg-5" data-aos="fade-left" data-aos-duration="1000">
                        <div class="card" style="width: 18rem; padding-top: 10px; text-align: center;">
                            <center><img src="assets/img/Directory 2.png" class="card-img-top" style="width: 80px; height: 60px;"></center>
                            <div class="card-body">
                            <a href="product_directory.php" style="text-decoration: none;">
                            <h5 class="card-title">Product Directory</h5>
                            <p class="card-text">See something from directory</p>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </center>
    <!-- Script CDN -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>