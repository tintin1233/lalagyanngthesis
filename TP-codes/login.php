<?php
  require 'config.php';
  
 
  if(isset($_POST["submit"])){
    $usernameemail = $_POST['usernameemail'];
    $password = $_POST['password'];
    $result = mysqli_query($conn,"SELECT * FROM registration WHERE username = '$usernameemail' OR email = '$usernameemail' and password = '$password'");
    $row = mysqli_fetch_assoc($result);

    if(mysqli_num_rows($result) > 0){
      if($password == $row["password"]){
        $_SESSION["login"] = true;
        $_SESSION["id"] = $row["id"];
        header("Location: userindex.html");
      }
    }else{
    echo "<script> alert('Invalid username or password')</script>";
  }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
  
    <title>Login System</title>
</head>
<body>

    <div class="container">
    <a href="index.php" class="previous" >←</a>
    <img src="image/logolang.png" alt="logo" class="logo">
    <h1>
		CIUDAD De Strike 
        
</h1>
        <div class="box form-box">
        <header>
        </header>


        <form action="" method="post">
         <div class="field input">
            <label for="email">Username</label>
             <input type="text" name="usernameemail" id="usernameemail"  placeholder="username or email" required >
         </div>   

         <div class="field input">
            <label for="password">Password</label>
             <input type="password" name="password" id="password" placeholder="password" required >
         </div>   

              <div class="form-btn">
                <input type="submit" class="btn" name="submit" value="Login" required>
             </div>
        
               <div class="links">
                 Not Member yet? <a href="register.php">Register Now</a>                                                             
               </div>



    </form>
    
</body>
</html>