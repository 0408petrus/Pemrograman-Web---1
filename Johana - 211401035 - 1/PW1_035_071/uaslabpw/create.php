<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$name = $address = $salary = $sekolah_asal = $agama = "";
$name_err = $address_err = $salary_err = $sekolah_asal_err = $agama_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Masukkan nama anda.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Masukkan nama yang valid.";
    } else{
        $name = $input_name;
    }

    // Validate address
    $input_address = trim($_POST["address"]);
    if(empty($input_address)){
        $address_err = "Masukkan alamat anda.";
    } else{
        $address = $input_address;
    }

    // Validate umur
    $input_salary = trim($_POST["salary"]);
    if(empty($input_salary)){
        $salary_err = "Masukkan umur anda.";
    } elseif(!ctype_digit($input_salary)){
        $salary_err = "Input berupa angka.";
    } else{
        $salary = $input_salary;
    }

    // Validate asal sekolah
    $input_sekolah_asal = trim($_POST["sekolah_asal"]);
    if(empty($input_sekolah_asal)){
        $sekolah_asal_err = "Input asal sekolah.";
    } else{
        $sekolah_asal= $input_sekolah_asal;
    }

    // Validate jenis agama
    $input_agama = trim($_POST["agama"]);
    if(empty($input_agama)){
        $agama_err = "Pilih salah satu.";
    } else{
        $agama = $input_agama;
    }

    // Check input errors before inserting in database
    if(empty($name_err) && empty($address_err) && empty($salary_err) && empty($sekolah_asal_err) && empty($agama_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO employees (name, address, salary, sekolah_asal, agama) VALUES (?, ?,?, ?, ?)";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssss", $param_name, $param_address, $param_salary, $param_sekolah_asal, $param_agama);

            // Set parameters
            $param_name = $name;
            $param_address = $address;
            $param_salary = $salary;
            $param_sekolah_asal =$sekolah_asal;
            $param_agama = $agama;

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: index.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }

    // Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
            padding: 50px;
            background: #FFF;
        }
        body {
            width: 100%;
            min-height: 100vh;
            background-image: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url(img/sma.jpeg);
            background-position: center;
            background-size: cover;
            display: flex;
            justify-content:  center;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Daftar Baru</h2>
                    </div>
                    <p>Silahkan isi form di bawah ini kemudian submit untuk menambahkan data siswa ke dalam database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                            <label>Nama</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
                            <span class="help-block"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($address_err)) ? 'has-error' : ''; ?>">
                            <label>Alamat</label>
                            <textarea name="address" class="form-control"><?php echo $address; ?></textarea>
                            <span class="help-block"><?php echo $address_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($salary_err)) ? 'has-error' : ''; ?>">
                            <label>Umur</label>
                            <input type="text" name="salary" class="form-control" value="<?php echo $salary; ?>">
                            <span class="help-block"><?php echo $salary_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($sekolah_asal_err)) ? 'has-error' : ''; ?>">
                            <label>Sekolah Asal</label></label>
                            <input type="text" name="sekolah_asal" class="form-control" value="<?php echo $sekolah_asal; ?>">
                            <span class="help-block"><?php echo $sekolah_asal_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($agama_err)) ? 'has-error' : ''; ?>">
                        <label>Agama</label></label>
                        <select name="agama" class="form-select" value="<?php echo $agama;?>">
                            <option selected>Islam</option>
                            <option selected>Kristen</option>
                            <option selected>Katolik</option>
                            <option selected>Hindu</option>
                            <option selected>Budha</option>
                        </select>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>