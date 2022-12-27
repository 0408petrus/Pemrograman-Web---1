<?php 

include 'connection.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) 
{
  header("Location: dashboard.php");
}

if (isset($_POST['submit'])) 
{
  $email = $_POST['email'];
  $password = md5($_POST['password']);
  $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
  $result = mysqli_query($conn, $sql);
  if ($result->num_rows > 0) 
  {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['username'] = $row['username'];
    header("Location: dashboard.php");
  } 
  else 
  {
    echo "<script>alert('Email or password is wrong. Please try again')</script>";
  }
}

?>
<html>
  <head>
      <title>Login</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="assets/css/login.css">
      <link rel="icon" type="image/x-icon" href="assets/img/favicon.png">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  </head>
  <body class="text-center">
    <?php if($_SESSION['error'])
    {
     echo "<div class='alert alert-warning alert-dismissible fade show pb-5' role='alert'>
            <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
            ". $_SESSION['error']. "
          </div>";
    } 
    ?>    
    <center><div style="width: 18rem;">
      <form action="" method="POST" class="login-email">
        <center><div id="form-login">
          <div class="card" id="card">
           <center><img src="assets/img/Account.png" class="card-img-top" id="form-logo"></center>
            <div class="card-body">
              <h5 class="card-title">Welcome!</h5>
              <p id="desc-form" class="text-muted">Silahkan Isi Kolom Dibawah</p>
              <label for="email">Email</label>
              <input type="email" class="form-control" required name="email" id="email" placeholder="name@example.com" value="<?php echo $email; ?>">
              <label for="password" class="form-label">Kata Sandi</label>
              <input type="password" id="password" class="form-control" required name="password" placeholder="Password" value="<?php echo $password; ?>">
              <div id="button-login">
                <button type="submit" name="submit" class="btn btn-primary mb-3">Login</button> 
              </div>
              <label class="fw-bold" style="font-size: 12px;" for="myCheck">Doesn't Have Account? <a href="register.php" class="alert-link">Here</a></label>
            </div>
          </div>
        </div></center>
      </form>
    </div></center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>