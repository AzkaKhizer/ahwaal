<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<?php
// Load services data from JSON
$servicesJson = file_get_contents(__DIR__ . '/data/services.json');
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

<main style="padding-top: 100px;">
    <!-- Services Hero -->
    <section style="background: linear-gradient(135deg, #ff7a00 0%, #ff9a3d 100%); color: white; padding: 80px 0;">
        <div class="container">
            <h1 style="font-size: 2.5rem; margin-bottom: 1rem; color: white;">Our Services</h1>
            <p style="font-size: 1.2rem; max-width: 700px; color: white;">
                Comprehensive background verification solutions to help you make informed decisions and build a trustworthy workforce.
            </p>
        </div>
    </section>

    <!-- Services Grid -->
    <section id="services" class="services-section">
        <div class="container">
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

    <!-- CTA -->
    <section style="background: linear-gradient(135deg, var(--primary-color), var(--accent-color)); padding: 60px 0; text-align: center;">
        <div class="container">
            <h2 style="color: white; margin-bottom: 1rem;">Need a Custom Verification Package?</h2>
            <p style="color: rgba(255,255,255,0.9); margin-bottom: 2rem;">We'll create a tailored solution for your organization's specific needs</p>
            <a href="contact.php" class="primary-btn" style="background: white; color: var(--primary-color);">Get a Free Quote</a>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
<script src="js/main.js"></script>
</body>
</html>
