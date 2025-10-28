'use client'

import { useState, useEffect } from 'react'
import styles from './Navbar.module.css'

export default function Navbar() {
  const [isScrolled, setIsScrolled] = useState(false)
  const [isMenuOpen, setIsMenuOpen] = useState(false)
  const [isServicesOpen, setIsServicesOpen] = useState(false)

  useEffect(() => {
    const handleScroll = () => {
      setIsScrolled(window.scrollY > 50)
    }
    window.addEventListener('scroll', handleScroll)
    return () => window.removeEventListener('scroll', handleScroll)
  }, [])

  return (
    <header className={`${styles.header} ${isScrolled ? styles.scrolled : ''}`}>
      <nav className={styles.navbar}>
        <div className={styles.container}>
          <div className={styles.logo}>
            <span className={styles.logoText}>VerifyGuard</span>
          </div>

          <button 
            className={styles.menuToggle}
            onClick={() => setIsMenuOpen(!isMenuOpen)}
            aria-label="Toggle menu"
          >
            <span></span>
            <span></span>
            <span></span>
          </button>

          <ul className={`${styles.navMenu} ${isMenuOpen ? styles.active : ''}`}>
            <li><a href="#about">About</a></li>
            <li 
              className={styles.dropdown}
              onMouseEnter={() => setIsServicesOpen(true)}
              onMouseLeave={() => setIsServicesOpen(false)}
            >
              <a href="#services">Services ▼</a>
              {isServicesOpen && (
                <ul className={styles.dropdownMenu}>
                  <li><a href="#services">Education Check</a></li>
                  <li><a href="#services">Employment Check</a></li>
                  <li><a href="#services">Criminal Check</a></li>
                  <li><a href="#services">Identity Check</a></li>
                  <li><a href="#services">All Services</a></li>
                </ul>
              )}
            </li>
            <li><a href="#solutions">Solutions</a></li>
            <li><a href="#clients">Clients</a></li>
            <li><a href="#blog">Blog</a></li>
            <li><a href="#contact" className={styles.ctaLink}>Contact</a></li>
          </ul>
        </div>
      </nav>
    </header>
  )
}
