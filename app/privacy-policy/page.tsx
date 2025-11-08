"use client";
import Link from "next/link";
import styles from "./privacy-policy.module.css";

export default function PrivacyPolicy() {
  return (
    <main className={styles.container}>
      <h1>Privacy Policy</h1>
      <p className={styles.date}>Effective Date: December 01, 2023</p>

      <p>
        Thank you for visiting our website. This Privacy Policy outlines how{" "}
        <Link href="https://ahwaal.pk" target="_blank" className={styles.link}>
          Ahwaal Pvt. Ltd.
        </Link>{" "}
        ("we," "us," or "our") collects, uses, discloses, and safeguards your
        personal information. By using our website and providing your
        information, you consent to the practices described in this policy.
      </p>

      <h2>Information We Collect</h2>
      <p>
        We collect information you voluntarily provide through our Facebook
        forms on{" "}
        <Link href="https://ahwaal.pk" target="_blank" className={styles.link}>
          ahwaal.pk
        </Link>
        . This may include but is not limited to your name, contact information,
        and other relevant details.
      </p>

      <h2>How We Use Your Information</h2>
      <p>
        We use the collected information to process your inquiries, improve our
        services, or send promotional materials related to{" "}
        <Link href="https://ahwaal.pk" target="_blank" className={styles.link}>
          Ahwaal Pvt. Ltd.
        </Link>
        .
      </p>

      <h2>Information Sharing</h2>
      <p>
        We do not sell, trade, or otherwise transfer your personally identifiable
        information to outside parties. However, we may share information with
        trusted third parties who assist us in operating our website, conducting
        our business, or servicing you.
      </p>

      <h2>Security</h2>
      <p>
        We implement a variety of security measures to maintain the safety of
        your personal information.
      </p>

      <h2>Cookies</h2>
      <p>
        We may use cookies to enhance your experience on our website. You can
        choose to have your computer warn you each time a cookie is being sent
        or disable cookies through your browser settings.
      </p>

      <h2>Your Choices</h2>
      <p>
        You can opt-out of receiving promotional emails from{" "}
        <Link href="https://ahwaal.pk" target="_blank" className={styles.link}>
          Ahwaal Pvt. Ltd.
        </Link>{" "}
        by following the unsubscribe instructions provided in the emails.
      </p>

      <h2>Changes to This Privacy Policy</h2>
      <p>
        We reserve the right to update or change our Privacy Policy at any time.
        Your continued use of the website after any modifications indicates your
        acceptance of the updated policy.
      </p>

      <h2>Contact Us</h2>
      <p>
        If you have any questions regarding this Privacy Policy, please contact
        us at: <br />
        <strong>Email:</strong> info@ahwaal.pk <br />
        <strong>Website:</strong>{" "}
        <Link href="https://ahwaal.pk" target="_blank" className={styles.link}>
          ahwaal.pk
        </Link>
      </p>
    </main>
  );
}
