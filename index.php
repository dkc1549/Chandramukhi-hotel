<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHANDRAMUKHI HOTEL</title>
    <!-- For fonts  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    <!--header section start-->
    <header>
        <div>
            <a href="#" class="logo"><i class="fas-fa-untensils"></i>restro</a>
        </div>

        <nav class="navbar">
            <a href="#home" class="active">Home</a>
            <a href="#dishes">Dishes</a>
            <a href="#about">About</a>
            <a href="#menu">Menu</a>
            <a href="#review">Review</a>
            <a href="#order">Order</a>
        </nav>

        <div class="icons">
            <i class="fas fa-bars" id="menu-bars"></i>
            <i class="fas fa-search" id="search-icon"></i>
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-shopping-cart"></a>
        </div>
    </header>
    <!--header section ends-->

    <!--form section-->
    <div id="form">
        <form action="" id="search-form">
            <input type="search" placeholder="search" name="" id="search-box">
            <label for="search-box" class="fas fa-search"></label>
            <i class="fas fa-times" id="close"></i><!--milena-->
        </form>
    </div>

    <!--home secction starts-->
    <section class="home" id="home">

        <div class=" swiper ">

            <div class="swiper-wrapper wrapper">

                <div class="swiper-slide slide">

                    <div class="content">
                        <span>our special dishes</span>
                        <h3>pizza</h3>
                        <p>For lunch,we have pizza.Peperoni pizza is very delicious.</p>
                        <a href="#" class="btn">order now</a>
                    </div>
                    <div class="image">
                        <img src="assets/uploads/pizza.jpg" alt="pizza" width="500px" height="500px">
                    </div>
                </div>
                <div class="swiper-slide slide">
                    <div class="content">
                        <span>our special dishes</span>
                        <h3>cake</h3>
                        <p>For desert, we have vanilla cake</p>
                        <a href="#" class="btn">order now</a>
                    </div>
                    <div class="image">
                        <img src="assets/uploads/cake.jpg" alt="cake">
                    </div>
                </div>
                <!--sliderhaleko-->
                <div class="swiper-slide slide">
                    <div class="content">
                        <span>our special dishes</span>
                        <h3>Whole chicken</h3>
                        <p>For dinner, we have whole chicken.</p>
                        <a href="#" class="btn">order now</a>
                    </div>
                    <div class="image">
                        <img src="assets/uploads/wholechicken.jpg" alt="wholechicken">
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <!--home secction ends-->

    search-form -> active
    menu-bars-> fa-times






    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!--custom script.js link-->
    <script src="assets/js/main.js"></script>
</body>

</html>