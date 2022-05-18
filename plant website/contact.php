<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> responsive plant selling website design tutorial</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<header>

    <div class="header-1">

        <div class="share">
            <span> follow us : </span>
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
        </div>

        <div class="call">
            <span> call us : </span>
            <a href="#">+123-456-7890</a>
        </div>

    </div>

    <div class="header-2">

        <a href="#" class="logo"> <i class="fas fa-seedling"></i> GO GREEN </a>

        <form action="" class="search-bar-container">
            <input type="search" id="search-bar" placeholder="search here...">
            <label for="search-bar" class="fas fa-search"></label>
        </form>

    </div>

    <div class="header-3">

        <div id="menu-bar" class="fas fa-bars"></div>

        <nav class="navbar">
            <a href="index.php">home</a>
            <a href="category.php">category</a>
            <a href="product.php">product</a>
            <a href="#deal">deal</a>
            <a href="contact.php">contact</a>
        </nav>

        <div class="icons">
            <a href="#" class="fas fa-shopping-cart"></a>
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-user-circle"></a>
        </div>

    </div>

</header>
<!-- contact section starts  -->

<section class="contact" id="contact">

<h1 class="heading">get in touch</h1>

<div class="row">

    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15076.895920873054!2d72.83196972644954!3d19.141670564195152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b63aceef0c69%3A0x2aa80cf2287dfa3b!2sJogeshwari%20West%2C%20Mumbai%2C%20Maharashtra%20400047!5e0!3m2!1sen!2sin!4v1621609263469!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>

    <form action="datainfo.php" method ="post">

        <div class="inputBox">
            <input  name="name" type="text" required>
            <label>name</label>
        </div>
        <div class="inputBox">
            <input  name="email" type="email" required>
            <label>email</label>
        </div>
        <div class="inputBox">
            <input name="number" type="tel" pattern="[0-9]{3}-[0-9]{4}-[0-9]{3}" placeholder="000-0000-000" required>
            <label>number</label>
        </div>
        <div class="inputBox">
            <textarea required name="message" cols="30" rows="10"></textarea>
            <label>message</label>
        </div>

        <input type="submit" value="send message" class="btn">

    </form>

</div>

</section>
<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>about us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo hic eum veniam aut nisi. Libero autem nemo amet recusandae eveniet?</p>
        </div>
        <div class="box">
            <h3>branch locations</h3>
            <a href="#">india</a>
            <a href="#">USA</a>
            <a href="#">japan</a>
            <a href="#">france</a>
        </div>
        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
            <a href="#">category</a>
            <a href="#">product</a>
            <a href="#">deal</a>
            <a href="#">contact</a>
        </div>
        <div class="box">
            <h3>follow us</h3>
            <a href="#">facebook</a>
            <a href="#">twitter</a>
            <a href="#">instagram</a>
            <a href="#">linked</a>
        </div>

    </div>

    <h1 class="credit"> created by <span> Team </span> | all rights reserved! </h1>
    
</section