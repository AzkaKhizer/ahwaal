'use client'

import styles from './ClientsCarousel.module.css'

const clients = [
  { name: 'TechCorp', logo: '🏢' },
  { name: 'FinanceHub', logo: '🏦' },
  { name: 'HealthPlus', logo: '🏥' },
  { name: 'EduSmart', logo: '🎓' },
  { name: 'RetailPro', logo: '🏪' },
  { name: 'LogiMove', logo: '🚚' },
]

export default function ClientsCarousel() {
  return (
    <section className={styles.section}>
      <div className={styles.container}>
        <h2 className={styles.title}>Trusted by Leading Organizations</h2>
        <p className={styles.subtitle}>
          Join hundreds of companies that rely on our verification services
        </p>
        <div className={styles.carousel}>
          <div className={styles.track}>
            {[...clients, ...clients].map((client, index) => (
              <div key={index} className={styles.clientCard}>
                <span className={styles.clientLogo}>{client.logo}</span>
                <span className={styles.clientName}>{client.name}</span>
              </div>
            ))}
          </div>
        </div>
      </div>
    </section>
  )
}
