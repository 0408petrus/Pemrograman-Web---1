<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!--link css sendiri-->
    <link rel="stylesheet" href="form.css">

    <!--Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <title>Log In</title>
</head>

<body>
    
    <section class="login d-flex">
        <div class="login-center w-100">
            <div class="row justify-content-center align-items-center vh-100" style="margin: auto;">
                <div class="col-6 tes">
                    <div class="header">
                        <h1>Welcome</h1>
                        <h6>Lets Make an Appointment!</h6>
                    </div>
        
                    <div class="login-form">
                        <form action="aksi_form.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" required id="name" placeholder="Enter Your Name" name="name">
                                </div>

                                <div class="col-md-6">
                                    <label for="place" class="form-label">Place of Birth</label>
                                    <input type="text" class="form-control" required id="place" placeholder="Enter your Place of Birth" name="place">
                                </div>
                        </div>


                        <div class="row">
                                <div class="col-md-6">
                                    <label for="date" class="form-label">Date of Birth</label>
                                    <input type="date" class="form-control" required id="date" placeholder="Enter your Place of Birth" name="date">
                                </div>

                                <div class="col-md-6">
                                    <label for="place" class="form-label">NIK</label>
                                    <input type="text" class="form-control" required id="Id" placeholder="Enter your NIK" name="Id">
                                </div>
                        </div>
                       
                        
                        <div class="row">
                            <div class="col-md-6">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="text" class="form-control" required id="phone" placeholder="Enter your phone number" name="phone">
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleDataList" class="form-label">Metode Pembayaran</label>
                                    <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Choose Paying Method" name="bayar">
                                    <datalist id="datalistOptions">
                                    <option value="Umum">
                                    <option value="Askes Wajib">
                                    <option value="Askes Sosial">
                                    </datalist>
                                </div>
                            </div>
                        </div>

                            <button class="signin" type="submit" name="submit">Submit</button>
                        </form>        
                    </div>
                </div>
            </div>
            
        </div>
        <!-- <div class="login-right w-50 h-100">
            <img src="/img/gamabr 4.png" alt="" srcset="">
        </div> -->
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>