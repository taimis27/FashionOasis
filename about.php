<!DOCTYPE html>
<html lang="eng">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!---for smaller screen device-->
        <title>About Us - FASHION OASIS</title>
        <script src="https://kit.fontawesome.com/6f38c270e6.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="icon" href="hflogo/favicon.ico" type="image/x-icon">
    </head>
    <body>

            <div class="navbar">
                <div class="logo">
                    <a href="index.php"><img src="hflogo/logo.jpg" width="125px"></a>
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="products.php">Products</a></li>
                        <li><a href="about.php" class="active">About</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </nav>  
                <a href="cart.php"><i class="fas fa-shopping-cart fa-flip-horizontal fa-lg"></i></a>
                <img src="hflogo/menu.png" width="25" height="25" class="menu-icon" onclick="menutoggle()">  
            </div>

    <!-----------header--------------->
    <div class="about-header">
        <h2>#AboutUs</h2>
        <p>A collection of timeless classics.</p>
    </div>

    <div class="about-content">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="images/about.jpg">
                </div>
    
                <div class="col-2">
                    <h2>Who We Are</h2>
            <p>
                Our team warmly welcomes you to our FASHION OASIS, where style meets convenience in the comfort of your own home. 
                Discover a curated collection of the latest trends and timeless classics, carefully handpicked to cater 
                to your fashion-forward needs. From elegant evening wear to casual chic, our debut collection showcases 
                a harmonious blend of quality craftsmanship, modern designs, and exceptional customer service. Experience 
                the joy of shopping with us as we redefine the online fashion landscape, offering a seamless browsing and 
                purchasing experience that will leave you looking and feeling your best.
            </p>
                </div>
            </div>
        </div>
    </div>

    <div class="choose-us">
        <h2>Why FASHION OASIS?</h2>
        <p>We pride ourselves on offering a meticulously curated collection of the latest trends and timeless classics, 
            ensuring that you stay ahead of the fashion curve. Secondly, our commitment to quality craftsmanship means that you 
            can trust the durability and longevity of our products. Additionally, our exceptional customer service aims to provide 
            a seamless and enjoyable shopping experience, with personalized assistance and prompt responses to your inquiries. 
            Lastly, we understand the importance of affordability, offering competitive prices without compromising on style or 
            quality. Choose our fashion store and indulge in a world of style, quality, and outstanding service.</p>
    </div>

    <div class="shop-features">
        <h2>What We Offer</h2>

        <div class="shop-content">
            <div class="content-row">
                <img src="images/clickandcollect.jpg">
                <div class="layer">
                    <h5>Click and Collect</h5>
                    <p>Choose anything. Add to Cart. Checkout. It's never been that easy.</p>
                    <a href="#"><i class="fas fa-external-link-alt"></i></a>
                </div>
            </div>

            <div class="content-row">
                <img src="images/shipsnationwide.jpg">
                <div class="layer">
                    <h5>Ships Nationwide</h5>
                    <p>Competitive prices of authentic products in the Philippines.</p>
                    <a href="#"><i class="fas fa-external-link-alt"></i></a>
                </div>
            </div>

            <div class="content-row">
                <img src="images/widevariety.jpg">
                <div class="layer">
                    <h5>Wide Variety of Products</h5>
                    <p>In stock at our store and warehouse, ready to ship directly to you!</p>
                    <a href="#"><i class="fas fa-external-link-alt"></i></a>
                </div>
            </div>
        </div>
    </div>


    <!----------newsletter----------->
 <div class="newsletter">
    <div class="newstext">
        <h1>Sign Up for Newsletters!</h1>
        <p>Get the latest E-mail updates about our shop and <span>special offers.</span></p>
    </div>
    <div class="form">
        <input type="text" placeholder="Your E-mail address">
        <a href="#" class="btn">Sign Up</a>
    </div>
 </div>

    <!-----------footer--------------->

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Our App</h3>
                    <p>App now available in Play Store and App Store!</p>
                        <div class="app-logo">
                            <a href="https://play.google.com/store/games?device=windows"><img src="hflogo/play-store.png"></a>
                            <a href="https://www.apple.com/ph/app-store/"><img src="hflogo/app-store.png"></a>
                        </div>
                    </div>
                <div class="footer-col-2">
                    <a href="index.php"><img src="hflogo/logo1.png"></a>
                    <p>Life is not perfect, but your outfit can be!</p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Post</li>
                        <li>Return Policy</li>
                        <li>Join Affiliate</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow Us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>TikTok</li>
                        <li>Instagram</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright @2023 - Group 6</p>
        </div>
    </div>
<!--------js for toggle menu------------>
    <script>
        var MenuItems = document.getElementById("MenuItems");

        MenuItems.style.maxHeight = "0px";

        function menutoggle(){
            if(MenuItems.style.maxHeight == "0px")
                {
                    MenuItems.style.maxHeight = "200px";
                }
            else
                {
                    MenuItems.style.maxHeight = "0px";
                }
        }
    </script>

    </body>
</html>