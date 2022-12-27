<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="loginsekolah.css">
    <title>LOGIN</title>
</head>
<body>
  
<nav id="nav">
        <div>
          <h1>LOGIN</h1>
        </div>
</nav>

<div id="form">
<form method="POST" action="aksi_login.php">
        <h2>Login Form</h2>
        <p>Username :</p>
        <div class="input">
        <input name="username" type="text" placeholder="Masukkan Nama"></br>
        </div>
        <br>
        <p>Password :</p>
        <div class="input">
        </div>
        <input name="password" type="password" placeholder="Masukkan Password">
        <p></p>
            <input class="button" type="submit" value="Login">
    </form>
    </div>
</body>
</html>