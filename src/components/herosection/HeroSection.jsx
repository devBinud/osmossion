import React, { useState } from "react";
import AppointmentModal from "../appointmentModal/AppointmentModal.js";
import styles from "./herosection.module.css";
// "Dialysis machine in a medical setting" by Ezebunwo Omachi — Unsplash License, hosted locally
import heroImg from "../../assets/hero-dialysis.jpg";

const HeroSection = () => {
  const [isModalOpen, setIsModalOpen] = useState(false);

  return (
    <section className={styles.hero}>
      {/* Decorative background shapes */}
      <span className={`${styles.blob} ${styles.blobOne}`} aria-hidden="true" />
      <span className={`${styles.blob} ${styles.blobTwo}`} aria-hidden="true" />
      <span className={styles.grid} aria-hidden="true" />

      <div className={styles.inner}>
        {/* ===== Left: message ===== */}
        <div className={styles.content}>
          <span className={styles.badge}>
            Dialysis &amp; Kidney Care
          </span>

          <h1 className={styles.heading}>
            Advanced Dialysis Care,{" "}
            <span className={styles.gradientText}>Delivered with Compassion</span>
          </h1>

          <p className={styles.paragraph}>
            At Osmossion Dialysis Centre, we deliver safe, comfortable, and effective
            dialysis treatment in a supportive environment - where your health, dignity,
            and comfort always come first.
          </p>

          <div className={styles.buttons}>
            <button
              type="button"
              className="os-btn os-btn--primary"
              onClick={() => setIsModalOpen(true)}
            >
              Book an Appointment
            </button>
          </div>
        </div>

        {/* ===== Right: dialysis photo ===== */}
        <div className={styles.visual}>
          <div className={styles.imageFrame}>
            <img
              src={heroImg}
              alt="Hemodialysis machine beside a patient treatment chair"
              className={styles.image}
            />
          </div>
        </div>
      </div>

      <AppointmentModal isOpen={isModalOpen} onClose={() => setIsModalOpen(false)} />
    </section>
  );
};

export default HeroSection;
