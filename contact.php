<!DOCTYPE html>
<html lang="eng">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!---for smaller screen device-->
        <title>Contact - FASHION OASIS</title>
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
                        <li><a href="about.php">About</a></li>
                        <li><a href="contact.php" class="active">Contact</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </nav>  
                <a href="cart.php"><i class="fas fa-shopping-cart fa-flip-horizontal fa-lg"></i></a>
                <img src="hflogo/menu.png" width="25" height="25" class="menu-icon" onclick="menutoggle()">  
        </div>

<!-----------contact--------------->
<div class="contact-header">
    <h2>#ContactUs</h2>
    <p>Your feedback matters!</p>
</div>

<div class="contact-details">
    <div class="details">
        <span>GET IN TOUCH!</span>
        <h2>Visit our store location or contact us</h2>
        <h3>Main Branch</h3>
        <div>
            <li>
                <i class="fas fa-map-marker-alt"></i>
                <p>G/F, Main Mall, Seaside Blvd, 123, Pasay, 1300 Metro Manila</p>
            </li>
            <li>
                <i class="fas fa-envelope"></i>
                <p>fashion.oasis@gmail.com</p>
            </li>
            <li>
                <i class="fas fa-phone-alt"></i>
                <p>09-8888-7777</p>
            </li>
            <li>
                <i class="fas fa-clock"></i>
                <p>Mon - Sat 08:00 am - 10:00 pm</p>
            </li>
        </div>
    </div>

    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3862.1184395429923!2d120.97936827476526!3d14.53521718594345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397cbfc84288ed7%3A0xe842057d2e701f9b!2sSM%20Mall%20of%20Asia!5e0!3m2!1sen!2sph!4v1687522249479!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

</div>

<div class="form-details">
    <form action="">
        <span>LEAVE A MESSAGE</span>
        <h2>We appreciate your feedback!</h2>
        <input type="text" placeholder="Your name">
        <input type="text" placeholder="E-mail">
        <input type="text" placeholder="Subject">
        <textarea name="" id="" cols="30" rows="10" placeholder="Your message"></textarea>
        <a href="#" class="btn">Submit</a>
        </form>
        <div class="people">
            <div>
                <img src="members/progman.jpg" alt="">
                <p><span>Russel Jay Dela Vega</span> Project Manager <br>E-mail: russel.samplemail@gmail.com</p>
            </div>
            <div>
                <img src="members/prog.jpg" alt="">
                <p><span>Zerylyn Siena</span> Programmer <br>E-mail: zerylyn.samplemail@gmail.com</p>
            </div>
            <div>
                <img src="members/prog2.jpg" alt="">
                <p><span>Edson Añana</span> Programmer <br>E-mail: edsonanana02@gmail.com</p>
            </div>
            <div>
                <img src="members/sysan.jpg" alt="">
                <p><span>Roseann Hernan</span> System Analyst <br>E-mail: roseann.samplemail@gmail.com</p>
            </div>
            <div>
                <img src="members/sysan2.jpg" alt="">
                <p><span>Joana Borigas</span> System Analyst <br>E-mail: joana.samplemail@gmail.com</p>
            </div>
            <div>
                <img src="members/techwri.jpg" alt="">
                <p><span>Chinna Mae Garbo</span> Technical Writer <br>E-mail: chinna.samplemail@gmail.com</p>
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