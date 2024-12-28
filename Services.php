<?php
include('functions.php'); // Include the functions file
?>

<?php
// Include common header
include 'includes/header.php';

// Array of services with links to their pages
$services = [
    'Meditation' => 'Services/meditation.php',
    'Yoga Sessions' => 'yoga.php',
    'Yajanas/ Hawans' => 'yajnas.php',
    'Mud Bath Therapy' => 'mud_bath.php',
    'Ayurvedic Consultation' => 'ayurvedic_consultation.php',
    'Personal Boat Rides to Sangam each day' => 'boat_rides.php',
    'Sattvik meals and milk' => 'sattvik_meals.php',
    'Prayagraj City Tour' => 'city_tour.php'
];
?>


    <div class="container mt-5">
        <h1 class="text-center mb-4">Services Included</h1>
        <div class="row">
            <?php foreach ($services as $service => $link): ?>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center">
                                <a href="<?php echo $link; ?>" class="text-decoration-none"> <?php echo $service; ?> </a>
                            </h5>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <p class="text-center mt-4">For more details, you can reach us on our mobile number.</p>
    </div>

    <?php include 'includes/footer.php';?>