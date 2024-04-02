<?php
  require 'config.php';
  if(!empty($_SESSION["id"])){
    header("Location: homepage.php");
 }
  if(isset($_POST["submit"])){
    $usernameemail = $_POST["usernameemail"];
    $password = $_POST["password"];
    $result = mysqli_query($conn,"SELECT * FROM registration WHERE username = '$usernameemail' OR email = '$usernameemail'");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0){
      if($password == $row["password"]){
        $_SESSION["login"] = true;
        $_SESSION["id"] = $row["id"];
        header("Location: userhomepage.php");
      }
    }else
    echo "<script> alert('Invalid Email')</script>";
  }

?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Popup Login Form</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="header">
  <div class="header-right">
    <button onclick="toggleLoginForm()" class="login-btn">Login</button>
    <button onclick="location.href='register.php';" class="register-btn">Register</button> <!-- Added register button -->
  </div>
</div>

<div id="loginForm" class="login-form">
  <form action="" method="post">
    <h2>Login</h2>
    <div class="container">
      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" id="usernameemail" name="usernameemail" required>

      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" id="password" required>
        
      <button type="submit" class="login-btn">Login</button>
    </div>
  </form>
</div>

<script src="script.js"></script>

</body>
</html>