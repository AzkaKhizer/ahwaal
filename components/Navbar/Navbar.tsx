'use client'

import { useState, useEffect } from 'react'
import styles from './Navbar.module.css'
import Image from "next/image";
import Link from "next/link";

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
      <Link href="/">
        <Image
          src="/logo1.jpeg"
          alt="Company Logo"
          width={120}
          height={50}
          className={styles.logoImage}
        />
      </Link>
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
            <li>
  <a 
    href="#"
    onClick={(e) => {
      e.preventDefault()
      window.scrollTo({ top: 0, behavior: 'smooth' })
      setIsMenuOpen(false) // optional: close mobile menu if open
    }}
  >
    About
  </a>
</li>

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
                  
                </ul>
              )}
            </li>
            <li><a href="#solutions">Solutions</a></li>
            
            <li><a href="#blog">Blog</a></li>
            <li><a href="#contact" className={styles.ctaLink}>Contact</a></li>
          </ul>
        </div>
      </nav>
    </header>
  )
}
