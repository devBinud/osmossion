import React, { useEffect, useState } from 'react';
import { Link } from 'react-router-dom';
import { CheckCircle2 } from 'lucide-react';
import { FaPhoneAlt, FaEnvelope, FaMapMarkerAlt } from 'react-icons/fa';
import styles from './contact.module.css';

// Form submissions open WhatsApp with the message pre-filled
const WHATSAPP_NUMBER = '916901740874';
const PHONE = '+91 69017 40874';
const EMAIL = 'info@osmossion.com';
const ADDRESS = 'Dhing Road, near Dew Care Hospital, Hoiborgaon, Nagaon, Assam 782002';

const EMPTY_FORM = { name: '', phone: '', email: '', message: '', agree: false };

const Contact = () => {
  const [formData, setFormData] = useState(EMPTY_FORM);
  const [submitted, setSubmitted] = useState(false);

  useEffect(() => {
    window.scrollTo(0, 0);
  }, []);

  const handleChange = (e) => {
    const { name, value, type, checked } = e.target;
    setFormData((prev) => ({ ...prev, [name]: type === 'checkbox' ? checked : value }));
  };

  const handleSubmit = (e) => {
    e.preventDefault();
    const lines = [
      '*Contact Form Enquiry*',
      '',
      `Name: ${formData.name}`,
      `Phone: ${formData.phone}`,
      formData.email ? `Email: ${formData.email}` : null,
      '',
      `Message: ${formData.message}`,
    ].filter((line) => line !== null);
    const link = `https://wa.me/${WHATSAPP_NUMBER}?text=${encodeURIComponent(lines.join('\n'))}`;
    window.open(link, '_blank', 'noopener,noreferrer');
    setSubmitted(true);
  };

  const resetForm = () => {
    setFormData(EMPTY_FORM);
    setSubmitted(false);
  };

  return (
    <section className={styles.contactSection}>
      <div className={styles.container}>
        {/* ===== LEFT: contact details (original layout) ===== */}
        <div className={styles.left}>
          <h2 className={styles.leftHeading}>Stay in Touch</h2>
          <p className={styles.leftText} style={{ fontSize: 17.2 }}>
            Have questions or need assistance? We’d love to hear from you. Reach out to us using the details below or send us a message through the form.
          </p>

          <div className={styles.contactRow}>
            <FaPhoneAlt className={styles.icon} />
            <a href={`tel:+${WHATSAPP_NUMBER}`} className={styles.contactLink}>{PHONE}</a>
          </div>
          <div className={styles.contactRow}>
            <FaEnvelope className={styles.icon} />
            <a href={`mailto:${EMAIL}`} className={styles.contactLink}>{EMAIL}</a>
          </div>
          <div className={styles.contactRow}>
            <FaMapMarkerAlt className={styles.icon} />
            <span className={styles.contactLink}>{ADDRESS}</span>
          </div>

          <h2 className={styles.leftHeading} style={{ marginTop: '1.5rem' }}>Whatsapp Us</h2>
          <p className={styles.leftText} style={{ marginTop: '10px' }}>
            Want to find the perfect dialysis consultation for you? Get a personalized advice on<br />
            <strong style={{ color: '#2B2963' }}>{PHONE}</strong>
          </p>
        </div>

        {/* ===== RIGHT: form card ===== */}
        <div className={styles.formCard}>
          {submitted ? (
            <div className={styles.success}>
              <span className={styles.successIcon} aria-hidden="true">
                <CheckCircle2 size={34} strokeWidth={1.75} />
              </span>
              <h3 className={styles.formTitle}>Message ready to send</h3>
              <p className={styles.formSubtitle}>
                We've opened WhatsApp with your message — just press <strong>Send</strong> there and
                our team will get back to you.
              </p>
              <button type="button" className="os-btn os-btn--primary" onClick={resetForm}>
                Send another message
              </button>
            </div>
          ) : (
            <>
              <h3 className={styles.formTitle}>Send us a Query</h3>
              <p className={styles.formSubtitle}>
                Fill in your details and we'll get back to you as soon as possible.
              </p>

              <form className={styles.form} onSubmit={handleSubmit}>
                <div className={styles.row}>
                  <label className={styles.field}>
                    <span className={styles.label}>Full Name *</span>
                    <span className={styles.inputWrap}>
                      <input
                        type="text"
                        name="name"
                        required
                        placeholder="Your name"
                        value={formData.name}
                        onChange={handleChange}
                        className={styles.input}
                      />
                    </span>
                  </label>

                  <label className={styles.field}>
                    <span className={styles.label}>Phone Number *</span>
                    <span className={styles.inputWrap}>
                      <input
                        type="tel"
                        name="phone"
                        required
                        pattern="[0-9+\s\-]{10,15}"
                        title="Enter a valid phone number"
                        placeholder="+91 XXXXX XXXXX"
                        value={formData.phone}
                        onChange={handleChange}
                        className={styles.input}
                      />
                    </span>
                  </label>
                </div>

                <label className={styles.field}>
                  <span className={styles.label}>Email Address</span>
                  <span className={styles.inputWrap}>
                    <input
                      type="email"
                      name="email"
                      placeholder="you@example.com"
                      value={formData.email}
                      onChange={handleChange}
                      className={styles.input}
                    />
                  </span>
                </label>

                <label className={styles.field}>
                  <span className={styles.label}>Message *</span>
                  <span className={styles.inputWrap}>
                    <textarea
                      name="message"
                      rows="5"
                      required
                      placeholder="How can we help you?"
                      value={formData.message}
                      onChange={handleChange}
                      className={`${styles.input} ${styles.textarea}`}
                    />
                  </span>
                </label>

                <label className={styles.checkbox}>
                  <input
                    type="checkbox"
                    name="agree"
                    checked={formData.agree}
                    onChange={handleChange}
                    required
                  />
                  <span>
                    I agree to the <Link to="/privacy-policy">Privacy Policy</Link> and to be
                    contacted about my query.
                  </span>
                </label>

                <button className="os-btn os-btn--primary os-btn--block" type="submit">
                  Send Message
                </button>              </form>
            </>
          )}
        </div>
      </div>
    </section>
  );
};

export default Contact;
