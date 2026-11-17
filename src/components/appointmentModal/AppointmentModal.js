import React, { useEffect, useState } from "react";
import { createPortal } from "react-dom";
import { CheckCircle2, X } from "lucide-react";
import styles from "./appointmentModal.module.css";

// Bookings are sent to this WhatsApp number (same as the contact form)
const WHATSAPP_NUMBER = "916901740874";
const DISPLAY_PHONE = "+91 69017 40874";

const SERVICES = [
  "Dialysis Consultation",
  "Hemodialysis Session",
  "Kidney Health Check-up",
  "Virtual Care",
  "Other",
];

const EMPTY_FORM = { name: "", phone: "", email: "", date: "", service: "", message: "" };

// Today's date as YYYY-MM-DD so past dates can't be picked
const todayISO = () => {
  const d = new Date();
  d.setMinutes(d.getMinutes() - d.getTimezoneOffset());
  return d.toISOString().slice(0, 10);
};

const AppointmentModal = ({ isOpen, onClose }) => {
  const [form, setForm] = useState(EMPTY_FORM);
  const [submitted, setSubmitted] = useState(false);

  const handleClose = () => {
    onClose();
    // reset after the modal is gone
    setTimeout(() => {
      setForm(EMPTY_FORM);
      setSubmitted(false);
    }, 200);
  };

  // Esc to close + lock page scroll while open
  useEffect(() => {
    if (!isOpen) return;
    const onKey = (e) => e.key === "Escape" && handleClose();
    window.addEventListener("keydown", onKey);
    const prevOverflow = document.body.style.overflow;
    document.body.style.overflow = "hidden";
    return () => {
      window.removeEventListener("keydown", onKey);
      document.body.style.overflow = prevOverflow;
    };
    // eslint-disable-next-line react-hooks/exhaustive-deps
  }, [isOpen]);

  if (!isOpen) return null;

  const update = (field) => (e) => setForm({ ...form, [field]: e.target.value });

  const handleSubmit = (e) => {
    e.preventDefault();
    const lines = [
      "*New Appointment Request*",
      "",
      `Name: ${form.name}`,
      `Phone: ${form.phone}`,
      form.email && `Email: ${form.email}`,
      form.date && `Preferred date: ${form.date}`,
      form.service && `Service: ${form.service}`,
      form.message && `\nMessage: ${form.message}`,
    ].filter(Boolean);
    const url = `https://wa.me/${WHATSAPP_NUMBER}?text=${encodeURIComponent(lines.join("\n"))}`;
    window.open(url, "_blank", "noopener,noreferrer");
    setSubmitted(true);
  };

  const modal = (
    <div className={styles.overlay} onClick={handleClose}>
      <div
        className={styles.modal}
        role="dialog"
        aria-modal="true"
        aria-labelledby="appointment-title"
        onClick={(e) => e.stopPropagation()}
      >
        <button type="button" className={styles.close} aria-label="Close" onClick={handleClose}>
          <X size={18} />
        </button>

        {/* Header */}
        <div className={styles.header}>
          <h2 id="appointment-title" className={styles.title}>Book an Appointment</h2>
        </div>

        {submitted ? (
          /* Success state */
          <div className={styles.success}>
            <span className={styles.successIcon} aria-hidden="true">
              <CheckCircle2 size={34} strokeWidth={1.75} />
            </span>
            <h3 className={styles.successTitle}>Request ready to send</h3>
            <p className={styles.successText}>
              We've opened WhatsApp with your details — just press <strong>Send</strong> there.
              Prefer to talk? Call us at{" "}
              <a href={`tel:+${WHATSAPP_NUMBER}`}>{DISPLAY_PHONE}</a>.
            </p>
            <button type="button" className="os-btn os-btn--primary" onClick={handleClose}>
              Done
            </button>
          </div>
        ) : (
          /* Form */
          <form className={styles.form} onSubmit={handleSubmit}>
            <div className={styles.row}>
              <label className={styles.field}>
                <span className={styles.label}>Full Name *</span>
                <span className={styles.inputWrap}>
                  <input
                    type="text"
                    required
                    autoFocus
                    placeholder="Your name"
                    value={form.name}
                    onChange={update("name")}
                    className={styles.input}
                  />
                </span>
              </label>

              <label className={styles.field}>
                <span className={styles.label}>Phone Number *</span>
                <span className={styles.inputWrap}>
                  <input
                    type="tel"
                    required
                    pattern="[0-9+\s\-]{10,15}"
                    title="Enter a valid phone number"
                    placeholder="+91 XXXXX XXXXX"
                    value={form.phone}
                    onChange={update("phone")}
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
                  placeholder="you@example.com"
                  value={form.email}
                  onChange={update("email")}
                  className={styles.input}
                />
              </span>
            </label>

            <div className={styles.row}>
              <label className={styles.field}>
                <span className={styles.label}>Preferred Date</span>
                <span className={styles.inputWrap}>
                  <input
                    type="date"
                    min={todayISO()}
                    value={form.date}
                    onChange={update("date")}
                    className={styles.input}
                  />
                </span>
              </label>

              <label className={styles.field}>
                <span className={styles.label}>Service</span>
                <span className={styles.inputWrap}>
                  <select value={form.service} onChange={update("service")} className={styles.input}>
                    <option value="">Select a service</option>
                    {SERVICES.map((s) => (
                      <option key={s} value={s}>{s}</option>
                    ))}
                  </select>
                </span>
              </label>
            </div>

            <label className={styles.field}>
              <span className={styles.label}>Message</span>
              <span className={styles.inputWrap}>
                <textarea
                  rows={3}
                  placeholder="Anything we should know? (optional)"
                  value={form.message}
                  onChange={update("message")}
                  className={`${styles.input} ${styles.textarea}`}
                />
              </span>
            </label>

            <button type="submit" className="os-btn os-btn--primary os-btn--block">
              Request Appointment
            </button>

            <p className={styles.footnote}>
              Or call us directly at <a href={`tel:+${WHATSAPP_NUMBER}`}>{DISPLAY_PHONE}</a>
            </p>
          </form>
        )}
      </div>
    </div>
  );

  // Render at <body> level so nothing (navbar, WhatsApp button) can sit above it
  return createPortal(modal, document.body);
};

export default AppointmentModal;
