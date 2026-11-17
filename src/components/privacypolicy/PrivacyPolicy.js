import React, { useEffect } from 'react';
import { Link } from 'react-router-dom';
import styles from './privacypolicy.module.css';

const EFFECTIVE_DATE = '17 November 2026';
const CENTRE = 'Osmossion Dialysis Centre';
const ADDRESS = 'Dhing Road, near Dew Care Hospital, Hoiborgaon, Nagaon, Assam 782002';
const PHONE = '+91 69017 40874';
const EMAIL = 'info@osmossion.com';

const PrivacyPolicy = () => {
  useEffect(() => {
    window.scrollTo(0, 0);
  }, []);

  return (
    <section className={styles.page}>
      <div className={styles.privacyContainer}>
        <span className={styles.eyebrow}>Legal</span>
        <h1 className={styles.headingText}>Privacy Policy</h1>
        <p className={styles.effectiveDate}>
          <strong>Effective Date:</strong> {EFFECTIVE_DATE}
          <br />
          <strong>Organisation:</strong> {CENTRE}
        </p>

        <p className={styles.paragraph}>
          At {CENTRE} (“Osmossion”, “we”, “us”), we understand that your health information is
          personal. This Privacy Policy explains what information we collect when you visit our
          website or contact us, how we use it, and the choices you have.
        </p>

        <hr className={styles.separator} />

        <h2 className={styles.subHeading}>1. Information We Collect</h2>
        <p className={styles.paragraph}>We only collect the information you choose to share with us:</p>
        <ul className={styles.list}>
          <li>
            <strong>Contact details:</strong> your name, phone number and (optionally) email address
            when you fill in our contact or appointment forms, call us, or message us.
          </li>
          <li>
            <strong>Appointment details:</strong> your preferred date, the service you are interested in,
            and any message you include.
          </li>
          <li>
            <strong>Health information you share:</strong> details about your condition or treatment
            that you choose to mention in a message, call or visit.
          </li>
          <li>
            <strong>Communications:</strong> messages and enquiries you send us by WhatsApp, phone or email.
          </li>
        </ul>
        <p className={styles.paragraph}>
          Our website does not use analytics tools, advertising cookies or tracking pixels.
        </p>

        <hr className={styles.separator} />

        <h2 className={styles.subHeading}>2. How Our Website Forms Work</h2>
        <p className={styles.paragraph}>
          When you submit the contact or appointment form, our website does not store your details.
          Instead, it opens WhatsApp on your device with your message pre-filled. Your message reaches
          us only when you press <strong>Send</strong> in WhatsApp. WhatsApp is operated by Meta and
          handles your message under its own privacy policy.
        </p>
        <p className={styles.paragraph}>
          Please avoid sharing detailed medical reports through the website forms — our care team will
          collect any clinical information needed in person or over the phone.
        </p>

        <hr className={styles.separator} />

        <h2 className={styles.subHeading}>3. How We Use Your Information</h2>
        <ul className={styles.list}>
          <li>To respond to your questions and enquiries.</li>
          <li>To schedule, confirm and manage your appointments.</li>
          <li>To provide dialysis care, consultations and follow-up support.</li>
          <li>To contact you about your appointments or treatment.</li>
          <li>To meet our legal, medical record-keeping and regulatory obligations.</li>
        </ul>
        <p className={styles.paragraph}>
          We do not send promotional messages unless you have agreed to receive them.
        </p>

        <hr className={styles.separator} />

        <h2 className={styles.subHeading}>4. How We Share Your Information</h2>
        <p className={styles.paragraph}>
          We do not sell or rent your personal information. We share it only when necessary:
        </p>
        <ul className={styles.list}>
          <li>
            <strong>Healthcare professionals</strong> involved in your care, such as doctors,
            nephrologists or laboratories, where required for your treatment.
          </li>
          <li>
            <strong>Service providers</strong> we use to communicate with you, such as WhatsApp,
            phone and email services.
          </li>
          <li>
            <strong>Legal authorities</strong> when required by law, or to protect the safety of
            patients and staff.
          </li>
        </ul>

        <hr className={styles.separator} />

        <h2 className={styles.subHeading}>5. Third-Party Services</h2>
        <p className={styles.paragraph}>
          Our website loads fonts and design resources from Google Fonts and jsDelivr, and shows
          video thumbnails from YouTube. When your browser loads these, those services may receive
          basic technical information such as your IP address and browser type. Videos and social
          media links open on the respective platforms, which follow their own privacy policies.
        </p>

        <hr className={styles.separator} />

        <h2 className={styles.subHeading}>6. How We Protect Your Information</h2>
        <p className={styles.paragraph}>
          Patient information is accessed only by authorised staff who need it to provide care or
          support. We take reasonable steps to keep your information confidential and secure, and we
          keep it only for as long as needed for your care and to meet legal requirements.
        </p>

        <hr className={styles.separator} />

        <h2 className={styles.subHeading}>7. Your Choices and Rights</h2>
        <p className={styles.paragraph}>You may contact us at any time to:</p>
        <ul className={styles.list}>
          <li>Ask what personal information we hold about you.</li>
          <li>Correct or update your details.</li>
          <li>Request deletion of information we are not required to keep by law.</li>
          <li>Withdraw your consent to be contacted.</li>
        </ul>

        <hr className={styles.separator} />

        <h2 className={styles.subHeading}>8. Children’s Information</h2>
        <p className={styles.paragraph}>
          Information about patients under 18 should be provided by a parent or legal guardian.
        </p>

        <hr className={styles.separator} />

        <h2 className={styles.subHeading}>9. Changes to This Policy</h2>
        <p className={styles.paragraph}>
          We may update this Privacy Policy from time to time. Any changes will be posted on this page
          with a revised effective date.
        </p>

        <hr className={styles.separator} />

        <h2 className={styles.subHeading}>10. Contact Us</h2>
        <p className={styles.paragraph}>
          If you have any questions about this Privacy Policy or your information, please contact us:
        </p>
        <div className={styles.contactCard}>
          <p><strong>{CENTRE}</strong></p>
          <p>{ADDRESS}</p>
          <p>
            Phone: <a href="tel:+916901740874">{PHONE}</a>
          </p>
          <p>
            Email: <a href={`mailto:${EMAIL}`}>{EMAIL}</a>
          </p>
          <p>
            Or use our <Link to="/contact-us">contact form</Link>.
          </p>
        </div>
      </div>
    </section>
  );
};

export default PrivacyPolicy;
