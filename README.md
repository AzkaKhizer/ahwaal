# Ahwaal - Background Screening & Verification Services (PHP)

A complete PHP conversion of the Ahwaal Next.js website.

## Project Structure

```
ahwaal/
├── index.php                 # Main homepage
├── config.php                # Configuration file (email settings)
├── terms-of-service.php      # Terms of Service page
├── privacy-policy.php        # Privacy Policy page
├── cookie-policy.php         # Cookie Policy page
├── css/
│   └── style.css            # Complete stylesheet
├── js/
│   └── main.js              # JavaScript functionality
├── data/
│   ├── services.json        # Services data
│   └── blog.json            # Blog posts data
├── includes/
│   ├── header.php           # HTML head section
│   ├── navbar.php           # Navigation bar
│   ├── hero.php             # Hero section
│   ├── services.php         # Services grid
│   ├── why-us.php           # Why Choose Us section
│   ├── security.php         # Security section
│   ├── blog.php             # Blog preview section
│   ├── contact.php          # Contact form with email
│   └── footer.php           # Footer section
├── logs/
│   └── contacts.log         # Contact form submissions backup
└── images/
    ├── logo.png             # Add your logo here
    ├── favicon.ico          # Add your favicon here
    └── blog/                # Blog images folder
```

## Setup Instructions

1. **Copy files to your web server**
   - Upload all files to your PHP-enabled web server (Apache, Nginx, etc.)

2. **Add your logo**
   - Place your logo image as `images/logo.png`
   - Add a favicon as `images/favicon.ico`

3. **Configure Email Settings**
   - Open `config.php` and update the settings:
   ```php
   define('ADMIN_EMAIL', 'your-email@domain.com');  // Where to receive emails
   define('SITE_NAME', 'Ahwaal');
   define('SITE_URL', 'https://yourdomain.com');
   ```

4. **Access the website**
   - Navigate to `http://your-domain/` or `http://localhost/ahwaal/`

## Email Configuration

### Option 1: PHP mail() (Default)
Works out of the box on most shared hosting. Just update `ADMIN_EMAIL` in `config.php`.

### Option 2: SMTP (Recommended for reliability)
For more reliable email delivery, use SMTP:

1. Install PHPMailer via Composer:
   ```bash
   composer require phpmailer/phpmailer
   ```

2. Update `config.php`:
   ```php
   define('SMTP_ENABLED', true);
   define('SMTP_HOST', 'smtp.gmail.com');      // Or your SMTP server
   define('SMTP_PORT', 587);
   define('SMTP_USERNAME', 'your-email@gmail.com');
   define('SMTP_PASSWORD', 'your-app-password');
   define('SMTP_ENCRYPTION', 'tls');
   ```

### Gmail SMTP Setup
1. Enable 2-Factor Authentication on your Google account
2. Generate an App Password: Google Account > Security > App Passwords
3. Use the 16-character app password in `SMTP_PASSWORD`

### Contact Form Features
- HTML & Plain text email formats
- Input validation (server-side)
- Honeypot spam protection
- Form submissions backed up to `logs/contacts.log`
- XSS protection with input sanitization

## Requirements

- PHP 7.4 or higher
- Web server (Apache, Nginx, or similar)
- No database required (uses JSON files for data)
- Optional: Composer (for PHPMailer SMTP)

## Features

- Fully responsive design
- Mobile-friendly navigation
- Scroll animations
- Contact form with email functionality
- Spam protection (honeypot)
- Dynamic services loaded from JSON
- SEO-optimized structure
- Clean, modular PHP architecture

## Customization

### Changing Services
Edit `data/services.json` to add, remove, or modify services.

### Changing Blog Posts
Edit `data/blog.json` to update blog content.

### Styling
Modify `css/style.css` to change colors, fonts, and layouts. CSS variables are defined at the top of the file:
```css
:root {
  --primary-color: #ff7a00;      /* Main orange */
  --primary-dark: #e86a00;       /* Darker orange */
  --text-dark: #1A1A1A;
  --bg-white: #FFFFFF;
  /* ... more variables */
}
```

### Adding New Pages
1. Create a new PHP file in the root directory
2. Include the header, navbar, and footer:
```php
<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<main style="padding-top: 120px;">
    <!-- Your content here -->
</main>

<?php include 'includes/footer.php'; ?>
<script src="js/main.js"></script>
</body>
</html>
```

## Troubleshooting

### Emails not sending?
1. Check if PHP `mail()` is enabled on your server
2. Check `logs/contacts.log` for submission records
3. Try SMTP option for more reliable delivery
4. Check spam/junk folder

### Form shows error after submission?
1. Verify `ADMIN_EMAIL` is set correctly in `config.php`
2. Check server error logs
3. Ensure `logs/` directory is writable

## Contact Information

- Phone: 0800-11222, 0332-6000008
- Email: info@ahwaal.pk
- Address: Office No: B-2/R9, Plot No: ST-04 Al-Burhan Circle Block E, North Nazimabad - Karachi
