<?php
/**
 * Ahwaal - Background Screening & Verification Services
 * Main Homepage
 */

// Start session for form handling
session_start();

// Error reporting for development (remove in production)
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
?>
<?php include 'includes/header.php'; ?>

<?php include 'includes/navbar.php'; ?>

<main>
    <?php include 'includes/hero.php'; ?>

    <?php include 'includes/services.php'; ?>

    <?php include 'includes/why-us.php'; ?>

    <?php include 'includes/security.php'; ?>

    <?php include 'includes/blog.php'; ?>

    <?php include 'includes/contact.php'; ?>
</main>

<?php include 'includes/footer.php'; ?>

<script src="js/main.js"></script>
</body>
</html>
