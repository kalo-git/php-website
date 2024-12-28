<?php
// Include functions file if necessary (commented out for now)
include'functions.php';
// include('functions.php');
include 'includes/header.php';
?>
    <div class="container my-5">
        <h1 class="text-center mb-4">Our Services</h1>
        <div class="row g-4">
            <?php
            // Services array
            $services = [
                [
                    "img" => "assets/images/kenburns-bg-1.jpg",
                    "title" => "Service 1",
                    "short_description" => "A brief overview of Service 1.",
                    "long_description" => "Detailed description of Service 1 goes here. It can include all the necessary details and features of this service."
                ],
                [
                    "img" => "assets/images/kenburns-bg-1.jpg",
                    "title" => "Service 2",
                    "short_description" => "A brief overview of Service 2.",
                    "long_description" => "Detailed description of Service 2 goes here. It can include all the necessary details and features of this service."
                ],
                [
                    "img" => "assets/images/kenburns-bg-1.jpg",
                    "title" => "Service 3",
                    "short_description" => "A brief overview of Service 3.",
                    "long_description" => "Detailed description of Service 3 goes here. It can include all the necessary details and features of this service."
                ],
                [
                    "img" => "assets/images/kenburns-bg-1.jpg",
                    "title" => "Service 3",
                    "short_description" => "A brief overview of Service 3.",
                    "long_description" => "Detailed description of Service 3 goes here. It can include all the necessary details and features of this service."
                ],
                [
                    "img" => "assets/images/kenburns-bg-1.jpg",
                    "title" => "Service 3",
                    "short_description" => "A brief overview of Service 3.",
                    "long_description" => "Detailed description of Service 3 goes here. It can include all the necessary details and features of this service."
                ],
                [
                    "img" => "assets/images/kenburns-bg-1.jpg",
                    "title" => "Service 3",
                    "short_description" => "A brief overview of Service 3.",
                    "long_description" => "Detailed description of Service 3 goes here. It can include all the necessary details and features of this service."
                ],
                // Add more services here
            ];

            // Loop through services
            foreach ($services as $index => $service) {
                $modalId = "serviceModal" . $index;
                echo "
                <div class='col-md-4'>
                    <div class='card'>
                        <img src='{$service['img']}' class='card-img-top' alt='{$service['title']}' data-bs-toggle='modal' data-bs-target='#{$modalId}'>
                        <div class='card-body'>
                            <h5 class='card-title text-center'>{$service['title']}</h5>
                            <p class='card-text'>{$service['short_description']}</p>
                        </div>
                    </div>
                </div>

                <!-- Modal for detailed description -->
                <div class='modal fade' id='{$modalId}' tabindex='-1' aria-labelledby='{$modalId}Label' aria-hidden='true'>
                    <div class='modal-dialog'>
                        <div class='modal-content'>
                            <div class='modal-header'>
                                <h5 class='modal-title' id='{$modalId}Label'>{$service['title']}</h5>
                                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                            </div>
                            <div class='modal-body'>
                                <img src='{$service['img']}' class='img-fluid mb-3' alt='{$service['title']}'>
                                <p>{$service['long_description']}</p>
                            </div>
                        </div>
                    </div>
                </div>
                ";
            }
            ?>
        </div>
    </div>


    <?php include 'includes/footer.php';?>
