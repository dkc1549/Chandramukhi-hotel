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
            <i class="fas fa-times" id="close"></i>
        </form>
    </div>

    <!--home secction starts-->
    <section class="home" id="home">

    <div class=" swiper home-slider">

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

    <!--dishes section starts-->
<section class="dishes" id="dishes">
  <h3 class="sub-heading">our dishes</h3> 
   <h1 class="heading">popular dishes</h1> 

   <div class="box-container">

   <div class="box">
    <a href="#" class="fas fa-heart"></a>
    <a href="#" class="fas fa-eye"></a>
    <img scr="assets/uploads/burger.jpg" alt="">
    <h3>Tasty food</h3>
    <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-half-alt"></i>
   </div>
   <span>Rs.100</span>
   <a href="#" class="btn">add to cart</a>
</div>

<div class="box">
    <a href="#" class="fas fa-heart"></a>
    <a href="#" class="fas fa-eye"></a>
    <img scr="assets/uploads/fries.jpg" alt="">
    <h3>Tasty food</h3>
    <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-half-alt"></i>
   </div>
   <span>Rs.100</span>
   <a href="#" class="btn">add to cart</a>
</div>

<div class="box">
    <a href="#" class="fas fa-heart"></a>
    <a href="#" class="fas fa-eye"></a>
    <img scr="assets/upload/sandwich.jpg" alt="">
    <h3>Tasty food</h3>
    <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-half-alt"></i>
   </div>
   <span>Rs.200</span>
   <a href="#" class="btn">add to cart</a>
</div>
<div class="box">
    <a href="#" class="fas fa-heart"></a>
    <a href="#" class="fas fa-eye"></a>
    <img scr="assets/uploads/dish4.jpg" alt="">
    <h3>Tasty food</h3>
    <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-half-alt"></i>
   </div>
   <span>Rs.100</span>
   <a href="#" class="btn">add to cart</a>
</div>
<div class="box">
    <a href="#" class="fas fa-heart"></a>
    <a href="#" class="fas fa-eye"></a>
    <img scr="assets/uploads/wholechicken.jpg" alt="">
    <h3>Tasty food</h3>
    <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-half-alt"></i>
   </div>
   <span>Rs.100</span>
   <a href="#" class="btn">add to cart</a>
</div>

</section>
<!--dishes section ends-->


<!--about section starts-->
<section class="about" id="about">
	
<h3 class="sub-heading">about us</h3> 
<h1 class="heading">why choose us?</h1> 

<div class="row">

     <div class="image">
        <img scr="assets/uploads/about.png" alt="">
        <a href="#"></a>
    </div>

    <div class="content">
        <h3>best food in pokhara</h3>
        <p>here you can find best food in the world. We ell al kinds of food we are very happy delicver such food to you. we have quich service here.thank you</p>
        <div class="icons-container">
             <div class="icons">
                <i class="fas fa-shipping-fast"></i>
                <span>free delivery</span>
            </div>

        <div class="icons">
            <i class="fas fa-dollar-sign"></i>
            <span>easy payments</span>
        </div>  
        <div class="icons">
             <i class="fas fa-headset"></i>
            <span>24/7hr service</span>
         </div>
    </div>
    <a href="#" class="btn">learn more</a>         
</div>


</section>
<!--about section ends-->

<!--menu section starts-->

<section class="menu" id="menu">
	
<h3 class="sub-heading">our menu</h3> 
   <h1 class="heading">today's speciality</h1> 

   <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="assets/uploads/cake.jpg" lt="">
                <a href="#"></a>
            </div>
            <div class="content">
                <div class ="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>delicious food</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio, reiciendis nisi harum corrupti qui temporibus similique veritatis quam cum sit nostrum alias, corporis incidunt quae? Temporibus, reiciendis in. Eum, commodi?</p>
                <a href="#" class="btn">add to cart</a>
                <span class="price">Rs130</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="assets/uploads/burger.jpg" lt="">
                <a href="#"></a>
            </div>
            <div class="content">
                <div class ="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>delicious food</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio, reiciendis nisi harum corrupti qui temporibus similique veritatis quam cum sit nostrum alias, corporis incidunt quae? Temporibus, reiciendis in. Eum, commodi?</p>
                <a href="#" class="btn">add to cart</a>
                <span class="price">Rs130</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="assets/uploads/fries.jpg" lt="">
                <a href="#"></a>
            </div>
            <div class="content">
                <div class ="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>delicious food</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio, reiciendis nisi harum corrupti qui temporibus similique veritatis quam cum sit nostrum alias, corporis incidunt quae? Temporibus, reiciendis in. Eum, commodi?</p>
                <a href="#" class="btn">add to cart</a>
                <span class="price">Rs130</span>
            </div>


        </div>

   </div>
</section>

<!--menu section ends-->


<!--review section starts-->
<section class="review" id="review">
<h3 class="sub-heading">customer's review</h3> 
<h1 class="heading">What they say</h1> 
 
<div class="swiper review-slider">

    <div class="swiper-wrapper wrapper">

        <div class="swiper-slide slide">
            <i class="fas fa-quote-right"></i>
            <div class="user">
                <img src="assets/uploads/aarat.jpg" alt="">
                <div class="user-info">
                    <h3>Aarati</h3>
                    <div class ="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est fugiat repellat maxime temporibus fugit, ratione sed quod tenetur asperiores assumenda soluta aperiam porro dolor non, vero reiciendis qui magnam recusandae.</p>
        </div>

        <div class="swiper-slide slide">
            <i class="fas fa-quote-right"></i>
            <div class="user">
                <img src="assets/uploads/sagar.jpg" alt="">
                <div class="user-info">
                    <h3>sagar</h3>
                    <div class ="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est fugiat repellat maxime temporibus fugit, ratione sed quod tenetur asperiores assumenda soluta aperiam porro dolor non, vero reiciendis qui magnam recusandae.</p>
        </div>

        <div class="swiper-slide slide">
            <i class="fas fa-quote-right"></i>
            <div class="user">
                <img src="assets/uploads/prakriti.jpg" alt="">
                <div class="user-info">
                    <h3>prakriti</h3>
                    <div class ="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est fugiat repellat maxime temporibus fugit, ratione sed quod tenetur asperiores assumenda soluta aperiam porro dolor non, vero reiciendis qui magnam recusandae.</p>
        </div>

        <div class="swiper-slide slide">
            <i class="fas fa-quote-right"></i>
            <div class="user">
                <img src="assets/uploads/ashish.jpg" alt="">
                <div class="user-info">
                    <h3>Aashish</h3>
                    <div class ="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est fugiat repellat maxime temporibus fugit, ratione sed quod tenetur asperiores assumenda soluta aperiam porro dolor non, vero reiciendis qui magnam recusandae.</p>
        </div>
        
        <div class="swiper-slide slide">
            <i class="fas fa-quote-right"></i>
            <div class="user">
                <img src="assets/uploads/kabita.jpg" alt="" height-"300px" width="200px">
                <div class="user-info">
                    <h3>kabita</h3>
                    <div class ="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est fugiat repellat maxime temporibus fugit, ratione sed quod tenetur asperiores assumenda soluta aperiam porro dolor non, vero reiciendis qui magnam recusandae.</p>
        </div>
    </div>
</div>
</section>
<!--review section ends-->



<!--order  section starts-->
<section class="order" id="order">
<h3 class="sub-heading">order now</h3> 
<h1 class="heading">free and fast</h1> 
<form action="">
    <div class="inputBox">
        <div class="input">
            <span>your name</span>
            <input type="text" placeholder="enter your name">
        </div>
        <div class="input">
            <span>your number</span>
            <input type="number" placeholder="enter your number">
        </div>
    </div>
    <div class="inputBox">
        <div class="input">
            <span>your order</span>
            <input type="text" placeholder="enter food name">
        </div>
        <div class="input">
            <span>additional food</span>
            <input type="text" placeholder="extra with food">
        </div>
    </div>
    <div class="inputBox">
        <div class="input">
            <span>how much</span>
            <input type="number" placeholder="how many orders">
        </div>
        <div class="input">
            <span>date and time</span>
            <input type="datetime-local" >
        </div>
    </div>
    <div class="inputBox">
        <div class="input">
            <span>your order address</span>
            <textarea name="" placeholder="enter your address" id="" cols="30" rows="10"></textarea>
        </div>
        <div class="input">
            <span>your order message</span>
            <textarea name="" placeholder="enter your message" id="" cols="30" rows="10"></textarea>
        </div>   
    </div>
<input type="submit" value="order now" class="btn">
</form>

</section>
<!--order section ends-->

<!--footer section starts-->
<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>location</h3>
            <a href="#">India</a>
            <a href="#">China</a>
            <a href="#">Nepal</a>
            <a href="#">Japan</a>  
        </div>

        <div class="box">
            <h3>Qick link</h3>
            <a href="#">home</a>
            <a href="#">adishes</a>
            <a href="#">about</a>
            <a href="#">menu</a>
            <a href="#">review</a>
            <a href="#">order</a>
        </div>

        <div class="box" id="contactus">
            <h3>Contact info</h3>
            <a href="#">9826156333</a>
           <a href="mailto:chandradura05@gmail.com">chandradura05@gmail.com</a>
           <a href="mailto:darshankc@gmail.com">darshankc@gmail.com</a>
           <a href="#">Rambazar-15,Pokhara</a>
        </div>
    </div>
</section>



















    search-form -> active
    menu-bars-> fa-times






    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!--custom script.js link-->
    <script src="assets/js/main.js"></script>
</body>

</html>