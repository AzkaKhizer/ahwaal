<?php
// Add 'scrolled' class on pages other than homepage so navbar text is dark
$currentPage = basename($_SERVER['PHP_SELF']);
$headerClass = ($currentPage !== 'index.php') ? 'header scrolled' : 'header';
?>
<header class="<?php echo $headerClass; ?>" id="header">
    <nav class="navbar">
        <div class="container">
            <div class="logo">
                <a href="index.php">
                    <img src="images/logo.png" alt="Ahwaal Logo">
                </a>
            </div>

            <button class="menu-toggle" id="menuToggle" aria-label="Toggle menu">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <ul class="nav-menu" id="navMenu">
                <li><a href="about.php">About</a></li>
                <li class="dropdown">
                    <a href="services.php">Services ▼</a>
                    <ul class="dropdown-menu">
                        <li><a href="education-check.php">Education Check</a></li>
                        <li><a href="employment-check.php">Employment Check</a></li>
                        <li><a href="criminal-check.php">Criminal Check</a></li>
                        <li><a href="identity-check.php">Identity Check</a></li>
                        <li><a href="drug-test.php">Drug Test</a></li>
                        <li><a href="reference-check.php">Reference Check</a></li>
                        <li><a href="address-check.php">Address Verification</a></li>
                        <li><a href="global-sanctions.php">Global Sanctions</a></li>
                        <li><a href="social-media-check.php">Social Media Check</a></li>
                        <li><a href="vendor-check.php">Vendor Check</a></li>
                    </ul>
                </li>
                <li><a href="index.php#solutions">Solutions</a></li>
                <li><a href="index.php#blog">Blog</a></li>
                <li><a href="contact.php" class="cta-link">Contact</a></li>
            </ul>
        </div>
    </nav>
</header>
