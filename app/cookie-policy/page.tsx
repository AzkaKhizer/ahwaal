"use client";
import Link from "next/link";
import styles from "./cookie-policy.module.css";

export default function CookiePolicy() {
  return (
    <main className={styles.container}>
      <h1>Cookie Policy</h1>
      <p className={styles.date}>Effective Date: December 01, 2023</p>

      <p>
        This Cookie Policy explains how{" "}
        <Link href="https://ahwaal.pk" target="_blank" className={styles.link}>
          Ahwaal Pvt. Ltd.
        </Link>{" "}
        (“we,” “us,” or “our”) uses cookies and similar technologies to enhance
        your experience on our website.
      </p>

      <h2>What Are Cookies?</h2>
      <p>
        Cookies are small text files stored on your device when you visit a
        website. They help us recognize your browser and remember certain
        information about your visit.
      </p>

      <h2>How We Use Cookies</h2>
      <p>We use cookies to:</p>
      <ul>
        <li>Understand how visitors use our website.</li>
        <li>Improve website functionality and performance.</li>
        <li>Remember user preferences for future visits.</li>
        <li>Deliver relevant content and promotions.</li>
      </ul>

      <h2>Types of Cookies We Use</h2>
      <ul>
        <li>
          <strong>Essential Cookies:</strong> Required for the website to
          function properly.
        </li>
        <li>
          <strong>Performance Cookies:</strong> Help us understand how users
          interact with our site.
        </li>
        <li>
          <strong>Functional Cookies:</strong> Remember your preferences and
          settings.
        </li>
        <li>
          <strong>Advertising Cookies:</strong> Used to deliver relevant ads and
          track campaign effectiveness.
        </li>
      </ul>

      <h2>Managing Cookies</h2>
      <p>
        You can control or delete cookies through your browser settings. Please
        note that disabling cookies may affect your ability to use certain
        features of our site.
      </p>

      <h2>Third-Party Cookies</h2>
      <p>
        Some cookies may be set by third-party services that appear on our
        website, such as analytics or social media integrations.
      </p>

      <h2>Changes to This Policy</h2>
      <p>
        We may update this Cookie Policy from time to time. Any changes will be
        posted on this page with an updated effective date.
      </p>

      <h2>Contact Us</h2>
      <p>
        For questions about our use of cookies, please contact us at: <br />
        <strong>Email:</strong> info@ahwaal.pk <br />
        <strong>Website:</strong>{" "}
        <Link href="https://ahwaal.pk" target="_blank" className={styles.link}>
          ahwaal.pk
        </Link>
      </p>
    </main>
  );
}
