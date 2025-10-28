'use client'

import styles from './WhyUs.module.css'

const features = [
  {
    icon: '✓',
    title: 'Most Comprehensive Verification',
    description: '11+ verification types covering all aspects of background screening'
  },
  {
    icon: '🌍',
    title: 'International Coverage',
    description: 'Global screening services across 150+ countries and territories'
  },
  {
    icon: '🤝',
    title: '1000+ Industry Partners',
    description: 'Trusted network of verification partners worldwide'
  },
  {
    icon: '🔐',
    title: 'Data Security & Compliance',
    description: 'ISO 27001, GDPR, and SOC 2 certified for maximum data protection'
  }
]

export default function WhyUs() {
  return (
    <section id="solutions" className={styles.section}>
      <div className={styles.container}>
        <h2 className={styles.title}>Why Choose VerifyGuard</h2>
        <p className={styles.subtitle}>
          Industry-leading verification services trusted by global enterprises
        </p>
        <div className={styles.featuresGrid}>
          {features.map((feature, index) => (
            <div key={index} className={`${styles.featureCard} fade-in`}>
              <div className={styles.featureIcon}>{feature.icon}</div>
              <h3 className={styles.featureTitle}>{feature.title}</h3>
              <p className={styles.featureDescription}>{feature.description}</p>
            </div>
          ))}
        </div>
      </div>
    </section>
  )
}
