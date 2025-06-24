<!--?php
include 'config.php';
if($_SERVER['REQUEST_METHOD']=='POST'){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $type = "user";
    if(isset($_POST['submit'])){
     
        $select = " INSERT INTO user_tbl(username, email, password, user_type) VALUES('$username', '$email', '$password', '$type') ";
        
            $result = mysqli_query($conn, $select);

        if($result!==false){

            echo"<script>
            alert('successfully registered!!!');
                </script>";

     header("location: account.php");
        }else{
           $error[] = 'incorrect email or password!';
        }
     
    }
}
?--->

<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $duplicate = mysqli_query($conn, "SELECT * FROM user_tbl WHERE username = '$username' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  else{
    if($password){
      $query = "INSERT INTO user_tbl VALUES('','$username','$email','$password')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
    }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  }
}
?>
<!--DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registration</title>
  </head>
  <body>
    <h2>Registration</h2>
    <form class="" action="" method="post" autocomplete="off">
      <label for="username">Username : </label>
      <input type="text" name="username" id = "username" required value=""> <br>
      <label for="email">Email : </label>
      <input type="email" name="email" id = "email" required value=""> <br>
      <label for="password">Password : </label>
      <input type="password" name="password" id = "password" required value=""> <br>
      <label for="confirmpassword">Confirm Password : </label>
      <input type="password" name="confirmpassword" id = "confirmpassword" required value=""> <br>
      <button type="submit" name="submit">Register</button>
    </form>
    <br>
    <a href="login.php">Login</a>
  </body>
</html-->