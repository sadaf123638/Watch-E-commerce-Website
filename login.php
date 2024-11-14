<?php
include 'connection.php';

if(isset($_POST["log-btn"])){
    $email = $_POST["email"];
    $password = $_POST["password"];
    $result = mysqli_query($con, "SELECT * FROM watchreg WHERE email = '$email'");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0){
        if($password == $row["password"]){
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            $_SESSION["email"] = $row["email"];
            header("location: index.php");

        }
        else{
            echo 
            "<script>
            alert('Wrong password !');
            </script>";
        }

    }
    else{
        echo 
        "<script>
        alert('User not register');
        </script>";
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!-- css bootstrap link -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <!-- css link -->
       <link rel="stylesheet" href="css/login.css">
       <!-- fonts link -->
        <link rel="stylesheet" href="fonts/all.css">
  
    <title>Login Page</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4"></div>
            <div class="col-xl-4 col-lg-4 mt-5">
        <div class="login-dsgn">
            <h3>Log In</h3>
            <form action="" method="post">
                <div class="mb-3">
                <input type="email" name="email" id="" class="form-control" placeholder="Email" autocomplete="off">
                </div>
                <div class="mb-3">
                <input type="password" name="password" id="" class="form-control" placeholder="Password" autocomplete="off">
                </div>
                <div class="text-center">
                <button type="submit" name="log-btn" class="btn btn-primary">Login</button>
            </div>
            <div class="text-center">
            <a href="register.php">Don't have an account?</a>
            </div>
            </form>
        </div>
        </div>
        <div class="col-xl-4 col-lg-4"></div>
        </div>
    </div>


       <!-- javascript bootstrap link -->
       <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

       <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   
</body>
</html>