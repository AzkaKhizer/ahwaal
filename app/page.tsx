'use client'

import { useEffect } from 'react'
import Navbar from '@/components/Navbar/Navbar'
import Hero from '@/components/Hero/Hero'
import ClientsCarousel from '@/components/ClientsCarousel/ClientsCarousel'
import HowItWorks from '@/components/HowItWorks/HowItWorks'
import ServicesGrid from '@/components/ServicesGrid/ServicesGrid'
import WhyUs from '@/components/WhyUs/WhyUs'
import Security from '@/components/Security/Security'
import Testimonials from '@/components/Testimonials/Testimonials'
import BlogPreview from '@/components/BlogPreview/BlogPreview'
import CTAContact from '@/components/CTAContact/CTAContact'
import Footer from '@/components/Footer/Footer'

export default function Home() {
  useEffect(() => {
    const observerOptions = {
      threshold: 0.1,
      rootMargin: '0px 0px -50px 0px'
    }

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible')
        }
      })
    }, observerOptions)

    const fadeElements = document.querySelectorAll('.fade-in')
    fadeElements.forEach(el => observer.observe(el))

    return () => {
      fadeElements.forEach(el => observer.unobserve(el))
    }
  }, [])

  return (
    <>
      <Navbar />
      <main>
        <Hero />
        <ClientsCarousel />
        <HowItWorks />
        <ServicesGrid />
        <WhyUs />
        <Security />
        <Testimonials />
        <BlogPreview />
        <CTAContact />
      </main>
      <Footer />
    </>
  )
}
