'use client'

import styles from './Testimonials.module.css'

const testimonials = [
  {
    quote: "VerifyGuard transformed our hiring process. The comprehensive checks and quick turnaround time have been game-changing for our recruitment team.",
    name: "Sarah Johnson",
    title: "HR Director",
    company: "TechCorp Global",
    avatar: "👩‍💼"
  },
  {
    quote: "The level of detail and accuracy in their verification reports is outstanding. We've significantly reduced hiring risks since partnering with VerifyGuard.",
    name: "Michael Chen",
    title: "Chief People Officer",
    company: "FinanceHub Inc.",
    avatar: "👨‍💼"
  },
  {
    quote: "International coverage and GDPR compliance were critical for us. VerifyGuard delivered on all fronts with exceptional customer support.",
    name: "Emma Williams",
    title: "Compliance Manager",
    company: "HealthPlus International",
    avatar: "👩‍⚕️"
  }
]

export default function Testimonials() {
  return (
    <section className={styles.section}>
      <div className={styles.container}>
        <h2 className={styles.title}>What Our Clients Say</h2>
        <p className={styles.subtitle}>
          Trusted by hundreds of organizations worldwide
        </p>
        <div className={styles.testimonialsGrid}>
          {testimonials.map((testimonial, index) => (
            <div key={index} className={`${styles.testimonialCard} fade-in`}>
              <div className={styles.quoteIcon}>"</div>
              <p className={styles.quote}>{testimonial.quote}</p>
              <div className={styles.author}>
                <div className={styles.avatar}>{testimonial.avatar}</div>
                <div>
                  <div className={styles.name}>{testimonial.name}</div>
                  <div className={styles.title}>{testimonial.title}</div>
                  <div className={styles.company}>{testimonial.company}</div>
                </div>
              </div>
            </div>
          ))}
        </div>
      </div>
    </section>
  )
}
