import React, { useState, useEffect } from 'react';
import { Link, useLocation } from 'react-router-dom';
import { Mail, MapPin, Menu, Phone, X } from 'lucide-react';
import { FaFacebookF, FaInstagram, FaYoutube, FaTwitter } from 'react-icons/fa';
import logo from '../assets/logo.png';
import AppointmentModal from './appointmentModal/AppointmentModal.js';
import styles from './navbar.module.css';

const ADDRESS = 'Dhing Road, Hoiborgaon, Nagaon, Assam';
const EMAIL = 'info@osmossion.com';
const PHONE = '+91 69017 40874';
const PHONE_HREF = 'tel:+916901740874';

// TODO: replace '#' with the real profile URLs
const socialLinks = [
  { label: 'Facebook', href: '#', Icon: FaFacebookF },
  { label: 'Instagram', href: '#', Icon: FaInstagram },
  { label: 'YouTube', href: '#', Icon: FaYoutube },
  { label: 'Twitter', href: '#', Icon: FaTwitter },
];

const navLinks = [
  { name: 'Home', path: '/' },
  { name: 'About Us', path: '/about-us' },
  { name: 'Kidney Health Education', path: '/kidney-health-education' },
  { name: 'Blogs', path: '/blogs' },
  { name: 'Contact Us', path: '/contact-us' },
];

const Brand = () => (
  <Link to="/" className={styles.brand} aria-label="Osmossion — Home">
    <img src={logo} alt="" className={styles.logo} />
    <span className={styles.wordmark}>
      <span className={styles.wordmarkName}>Osmossion</span>
      <span className={styles.wordmarkTag}>Dialysis Centre</span>
    </span>
  </Link>
);

const Navbar = () => {
  const location = useLocation();
  const [menuOpen, setMenuOpen] = useState(false);
  const [isModalOpen, setIsModalOpen] = useState(false);
  const [scrolled, setScrolled] = useState(false);

  // Frosted / compact navbar once the page is scrolled
  useEffect(() => {
    const onScroll = () => setScrolled(window.scrollY > 40);
    onScroll();
    window.addEventListener('scroll', onScroll, { passive: true });
    return () => window.removeEventListener('scroll', onScroll);
  }, []);

  // Close the mobile menu whenever the route changes
  useEffect(() => {
    setMenuOpen(false);
  }, [location.pathname]);

  // Lock page scroll while the mobile menu is open
  useEffect(() => {
    if (!menuOpen) return;
    const prev = document.body.style.overflow;
    document.body.style.overflow = 'hidden';
    const onKey = (e) => e.key === 'Escape' && setMenuOpen(false);
    window.addEventListener('keydown', onKey);
    return () => {
      document.body.style.overflow = prev;
      window.removeEventListener('keydown', onKey);
    };
  }, [menuOpen]);

  const linkClass = (path) =>
    `${styles.link} ${location.pathname === path ? styles.linkActive : ''}`;

  const openAppointment = () => {
    setMenuOpen(false);
    setIsModalOpen(true);
  };

  return (
    <>
      {/* ===== Top bar ===== */}
      <div className={styles.topbar}>
        <div className={styles.topbarInner}>
          <div className={styles.topbarLeft}>
            <span className={`${styles.topbarItem} ${styles.topbarAddress}`}>
              <MapPin size={14} /> {ADDRESS}
            </span>
            <a href={`mailto:${EMAIL}`} className={styles.topbarItem}>
              <Mail size={14} /> {EMAIL}
            </a>
          </div>

          <div className={styles.socials}>
            {socialLinks.map(({ label, href, Icon }) => (
              <a
                key={label}
                href={href}
                {...(href !== '#' && { target: '_blank', rel: 'noreferrer' })}
                aria-label={label}
                title={label}
                className={styles.social}
              >
                <Icon />
              </a>
            ))}
          </div>
        </div>
      </div>

      {/* ===== Main navbar ===== */}
      <nav className={`${styles.nav} ${scrolled ? styles.navScrolled : ''}`}>
        <div className={styles.navInner}>
          <Brand />

          <div className={styles.links}>
            {navLinks.map(({ name, path }) => (
              <Link key={path} to={path} className={linkClass(path)}>
                {name}
              </Link>
            ))}
          </div>

          <div className={styles.actions}>
            <button type="button" className={`os-btn os-btn--primary ${styles.cta}`} onClick={openAppointment}>
              Book Appointment
            </button>

            <button
              type="button"
              className={styles.menuButton}
              aria-label="Open menu"
              aria-expanded={menuOpen}
              onClick={() => setMenuOpen(true)}
            >
              <Menu size={24} />
            </button>
          </div>
        </div>
      </nav>

      {/* ===== Mobile drawer ===== */}
      <div
        className={`${styles.backdrop} ${menuOpen ? styles.backdropOpen : ''}`}
        onClick={() => setMenuOpen(false)}
        aria-hidden="true"
      />
      <aside
        className={`${styles.drawer} ${menuOpen ? styles.drawerOpen : ''}`}
        aria-label="Mobile menu"
        aria-hidden={!menuOpen}
      >
        <div className={styles.drawerHeader}>
          <Brand />
          <button
            type="button"
            className={styles.drawerClose}
            aria-label="Close menu"
            onClick={() => setMenuOpen(false)}
          >
            <X size={20} />
          </button>
        </div>

        <nav className={styles.drawerLinks}>
          {navLinks.map(({ name, path }) => (
            <Link key={path} to={path} className={linkClass(path)} tabIndex={menuOpen ? 0 : -1}>
              {name}
            </Link>
          ))}
        </nav>

        <div className={styles.drawerFooter}>
          <button type="button" className="os-btn os-btn--primary os-btn--block" onClick={openAppointment}>
            Book Appointment
          </button>
          <a href={PHONE_HREF} className="os-btn os-btn--outline os-btn--block">
            <Phone size={18} /> {PHONE}
          </a>
          <a href={`mailto:${EMAIL}`} className={styles.drawerEmail}>
            <Mail size={15} /> {EMAIL}
          </a>
        </div>
      </aside>

      <AppointmentModal isOpen={isModalOpen} onClose={() => setIsModalOpen(false)} />
    </>
  );
};

export default Navbar;
