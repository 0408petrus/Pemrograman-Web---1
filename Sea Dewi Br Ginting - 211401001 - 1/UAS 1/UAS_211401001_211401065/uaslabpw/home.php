<?php
    include 'components/connect.php';
    session_start();

    if(isset($_SESSION['user_id'])){
        $user_id = $_SESSION['user_id'];
    }
    else{
        $user_id = '';
    };

    include 'components/add_cart.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>SS Resto</title>
   <link rel="icon" href="assets/icon.png">

   <!-- Link Slider -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- Link CDN Font Awesome  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

   <!-- Link CSS Eksternal  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<!--Header Navbar -->
<?php include 'components/user_header.php'; ?>


<section class="hero">
   <div class="swiper hero-slider">
    <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <div class="content">
               <h3>Fast Food</h3>
               <a href="menu.php" class="btn">see menu</a>
            </div>
            <div class="image">
               <img src="assets/img1.png" alt="">
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="content">
               <h3>Main Dishes</h3>
               <a href="menu.php" class="btn">see menu</a>
            </div>
            <div class="image">
               <img src="assets/img2.png" alt="">
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="content">
               <h3>Dessert</h3>
               <a href="menu.php" class="btn">see menu</a>
            </div>
            <div class="image">
               <img src="assets/img3.png" alt="">
            </div>
         </div>

    </div>
    <div class="swiper-pagination"></div>
   </div>
</section>

<!--Kategori-->
    <section class="category">
    <h1 class="title">food category</h1>

    <div class="box-container">
        <a href="category.php?category=fast food" class="box">
            <img src="assets/category1.png" alt="">
            <h3>Fast Food</h3>
        </a>

        <a href="category.php?category=main dish" class="box">
            <img src="assets/category2.png" alt="">
            <h3>Main Dishes</h3>
        </a>

        <a href="category.php?category=drinks" class="box">
            <img src="assets/category3.png" alt="">
            <h3>Drinks</h3>
        </a>

        <a href="category.php?category=desserts" class="box">
            <img src="assets/category4.png" alt="">
            <h3>Desserts</h3>
        </a>
    </div>

    </section>


<!--Latest Dishes -->
    <section class="products">
    <h1 class="title">latest dishes</h1>
    <div class="box-container">

        <?php
            $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 6");
            $select_products->execute();
            if($select_products->rowCount() > 0){
                while($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)){
        ?>
        <form action="" method="post" class="box">
            <input type="hidden" name="pid" value="<?= $fetch_products['id']; ?>">
            <input type="hidden" name="name" value="<?= $fetch_products['name']; ?>">
            <input type="hidden" name="price" value="<?= $fetch_products['price']; ?>">
            <input type="hidden" name="image" value="<?= $fetch_products['image']; ?>">
            <a href="quick_view.php?pid=<?= $fetch_products['id']; ?>" class="fas fa-eye"></a>
            <button type="submit" class="fas fa-shopping-cart" name="add_to_cart"></button>
            <img src="project_image/<?= $fetch_products['image']; ?>" alt="">
            <a href="category.php?category=<?= $fetch_products['category']; ?>" class="cat"><?= $fetch_products['category']; ?></a>
            <div class="name"><?= $fetch_products['name']; ?></div>
            <div class="flex">
                <div class="price"><span>K</span><?= $fetch_products['price']; ?></div>
                <input type="number" name="qty" class="qty" min="1" max="99" value="1" maxlength="2">
            </div>
        </form>
        <?php
                }
            }else{
                echo '<p class="empty">no products added yet!</p>';
            }
        ?>
    </div>

    <div class="more-btn">
        <a href="menu.php" class="btn">View All</a>
    </div>
    </section>

<!--Footer-->
    <?php include 'components/footer.php'; ?>

    <!--Link JS Slider-->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <!-- Link File JS  -->
    <script src="js/script.js"></script>

    <script>
        var swiper = new Swiper(".hero-slider", {
        loop:true,
        grabCursor: true,
        effect: "flip",
        pagination: {
            el: ".swiper-pagination",
            clickable:true,
        },
        });
    </script>

</body>
</html>