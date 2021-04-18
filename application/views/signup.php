<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
include 'partials/_dbconnect.php';
$username = $_POST["Username"];
$email = $_POST["email"];
$password = $_POST["password"];
$cpassword = $_POST["cpassword"];
$exists = false;
if(($password == $cpassword) && $exists == false){
  $sql = "INSERT INTO `user` (`username`, `email`, `password`) VALUES ('$username', '$email', '$password')";
  $result = mysqli_query($conn, $sql);
  if($result){
    $showAlert = true;
  }
}
else{
  $showError = "Password do not match";
}
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Registration</title>
  </head>
  <body>
    <?php require 'partials/_nav.php' ?>
    <?php
    if($showAlert){
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> You can login.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
    }
    
        if($showError){
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong> ' . $showError . '
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
    }
    ?>
<div class = "container my-4">
<h1 class = "text-center">Registration</h1>
<form action = "/CV_Maker/LoginSystem/signup.php" method = "post">
<div class = "form-group" >
  <div class="mb-3">
    <label for="Username" class="form-label">Full Name</label>
    <input type="text" class="form-control" id="Username" name="Username" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name= "email" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <div class="mb-3">
    <label for="cpassword" class="form-label">Re_type Password</label>
    <input type="password" class="form-control" id="cpassword" name= "cpassword">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Signup</button>
</form> 
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>