<?php 
    include "connection.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>BurgerQ</title>
        <!----- favicon ----->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.png">
        <!----- remix icon ----->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <!----- css ----->
        <link rel="stylesheet" href="assets/css/style.css">
        <!---- Data AOS ---->
        <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
        <!---- review ---->
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    </head>
    <body>
        <!----- Navbar ----->
        <nav class="navbar fixed-top navbar-expand-lg bg-light" id="nav__menu">
            <div class="container-fluid" id="container-fluid">
                <img src="assets/img/burger_nav.png" class="image_fav">
                <a class="navbar-brand" title="Logo BurgerQ">BurgerQ</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="burger.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="burger.php#products">Products</a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" href="burger.php#contact">Contact Us</a>
                            </li>
                        <li class="nav-item">
                            <a class="nav-link" href="faqs.php#questions">FAQs</a>
                        </li>
                        <li class="nav-item">
                            <a href="login.php"><button type="button" class="btn btn-outline-success">Login</button></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav> 
        <main class="main">
            <!----- Home ----->
            <section class="home" id="home">
                <div class="home_container container grid">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8 pt-lg-5" data-aos="fade-right" data-aos="1000">
                                <h1>Boost your mood <br> with BurgerQ</h1>
                                    <p style="text-align:justify; font-style: Fredoka One;">
                                        Made with delicious taste in order to steal the attention of many food lovers.
                                    </p>
                            </div>
                            <div class="col-sm-4" data-aos="fade-left" data-aos-duration="1000">
                                <br><img src="assets/img/burger_home.png" class="img-responsive" width="700px" height="350px" style="padding-left: 50px;">
                            </div> 
                        </div>
                    </div>
                </div>
            </section>
            <!----- Carousel ----->
            <br><br>
            <div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="2000">
                        <center><img src="assets/img/carousel 1.png" class="d-block w-50 border"></center>
                    <div class="carousel-caption d-none d-md-block"></div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <center><img src="assets/img/carousel 2.png" class="d-block w-50 border"></center>
                    <div class="carousel-caption d-none d-md-block"></div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <center><img src="assets/img/carousel 3.png" class="d-block w-50 border"></center>
                    <div class="carousel-caption d-none d-md-block"></div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <!----- Steps ----->
            <section class="steps section container">
                <div class="steps__bg">
                    <h2 class="section__title-center steps__title" data-aos="fade-down" data-aos-duration="1000">How to Get<br> Your BurgerQ</h2>
                    <div class="steps__container grid">
                        <div class="steps__card" data-aos="fade-right" data-aos-duration="1000">
                            <div class="steps__card-number">01</div>
                            <h3 class="steps__card-title">Choose Burger</h3>
                            <p class="steps__card-description">We have several types of burgers with various flavours.</p>
                        </div>
                        <div class="steps__card" data-aos="fade-up" data-aos-duration="1000">
                            <div class="steps__card-number">02</div>
                            <h3 class="steps__card-title">Place an Order</h3>
                            <p class="steps__card-description">When your order has been prepared, we move to the next step which is delivery.</p>
                        </div>
                        <div class="steps__card" data-aos="fade-left" data-aos-duration="1000">
                            <div class="steps__card-number">03</div>
                            <h3 class="steps__card-title">Get Burgers Delivered</h3>
                            <p class="steps__card-description">Only takes a short time and the burger will arrive at your house.</p>
                        </div>
                    </div>
                </div>
            </section>
            <!----- Product ----->
            <section class="product section container" id="products">
                <div class="section_food" data-aos="fade-up" data-aos-duration="1000">
                    <h2 class="section__title" style="text-align: center; font-size: xxx-large;">
                        Check Out Our <br> Products
                    </h2>
                    <p class="product__description" data-aos="fade-up">
                        Here are some special burger from our shop, all are have delicious taste 
                        and there are many flavours you can choose from. Buy and enjoy best taste of the best burger.
                    </p>
                    <div class="product__container grid">
                        <article class="product__card">
                            <img src="assets/img/burger1.png" alt="" class="product__img">
                            <h3 class="product__title">Steak BurgerQ</h3>
                            <span class="product__price">IDR 35 </span>
                        </article>
                        <article class="product__card">
                            <img src="assets/img/burger2.png" alt="" class="product__img">
                            <h3 class="product__title">Cheese BurgerQ</h3>
                            <span class="product__price">IDR 30</span>
                        </article>
                        <article class="product__card">
                            <img src="assets/img/burger3.png" alt="" class="product__img">
                            <h3 class="product__title">Veggie BurgerQ</h3>
                            <span class="product__price">IDR 30 </span>
                        </article>
                        <article class="product__card">
                            <img src="assets/img/burger4.png" alt="" class="product__img">
                            <h3 class="product__title">Double Meat BurgerQ</h3>
                            <span class="product__price">IDR 45</span>
                        </article>
                        <article class="product__card">
                            <img src="assets/img/burger5.png" alt="" class="product__img">
                            <h3 class="product__title">Black Chicken BurgerQ</h3>
                            <span class="product__price">IDR 55</span>
                        </article>
                        <article class="product__card">
                            <img src="assets/img/burger6.png" alt="" class="product__img">
                            <h3 class="product__title">Chicken BurgerQ</h3>
                            <span class="product__price">IDR 25</span>
                        </article>
                    </div>
                </div>
                <div class="section__drink" data-aos="fade-up" data-aos-duration="1000">
                    <h2 class="section__title" style="text-align: center; font-size: xx-large;">
                        Try The New Freshness of Our Drink
                    </h2>
                    <div class="product__container grid">
                        <article class="product__card">
                            <img src="assets/img/lemon tea.png" alt="" class="product__img">
                            <h3 class="product__title">Iced Lemon Tea</h3>
                            <span class="product__price">IDR 10</span>
                        </article>
                        <article class="product__card">
                            <img src="assets/img/lemon.png" alt="" class="product__img">
                            <h3 class="product__title">Iced Lemon Sprite</h3>
                            <span class="product__price">IDR 15</span>
                        </article>
                        <article class="product__card">
                            <img src="assets/img/matcha.png" alt="" class="product__img">
                            <h3 class="product__title">Matcha Green Tea with Less Sugar</h3>
                            <span class="product__price">IDR 15 </span>
                        </article>
                        <article class="product__card">
                            <img src="assets/img/chocolate milkshake.png" alt="" class="product__img">
                            <h3 class="product__title">Iced Chocolate milkshake</h3>
                            <span class="product__price">IDR 20</span>
                        </article>
                        <article class="product__card">
                            <img src="assets/img/coffee.png" alt="" class="product__img">
                            <h3 class="product__title">Iced coffee</h3>
                            <span class="product__price">IDR 15</span>
                        </article>
                        <article class="product__card">
                            <img src="assets/img/strawberry.png" alt="" class="product__img">
                            <h3 class="product__title">strawberry Milk Shake</h3>
                            <span class="product__price">IDR 25 </span>
                        </article>
                    </div>
                </div>
            </section>
            <!----- Question ----->
            <section class="questions section" id="questions">
                <center><h2 class="section__title-center questions__title container" data-aos="fade-down" data-aos-duration="1000">
                    Some common questions were often asked</h2>
                </center>
                <div class="questions__container container grid">
                    <div class="questions__group" data-aos="fade-right" data-aos-duration="1000">
                        <div class="questions__item">
                            <header class="questions__header">
                                <h3 class="questions__item-title">What is BurgerQ</h3>
                            </header>
                            <div class="questions__content">
                                <p class="questions__description">
                                    BurgerQ is a company engaged in the FnB sector. Established in 2022 which has its first branch in North Sumatra, 
                                    has attracted a lot of attention from burger lovers. Our restaurant are known for serving high-quality, great-tasting, and affordable food. 
                                </p>
                            </div>
                        </div>
                        <div class="questions__item">
                            <header class="questions__header">
                                <h3 class="questions__item-title">
                                    I placed an order through the web, but my order never arrived.
                                </h3>
                            </header>
                            <div class="questions__content">
                                <p class="questions__description">
                                    We apologize that your order did not arrive. 
                                    Please contact us on 6281234567890
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="questions__group" data-aos="fade-left" data-aos-duration="1000">
                        <div class="questions__item">
                            <header class="questions__header">
                                <h3 class="questions__item-title">
                                    My order was delivered, but the contents were damaged.
                                </h3>
                            </header>
                            <div class="questions__content">
                                <p class="questions__description">
                                    We apologize that your order did not arrive as expected. 
                                    Please contact the restaurant for assistance: 6281234567890 
                                    If this does not resolve your issue, you can come to the restaurant to get the new order.
                                </p>
                            </div>
                        </div>
                        <div class="questions__item">
                            <header class="questions__header">
                                <h3 class="questions__item-title">
                                    I placed an order, but would like to cancel it.
                                </h3>
                            </header>
                            <div class="questions__content">
                                <p class="questions__description">
                                    We do not support canceled orders at this time. 
                                    Please contact our customers service on 6281234567890
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!----- Contact ----->
            <section class="contact section container" id="contact">                
                <div class="contact__container grid">
                    <div class="contact__box" data-aos="fade-right" data-aos-duration="1000">
                        <h2 class="section__title">Reach out to us today <br> for further information</h2>
                        <div class="contact__data">
                            <div class="contact__information">
                                <h3 class="contact__subtitle" style="font-size: medium;">Call us for instant support</h3>
                                <span class="contact__description">
                                    <i class="ri-phone-line contact__icon"></i> 6281234567890
                                </span>
                            </div>
                            <div class="contact__information">
                                <h3 class="contact__subtitle">Write us by e-mail</h3>
                                <span class="contact__description">
                                    <i class="ri-mail-line contact__icon"></i>burgerq@email.com
                                </span>
                            </div>
                        </div>
                    </div>
                    <form action="" class="contact__form" data-aos="fade-left" data-aos-duration="1000">
                        <div class="contact__inputs">
                            <div class="contact__content">
                                <input type="email" placeholder=" " class="contact__input">
                                <label for="" class="contact__label">Email</label>
                            </div>

                            <div class="contact__content">
                                <input type="text" placeholder=" " class="contact__input">
                                <label for="" class="contact__label">Subject</label>
                            </div>

                            <div class="contact__content contact__area">
                                <textarea name="message" placeholder=" " class="contact__input"></textarea>                              
                                <label for="" class="contact__label">Message</label>
                            </div>
                        </div>                    
                        <button type="button" class="btn btn-dark">Send Message</button>
                    </form>
                </div>
            </section>
        </main>
        <!----- Footer ----->
        <footer class="footer section">
            <div class="footer__container container grid">
                <div class="footer__content">
                    <a href="#" class="footer__logo">BurgerQ</a>
                    <h3 class="footer__title">Subscribe to our newsletter <br> to stay update</h3>
                    <div class="footer__subscribe">
                        <input type="email" placeholder="Enter your email" class="footer__input">
                        <button type="button" class="btn btn-dark">Subscribe</button>
                    </div>
                </div>
                <div class="footer__content">
                    <h3 class="footer__title">Our Address</h3>
                    <ul class="footer__data">
                        <li class="footer__information">Jalan Dr T Mansur No 9 Padang Bulan.</li>
                        <li class="footer__information">Kec. Medan Baru, Kota Medan</li>
                        <li class="footer__information">Sumatera Utara</li>
                    </ul>
                </div>
                <div class="footer__content">
                    <h3 class="footer__title">Contact Us</h3>
                    <ul class="footer__data">
                        <li class="footer__information">6281234567890</li>
                    </ul>
                </div>
                <div class="footer__content">
                    <h3 class="footer__title">We accept all credit cards</h3>
                    <div class="footer__cards">
                        <img src="assets/img/bri.png" alt="" class="footer__card">
                        <img src="assets/img/mandiri.png" alt="" class="footer__card">
                        <img src="assets/img/bni.png" alt="" class="footer__card">
                        <img src="assets/img/ovo.png" alt="" class="footer__card">
                    </div>
                </div>
            </div>
        <!----- Javascript ----->
        <script src="main.js"></script>
        <!----- Script Source ----->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <!----- Script AOS ----->
        <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
        <script>AOS.init();</script>
    </body>
</html>