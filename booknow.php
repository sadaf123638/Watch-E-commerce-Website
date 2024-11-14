<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Form</title>
    <link rel="stylesheet" href="css/booking.css">
    <link rel="stylesheet" href="fonts/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="bg-light">

<div class="container bookingpage mt-5">
    <div class="row">
        <div class="col-xl-12 col-lg-12">
        <h2>Enter Your Shipping Address</h2>
        <form method="POST" action="process-booking.php" id="paymentForm">
            <!-- Hidden fields to carry product data -->
            <input type="hidden" name="product_name" value="<?php echo htmlspecialchars($_POST['product_name']); ?>">
            <input type="hidden" name="product_price" value="<?php echo htmlspecialchars($_POST['product_price']); ?>">
            <input type="hidden" name="quantity" value="<?php echo htmlspecialchars($_POST['quantity']); ?>">

            <!-- Address Form Fields -->
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" class="form-control" id="name" name="name" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <textarea class="form-control" id="address" name="address" autocomplete="off" required rows="4"></textarea>
            </div>
            <div class="form-group">
                <label for="city">City</label>
                <input type="text" class="form-control" id="city" name="city" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="zipcode">Zip Code</label>
                <input type="text" class="form-control" id="zipcode" name="zipcode" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="text" class="form-control" id="phone" name="phone" autocomplete="off" required>
            </div>

            <h4>Payment Details</h4>
        <div class="form-group">
            <label for="cardNumber">Card Number:</label>
            <input type="text" class="form-control" id="cardNumber" name="cardNumber" autocomplete="off" required>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="expiryDate">Expiry Date (MM/YY):</label>
                <input type="date" class="form-control" id="expiryDate" name="expiryDate" autocomplete="off" required>
            </div>
            <div class="form-group col-md-6">
                <label for="cvv">CVV:</label>
                <input type="text" class="form-control" id="cvv" name="cvv" autocomplete="off" required>
            </div>
        </div>
            <button type="submit" class="btn btn-warning">Proceed to Payment</button>
        </form>
    </div>
    </div>
</div>

<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->

       <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   

       <script>
document.getElementById("paymentForm").onsubmit = function() {
    // Card Number Validation (12 digits)
    var cardNumber = document.getElementById("cardNumber").value;
    if (cardNumber.length !== 12 || isNaN(cardNumber)) {
        alert("Card number must be exactly 12 digits.");
        return false; // Prevent form submission if validation fails
    }

    // Expiry Date Validation (must be present or in the future)
    var expiryDate = document.getElementById("expiryDate").value;
    var currentDate = new Date();
    var selectedDate = new Date(expiryDate + "-01"); // Append the first day of the month to the date
    if (selectedDate < currentDate) {
        alert("Expiry date must be present or in the future.");
        return false; // Prevent form submission if validation fails
    }

    // CVV Validation (exactly 3 digits)
    var cvv = document.getElementById("cvv").value;
    if (cvv.length !== 3 || isNaN(cvv)) {
        alert("CVV must be exactly 3 digits.");
        return false; // Prevent form submission if validation fails
    }

    // If all validations pass, the form will be submitted normally
    return true; // Allow form submission
};
</script>

</body>
</html>




