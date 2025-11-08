'use client'

import { useState } from 'react'
import styles from './CTAContact.module.css'

export default function CTAContact() {
  const [formData, setFormData] = useState({
    name: '',
    email: '',
    mobile: '',
    subject: '',
    message: ''
  })

  const handleSubmit = (e: React.FormEvent) => {
    e.preventDefault()
    console.log('Form submitted:', formData)
    alert('Thank you for your message! We will contact you shortly.')
    setFormData({ name: '', email: '', mobile: '', subject: '', message: '' })
  }

  const handleChange = (e: React.ChangeEvent<HTMLInputElement | HTMLTextAreaElement>) => {
    setFormData({
      ...formData,
      [e.target.name]: e.target.value
    })
  }

  return (
    <section id="contact" className={styles.section}>
      <div className={styles.container}>
        <div className={styles.content}>
          <div className={styles.textContent}>
            <h2 className={styles.title}>Schedule a Call with an Expert</h2>
            <p className={styles.description}>
              Have questions about our services? Our team of verification experts is ready to help you find the right solution for your organization.
            </p>
            <div className={styles.contactInfo}>
              <div className={styles.infoItem}>
                <span className={styles.icon}>📞</span>
                <div>
                  <div className={styles.infoLabel}>Phone</div>
                  <div className={styles.infoValue}>0800-11222</div>
                  <div className={styles.infoValue}>0332-6000008</div>
                </div>
              </div>
              <div className={styles.infoItem}>
                <span className={styles.icon}>📧</span>
                <div>
                  <div className={styles.infoLabel}>Email</div>
                  <div className={styles.infoValue}>info@ahwaal.pk</div>
                </div>
              </div>
              <div className={styles.infoItem}>
                <span className={styles.icon}>⏰</span>
                <div>
                  <div className={styles.infoLabel}>Office Address</div>
                  <div className={styles.infoValue}>Office No: B-2/R9, Plot No: ST-04 Al-Burhan Circle Block E, North Nazimabad - Karachi</div>
                </div>
              </div>
            </div>
          </div>
          <form className={styles.form} onSubmit={handleSubmit}>
            <div className={styles.formGroup}>
              <input
                type="text"
                name="name"
                placeholder="Your Name"
                value={formData.name}
                onChange={handleChange}
                required
                className={styles.input}
              />
            </div>
            <div className={styles.formGroup}>
              <input
                type="email"
                name="email"
                placeholder="Your Email"
                value={formData.email}
                onChange={handleChange}
                required
                className={styles.input}
              />
            </div>
            <div className={styles.formGroup}>
              <input
                type="tel"
                name="mobile"
                placeholder="Mobile Number"
                value={formData.mobile}
                onChange={handleChange}
                required
                className={styles.input}
              />
            </div>
            <div className={styles.formGroup}>
              <input
                type="text"
                name="subject"
                placeholder="Subject"
                value={formData.subject}
                onChange={handleChange}
                required
                className={styles.input}
              />
            </div>
            <div className={styles.formGroup}>
              <textarea
                name="message"
                placeholder="Your Message"
                value={formData.message}
                onChange={handleChange}
                required
                rows={5}
                className={styles.textarea}
              ></textarea>
            </div>
            <button type="submit" className={styles.submitBtn}>
              Send Message
            </button>
          </form>
        </div>
      </div>
    </section>
  )
}
