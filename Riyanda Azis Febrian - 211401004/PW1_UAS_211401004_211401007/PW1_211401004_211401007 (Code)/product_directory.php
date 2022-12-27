<?php 
   include 'connection.php';
?>

<?php
   $select = mysqli_query($conn, "SELECT * FROM products");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="assets/img/Product.png">
        <title>Product Directory</title>
        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <!-- custom css file link  -->
        <link rel="stylesheet" href="assets/css/admin.css">
    </head>
    <body>
        <div class="container">
            <center>
                <h1 style="font-size: 30px;">Product Directory</h1>
                <h2 style="font-size: 25px;">See something from directory</h2>
            </center>
            <div class="product-display">
                <table class="product-display-table">
                    <thead>
                    <tr>
                        <th>Product image</th>
                        <th>Product name</th>
                        <th>Product price</th>
                    </tr>
                    </thead>
                    <?php while($row = mysqli_fetch_assoc($select)){ ?>
                    <tr>
                        <td><img src="uploaded_img/<?php echo $row['image']; ?>" height="100" alt=""></td>
                        <td><?php echo $row['name']; ?></td>
                        <td>Rp <?php echo $row['price']; ?>/-</td>
                    </tr>
                <?php 
                } 
                ?>
                </table>
            </div>
        </div>
    </body>
</html>