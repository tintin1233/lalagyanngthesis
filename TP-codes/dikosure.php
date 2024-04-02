<?php
if  (isset($_POST["submit"])){
    $FN = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirm_password"];
    $PN = $_POST["phone"];
    $address = $_POST["address"];
    $passwordHash =password_hash($password, PASSWORD_DEFAULT);   
    
    $errors =array();
       
   if  (empty($FN) OR empty($LN) OR empty($email) OR empty ($PN) OR empty ($password) OR empty ($confirmPassword) OR empty ($phone) OR empty ($address)) {
    array_push($errors,"All fields are required");

   }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
      array_push($errors, "Email is not valid");
    }
       if  (strlen($password)<8) {                                      
        array_push($errors,"Password must be at least 8 characters long");
       }
    if  ($password!==$cpassword){
       array_push($errors, "Password does not match");
    }
       require_once "database.php"; 
        $sql = "SELECT * FROM user WHERE email = '$email'";    
        $result = mysqli_query($conn, $sql);       
        $rowCount = mysqli_num_rows($result);
        if ($rowCount>0) {
        array_push($errors, "Email already exist!");

        }   
        if  (count($errors)>0) {
         foreach ($errors as $error) {
             echo "<div class='alert alert-danger'>$error</div>";
         }
        
        }else{

            $sql = "INSERT INTO user (first_name, lastname, email, phone, password, address) VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = mysqli_stmt_init($conn);
            $prepareStmt = mysqli_stmt_prepare($stmt,$sql);   
            if ($prepareStmt ) {
             mysqli_stmt_bind_param($stmt,"ssssss", $firstname, $lastname, $email, $passwordHash, $phone, $address);
             mysqli_stmt_execute($stmt);
             echo "<div class='alert alert-success'>Register Successfully.</div>";
            }else{
              die("Something went wrong");
            }  

           }
        }
           

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    </header>
    <H1>Hello World</H1>
    <a href="index.php">Log Out</a>
</body>
</html>