
<?php include "head.php" ?>

<section id="nav">
    <img src="images\logo.png" class="logo">
         <ul class="navLinks">
                <li> <a href="index.php">HOME</a></li>
                <li> <a href="shop.php">SHOP</a></li>
                <li> <a href="Blog.php">BLOG</a></li>
                <li> <a href="plantCare.php">PLANT CARE</a></li>
                <li> <a href="aboutUs.php">ABOUT US</a></li>
                <li> <a href=""><i class="fa-solid fa-magnifying-glass"></i></a></li>
                <li> <i class="fa-solid fa-cart-shopping" id="cartIcon" onclick="showCartPopup()" style =" color:#white;"></i></li>
                <span id="cartCounter">0</span>
                <li> <a href=""><i class="fas fa-heart" style="padding: 0;"></i></a></li>                
                <li> <a href="profile.php"><i class="fa-solid fa-user"></i></a></li>
                <button type="button" class="signinButton" onclick="openForm()">Sign In/Up </button>
            </ul>
        </section>

        
        <?php include "login.php" ?>

