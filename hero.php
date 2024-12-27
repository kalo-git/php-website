

    <!-- Hero Section (Carousel) -->
<div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" style="
    margin-top: -50px;
">
    <div class="carousel-inner">
        <?php
        // Array of image paths
        $images = [
            'assets/images/kenburns-bg-1.jpg',
            'assets/images/kenburns-bg-2.jpg',
            'assets/images/kenburns-bg-3.jpg',
            'assets/images/kenburns-bg-4.jpg',
        ];

        // Loop to generate carousel items
        foreach ($images as $index => $image) {
            $activeClass = ($index === 0) ? 'active' : '';  // Make the first image active
            echo "
                <div class='carousel-item $activeClass'>
                    <img src='$image' class='d-block w-100' alt='Slide $index'>
                </div>
            ";
        }
        ?>
    </div>

    <!-- Carousel Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


