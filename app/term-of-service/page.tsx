"use client";
import Link from "next/link";
import styles from "./terms-of-service.module.css";

export default function TermsOfService() {
  return (
    <main className={styles.container}>
      <h1>Terms of Service</h1>
      <p className={styles.date}>Effective Date: December 01, 2023</p>

      <p>
        Welcome to{" "}
        <Link href="https://ahwaal.pk" target="_blank" className={styles.link}>
          Ahwaal Pvt. Ltd.
        </Link>
        . By accessing or using our website, you agree to comply with and be
        bound by the following Terms of Service. Please read them carefully.
      </p>

      <h2>Use of Our Website</h2>
      <p>
        You agree to use our website only for lawful purposes and in a way that
        does not infringe on the rights of, restrict, or inhibit anyone else's
        use and enjoyment of the website.
      </p>

      <h2>Intellectual Property</h2>
      <p>
        All content, logos, designs, graphics, and text on{" "}
        <Link href="https://ahwaal.pk" target="_blank" className={styles.link}>
          ahwaal.pk
        </Link>{" "}
        are the property of Ahwaal Pvt. Ltd. and are protected by applicable
        intellectual property laws. You may not reproduce, distribute, or use
        any material without written permission.
      </p>

      <h2>Disclaimer of Warranties</h2>
      <p>
        Our website and services are provided “as is” without any warranties,
        either express or implied. We make no representations regarding the
        accuracy or completeness of the content available on our site.
      </p>

      <h2>Limitation of Liability</h2>
      <p>
        Ahwaal Pvt. Ltd. shall not be liable for any damages arising out of or
        related to your use or inability to use our website or services.
      </p>

      <h2>Third-Party Links</h2>
      <p>
        Our website may contain links to third-party websites. We are not
        responsible for the content or practices of these external sites.
      </p>

      <h2>Changes to These Terms</h2>
      <p>
        We reserve the right to modify these Terms of Service at any time.
        Updates will be posted on this page, and your continued use of the site
        signifies your acceptance of those changes.
      </p>

      <h2>Contact Us</h2>
      <p>
        For any questions about these Terms, please contact us at: <br />
        <strong>Email:</strong> info@ahwaal.pk <br />
        <strong>Website:</strong>{" "}
        <Link href="https://ahwaal.pk" target="_blank" className={styles.link}>
          ahwaal.pk
        </Link>
      </p>
    </main>
  );
}
