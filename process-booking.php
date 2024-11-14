<?php

include 'connection.php';

$id = $_SESSION['id'];

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the data from the previous page (product page)
    // $product_color = $_POST['product_color'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $quantity = $_POST['quantity'];

    // Get the shipping address details
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $zipcode = $_POST['zipcode'];
    $phone = $_POST['phone'];

    // Calculate total price
    $total_price = $product_price * $quantity;

   

    // Data ko database mein insert karein
    $stmt = $con->prepare("INSERT INTO product_bookings (product_name, product_price, quantity, total_price, name, email, address, city, zipcode, phone) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sdidssssss", $product_name, $product_price, $quantity, $total_price, $name, $email, $address, $city, $zipcode, $phone);

    if ($stmt->execute()) {
       header("location: payment.php");
        // echo "<p>Order placed successfully! Your order details have been saved.</p>";
    } else {
        echo "<p>Error: " . $stmt->error . "</p>";
    }

    $stmt->close();
    $con->close();
}




?>
