<?php
// PHP can be used here to dynamically populate the features if needed (e.g., from a database)
$features = [
    [
        'icon' => 'fa fa-cogs',  // FontAwesome icon
        'title' => 'Easy Integration',
        'description' => 'Our system integrates seamlessly with your existing tools and processes, saving you time and effort.'
    ],
    [
        'icon' => 'fa fa-users',  // FontAwesome icon
        'title' => 'Customer Support',
        'description' => 'Get 24/7 support from our expert team, ensuring your business runs smoothly at all times.'
    ],
    [
        'icon' => 'fa fa-lock',  // FontAwesome icon
        'title' => 'Data Security',
        'description' => 'We prioritize security with state-of-the-art encryption to protect your sensitive data.'
    ],
    [
        'icon' => 'fa fa-chart-line',  // FontAwesome icon
        'title' => 'Analytics & Reporting',
        'description' => 'Our platform offers advanced analytics and reports to help you make informed decisions quickly.'
    ]
];
?>

<section class="container py-5">
    <div class="row">
        <?php foreach ($features as $feature): ?>
            <div class="col-md-3 mb-4">
                <div class="card text-center shadow-sm">
                    <div class="card-body">
                        <div class="feature-icon mb-3">
                            <i class="<?= $feature['icon']; ?>" style="font-size: 40px; color: #4CAF50;"></i>
                        </div>
                        <h5 class="card-title"><?= $feature['title']; ?></h5>
                        <p class="card-text"><?= $feature['description']; ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

