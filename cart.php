<!DOCTYPE html>
<html lang="eng">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!---for smaller screen device-->
        <title>Cart - FASHION OASIS</title>
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
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </nav>  
            <a href="cart.php"><i class="fas fa-shopping-cart fa-flip-horizontal fa-lg"></i></a>
            <img src="hflogo/menu.png" width="25" height="25" class="menu-icon" onclick="menutoggle()">  
    </div>

<!---------cart item details---------->
<div class="small-container cart-page">
    <table>
        <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Subtotal</th>
        </tr>
        <tr>
            <td>
                <div class="cart-info">
                    <a href="whitesneakers.php"><img src="whsneakers/gallery1.webp"></a>
                    <div>
                        <a href="whitesneakers.php"><p>White Sneakers Exclusive Edition</p></a>
                        <small>Price: Php 4,799.00</small>
                        <br>
                        <a href="">Remove</a>
                    </div>
                </div>
            </td>
            <td><input type="number" value="1"></td>
            <td>Php 4,799.00</td>
        </tr>
        <tr>
            <td>
                <div class="cart-info">
                    <a href="winterjacket.php"><img src="winterjacket/product7.webp"></a>
                    <div>
                        <a href="winterjacket.php"><p>M4A1 Winter Cold Jacket</p></a>
                        <small>Price: Php 1,599.00</small>
                        <br>
                        <a href="">Remove</a>
                    </div>
                </div>
            </td>
            <td><input type="number" value="1"></td>
            <td>Php 1,599.00</td>
        </tr>
        <tr>
            <td>
                <div class="cart-info">
                    <a href="mcshoes.php"><img src="mcshoes/product11.jpg"></a>
                    <div>
                        <a href="mcshoes.php"><p>Michael Curry Casual Shoes</p></a>
                        <small>Price: Php 11,599.00</small>
                        <br>
                        <a href="">Remove</a>
                    </div>
                </div>
            </td>
            <td><input type="number" value="1"></td>
            <td>Php 11,599.00</td>
        </tr>
    </table>

    <div class="total-price">

        <table>
            <tr>
                <td>Subtotal:</td>
                <td>Php 17,997.00</td>
            </tr>
            <tr>
                <td>Tax:</td>
                <td>Php 100.00</td>
            </tr>
            <tr>
                <td>Total:</td>
                <td>Php 18,097.00</td>
            </tr>  
        </table>
    </div>
    
    <div class="checkout">
        <a href="#" class="btn">Check Out</a>
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