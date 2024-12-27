<?php
include('functions.php'); // Include the functions file
?>

<?php include 'includes\header.php';?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $adults = htmlspecialchars($_POST['adults']);
    $children = htmlspecialchars($_POST['children']);
    $checkin = htmlspecialchars($_POST['checkin']);
    $checkout = htmlspecialchars($_POST['checkout']);
    $message = htmlspecialchars($_POST['message']);

    // WhatsApp Message
    $whatsapp_number = '919208038002';
    $whatsapp_message = "New Booking Inquiry:\nName: $name\nEmail: $email\nPhone: $phone\nAdults: $adults\nChildren: $children\nCheck-in: $checkin\nCheck-out: $checkout\nMessage: $message";
    $whatsapp_url = "https://wa.me/$whatsapp_number?text=" . urlencode($whatsapp_message);

    // Email Message
    $to = 'your-email@example.com'; // Replace with your email address
    $subject = 'New Booking Inquiry';
    $email_body = "You have received a new booking inquiry:\n\nName: $name\nEmail: $email\nPhone: $phone\nAdults: $adults\nChildren: $children\nCheck-in: $checkin\nCheck-out: $checkout\nMessage:\n$message";
    $headers = "From: $email\r\nReply-To: $email";

    // Send email
    mail($to, $subject, $email_body, $headers);

    // Redirect to WhatsApp
    header("Location: $whatsapp_url");
    exit();
}
?>

<div class="container">
        <h1>Book Now</h1>
        <form method="POST" action="">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="adults">Number of Adults</label>
            <select id="adults" name="adults" required>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5+">5+</option>
            </select>

            <label for="children">Number of Children</label>
            <select id="children" name="children">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5+">5+</option>
            </select>

            <label for="checkin">Check-in Date</label>
            <input type="date" id="checkin" name="checkin" required>

            <label for="checkout">Check-out Date</label>
            <input type="date" id="checkout" name="checkout" required>

            <label for="message">Message</label>
            <textarea id="message" name="message" rows="4"></textarea>

            <button type="submit">Submit</button>
        </form>
    </div>
    <?php include 'includes/footer.php';?>
