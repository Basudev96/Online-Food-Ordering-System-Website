<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dream Food Restaurant</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    
<!-- header section starts  -->

<header>

<div class="header-1">

    <a href="#" class="logo"> <i class="fas fa-utensils"></i> Yummy Tummy </a>

    <h3 class="call"> <i class="fas fa-phone"></i> call now : +919631461989 </h3>

</div>

<div class="header-2">

    <div id="menu" class="fas fa-hamburger"></div>

    <nav class="navbar">
        <ul>
            <li><a class="active" href="#home">home</a></li>
            <li><a href="#about">about</a></li>
            <li><a href="#dish">dishes</a></li>
            <li><a href="#speciality">speciality</a></li>
            <li><a href="#order">order</a></li>
        </ul>
    </nav>

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-pinterest"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-twitter"></a>
    </div>

</div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

<div class="content">
    <h1>welcome <span>Yummy</span> Tummy</h1>
    
    <a href="#"><button class="btn">get started</button></a>
</div>

<div class="shape"></div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

<h1 class="heading"> <span> about us </span> </h1>

<div class="row">

    <div class="content">
        <h3>lets satisfy your hunger with our tasty dishes</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta suscipit animi, aut veniam itaque non consequuntur reiciendis eveniet doloremque! Laboriosam?<br>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi, vel.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium natus ad voluptatum, voluptates illum animi voluptatibus omnis neque error unde!</p>
        <a href="#"><button class="btn">learn more</button></a>
    </div>

    <div class="image">
        <img src="about_image.jpg" alt="">
    </div>

</div>

</section>

<!-- about section ends -->

<!-- dish section starts  -->

<section class="dish" id="dish">

<h1 class="heading"> <span> popular dishes </span> </h1>

<ul class="controls">
    <li class="buttons button-active" data-filter="all">all</li>
    <li class="buttons" data-filter="sandwich">sandwich</li>
    <li class="buttons" data-filter="cake">cake</li>
    <li class="buttons" data-filter="burger">Burger</li>
    <li class="buttons" data-filter="pasta">Pasta</li>
    <li class="buttons" data-filter="chowmin">Chowmin</li>
</ul>

<div class="image-container">

    <div class="image sandwich">
        <img src="images/sandwich1.jpg" alt="sandwich">
        <a href="#">sandwich</a>
    </div>
    <div class="image sandwich">
        <img src="images/sandwich2.jpg" alt="sandwich">
        <a href="#">sandwich</a>
    </div>
    <div class="image sandwich">
        <img src="images/sandwich3.jpg" alt="sandwich">
        <a href="#">sandwich</a>
    </div>

    <div class="image cake">
        <img src="images/cake1.jpg" alt="cake">
        <a href="#">cake</a>
    </div>
    <div class="image cake">
        <img src="images/cake2.jpg" alt="cake">
        <a href="#">cake</a>
    </div>
    <div class="image cake">
        <img src="images/cake3.jpg" alt="cake">
        <a href="#">cake</a>
    </div>

    <div class="image burger">
        <img src="images/burger1.jpg" alt="burger">
        <a href="#">burger</a>
    </div>
    <div class="image burger">
        <img src="images/burger2.jpg" alt="burger">
        <a href="#">burger</a>
    </div>
    <div class="image burger">
        <img src="images/burger3.jpg" alt="burger">
        <a href="#">burger</a>
    </div>
    <div class="image pasta">
        <img src="images/pasta1.jpeg" alt="pasta">
        <a href="#">Pasta</a>
    </div>
    <div class="image pasta">
        <img src="images/pasta2.jpeg" alt="pasta">
        <a href="#">Pasta</a>
    </div>
    <div class="image pasta">
        <img src="images/pasta3.jpeg" alt="pasta">
        <a href="#">Pasta</a>
    </div>
    <div class="image chowmin">
        <img src="images/chowmin1.jpeg" alt="chowmin">
        <a href="#">chowmin</a>
    </div><div class="image chowmin">
        <img src="images/chowmin2.jpeg" alt="chowmin">
        <a href="#">chowmin</a>
    </div><div class="image chowmin">
        <img src="images/chowmin3.jpeg" alt="chowmin">
        <a href="#">chowmin</a>
    </div>


</div>

</section>

<!-- dish section ends -->



<section class="speciality" id="speciality">

<h1 class="heading"> <span> our speciality </span> </h1>

<div class="box-container">

    <div class="box">
        <img src="images/burger1.jpg" alt="">
        <div class="info">
            <h3>tasty hamburger</h3>
            <p>upto 25% discount</p>
            <a href="#order"><button class="btn"> Order Now </button></a>
        </div>
    </div>

    <div class="box">
        <img src="images/burger2.jpg" alt="">
        <div class="info">
            <h3>fresh burger</h3>
            <p>upto 25% discount</p>
            <a href="#order"><button class="btn"> Order Now </button></a>
        </div>
    </div>

    <div class="box">
        <img src="images/sandwich1.jpg" alt="">
        <div class="info">
            <h3>veg sandwich</h3>
            <p>upto 25% discount</p>
            <a href="#order"><button class="btn"> order Now </button></a>
        </div>
    </div>

    <div class="box">
        <img src="images/pizza1.jpg" alt="">
        <div class="info">
            <h3>delicious pizza</h3>
            <p>upto 25% discount</p>
            <a href="#order"><button class="btn"> order now </button></a>
        </div>
    </div>

</div>

<div class="icons-container">

    <div class="icons">
        <i class="fas fa-shipping-fast"></i>
        <h3>fast delivery</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, quisquam.</p>
    </div>

    <div class="icons">
        <i class="fas fa-tags"></i>
        <h3>heavy discounts</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, quisquam.</p>
    </div>

    <div class="icons">
        <i class="fas fa-hand-holding-usd"></i>
        <h3>money returns</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, quisquam.</p>
    </div>

    <div class="icons">
        <i class="fas fa-headset"></i>
        <h3>24 x 7 support</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, quisquam.</p>
    </div>

</div>

</section>

<!-- speciality section ends -->

<!-- order section starts  -->

<section class="order" id="order">

<h1 class="heading"> <span> order now </span> </h1>

<form action="database.php" method="post">

    <div class="inputBox">
        <input type="text" name="fullname" id="fullname" placeholder="full name">
        <select name="foodtype">
            <option value="" disabled selected>food type</option>
            <option value="veg">veg</option>
            <option value="non-veg">non-veg</option>
        </select>
        <input type="number" name="phone" id="phone" placeholder="phone number">
        <select name="foodname">
            <option value="" disabled selected>Food Name</option>
            <option value="hamburger">Humburger Burger</option>
            <option value="Chies Burger">Chies Burger</option>
            <option value="Fresh Burger">Fresh Burger</option>
            <option value="Chies Sandwich">Chies Sandwich</option>
            <option value="Veg Sandwich">Veg Sandwich</option>
            <option value="Egg Sandwich">Egg Sandwich</option>
            <option value="Fresh Cream Cake">Fresh Cream Cake</option>
            <option value="Dark Chocolate Cake">Dark Chocolate Cake</option>
            <option value="Vanila Cake">Vanila Cake</option>
            <option value="Masla Pasta">Masla Pasta</option>
            <option value="Red Chili Pasta">Red Chili Pasta</option>
            <option value="Masla Chowmine">Masla Chowmine</option>
            <option value="Paner Chowmine">Paner Chowmine</option>
            <option value="Egg Chowmine">Egg Chowmine</option>
        </select>
        <select name="quantity">
            <option value="" disabled selected>Quantity</option>
            <option value="full">Full</option>
            <option value="half">Half</option>
        </select>
        <textarea cols="30" name="address" rows="10" placeholder="full address"></textarea>
    </div>
    
      
    <input type="submit" name="insert" value="order now" class="btn">
</form>

        
</section>

<!-- order section ends -->

<!-- newsletter section starts  -->

<section class="newsletter">

    <h1>newsletter</h1>
    <p>subscribe for latest updates</p>    
    <form action="">
        <input type="email" placeholder="enter your email">
        <input type="submit" value="subscribe">
    </form>

</section>

<!-- newsletter section ends -->

<!-- footer section starts  -->

<section class="footer">

    <img src="" alt="">

    <div class="box-container">

        <div class="box">
            <h3 class="heading"> <span>why choose us?</span> </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus iste unde reprehenderit vitae consequatur incidunt totam aperiam culpa. Repellat, fugiat?</p>
        </div>

        <div class="box">
            <h3 class="heading"> <span>locations</span> </h3>
            <a href="#">india</a>
            <a href="#">Bihar</a>
            <a href="#">Motihari</a>
            <a href="#">Muzaffarpur</a>
        </div>

        <div class="box">
            <h3 class="heading"> <span>quick links</span> </h3>
            <a href="#">home</a>
            <a href="#">about</a>
            <a href="#">dishes</a>
            <a href="#">speciality</a>
            <a href="#">contact</a>
        </div>

        <div class="box">
            <h3 class="heading"> <span>contact us</span> </h3>
            <p> <i class="fas fa-map-marker-alt"></i> motihari, india 845424 </p>
            <p> <i class="fas fa-envelope"></i> dreamrestuarent@gmail.com </p>
            <p> <i class="fas fa-globe"></i> www.dreamrestuarent.in </p>
        </div>

    </div>

<h1 class="credit"> created by <span>Basu</span> | all rights reserved! </h1>

</section>

<!-- footer section ends -->

<!-- jquery cdn link --> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- custom js file link  -->
<script src="js.js"></script>

</body>
</html>

