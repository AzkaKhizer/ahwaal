'use client'

import servicesData from '@/data/services.json'
import styles from './ServicesGrid.module.css'

export default function ServicesGrid() {
  return (
    <section id="services" className={styles.section}>
      <div className={styles.container}>
        <h2 className={styles.title}>Our Services</h2>
        <p className={styles.subtitle}>
          Comprehensive verification solutions tailored to your business needs
        </p>
        <div className={styles.servicesGrid}>
          {servicesData.map((service) => (
            <div key={service.id} className={`${styles.serviceCard} fade-in`}>
              <div className={styles.serviceIcon}>{service.icon}</div>
              <h3 className={styles.serviceTitle}>{service.title}</h3>
              <p className={styles.serviceDescription}>{service.description}</p>
              <a href={`#${service.id}`} className={styles.learnMore}>
                Learn more →
              </a>
            </div>
          ))}
        </div>
      </div>
    </section>
  )
}
