<?php
// Include functions file if necessary
include 'functions.php';
include 'includes/header.php';

// Process the form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if Terms and Conditions checkbox is checked
    if (!isset($_POST['terms'])) {
        echo "<script>
            alert('You must agree to the Terms and Conditions before submitting the form.');
            window.history.back();
        </script>";
        exit();
    }

    // Retrieve form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $adults = htmlspecialchars($_POST['adults']);
    $children = htmlspecialchars($_POST['children']);
    $checkin = htmlspecialchars($_POST['checkin']);
    $checkout = htmlspecialchars($_POST['checkout']);
    $arrival_date = htmlspecialchars($_POST['arrival_date']);
    $arrival_time = htmlspecialchars($_POST['arrival_time']);
    $arrival_datetime = $arrival_date . ' ' . $arrival_time;
    $message = htmlspecialchars($_POST['message']);

    // WhatsApp Message
    $whatsapp_number = '919208038002';
    $whatsapp_message = "New Booking Inquiry:\nName: $name\nEmail: $email\nPhone: $phone\nAdults: $adults\nChildren: $children\nCheck-in: $checkin\nCheck-out: $checkout\nArrival Date and Time: $arrival_datetime\nMessage: $message\n\n*Client has accepted the Terms and Conditions.*";
    $whatsapp_url = "https://wa.me/$whatsapp_number?text=" . urlencode($whatsapp_message);

    // Redirect to WhatsApp
    echo "<script>
        alert('Thank you for submitting the form. You will now be redirected to WhatsApp.');
        window.location.href = '$whatsapp_url';
    </script>";
    exit();
}
?>


<div class="container mt-5">
    <h1 class="text-center mb-4">Book Now</h1>
    <form method="POST" action="">
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="col-md-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="tel" class="form-control" id="phone" name="phone" required>
            </div>
            <div class="col-md-3">
                <label for="adults" class="form-label">Number of Adults</label>
                <select class="form-select" id="adults" name="adults" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5+">5+</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="children" class="form-label">Number of Children</label>
                <select class="form-select" id="children" name="children">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5+">5+</option>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="checkin" class="form-label">Check-in Date</label>
                <input type="date" class="form-control" id="checkin" name="checkin" required>
            </div>
            <div class="col-md-6">
                <label for="checkout" class="form-label">Check-out Date</label>
                <input type="date" class="form-control" id="checkout" name="checkout" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="arrival_date" class="form-label">Arrival Date</label>
                <input type="date" class="form-control" id="arrival_date" name="arrival_date" required>
            </div>
            <div class="col-md-6">
                <label for="arrival_time" class="form-label">Arrival Time</label>
                <input type="time" class="form-control" id="arrival_time" name="arrival_time" required>
            </div>
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" name="message" rows="4"></textarea>
        </div>

        <!-- payment_method -->

<!-- Barcode for Payment -->
<div class="mb-3">
    <label class="form-label">Scan Barcode to Pay</label>
    <img src="assets/images/meditate.jpg" alt="Payment Barcode" class="img-fluid" style="max-width: 200px;">
    <p class="text-muted">Please upload the payment confirmation screenshot after completing the transaction.</p>
</div>

<!-- end payment_method -->

        <div class="form-check mb-4">
            <input class="form-check-input" type="checkbox" id="terms" name="terms" required>
            <label class="form-check-label" for="terms">
                I agree to the <a href="#" data-bs-toggle="modal" data-bs-target="#termsModal">Terms and Conditions</a>.
            </label>
        </div>
        <button type="submit" class="btn btn-primary w-100">Submit</button>
    </form>
</div>


<!-- Terms and Conditions Modal -->
<div class="modal fade" id="termsModal" tabindex="-1" aria-labelledby="termsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="termsModalLabel">Terms and Conditions</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Insert your Terms and Conditions content here -->
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec eros at nisl auctor bibendum. Cras volutpat, erat et suscipit faucibus, est lectus gravida lorem, in interdum risus velit id dolor. Etiam vehicula congue eros, a scelerisque est volutpat nec. Vivamus fermentum tincidunt eros sit amet fermentum.</p>
                <p>Suspendisse potenti. Quisque vel justo auctor, dictum metus in, volutpat sapien. Aenean a erat non magna pharetra suscipit non nec eros. Donec ut nunc orci.</p>
                <p>By clicking "I agree" and continuing with the booking, you accept these terms.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<?php include 'includes/footer.php'; ?>
