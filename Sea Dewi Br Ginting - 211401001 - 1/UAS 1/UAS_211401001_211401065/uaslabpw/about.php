<?php
    include 'components/connect.php';
    session_start();

    if(isset($_SESSION['user_id'])){
        $user_id = $_SESSION['user_id'];
    }
    else{
        $user_id = '';
    };
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- Link Loader -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- Link CDN Font Awesome  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

   <!-- Link CSS Eksternal  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<!-- Header -->
<?php include 'components/user_header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p><a href="home.php">home</a> <span> / about</span></p>
</div>

<!-- About -->
<section class="about">
   <div class="row">
      <div class="image">
         <img src="assets/abt.png" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, neque debitis incidunt qui ipsum sed doloremque a molestiae in veritatis ullam similique sunt aliquam dolores dolore? Quasi atque debitis nobis!</p>
         <a href="menu.php" class="btn">our menu</a>
      </div>
   </div>
</section>


<!-- Steps -->
    <section class="steps">
    <h2 class="title">How It Works?</h2>
    <div class="box-container">

        <div class="box">
            <img src="assets/how1.png" alt="">
            <h3>choose order</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt, dolorem.</p>
        </div>

        <div class="box">
            <img src="assets/how2.png" alt="">
            <h3>fast delivery</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt, dolorem.</p>
        </div>

        <div class="box">
            <img src="assets/how3.png" alt="">
            <h3>enjoy food</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt, dolorem.</p>
        </div>

    </div>
    </section>


<!-- Reviews  -->
    <section class="reviews">
    <h2 class="title">customer's reviews</h2>
    <div class="swiper reviews-slider">
        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <img src="assets/rv1.jpg" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos voluptate eligendi laborum molestias ut earum nulla sint voluptatum labore nemo.</p>
                <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Audrey Kimberly</h3>
            </div>

            <div class="swiper-slide slide">
                <img src="assets/rv2.jpg" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos voluptate eligendi laborum molestias ut earum nulla sint voluptatum labore nemo.</p>
                <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Calvin Cairo</h3>
            </div>

            <div class="swiper-slide slide">
                <img src="assets/rv3.jpg" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos voluptate eligendi laborum molestias ut earum nulla sint voluptatum labore nemo.</p>
                <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Jessica Camelia</h3>
            </div>

            <div class="swiper-slide slide">
                <img src="assets/rv4.jpg" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos voluptate eligendi laborum molestias ut earum nulla sint voluptatum labore nemo.</p>
                <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Chelsea Durrel</h3>
            </div>

            <div class="swiper-slide slide">
                <img src="assets/rv5.jpg" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos voluptate eligendi laborum molestias ut earum nulla sint voluptatum labore nemo.</p>
                <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Jeremy Earnest</h3>
            </div>

            <div class="swiper-slide slide">
                <img src="assets/rv6.jpg" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos voluptate eligendi laborum molestias ut earum nulla sint voluptatum labore nemo.</p>
                <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Edric Howart</h3>
            </div>

        </div>
        <div class="swiper-pagination"></div>
    </div>
    </section>


<!-- Footer  -->
<?php include 'components/footer.php'; ?>

<!-- Link JS Slider -->
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- Link File JS  -->
<script src="js/script.js"></script>

<script>
    var swiper = new Swiper(".reviews-slider", {
    loop:true,
    grabCursor: true,
    spaceBetween: 20,
    pagination: {
        el: ".swiper-pagination",
        clickable:true,
    },
    breakpoints: {
        0: {
        slidesPerView: 1,
        },
        700: {
        slidesPerView: 2,
        },
        1024: {
        slidesPerView: 3,
        },
    },
    });
</script>

</body>
</html>