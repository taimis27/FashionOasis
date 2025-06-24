<!---?php
include 'config.php';
session_start();
if($_SERVER['REQUEST_METHOD']=='POST'){

    $username = $_POST['username'];
    $pass = $_POST['password'];

    if(isset($_POST['submit'])){
     
        $select = " SELECT * FROM user_tbl WHERE username = '$username' AND password = '$pass' ";
     
        $result = mysqli_query($conn, $select);
     
        if($result->num_rows > 0){
     
           while ($row = $result->fetch_assoc()){
     
              if($pass <> $row['password'])
              {
                 $error[] = "Invalid username or password";
                 exit();
              }else{
                 if ($row['user_type'] == 'admin'){
                     header('location:admin_page.php');
                 }else if($row['user_type'] == 'user')
                 {
                    $_SESSION['id'] = $row['id'];
                    header('location:index.php');
                 }else{
                     echo '<script> alert("This user isnt found"); </script>';
                 }
              }
     
           }
     
        }else{
           $error[] = 'incorrect email or password!';
        }
     
    }
}
?-->

<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $username = $_POST["username"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM user_tbl WHERE username = '$username' OR email = '$username'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: index.php");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?>
<!--DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <h2>Login</h2>
    <form class="" action="" method="post" autocomplete="off">
      <label for="username">Username or Email : </label>
      <input type="text" name="username" id = "username" required value=""> <br>
      <label for="password">Password : </label>
      <input type="password" name="password" id = "password" required value=""> <br>
      <button type="submit" name="submit">Login</button>
    </form>
    <br>
    <a href="registration.php">Registration</a>
  </body>
</html-->

