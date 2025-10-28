'use client'

import styles from './HowItWorks.module.css'

const steps = [
  {
    icon: '🔗',
    title: 'Seamless Integration',
    description: 'Easy API integration with your existing HR systems and workflows in minutes.'
  },
  {
    icon: '⚡',
    title: 'Efficient Automated Screening',
    description: 'Our AI-powered platform automates verification processes for faster results.'
  },
  {
    icon: '📊',
    title: 'Immediate Results Delivery',
    description: 'Get comprehensive reports delivered instantly to your dashboard.'
  }
]

export default function HowItWorks() {
  return (
    <section id="about" className={styles.section}>
      <div className={styles.container}>
        <h2 className={styles.title}>How It Works</h2>
        <p className={styles.subtitle}>
          Simple, fast, and reliable background verification in three steps
        </p>
        <div className={styles.stepsGrid}>
          {steps.map((step, index) => (
            <div key={index} className={`${styles.stepCard} fade-in`}>
              <div className={styles.stepNumber}>{index + 1}</div>
              <div className={styles.stepIcon}>{step.icon}</div>
              <h3 className={styles.stepTitle}>{step.title}</h3>
              <p className={styles.stepDescription}>{step.description}</p>
            </div>
          ))}
        </div>
      </div>
    </section>
  )
}
