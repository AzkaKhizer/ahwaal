'use client'

import styles from './Security.module.css'

export default function Security() {
  return (
    <section className={styles.section}>
      <div className={styles.container}>
        <div className={styles.content}>
          <div className={styles.textContent}>
            <h2 className={styles.title}>Your Data Security is Our Priority</h2>
            <p className={styles.description}>
              We understand the sensitive nature of background verification data. That's why we've built our platform with enterprise-grade security at its core.
            </p>
            <ul className={styles.securityList}>
              <li>
                <span className={styles.checkIcon}>✓</span>
                <strong>ISO 27001 Certified:</strong> Information security management systems certified to international standards
              </li>
              <li>
                <span className={styles.checkIcon}>✓</span>
                <strong>GDPR Compliant:</strong> Full compliance with European data protection regulations
              </li>
              <li>
                <span className={styles.checkIcon}>✓</span>
                <strong>End-to-End Encryption:</strong> All data encrypted in transit and at rest using AES-256
              </li>
              <li>
                <span className={styles.checkIcon}>✓</span>
                <strong>Centralized Secure Platform:</strong> Single source of truth with role-based access control
              </li>
              <li>
                <span className={styles.checkIcon}>✓</span>
                <strong>Regular Security Audits:</strong> Third-party penetration testing and vulnerability assessments
              </li>
            </ul>
          </div>
          <div className={styles.visual}>
            <div className={styles.shield}>🛡️</div>
            <div className={styles.badges}>
              <div className={styles.badge}>ISO 27001</div>
              <div className={styles.badge}>GDPR</div>
              <div className={styles.badge}>SOC 2</div>
            </div>
          </div>
        </div>
      </div>
    </section>
  )
}
