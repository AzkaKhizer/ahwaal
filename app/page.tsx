'use client'

import { useEffect } from 'react'

import Hero from '@/components/Hero/Hero'

import ServicesGrid from '@/components/ServicesGrid/ServicesGrid'
import WhyUs from '@/components/WhyUs/WhyUs'
import Security from '@/components/Security/Security'

import BlogPreview from '@/components/BlogPreview/BlogPreview'
import CTAContact from '@/components/CTAContact/CTAContact'


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
      
      <main>
        <Hero />
        
        
        <ServicesGrid />
        <WhyUs />
        <Security />
        
        <BlogPreview />
        <CTAContact />
      </main>
      
    </>
  )
}
