<?php
// Load services data from JSON
$servicesJson = file_get_contents(__DIR__ . '/../data/services.json');
$services = json_decode($servicesJson, true);

// Map service IDs to their detail page files
$servicePages = [
    'education-check' => 'education-check.php',
    'employment-check' => 'employment-check.php',
    'criminal-check' => 'criminal-check.php',
    'identity-check' => 'identity-check.php',
    'site-visit-check' => 'address-check.php',
    'drug-test' => 'drug-test.php',
    'global-sanctions' => 'global-sanctions.php',
    'reference-check' => 'reference-check.php',
    'social-media-check' => 'social-media-check.php',
    'vendor-check' => 'vendor-check.php'
];
?>

<section id="services" class="services-section">
    <div class="container">
        <h2 class="section-title">Our Services</h2>
        <p class="section-subtitle">
            Comprehensive verification solutions tailored to your business needs
        </p>
        <div class="services-grid">
            <?php foreach ($services as $service): ?>
            <div class="service-card fade-in">
                <div class="service-icon"><?php echo $service['icon']; ?></div>
                <h3 class="service-title"><?php echo htmlspecialchars($service['title']); ?></h3>
                <p class="service-description"><?php echo htmlspecialchars($service['description']); ?></p>
                <a href="<?php echo $servicePages[$service['id']] ?? '#'; ?>" class="learn-more">
                    Learn more →
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
