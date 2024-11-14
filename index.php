<?php
 include 'connection.php';

// Check if the user is logged in
if (!isset($_SESSION['email'])) {
  header("location: login.php");
  exit;
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
                <li class="nav-item">
                  <a class="nav-link" href="#About">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#Product">Products</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="profile.php">Order</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="login.php">Logout</a>
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
     <!-- about page -->

     <div class="container-background about" id="About">
      <div class="about-page">
      <div class="row">
        <div class="col-xl-6 col-lg-6">
          <div class="watch-about-page">
            <h1 class="heading-part">Timeless Elegance <br>Crafted for You</h1>
            <p class="watch-details">At WatchHub, we believe a watch is more than just an accessory; it's a symbol of style, precision, and craftsmanship. Each piece is designed with meticulous attention to detail, blending classic elegance with modern innovation. Whether you're looking for a statement piece for formal occasions or a reliable companion for everyday wear, our collection offers the perfect timepiece for every moment. Discover the art of timekeeping with us.</p>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6">
          <div class="about-page-image">
            <img src="https://res.cloudinary.com/dv39sjtgj/image/upload/v1731476354/watch6_kwttah.png" alt="image-logo" class="img-fluid about-img">
          </div>
        </div>
      </div>
    </div>
     </div>

     <!-- new product -->

     <div class="container products" id="Product">
      <h1 class="heading-product">New Arrival</h1>
      <div class="row">
        <div class="col-xl-3 col-lg-3 mt-3">
          <div class="card" >
            <img class="card-img-top img-product" src="https://res.cloudinary.com/dv39sjtgj/image/upload/v1731476331/apple_xwpgwh.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Apple Watch</h5>
              <h3 class="price">$ 4,530</h3>
              <div class="text-center">
              <a href="productpgeone.php" class="btn btn-primary bookbtn">Book Now</a>
            </div>
          </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-3 mt-3">
          <div class="card">
            <img class="card-img-top img-product" src="https://res.cloudinary.com/dv39sjtgj/image/upload/v1731476328/r_jdnwua.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Rolex watch</h5>
              <h3 class="price">$ 3,500</h3>
              <div class="text-center">
              <a href="prdctpgetwo.php" class="btn btn-primary bookbtn">Book Now</a>
            </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-3 mt-3">
          <div class="card">
            <img class="card-img-top img-product" src="https://res.cloudinary.com/dv39sjtgj/image/upload/v1731476356/watch5_yyzsrp.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Golden Watch</h5>
              <h3 class="price">$ 2,320</h3>
              <div class="text-center">
              <a href="prdctpgethree.php" class="btn btn-primary bookbtn">Book Now</a>
            </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-3 mt-3">
          <div class="card">
            <img class="card-img-top img-product" src="https://res.cloudinary.com/dv39sjtgj/image/upload/v1731476315/watch8_g7uopa.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Smart watch</h5>
              <h3 class="price">$ 4,800</h3>
              <div class="text-center">
              <a href="prdctpgefour.php" class="btn btn-primary bookbtn">Book Now</a>
            </div>
            </div>
          </div>
        </div>
      </div>
     </div>


     <!-- banner -->

     <div class="container-background banner">
          <h4 class="offer">50% OFF</h4>
          <h3 class="offer-name">Special Collection</h3>
          <div class="text-center">
          <button type="submit" class="banner-btn">Shop Now</button>
          </div>
     </div>




<!-- Collection Watch Images -->
<div class="container">
  <h1 class="heading-product text-center">Collection</h1>
  <div class="row mb-3">
    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
      <div class="watch-collection">
        <img src="https://res.cloudinary.com/dv39sjtgj/image/upload/v1731476351/images2_cc4jwc.webp" alt="image1" class="img-fluid" style="height: 40vh; width: 100%; object-fit: cover;">
      </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
      <div class="watch-collection">
        <img src="https://res.cloudinary.com/dv39sjtgj/image/upload/v1731476317/images9_zzzmw9.jpg" alt="image2" class="img-fluid" style="height: 40vh; width: 100%; object-fit: cover;">
      </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
      <div class="watch-collection">
        <img src="https://res.cloudinary.com/dv39sjtgj/image/upload/v1731476341/images0_vdfeqm.webp" alt="image3" class="img-fluid" style="height: 40vh; width: 100%; object-fit: cover;">
      </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
      <div class="watch-collection">
        <img src="https://res.cloudinary.com/dv39sjtgj/image/upload/v1731476347/images6_oy7p6l.webp" alt="image4" class="img-fluid" style="height: 40vh; width: 100%; object-fit: cover;">
      </div>
    </div>
  </div>

  <div class="row mt-3">
    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
      <div class="watch-collection">
        <img src="https://res.cloudinary.com/dv39sjtgj/image/upload/v1731476348/images5_zrllgl.webp" alt="image5" class="img-fluid" style="height: 40vh; width: 100%; object-fit: cover;">
      </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
      <div class="watch-collection">
        <img src="https://res.cloudinary.com/dv39sjtgj/image/upload/v1731476347/images6_oy7p6l.webp" alt="image6" class="img-fluid" style="height: 40vh; width: 100%; object-fit: cover;">
      </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
      <div class="watch-collection">
        <img src="https://res.cloudinary.com/dv39sjtgj/image/upload/v1731476350/images7_ed9qjr.webp" alt="image7" class="img-fluid" style="height: 40vh; width: 100%; object-fit: cover;">
      </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
      <div class="watch-collection">
        <img src="https://res.cloudinary.com/dv39sjtgj/image/upload/v1731476315/images8_x0xxel.jpg" alt="image8" class="img-fluid" style="height: 40vh; width: 100%; object-fit: cover;">
      </div>
    </div>
  </div>
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
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      
</body>
</html>