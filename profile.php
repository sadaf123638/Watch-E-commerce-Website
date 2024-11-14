<?php
 session_start();
 include 'connection.php';
 

// Prevent caching
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");



$email = $_SESSION['email'];
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

    <style>
      .table-responsive {
    width: 100%;
    overflow-x: auto;
}

.table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

.table th, .table td {
    padding: 12px;
    text-align: left;
    border: 1px solid #ddd;
}

.table th {
    background-color: #f2f2f2;
    font-weight: bold;
}

@media (max-width: 768px) {
    .table th, .table td {
        font-size: 14px;
        padding: 8px;
    }
}

    </style>
</head>
<body>
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
                   <i style="font-size: 17px; color: #0a4275; margin-top: 5%;"><?php echo $_SESSION['email']; ?></i>
                </li>
            </ul>
            </div>
          </nav>
  </div>   


  <div class="container">
    <div class="row">
      <div class="col-xl-12 col-lg-12">

      <?php




// Fetch orders for the logged-in user only
$stmt = $con->prepare("SELECT product_name, product_price, quantity, total_price, name, email, address, city, zipcode, phone FROM product_bookings WHERE email = ?");
$stmt->bind_param("s", $email); // `s` is used for strings
$stmt->execute();
$result = $stmt->get_result();




      echo "<h1>Your Orders</h1>";
if ($result->num_rows > 0) {
    // Start table structure
    echo "<div class='table-responsive'>";
    echo "<table class='table'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Product Name</th>";
    echo "<th>Price per Watch</th>";
    echo "<th>Quantity</th>";
    echo "<th>Total Price</th>";
    echo "<th>Name</th>";
    echo "<th>Email</th>";
    echo "<th>Address</th>";
    echo "<th>City</th>";
    echo "<th>Zip Code</th>";
    echo "<th>Phone Number</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['product_name']) . "</td>";
        echo "<td>$" . htmlspecialchars($row['product_price']) . "</td>";
        echo "<td>" . htmlspecialchars($row['quantity']) . "</td>";
        echo "<td>$" . htmlspecialchars($row['total_price']) . "</td>";
        echo "<td>" . htmlspecialchars($row['name']) . "</td>";
        echo "<td>" . htmlspecialchars($row['email']) . "</td>";
        echo "<td>" . htmlspecialchars($row['address']) . "</td>";
        echo "<td>" . htmlspecialchars($row['city']) . "</td>";
        echo "<td>" . htmlspecialchars($row['zipcode']) . "</td>";
        echo "<td>" . htmlspecialchars($row['phone']) . "</td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
    echo "</div>";
} else {
    echo "<p>You have no orders.</p>";
}

$stmt->close();
$con->close();


?>


      </div>
    </div>
  </div>

  
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>