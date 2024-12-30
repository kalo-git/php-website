<?php
// Define content for each section
$sections = [
    ['image' => 'assets/images/htr1.png', 'title' => 'By Air', 'description' => 'Bamrauli Airport at Prayagraj, Prayagraj is also linked through the Airports at Varanasi (127 Km), Lucknow (210 km), Ayodhya (160 km) &amp; Kanpur (205 km).'],
    ['image' => 'assets/images/htr2.png', 'title' => 'By Rail', 'description' => 'Prayagraj is well connected by trains with all major cities. Four main stations are:<br><strong>- Prayagraj Junction, - Cheoki Railway Station (Naini), - Prayag Ghat Railway Station, - Subedarganj Railway Station.</strong>'],
    ['image' => 'assets/images/htr3.png', 'title' => 'By Road', 'description' => 'Prayagraj is on National Highway NH-2 &amp; NH-27 and is connected to other parts of the country with excellent roads.'],
];
?>
    <!-- Link to Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Custom CSS */
        .reachbox {
            background-color: #f9f9f9;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            padding: 15px;
            border-radius: 8px;
            border: 1px solid #ddd;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .reachbox:hover {
            transform: translateY(-10px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .reachbox img {
            max-width: 80%;
            height: auto;
        }

        .reachbox h4 {
            font-size: 1.25rem;
            margin-bottom: 15px;
        }

        .reachbox p {
            font-size: 1rem;
            line-height: 1.6;
        }

        @media (max-width: 768px) {
            .reachbox h4 {
                font-size: 1.1rem;
            }
            .reachbox p {
                font-size: 0.875rem;
            }
        }
    </style>


<div class="container mt-5">
    <div class="row justify-content-center">
        <?php
        // Loop through sections and display them dynamically
        foreach ($sections as $section) {
            echo '<div class="col-md-4 col-sm-6 mb-4">
                    <div class="reachbox text-center">
                        <img src="' . $section['image'] . '" class="img-fluid mb-3" alt="' . $section['title'] . '">
                        <h4>' . $section['title'] . '</h4>
                        <p>' . $section['description'] . '</p>
                    </div>
                </div>';
        }
        ?>
    </div>
</div>
