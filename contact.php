<?php

include 'connection.php';

$run = '';

if(isset($_POST["submit"])){

  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];
  $query = "INSERT INTO contact (name, email, subject, message) values ('$name', '$email', '$subject', '$message')";
  $run = mysqli_query($con,$query);

  if($run){
    header("location: index.php");
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
     <link rel="stylesheet" href="css/style.css">
     <!-- fonts link -->
      <link rel="stylesheet" href="fonts/all.css">

    <title>Watch E-Commerce Website</title>
</head>
<body>
    <!-- nav bar -->
     <div class="container-background navigation-bar">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="#">WatchHub</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"><i class="fa-solid fa-bars"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
              </ul>
            </div>
          </nav>
          <div class="image-container">
            <div class="image-logo">
              <img src="https://res.cloudinary.com/dv39sjtgj/image/upload/v1731476316/watch7_kjedsi.png" alt="image-logo" class="img-fluid watchimg">
            </div>
            <div class="hero-content">
            
              <h1> <span>New</span><br>Pure Luxury</h1>
              <h2>Blue Omega SA</h2>
              <p>$ 3,879</p>
              <div class="btn-container">
             <button class="primary-btn">Discover</button>
             <button class="secondary-btn">Add to Cart</button>
            </div>
            </div>
          </div>
      </div>


      <!-- contact -->
   <div class="container-fluid" id="contact">
    <h1 class="heading-prdct">Contact</h1>
          <form action="" method="post">
            <div class="form-group">
              <input type="text" class="form-control" name="name" id="" aria-describedby="emailHelp" placeholder="Name" autocomplete="off" required>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" id="exampleInputPassword1" placeholder="Email" autocomplete="off" required>
            </div>
            <div class="form-group">
            <input type="text" class="form-control" name="subject" id="" aria-describedby="emailHelp" placeholder="Subject" autocomplete="off" required>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" id="" rows="3" placeholder="Message" autocomplete="off" required></textarea>
            </div>
            <div class="text-center">
            <button type="submit" name="submit" class=" btn btn-light bookbtn">Submit</button>
            </div>
          </form>
   </div>

   <!-- footer -->
<div class="container-backround mt-5">
  <footer class="bg-body-tertiary text-center">
      <!-- Grid container -->
      <div class="container p-4 pb-0">
        <!-- Section: Social media -->
        <section class="mb-4">
          <!-- Facebook -->
          <a
          data-mdb-ripple-init
            class="btn text-white btn-floating m-1"
            style="background-color: #3b5998;"
            href="#!"
            role="button"
            ><i class="fab fa-facebook-f"></i
          ></a>
    
          <!-- Twitter -->
          <a
            data-mdb-ripple-init
            class="btn text-white btn-floating m-1"
            style="background-color: #55acee;"
            href="#!"
            role="button"
            ><i class="fab fa-twitter"></i
          ></a>
    
          <!-- Google -->
          <a
            data-mdb-ripple-init
            class="btn text-white btn-floating m-1"
            style="background-color: #dd4b39;"
            href="#!"
            role="button"
            ><i class="fab fa-google"></i
          ></a>
    
          <!-- Instagram -->
          <a
            data-mdb-ripple-init
            class="btn text-white btn-floating m-1"
            style="background-color: #ac2bac;"
            href="#!"
            role="button"
            ><i class="fab fa-instagram"></i
          ></a>
    
          <!-- Linkedin -->
          <a
            data-mdb-ripple-init
            class="btn text-white btn-floating m-1"
            style="background-color: #0082ca;"
            href="#!"
            role="button"
            ><i class="fab fa-linkedin-in"></i
          ></a>
          <!-- Github -->
          <a
            data-mdb-ripple-init
            class="btn text-white btn-floating m-1"
            style="background-color: #333333;"
            href="#!"
            role="button"
            ><i class="fab fa-github"></i
          ></a>
        </section>
        <!-- Section: Social media -->
      </div>
      <!-- Grid container -->
    
      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05); font-weight: bold;">
        WatchHub
      </div>
      <!-- Copyright -->
    </footer>
  </div>
  
    <!-- javascript bootstrap link -->
    

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>


