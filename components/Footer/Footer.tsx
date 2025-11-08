'use client'

import styles from './Footer.module.css'

export default function Footer() {
  return (
    <footer className={styles.footer}>
      <div className={styles.container}>
        <div className={styles.footerContent}>
          <div className={styles.footerSection}>
            <h3 className={styles.footerTitle}>Ahwaal Private Limited</h3>
            <p className={styles.footerDescription}>
              Comprehensive background screening and verification solutions for modern businesses.
            </p>
            <div className={styles.socialLinks}>
              <a href="#" aria-label="LinkedIn">🔗</a>
              <a href="#" aria-label="Twitter">🐦</a>
              <a href="https://www.facebook.com/ahwaal.pk" aria-label="Facebook">📘</a>
            </div>
          </div>

          <div className={styles.footerSection}>
            <h4 className={styles.sectionTitle}>Company</h4>
            <ul className={styles.footerLinks}>
              <li>
  <a
    href="#"
    onClick={(e) => {
      e.preventDefault()
      window.scrollTo({ top: 0, behavior: 'smooth' })
    }}
  >
    About Us
  </a>
</li>

              <li><a href="#solutions">Solutions</a></li>
              
              <li><a href="#blog">Blog</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div>

          <div className={styles.footerSection}>
            <h4 className={styles.sectionTitle}>Services</h4>
            <ul className={styles.footerLinks}>
              <li><a href="#services">Education Check</a></li>
              <li><a href="#services">Employment Check</a></li>
              <li><a href="#services">Criminal Check</a></li>
              <li><a href="#services">Identity Check</a></li>
              
            </ul>
          </div>

          <div className={styles.footerSection}>
            <h4 className={styles.sectionTitle}>Contact Info</h4>
            <ul className={styles.contactList}>
              <li>📞 0800-11222 </li>
              <li>📞 0332-6000008 </li>
              <li>📧 info@ahwaal.pk</li>
              <li>📍 Office No: B-2/R9, Plot No: ST-04 Al-Burhan Circle<br />Block E, North Nazimabad - Karachi</li>
              <li>🕒 Working Time:<br /> Mon - Sat: 9:00 AM - 5:00 PM</li>
            </ul>
          </div>
        </div>

        <div className={styles.footerBottom}>
          <div className={styles.legal}>
            <a href="/term-of-service">Terms of Service</a>
            <span className={styles.separator}>|</span>
            <a href="/privacy-policy">Privacy Policy</a>
            <span className={styles.separator}>|</span>
            <a href="/cookie-policy">Cookie Policy</a>
          </div>
          <div className={styles.copyright}>
            © {new Date().getFullYear()} Ahwaal. All rights reserved.
          </div>
        </div>
      </div>
    </footer>
  )
}
