import type { Metadata } from 'next'
import './globals.css'

export const metadata: Metadata = {
  title: 'VerifyGuard - Comprehensive Background Screening & Verification Solutions',
  description: 'Ensuring peace of mind & safety with our comprehensive verification & screening solutions for your business. Education checks, employment verification, criminal screening, and more.',
  keywords: 'background screening, verification services, employee screening, background checks, identity verification',
}

export default function RootLayout({
  children,
}: {
  children: React.ReactNode
}) {
  return (
    <html lang="en">
      <body>{children}</body>
    </html>
  )
}
