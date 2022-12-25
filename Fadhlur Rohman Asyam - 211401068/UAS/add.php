<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data</title>
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
           <a class="nav-link" href="profile.html">Profile</a>
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
          <p>Isilah Semua Data Yang Diperlukan</p>
        </blockquote>
        </figure>
 
    <form action="add.php" method="post" name="form1">

    <div class="mb-3 row mt-3">
    <label for="name" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="name">
    </div>
  </div>
  <div class="mb-3 row mt-3">
    <label for="email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="email">
    </div>
  </div>
  <div class="mb-3 row mt-3">
    <label for="mobile" class="col-sm-2 col-form-label">Nomor HP</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="mobile">
    </div>
    </div>
    <div class="mb-3 row mt-3">
    <input type="submit" class="btn btn-primary" name="Submit" value="Add">
    </div>
    </form>
    
    <?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        
        // include database connection file
        include_once("config.php");
                
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO users(name,email,mobile) VALUES('$name','$email','$mobile')");
        
        // Show message when user added
        echo "User added successfully. <a href='list.php'>View Users</a>";
    }
    ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>