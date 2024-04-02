<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="stylepage.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
    <header>
        <div class="header-left">
            <div class="logo">
                <img src="image/logolang.png" alt="">
            </div>
                        
            <nav>
                <ul>
                    <li>
                        <a href="" class="active">Home</a>
                    </li>
                    <li>
                        <a href="">Pricing</a>
                    </li>
                    <li>
                        <a href="">About</a>
                    </li>
                    <li>
                        <a href="">Contact Us</a>
                    </li>
                </ul>
</nav>
                <div class="banner"> 
             <div class="app-text">
                <h3>Welcome to CIUDAD De Strike Phase 1</h3>
                <h1><br>APPLY NOW!</h1>
                <p>CIUDAD De Strike provides High Quality Environment,Excellent Housing, Friendly and Trusted neighborhood for the safetiness of you and your Family.</p>
                <button  class="button-new" type="button">Show More<img src="image/arrow.png">
               </button>
                </div>
                  <div class="col-2">
                    <img src="image/banners.png" class="controller">
                    <div class="color-box"></div>
                    </div> 
                  </div>
                </div>
                 
                   
                <div class="header-right">
                <button onclick="toggleLoginForm()" class="login-btn">Login</button>
  </div>
  <div id="loginForm" class="login-form">
  <div class="close-btn">&times;</div>
  <form action="" method="post">
    <h2>Login</h2>
    <div class="container">
      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>

      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
        
      <button type="submit" class="login-btn">Login</button>
    </div>
  </form>
</div>
            
                         
                 
</div>  


<div class="header-right">
<button class="login-same" type="button" id="fix-reg">Register</button>            

           <div class="role">
                <div class="klose-btn">&times;</div>
                <div class="no">
                    <h2>Register Account!</h2>
                    <div class="no-element">
                        <label for="email">Email</label?>
                        <input type="text" id="email" placeholder="Enter email">
                       </div>
                       <div class="no-element">

                         <label for="password">Password</label>
                         <input type="password" id="password" placeholder="Enter Password">
                        </div>

                        <div class="no-element">
                         <label for="confirm_password">Confirm Password</label>
                         <input type="password" id="password" placeholder="Enter Password">
                        </div>
            <div>
             <button class="btn-reg">Register</button>
             </div>  
</div>
<script src="script.js"></script>
</body>
</html>