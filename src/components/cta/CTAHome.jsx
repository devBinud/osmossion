import React, { useState } from "react";
import { Phone } from "lucide-react";
import styles from "./ctahome.module.css";
import AppointmentModal from "../../components/appointmentModal/AppointmentModal.js";

const CTAHome = () => {
  const [isModalOpen, setIsModalOpen] = useState(false);

  return (
    <section className={styles.ctaSection}>
      {/* Soft glow behind the text */}
      <span className={styles.glow} aria-hidden="true" />

      <div className={styles.content}>
        <h2 className={styles.title}>Your Care Starts Here</h2>
        <p className={styles.subtitle}>
          Book a visit with our dialysis care team - we're here to support you and your
          family at every step.
        </p>

        <div className={styles.buttons}>
          <button
            type="button"
            className="os-btn os-btn--light"
            onClick={() => setIsModalOpen(true)}
          >
            Schedule an Appointment
          </button>
          <a href="tel:+916901740874" className="os-btn os-btn--ghost-light">
            <Phone size={18} /> +91 69017 40874
          </a>
        </div>
      </div>

      {/* Popup Appointment Form */}
      <AppointmentModal isOpen={isModalOpen} onClose={() => setIsModalOpen(false)} />
    </section>
  );
};

export default CTAHome;
