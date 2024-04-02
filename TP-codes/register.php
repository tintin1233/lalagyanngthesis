<?php
require 'config.php';
if(!empty($_SESSION["id"])){
   header("Location: homepage.php");
}
if(isset($_POST["submit"])){
   $FN = $_POST["FN"];
   $LN = $_POST["LN"];
   $email = $_POST["email"];
   $PN = $_POST["PN"];
   $Address = $_POST["Address"];
   $username = $_POST["username"];
   $password = $_POST["password"];
   $UnitNo = $_POST["UnitNo"];
   $errors =array();

   
   if  (empty($FN) OR empty($LN) OR empty($email) OR empty ($PN) OR empty ($Address) OR empty ($username) OR empty ($password) OR empty ($UnitNo)) {
      array_push($errors,"All fields are required");
  
     }
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        array_push($errors, "Email is not valid");
      }
         if  (strlen($password)<6) {                                      
          array_push($errors,"Password must be at least 6 characters long");
         }
      
         require_once "config.php"; 
          $sql = "SELECT * FROM registration WHERE email = '$email'";    
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
  
              $sql = "INSERT INTO registration (firstname, lastname, email, phone, address,username,password,unitno) VALUES (?,?,?,?,?,?,?,?)";
              $stmt = mysqli_stmt_init($conn);
              $prepareStmt = mysqli_stmt_prepare($stmt,$sql);   
              if ($prepareStmt ) {
               mysqli_stmt_bind_param($stmt,"ssssssss", $FN, $LN, $email, $PN, $Address, $username, $password, $UnitNo);
               mysqli_stmt_execute($stmt);
               echo "<script> alert('Registered Successfully')</script>";
               header("Location: login.php");
               
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <div class="container">
        <a href="index.php" class="previous">←</a> 
            <form action="register.php" method="post">
           <div class="form-group">
          <label for="FN">Firstname</label>
          <input type="text"  class="form-control" id = "FN" name="FN"  placeholder="Enter Your Firstname" required>

          <label for="LN">Lastname</label>
          <input type="text"  class="form-control" id = "LN" name="LN"  placeholder="Enter Your Lastname" required>

          <label for="email">Email</label>
          <input type="text"  class="form-control" id = "email" name="email"  placeholder="Enter Your Email" required>
          
           <label for="PN">Phone Number</label>
          <input type="tel" id="PN"  class="form-control" name="PN"  placeholder="Enter Your Phone Number" required>
              
          <label for="Address">Address</label>
          <input type="text"  class="form-control" id = "Address" name="Address"  placeholder="Enter Your Complete Address" >

          <label for="username">Username</label>
          <input type="username"  class="form-control" id = "username" name="username"  placeholder="Enter a Username" required>

          <label for="password">Password</label>
          <input type="password"  class="form-control" id = "password" name="password"  placeholder="Enter a Password" required>

          <label for="UnitNo">Unit No.</label>
          <input type="unitno"  class="form-control" id = "UnitNo" name="UnitNo"  placeholder="Enter your unit no." required>

          </div class="form-btn">
           <input type="submit" class="btn btn-primary" value="Register" name="submit">
           <a href="login.php">Already Have An Account?</a>
       
          </form>
          
</body>
</html>