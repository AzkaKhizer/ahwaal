<?php
/**
 * Contact Form with Email Functionality
 * Sends emails using PHP mail() or SMTP (if configured)
 */

// Load configuration
$configPath = __DIR__ . '/../config.php';
if (file_exists($configPath)) {
    require_once $configPath;
}

// Set defaults if config not loaded
if (!defined('ADMIN_EMAIL')) define('ADMIN_EMAIL', 'info@ahwaal.pk');
if (!defined('SITE_NAME')) define('SITE_NAME', 'Ahwaal');

// Handle form submission
$formMessage = '';
$formSuccess = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['contact_submit'])) {
    // Sanitize input
    $name = trim(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS));
    $email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
    $mobile = trim(filter_input(INPUT_POST, 'mobile', FILTER_SANITIZE_SPECIAL_CHARS));
    $subject = trim(filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_SPECIAL_CHARS));
    $message = trim(filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS));

    // Validation
    $errors = [];

    if (empty($name) || strlen($name) < 2) {
        $errors[] = 'Please enter a valid name (at least 2 characters).';
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Please enter a valid email address.';
    }

    if (empty($mobile) || strlen($mobile) < 10) {
        $errors[] = 'Please enter a valid mobile number.';
    }

    if (empty($subject) || strlen($subject) < 3) {
        $errors[] = 'Please enter a subject (at least 3 characters).';
    }

    if (empty($message) || strlen($message) < 10) {
        $errors[] = 'Please enter a message (at least 10 characters).';
    }

    // Honeypot spam check (hidden field)
    if (!empty($_POST['website'])) {
        // Bot detected, silently reject
        $formSuccess = true;
        $formMessage = 'Thank you for your message! We will contact you shortly.';
    } elseif (empty($errors)) {
        // Always save to file as backup first
        saveContactToFile($name, $email, $mobile, $subject, $message);

        // Send email
        $emailSent = sendContactEmail($name, $email, $mobile, $subject, $message);

        if ($emailSent) {
            $formSuccess = true;
            $formMessage = 'Thank you for your message! We will contact you shortly.';
        } else {
            // Email failed but submission was saved - still show success to user
            $formSuccess = true;
            $formMessage = 'Thank you for your message! We will contact you shortly.';
            // Log the email failure
            error_log('Contact form email failed for: ' . $email);
        }
    } else {
        $formMessage = implode('<br>', $errors);
    }
}

/**
 * Send contact form email
 */
function sendContactEmail($name, $email, $mobile, $subject, $message) {
    $to = ADMIN_EMAIL;
    $emailSubject = '[' . SITE_NAME . ' Contact] ' . $subject;

    // Build HTML email body
    $emailBody = "
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; }
            .header { background: #ff7a00; color: white; padding: 20px; text-align: center; }
            .content { background: #f9f9f9; padding: 20px; }
            .field { margin-bottom: 15px; }
            .label { font-weight: bold; color: #555; }
            .value { margin-top: 5px; }
            .message-box { background: white; padding: 15px; border-left: 4px solid #ff7a00; margin-top: 10px; }
            .footer { text-align: center; padding: 20px; color: #777; font-size: 12px; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <h2>New Contact Form Submission</h2>
            </div>
            <div class='content'>
                <div class='field'>
                    <div class='label'>Name:</div>
                    <div class='value'>" . htmlspecialchars($name) . "</div>
                </div>
                <div class='field'>
                    <div class='label'>Email:</div>
                    <div class='value'><a href='mailto:" . htmlspecialchars($email) . "'>" . htmlspecialchars($email) . "</a></div>
                </div>
                <div class='field'>
                    <div class='label'>Mobile:</div>
                    <div class='value'><a href='tel:" . htmlspecialchars($mobile) . "'>" . htmlspecialchars($mobile) . "</a></div>
                </div>
                <div class='field'>
                    <div class='label'>Subject:</div>
                    <div class='value'>" . htmlspecialchars($subject) . "</div>
                </div>
                <div class='field'>
                    <div class='label'>Message:</div>
                    <div class='message-box'>" . nl2br(htmlspecialchars($message)) . "</div>
                </div>
            </div>
            <div class='footer'>
                <p>This email was sent from the contact form at " . SITE_NAME . "</p>
                <p>Received on: " . date('F j, Y \a\t g:i A') . "</p>
            </div>
        </div>
    </body>
    </html>
    ";

    // Plain text version
    $plainText = "New Contact Form Submission\n\n";
    $plainText .= "Name: $name\n";
    $plainText .= "Email: $email\n";
    $plainText .= "Mobile: $mobile\n";
    $plainText .= "Subject: $subject\n\n";
    $plainText .= "Message:\n$message\n\n";
    $plainText .= "---\nReceived on: " . date('F j, Y \a\t g:i A');

    // Email headers
    $boundary = md5(time());

    $headers = "From: " . SITE_NAME . " <noreply@" . parse_url(defined('SITE_URL') ? SITE_URL : 'ahwaal.pk', PHP_URL_HOST) . ">\r\n";
    $headers .= "Reply-To: " . $name . " <" . $email . ">\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: multipart/alternative; boundary=\"$boundary\"\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
    $headers .= "X-Priority: 1\r\n";

    // Build multipart message
    $body = "--$boundary\r\n";
    $body .= "Content-Type: text/plain; charset=UTF-8\r\n";
    $body .= "Content-Transfer-Encoding: 8bit\r\n\r\n";
    $body .= $plainText . "\r\n\r\n";
    $body .= "--$boundary\r\n";
    $body .= "Content-Type: text/html; charset=UTF-8\r\n";
    $body .= "Content-Transfer-Encoding: 8bit\r\n\r\n";
    $body .= $emailBody . "\r\n\r\n";
    $body .= "--$boundary--";

    // Check if SMTP is enabled
    if (defined('SMTP_ENABLED') && SMTP_ENABLED === true) {
        return sendViaSMTP($to, $emailSubject, $emailBody, $name, $email);
    }

    // Send via PHP mail()
    return @mail($to, $emailSubject, $body, $headers);
}

/**
 * Send email via SMTP using PHPMailer (if installed)
 */
function sendViaSMTP($to, $subject, $htmlBody, $fromName, $replyTo) {
    // Check if PHPMailer is available
    $phpmailerPath = __DIR__ . '/../vendor/autoload.php';
    if (!file_exists($phpmailerPath)) {
        // Fallback to regular mail if PHPMailer not installed
        return false;
    }

    require_once $phpmailerPath;

    try {
        $mail = new PHPMailer\PHPMailer\PHPMailer(true);

        // SMTP settings
        $mail->isSMTP();
        $mail->Host = SMTP_HOST;
        $mail->SMTPAuth = true;
        $mail->Username = SMTP_USERNAME;
        $mail->Password = SMTP_PASSWORD;
        $mail->SMTPSecure = SMTP_ENCRYPTION;
        $mail->Port = SMTP_PORT;

        // Recipients
        $mail->setFrom(SMTP_USERNAME, SITE_NAME);
        $mail->addAddress($to);
        $mail->addReplyTo($replyTo, $fromName);

        // Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $htmlBody;

        return $mail->send();
    } catch (Exception $e) {
        error_log('PHPMailer Error: ' . $e->getMessage());
        return false;
    }
}

/**
 * Save contact form submission to file as backup
 */
function saveContactToFile($name, $email, $mobile, $subject, $message) {
    $logDir = __DIR__ . '/../logs';
    if (!is_dir($logDir)) {
        @mkdir($logDir, 0755, true);
    }

    $logFile = $logDir . '/contacts.log';
    $timestamp = date('Y-m-d H:i:s');

    $logEntry = "=== Contact Form Submission ===\n";
    $logEntry .= "Date: $timestamp\n";
    $logEntry .= "Name: $name\n";
    $logEntry .= "Email: $email\n";
    $logEntry .= "Mobile: $mobile\n";
    $logEntry .= "Subject: $subject\n";
    $logEntry .= "Message: $message\n";
    $logEntry .= "IP: " . ($_SERVER['REMOTE_ADDR'] ?? 'Unknown') . "\n";
    $logEntry .= "================================\n\n";

    @file_put_contents($logFile, $logEntry, FILE_APPEND | LOCK_EX);
}
?>

<section id="contact" class="contact-section">
    <div class="container">
        <div class="contact-content">
            <div class="text-content">
                <h2 class="contact-title">Schedule a Call with an Expert</h2>
                <p class="contact-description">
                    Have questions about our services? Our team of verification experts is ready to help you find the right solution for your organization.
                </p>
                <div class="contact-info">
                    <div class="info-item">
                        <span class="info-icon">📞</span>
                        <div>
                            <div class="info-label">Phone</div>
                            <div class="info-value">0800-11222</div>
                            <div class="info-value">0332-6000008</div>
                        </div>
                    </div>
                    <div class="info-item">
                        <span class="info-icon">📧</span>
                        <div>
                            <div class="info-label">Email</div>
                            <div class="info-value">info@ahwaal.pk</div>
                        </div>
                    </div>
                    <div class="info-item">
                        <span class="info-icon">📍</span>
                        <div>
                            <div class="info-label">Office Address</div>
                            <div class="info-value">Office No: B-2/R9, Plot No: ST-04 Al-Burhan Circle Block E, North Nazimabad - Karachi</div>
                        </div>
                    </div>
                </div>
            </div>

            <form class="contact-form" method="POST" action="#contact">
                <?php if ($formMessage): ?>
                <div class="form-message <?php echo $formSuccess ? 'success' : 'error'; ?>" style="padding: 1rem; margin-bottom: 1rem; border-radius: 8px; background: <?php echo $formSuccess ? '#d4edda' : '#f8d7da'; ?>; color: <?php echo $formSuccess ? '#155724' : '#721c24'; ?>;">
                    <?php echo $formMessage; ?>
                </div>
                <?php endif; ?>

                <!-- Honeypot field for spam protection (hidden) -->
                <div style="position: absolute; left: -9999px;">
                    <input type="text" name="website" tabindex="-1" autocomplete="off">
                </div>

                <div class="form-group">
                    <input
                        type="text"
                        name="name"
                        placeholder="Your Name"
                        required
                        minlength="2"
                        maxlength="100"
                        value="<?php echo isset($_POST['name']) && !$formSuccess ? htmlspecialchars($_POST['name']) : ''; ?>"
                    >
                </div>
                <div class="form-group">
                    <input
                        type="email"
                        name="email"
                        placeholder="Your Email"
                        required
                        maxlength="100"
                        value="<?php echo isset($_POST['email']) && !$formSuccess ? htmlspecialchars($_POST['email']) : ''; ?>"
                    >
                </div>
                <div class="form-group">
                    <input
                        type="tel"
                        name="mobile"
                        placeholder="Mobile Number"
                        required
                        minlength="10"
                        maxlength="20"
                        pattern="[0-9+\-\s]+"
                        value="<?php echo isset($_POST['mobile']) && !$formSuccess ? htmlspecialchars($_POST['mobile']) : ''; ?>"
                    >
                </div>
                <div class="form-group">
                    <input
                        type="text"
                        name="subject"
                        placeholder="Subject"
                        required
                        minlength="3"
                        maxlength="200"
                        value="<?php echo isset($_POST['subject']) && !$formSuccess ? htmlspecialchars($_POST['subject']) : ''; ?>"
                    >
                </div>
                <div class="form-group">
                    <textarea
                        name="message"
                        placeholder="Your Message"
                        required
                        minlength="10"
                        maxlength="2000"
                        rows="5"
                    ><?php echo isset($_POST['message']) && !$formSuccess ? htmlspecialchars($_POST['message']) : ''; ?></textarea>
                </div>
                <button type="submit" name="contact_submit" class="submit-btn">
                    Send Message
                </button>
            </form>
        </div>
    </div>
</section>
