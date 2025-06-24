<!DOCTYPE html>
<html lang="eng">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!---for smaller screen device-->
        <title>Log In or Sign Up - FASHION OASIS</title>
        <script src="https://kit.fontawesome.com/6f38c270e6.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="icon" href="hflogo/favicon.ico" type="image/x-icon">
    </head>
    
    <body>
        <style>
        </style>
       <div class="navbar">
        <div class="logo">
            <a href="index.php"><img src="hflogo/logo.jpg" width="125px"></a>
        </div>
        <nav>
            <ul id="MenuItems">
                <li><a href="account.php" class="active">Account</a></li>
            </ul>
        </nav>
</div>

<!----------account-page------------->


<div class="account-page">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <img src="hflogo/illustration.png" width="65%">
            </div>

            <div class="col-2">
                <div class="form-container">
                    <div class="form-btn">
                        <span onclick="login()">Log In</span>
                        <span onclick="register()">Register</span>
                        <hr id="Indicator">
                    </div>

                    <form method="POST" action="login.php" id="LogInForm">
                        <input type="text" name="username" placeholder="Username">
                        <input type="password" name="password" placeholder="Password">
                        <button name="submit" type="submit" class="btn">LogIn</button>
                        <a href="">Forgot Password</a>
                    </form>

                    <form method="POST" action="register.php" id="RegForm">
                        <input name="username"type="text" placeholder="Username">
                        <input name="email"type="email" placeholder="E-mail">
                        <input name="password"type="password" placeholder="Password">
                        <button name="submit" type="submit" class="btn">Register</button>
                    </form>
                </div>
            </div>
        </div>
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

<!--------js for toggle form------------>

    <script>
        
        var LogInForm = document.getElementById("LogInForm");
        var RegForm = document.getElementById("RegForm");
        var Indicator = document.getElementById("Indicator");

            function register(){

                RegForm.style.transform = "translateX(0px)";
                LogInForm.style.transform = "translateX(0px)";
                Indicator.style.transform = "translateX(100px)";
            }

            function login(){

                RegForm.style.transform = "translateX(300px)";
                LogInForm.style.transform = "translateX(300px)";
                Indicator.style.transform = "translateX(0px)";
            }

    </script>

</body>
</html>