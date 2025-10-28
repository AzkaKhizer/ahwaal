'use client'

import styles from './Footer.module.css'

export default function Footer() {
  return (
    <footer className={styles.footer}>
      <div className={styles.container}>
        <div className={styles.footerContent}>
          <div className={styles.footerSection}>
            <h3 className={styles.footerTitle}>VerifyGuard</h3>
            <p className={styles.footerDescription}>
              Comprehensive background screening and verification solutions for modern businesses.
            </p>
            <div className={styles.socialLinks}>
              <a href="#" aria-label="LinkedIn">🔗</a>
              <a href="#" aria-label="Twitter">🐦</a>
              <a href="#" aria-label="Facebook">📘</a>
            </div>
          </div>

          <div className={styles.footerSection}>
            <h4 className={styles.sectionTitle}>Company</h4>
            <ul className={styles.footerLinks}>
              <li><a href="#about">About Us</a></li>
              <li><a href="#solutions">Solutions</a></li>
              <li><a href="#clients">Our Clients</a></li>
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
              <li><a href="#services">All Services</a></li>
            </ul>
          </div>

          <div className={styles.footerSection}>
            <h4 className={styles.sectionTitle}>Contact Info</h4>
            <ul className={styles.contactList}>
              <li>📞 +1 (555) 123-4567</li>
              <li>📧 contact@verifyguard.com</li>
              <li>📍 123 Business Ave, Suite 100<br />New York, NY 10001</li>
            </ul>
          </div>
        </div>

        <div className={styles.footerBottom}>
          <div className={styles.legal}>
            <a href="#terms">Terms of Service</a>
            <span className={styles.separator}>|</span>
            <a href="#privacy">Privacy Policy</a>
            <span className={styles.separator}>|</span>
            <a href="#cookies">Cookie Policy</a>
          </div>
          <div className={styles.copyright}>
            © {new Date().getFullYear()} VerifyGuard. All rights reserved.
          </div>
        </div>
      </div>
    </footer>
  )
}
