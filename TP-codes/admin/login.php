<?php
    require 'D:\xampp\htdocs\TP-codes\config.php';
    
    if(isset($_POST["submit"])){
      $usernameemail = $_POST["usernameemail"];
      $password = $_POST["password"];
    
      $query = "SELECT * FROM administrator where Admnusrnm = '$usernameemail' and Admnpss = '$password'";
      $result = mysqli_query($conn,$query);
      if($result){
        if(mysqli_num_rows($result) == 1){
            $_SESSION['login'] = true;
            $_SESSION['id'] = $row['id'];
            header('location:index.php');
            exit();
        }
        else{
            echo "<script> alert('Admin not found')</script>";
        }
    }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page - Dashboard Admin Template</title>
    <!--

    Template 2108 Dashboard

	http://www.tooplate.com/view/2108-dashboard

    -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
    <!-- https://fonts.google.com/specimen/Open+Sans -->
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/tooplate.css">
    <link rel="stylesheet" href="">
</head>

<body class="bg03">
    <div class="container">
        <div class="row tm-mt-big">
            <div class="col-12 mx-auto tm-login-col">
                <div class="bg-white tm-block">
                    <div class="row">
                        <div class="col-12 text-center">
                            <i class="fas fa-3x fa-tachometer-alt tm-site-icon text-center"></i>
                            <h2 class="tm-block-title mt-3">Login</h2>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12">
                            <form action="" method="post" class="tm-login-form">
                                <div class="input-group">
                                    <label for="username" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Username</label>
                                    <input name="usernameemail" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" id="usernameemail" placeholder="Admin" required>
                                </div>
                                <div class="input-group mt-3">
                                    <label for="password" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Password</label>
                                    <input name="password" type="password" class="form-control validate" id="password" placeholder="password" required>
                                </div>
                                <div class="input-group mt-3">
                                    <button type="submit" name="submit" class="btn btn-primary d-inline-block mx-auto">Login</button>
                                </div>
                                <div class="input-group mt-3">
                                    <p><em>Login your account.</em></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
    </div>
</body>

</html>