<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- css bootstrap link -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <!-- css link -->
      <link rel="stylesheet" href="css/product.css">
      <!-- fonts link -->
       <link rel="stylesheet" href="fonts/all.css">

    <title>Apple Watch</title>
</head>
<body>
    <div class="container product-page mt-5">
        <div class="row">
            <!-- Main Watch Section -->
            <div class="col-xl-6 col-lg-6 text-center">
                <div class="main-watch">
                    <img id="main-watch-image" src="https://res.cloudinary.com/dv39sjtgj/image/upload/v1731476315/watch8_g7uopa.png" alt="Main Watch" class="img-fluid" >
                </div>
            </div>

            <!-- Watch Color Options -->
            <div class="col-xl-6 col-lg-6">
                <h3 class="mt-2">Select a Watch Color:</h3>
               
            <div class="watch-colors d-flex justify-content-between mt-4">
                <div class="watch-color">
                    <img src="https://res.cloudinary.com/dv39sjtgj/image/upload/v1731476339/smart_inr1zw.png" alt="Black Watch" class="img-thumbnail" style="width: 100px;" onclick="changeWatch('./images/smart.png')">
                </div>
                <div class="watch-color">
                    <img src="https://res.cloudinary.com/dv39sjtgj/image/upload/v1731476349/smart1_vefjh1.png" alt="Blue Watch" class="img-thumbnail" style="width: 100px;" onclick="changeWatch('./images/smart1.png')">
                </div>
                <div class="watch-color">
                    <img src="https://res.cloudinary.com/dv39sjtgj/image/upload/v1731476336/smart2_hg4bmp.webp" alt="Red Watch" class="img-thumbnail" style="width: 100px;" onclick="changeWatch('./images/smart2.png')">
                </div>
                <div class="watch-color">
                    <img src="https://res.cloudinary.com/dv39sjtgj/image/upload/v1731476345/watch4_pvqeuw.png" alt="Green Watch" class="img-thumbnail" style="width: 100px;" onclick="changeWatch('./images/watch4.png')">
                </div>
                <div class="watch-color">
                    <img src="https://res.cloudinary.com/dv39sjtgj/image/upload/v1731476315/watch8_g7uopa.png" alt="Default Watch" class="img-thumbnail" style="width: 100px;" onclick="changeWatch('./images/watch8.png')">
                </div>
            </div>

                <div class="content">
                    <h4 class="main-heading">Smart Watch - Your Ultimate Companion</h4>
                    <p class="prdct-details">Stay connected and track your health with our cutting-edge Smart Watch. Featuring a sleek design and advanced technology, this watch offers seamless notifications, fitness tracking, heart rate monitoring, and customizable watch faces. With its durable build and long battery life, it's perfect for your active lifestyle. Elevate your daily routine and achieve your fitness goals with this stylish and functional accessory!</p>
                     <!-- Quantity Input -->
                <div class="quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" id="quantity" name="quantity" min="1" value="1" style="width: 60px;" class="form-control d-inline-block">
                </div>
                    
                    <p class="prdct-price">Price watch: $4,800</p>
                    <!----- <p class="total-price">Total Price: $<span id="total-price">4,800</span></p>-->
                    <!-- <button type="submit" class="btn btn-warning prdct-btn" id="bookNowBtn">Book Now</button> -->


                     <!-- Book Now Button -->
                   <form method="POST" action="booknow.php">
                        <input type="hidden" name="product_name" id="selectedName" value="Smart Watch - Your Ultimate Companion">
                        <input type="hidden" name="product_price" value="4800">
                        <input type="hidden" name="quantity" id="quantityField">
                        <button type="submit" class="btn btn-warning prdct-btn" onclick="updateQuantity()">Book Now</button>
                    </form>   
                </div>
            </div>
        </div>
    </div>

<!-- simillar watch -->

<div class="container mt-5">
    <h3 class="mb-4">Similar Watches</h3>
    <div class="scroll-container">
        <img src="https://res.cloudinary.com/dv39sjtgj/image/upload/v1731476339/smart_inr1zw.png" class="img-fluid" alt="Image 1">
        <img src="https://res.cloudinary.com/dv39sjtgj/image/upload/v1731476349/smart1_vefjh1.png" class="img-fluid" alt="Image 2">
        <img src="https://res.cloudinary.com/dv39sjtgj/image/upload/v1731476336/smart2_hg4bmp.webp" class="img-fluid" alt="Image 3">
        <img src="https://res.cloudinary.com/dv39sjtgj/image/upload/v1731476329/apple4_k0zn87.jpg" class="img-fluid" alt="Image 4">
        <img src="https://res.cloudinary.com/dv39sjtgj/image/upload/v1731476335/apple5_l37qb2.jpg" class="img-fluid" alt="Image 5">
        <img src="https://res.cloudinary.com/dv39sjtgj/image/upload/v1731476340/apple6_pxkdmo.jpg" class="img-fluid" alt="Image 6">
        <img src="https://res.cloudinary.com/dv39sjtgj/image/upload/v1731476346/apple7_pr7it6.webp" class="img-fluid" alt="Image 7">
        <img src="https://res.cloudinary.com/dv39sjtgj/image/upload/v1731476319/apple2_ndaixe.jpg" class="img-fluid" alt="Image 8">
        <img src="https://res.cloudinary.com/dv39sjtgj/image/upload/v1731476340/apple6_pxkdmo.jpg" class="img-fluid" alt="Image 9">
        <img src="https://res.cloudinary.com/dv39sjtgj/image/upload/v1731476329/apple4_k0zn87.jpg" class="img-fluid" alt="Image 10">
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




        <!-- jquery bootstrap link -->
     <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->

     <!-- javascript bootstrap link -->
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

     <script>
         function changeWatch(imagePath, color) {
            document.getElementById("main-watch-image").src = imagePath;
            document.getElementById("selectedColor").value = color;
            document.getElementById("selectedName").value = name;
        }
        
        function updateQuantity() {
            let quantity = document.getElementById("quantity").value;
            document.getElementById("quantityField").value = quantity;
        }
    </script>

</body>
</html>