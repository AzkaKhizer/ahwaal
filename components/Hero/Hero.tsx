'use client'

import styles from './Hero.module.css'

export default function Hero() {
  return (
    <section className={styles.hero}>
      <div className={styles.heroOverlay}></div>
      <div className={styles.heroContent}>
        <div className={styles.container}>
          <h1 className={styles.heroTitle}>
            Make Informed Decisions
          </h1>
          <p className={styles.heroSubtitle}>
            Ensuring peace of mind & safety with our comprehensive verification & screening solutions for your business.
          </p>
          <div className={styles.heroCta}>
            <button className={styles.primaryBtn}>
              Start Your Screening Today
            </button>
            <button className={styles.secondaryBtn}>
              Explore Corporate Solutions
            </button>
          </div>
        </div>
      </div>
    </section>
  )
}
