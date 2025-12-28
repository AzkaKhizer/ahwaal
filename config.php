<?php
/**
 * Ahwaal Configuration File
 *
 * Update these settings for your environment
 */

// Email Configuration
define('ADMIN_EMAIL', 'info@ahwaal.pk');           // Email to receive contact form submissions
define('ADMIN_NAME', 'Ahwaal Team');               // Name for email recipient
define('SITE_NAME', 'Ahwaal');                     // Website name
define('SITE_URL', 'https://ahwaal.pk');           // Website URL

// SMTP Configuration (for PHPMailer - optional, more reliable)
define('SMTP_ENABLED', false);                      // Set to true to use SMTP
define('SMTP_HOST', 'smtp.gmail.com');             // SMTP server
define('SMTP_PORT', 587);                          // SMTP port (587 for TLS, 465 for SSL)
define('SMTP_USERNAME', 'your-email@gmail.com');   // SMTP username
define('SMTP_PASSWORD', 'your-app-password');      // SMTP password or app password
define('SMTP_ENCRYPTION', 'tls');                  // 'tls' or 'ssl'

// Timezone
date_default_timezone_set('Asia/Karachi');

// Error Reporting (set to 0 in production)
error_reporting(E_ALL);
ini_set('display_errors', 0);
ini_set('log_errors', 1);
ini_set('error_log', __DIR__ . '/logs/error.log');
