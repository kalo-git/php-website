<?php
include('functions.php'); // Include the functions file
?>

<?php
// Include common header
include 'includes/header.php';
?>

<?php
// Contact form handling
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect form data and sanitize it
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Validate the data (simple validation)
    if (!empty($name) && !empty($email) && !empty($message) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // OPTIONAL: Send the message to WhatsApp
        // Uncomment the following lines if you have a WhatsApp API set up.
        $whatsapp_api_url = "https://your-whatsapp-api-url"; // Replace with your WhatsApp API URL
        $whatsapp_number = 'recipient-whatsapp-number'; // Replace with the recipient WhatsApp number (in international format)
        $whatsapp_message = urlencode("Name: $name\nEmail: $email\n\nMessage:\n$message"); // Encode message to fit in URL format

        $whatsapp_payload = [
            'phone' => $whatsapp_number,
            'text' => $whatsapp_message
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $whatsapp_api_url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($whatsapp_payload));
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'Authorization: Bearer YOUR_API_KEY', // Replace with your API key
        ]);
        $whatsapp_response = curl_exec($ch);
        curl_close($ch);

        $success_message = "Thank you for contacting us, $name! We will get back to you soon.";
    } else {
        $error_message = "Please fill in all fields correctly.";
    }
}
?>

<!-- Display success or error message -->
<?php if (isset($success_message)): ?>
    <div class="alert alert-success">
        <?php echo $success_message; ?>
    </div>
<?php elseif (isset($error_message)): ?>
    <div class="alert alert-danger">
        <?php echo $error_message; ?>
    </div>
<?php endif; ?>

<!-- Contact Form -->
<div class="container">
    <h1 class="my-4 text-center">Contact Us</h1>
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <form action="contact.php" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Your Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Your Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Your Message</label>
                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100">Send Message</button>
            </form>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
