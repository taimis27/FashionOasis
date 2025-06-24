<!DOCTYPE html>
<html lang="eng">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!---for smaller screen device-->
        <title>All Products - FASHION OASIS</title>
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
                        <li><a href="products.php" class="active">Products</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </nav>  
                <a href="cart.php"><i class="fas fa-shopping-cart fa-flip-horizontal fa-lg"></i></a>
                <img src="hflogo/menu.png" width="25" height="25" class="menu-icon" onclick="menutoggle()">  
        </div>


        <div class="small-container">

            <div class="row row-2">
                <h2>All Products</h2>
                <form action="" class="searchbar">
                    <input type="text" placeholder = "Search anything..." name = "q">
                    <button type="submit"><img style="width: 20px; height: 20px;" src="hflogo/search.png"></button>
                </form>
                <select>
                    <option>Default Sorting</option>
                    <option>Sort by Price</option>
                    <option>Sort by Popularity</option>
                    <option>Sort by Rating</option>
                    <option>Sort by Sale</option>
                </select>
            </div>
                                  
           
            <div class="row">
                <div class="col-4">
                    <a href="whitesneakers.php"><img src="whsneakers/gallery1.webp"></a>
                    <a href="whitesneakers.php"><h4>NICE White Sneakers Exclusive Edition</h4></a>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <p>Php 4,799.00</p>
                </div>
                <div class="col-4">
                    <a href="chanelbag.php"><img src="chanel/product2.jpg"></a>
                    <a href="chanelbag.php"><h4>Chanel Modern White Shoulder Bag</h4></a>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p>Php 2,000.00</p>
                </div>
                <div class="col-4">
                    <a href="ne21shoes.php"><img src="ne21shoes/product3.jpg"></a>
                    <a href="ne21shoes.php"><h4>NE21 Black Casual Shoes Limited Edition</h4></a>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Php 11,599.00</p>
                </div>
                <div class="col-4">
                    <a href="crocsbag.php"><img src="crocsbag/product4.jpg"></a>
                    <a href="crocsbag.php"><h4>Crocs Black Leather Design Handbag</h4></a>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Php 3,399.00</p>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <a href="normalshirt.php"><img src="normalshirt/product5.webp"></a>
                    <a href="normalshirt.php"><h4>Normal Blue Shirt</h4></a>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <p>Php 4,799.00</p>
                </div>
                <div class="col-4">
                    <a href="schoolshoes.php"><img src="schoolshoes/product12.webp"></a>
                    <a href="schoolshoes.php"><h4>School Blue Shoes</h4></a>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Php 2,000.00</p>
                </div>
                <div class="col-4">
                    <a href="winterjacket.php"><img src="winterjacket/product7.webp"></a>
                    <a href="winterjacket.php"><h4>M4A1 Winter Cold Jacket</h4></a>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <p>Php 1,599.00</p>
                </div>
                <div class="col-4">
                    <a href="gooddress.php"><img src="gooddress/product8.webp"></a>
                    <a href="gooddress.php"><h4>Good Wednesday Dress</h4></a>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p>Php 3,399.00</p>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <a href="bucchibag.php"><img src="bucchibag/product9.jpg"></a>
                    <a href="bucchibag.php"><h4>Bucchi Black Handbag</h4></a>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p>Php 4,799.00</p>
                </div>
                <div class="col-4">
                    <a href="parradabag.php"><img src="parradabag/product10.jpg"></a>
                    <a href="parradabag.php"><h4>Parrada Black Handbag</h4></a>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Php 2,000.00</p>
                </div>
                <div class="col-4">
                    <a href="mcshoes.php"><img src="mcshoes/product11.jpg"></a>
                    <a href="mcshoes.php"><h4>Michael Curry Casual Shoes</h4></a>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <p>Php 11,599.00</p>
                </div>
                <div class="col-4">
                    <a href="musicsleeves.php"><img src="musicsleeves/product6.webp"></a>
                    <a href="musicsleeves.php"><h4>MPL Music Sheet Long Sleeves</h4></a>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Php 3,399.00</p>
                </div>
            </div>



        <div class="page-btn">
            <span>1</span>
            <span>2</span>
            <span>3</span>
            <span>4</span>
            <span>&#8594</span>
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