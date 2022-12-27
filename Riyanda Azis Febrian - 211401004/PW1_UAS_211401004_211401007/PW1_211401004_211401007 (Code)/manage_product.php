<?php 
   include 'connection.php';
?>

<?php
if(isset($_POST['add_product'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_FILES['product_image']['name'];
   $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
   $product_image_folder = 'uploaded_img/'.$product_image;

   if(empty($product_name) || empty($product_price) || empty($product_image))
   {
      $message[] = 'Please fill out all';
   }
   else
   {
      $insert = "INSERT INTO products(name, price, image) VALUES('$product_name', '$product_price', '$product_image')";
      $upload = mysqli_query($conn,$insert);
      if($upload)
      {
         move_uploaded_file($product_image_tmp_name, $product_image_folder);
         $message[] = 'new product added successfully';
      }
      else
      {
         $message[] = 'could not add the product';
      }
   }

};

if(isset($_GET['delete']))
{
   $id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM products WHERE id = $id");
   header('location: manage_product.php');
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" type="image/x-icon" href="assets/img/Product.png">
   <title>Manage Product</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="assets/css/admin.css">
</head>
<body>
<?php
if(isset($message))
{
   foreach($message as $message)
   {
      echo '<span class="message">'.$message.'</span>';
   }
}
?>
<div class="container">
   <div class="admin-product-form-container">
      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
         <h3>Add a new product</h3>
         <label for="name" style="font-size: 15px; font-weight: bold;">Product Name</label>
         <input type="text" placeholder="Enter Product Name" name="product_name" class="box">
         <label for="name" style="font-size: 15px; font-weight: bold;">Product Price</label>
         <input type="number" placeholder="Enter Product Price" name="product_price" class="box">
         <label for="name" style="font-size: 15px; font-weight: bold;">Upload Product Photo</label>
         <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image" class="box">
         <input type="submit" class="btn" name="add_product" value="add product">
      </form>
   </div>
   <?php
   $select = mysqli_query($conn, "SELECT * FROM products");
   ?>
   <div class="product-display">
      <table class="product-display-table">
         <thead>
         <tr>
            <th>Product image</th>
            <th>Product name</th>
            <th>Product price</th>
            <th>Action</th>
         </tr>
         </thead>
         <?php while($row = mysqli_fetch_assoc($select)){ ?>
         <tr>
            <td><img src="uploaded_img/<?php echo $row['image']; ?>" height="100" alt=""></td>
            <td><?php echo $row['name']; ?></td>
            <td>Rp <?php echo $row['price']; ?>,-</td>
            <td>
               <a href="update_product.php?edit=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-edit"></i> edit </a>
               <a href="manage_product.php?delete=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-trash"></i> delete </a>
            </td>
         </tr>
      <?php 
      } 
      ?>
      </table>
   </div>
</div>
</body>
</html>