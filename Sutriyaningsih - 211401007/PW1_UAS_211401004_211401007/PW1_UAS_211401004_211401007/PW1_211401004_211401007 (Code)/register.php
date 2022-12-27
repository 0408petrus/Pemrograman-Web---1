<?php 

include 'connection.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) 
{
  header("Location: login.php");
}

if (isset($_POST['submit'])) 
{
 $username = $_POST['username'];
 $email = $_POST['email'];
 $password = md5($_POST['password']);
 $cpassword = md5($_POST['cpassword']);

 if ($password == $cpassword) {
  $sql = "SELECT * FROM user WHERE email='$email'";
  $result = mysqli_query($conn, $sql);
  if (!$result->num_rows > 0) 
  {
   $sql = "INSERT INTO user (username, email, password)
     VALUES ('$username', '$email', '$password')";
   $result = mysqli_query($conn, $sql);
   if ($result) 
   {
    echo "<script>alert('Selamat, registrasi berhasil!')</script>";
    $username = "";
    $email = "";
    $_POST['password'] = "";
    $_POST['cpassword'] = "";
    header("Location: login.php");
   } 
   else 
   {
    echo "<script>alert('Uh oh.. a mistake just happened')</script>";
   }
  } 
  else 
  {
   echo "<script>alert('Your Email has been registered')</script>";
  }
  
 } 
 else 
 {
  echo "<script>alert('Password incorrect')</script>";
 }
}
?>

<html>
    <head>
        <title>Create Account</title>
        <link rel="stylesheet" href="assets/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
        <link rel="stylesheet" href="assets/css/register.css">
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
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
          <center><div id="form-register">
            <div class="card" id="card">
            <center><img src="assets/img/Account.png" class="card-img-top" id="form-logo"></center>
              <div class="card-body">
                <h5 class="card-title">Register</h5>
                <p id="desc-form" class="text-muted">Silahkan Isi Kolom Dibawah Untuk Membuat Akun</p>
                <div>
                  <label for="text">Username</label>
                  <input type="text" class="form-control" required name="username" id="username" placeholder="Ex: John" value="<?php echo $username; ?>">
                </div>
                <div>
                  <label for="email">Email</label>
                  <input type="email" class="form-control" required name="email" id="email" placeholder="name@example.com" value="<?php echo $email; ?>">
                </div>
                <div>
                  <label for="password" class="form-label">Password</label>
                  <input type="password" id="password" class="form-control" required name="password" placeholder="Password" value="<?php echo $password; ?>">
                </div>
                <div>
                  <label for="password" class="form-label">Re-Enter Password</label>
                  <input type="password" id="cpassword" class="form-control" required name="cpassword" placeholder="Password" value="<?php echo $password; ?>">
                </div>
                <div id="button-login">
                  <button type="submit" name="submit" class="btn btn-primary mb-3">Create Account</button> 
                </div>
                <label class="fw-bold" style="font-size: 12px;" for="myCheck">Already Have Account? <a href="login.php" class="alert-link">Here</a></label>
              </div>
            </div>
          </div></center>
        </form>
      </div></center>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>