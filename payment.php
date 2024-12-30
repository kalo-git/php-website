<?php

// Include functions file if necessary
include 'functions.php';
include 'includes/header.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve user data from the form
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    // WhatsApp number (replace with your WhatsApp business number)
    $whatsapp_number = "7477835515";
    // Create WhatsApp link with user details
    $whatsapp_message = "Payment Information: \nName: $name\nPhone: $phone\nMessage: $message";
    $whatsapp_url = "https://wa.me/$whatsapp_number?text=" . urlencode($whatsapp_message);

    // Redirect to WhatsApp
    echo "<script>
        alert('Thank you for submitting the form. You will now be redirected to WhatsApp.');
        window.location.href = '$whatsapp_url';
    </script>";
    exit();
}
?>

<!-- php -->

<div class="container py-5">
    <h2 class="text-center mb-4">Complete Your Payment</h2>
    
    <div class="row justify-content-center">
        <div class="col-md-6 text-center mb-4 mb-md-0">
            <div class="qr-code mb-4">
                <img src="assets/images/meditate.jpg" alt="QR Code" class="img-fluid rounded shadow-sm" width="400">
                <p class="mt-3">Scan the QR code to make the payment</p>
            </div>
        </div>
    </div>

    <!-- Form for user information -->
    <div class="form-container bg-light p-4 rounded shadow-sm">
        <h4 class="text-center mb-4">Enter Your Details</h4>
        <form action="" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="text" class="form-control" id="phone" name="phone" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" name="message" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
    </div>

    <!-- WhatsApp Link -->
    <div class="text-center mt-4">
        <p>If you have any questions, <a href="https://wa.me/7477835515" target="_blank" class="btn btn-success">Chat on WhatsApp</a></p>
    </div>
</div>


<?php include 'includes/footer.php'; ?>

