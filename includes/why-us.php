<?php
$features = [
    [
        'icon' => '✓',
        'title' => 'Most Comprehensive Verification',
        'description' => '11+ verification types covering all aspects of background screening'
    ],
    [
        'icon' => '🌍',
        'title' => 'International Coverage',
        'description' => 'Global screening services across 150+ countries and territories'
    ],
    [
        'icon' => '🤝',
        'title' => '1000+ Industry Partners',
        'description' => 'Trusted network of verification partners worldwide'
    ],
    [
        'icon' => '🔐',
        'title' => 'Data Security & Compliance',
        'description' => 'ISO 27001, GDPR, and SOC 2 certified for maximum data protection'
    ]
];
?>

<section id="solutions" class="why-us-section">
    <div class="container">
        <h2 class="section-title">Why Choose Ahwaal</h2>
        <p class="section-subtitle">
            Industry-leading verification services trusted by global enterprises
        </p>
        <div class="features-grid">
            <?php foreach ($features as $feature): ?>
            <div class="feature-card fade-in">
                <div class="feature-icon"><?php echo $feature['icon']; ?></div>
                <h3 class="feature-title"><?php echo htmlspecialchars($feature['title']); ?></h3>
                <p class="feature-description"><?php echo htmlspecialchars($feature['description']); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
