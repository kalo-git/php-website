

    <style>
        .gallery-img {
            height: 200px;
            object-fit: cover;
        }
    </style>


    <!-- Gallery Section -->
    <div class="container mt-5">
        <h2 class="text-center mb-4">Gallery</h2>
        <div class="row g-4">
            <?php
            // Define an array of images
            $images = [
         
                
                ['src' => 'assets/images/kenburns-bg-1.jpg', 'alt' => 'Snow'],
                ['src' => 'assets/images/k.jpg', 'alt' => 'Forest'],
                ['src' => 'assets/images/k1.jpg', 'alt' => 'Mountains'],
                ['src' => 'assets/images/Kumbh-Mela-Spiritual-Tour-2025.jpg', 'alt' => 'Snow'],
                ['src' => 'assets/images/Kumbh-Mela-Dates-2025.jpg', 'alt' => 'Forest'],
                ['src' => 'assets/images/kenburns-bg-1.jpg', 'alt' => 'Mountains']
            ];

            // Loop through the images and display them
            foreach ($images as $image) {
                echo '
                <div class="col-12 col-sm-6 col-md-4">
                    <img class="mw-100" src="' . htmlspecialchars($image['src']) . '" alt="' . htmlspecialchars($image['alt']) . '" class="img-fluid gallery-img rounded">
                </div>';
            }
            ?>
        </div>
    </div>


