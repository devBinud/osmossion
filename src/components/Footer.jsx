import React from 'react';
import {
  FaFacebookF,
  FaInstagram,
  FaTwitter,
  FaYoutube,
  FaPinterest,
  FaPhoneAlt,
  FaEnvelope
} from 'react-icons/fa';

const Footer = () => {
  return (
    <footer style={{
      // backgroundColor: '#2e3136ff',
      backgroundColor: '#24224F',
      color: '#d6d3d3ff',
      fontFamily: 'Poppins, sans-serif',
      boxShadow: '0 4px 10px rgba(0, 0, 0, 0.1)',
    }}>

      <div style={{
        maxWidth: '1200px',
        margin: '0 auto',
        display: 'flex',
        flexWrap: 'wrap',
        justifyContent: 'space-between',
        gap: '2rem',
        padding: '3rem 1rem'
      }}>
        {/* Column 1: Brand + Contact + Social */}
        <div style={{ flex: '1 1 260px', minWidth: '250px' }}>
          <h4 style={{
            fontSize: '1.5rem',
            fontWeight: '600',
            fontFamily: 'Poppins',
            color: '#d6d3d3ff',
            marginBottom: '1rem'
          }}>
            Osmossion
          </h4>
          <p style={{ fontSize: '0.9rem', lineHeight: '1.6', marginBottom: '1.5rem', fontFamily: 'Poppins' }}>
            Dedicated to better kidney health with safe, reliable, and compassionate dialysis care.
          </p>

          {/* Contact Info */}
          <div style={{ display: 'flex', flexDirection: 'column', gap: '0.5rem' }}>
            <div style={{ display: 'flex', alignItems: 'center', gap: '10px' }}>
              <FaPhoneAlt style={{ color: '#F8B2B2' }} />
              <a href="tel:+916901740874" style={{ color: '#d6d3d3ff', fontFamily: 'Poppins', textDecoration: 'none' }}>
                +91 69017 40874
              </a>
            </div>
            <div style={{ display: 'flex', alignItems: 'center', gap: '10px' }}>
              <FaEnvelope style={{ color: '#F8B2B2' }} />
              <a href="mailto:info@osmossion.com" style={{ color: '#d6d3d3ff', fontFamily: 'Poppins', textDecoration: 'none' }}>
                info@osmossion.com
              </a>
            </div>
          </div>

          {/* Social Icons */}
          <div style={{
            display: 'flex',
            gap: '1rem',
            marginTop: '1.5rem',
            fontSize: '1.3rem'
          }}>
            <a href="#!"><FaFacebookF style={{ color: '#F8B2B2' }} /></a>
            <a href="#!"><FaInstagram style={{ color: '#F8B2B2' }} /></a>
            <a href="#!"><FaTwitter style={{ color: '#F8B2B2' }} /></a>
            <a href="#!"><FaYoutube style={{ color: '#F8B2B2' }} /></a>
            <a href="#!"><FaPinterest style={{ color: '#F8B2B2' }} /></a>
          </div>
        </div>

        {/* SHOP Links */}
        <div style={{ flex: '1 1 150px', minWidth: '150px' }}>
          <h4 style={{ fontFamily: 'Poppins', fontSize: '1.4rem', color: '#d6d3d3ff', marginBottom: '1rem' }}>Quick Links</h4>
          <ul style={{ listStyle: 'none', padding: 0, fontSize: '1rem', lineHeight: '2.5', fontFamily: 'Poppins' }}>
            {['Kidney Health', 'Patient Care', 'About Us','Dialysis Services'].map(item => (
              <li key={item}>
                <a
                  href="#!"
                  style={{
                    color: '#d6d3d3ff',
                    fontSize: 15.4,
                    textDecoration: 'none',
                    fontFamily: 'Poppins, sans-serif'
                  }}
                >
                  {item}
                </a>
              </li>
            ))}
          </ul>

        </div>

        {/* HELP Links */}
        <div style={{ flex: '1 1 150px', minWidth: '150px' }}>
          <h4 style={{ fontFamily: 'Poppins', fontSize: '1.4rem', color: '#d6d3d3ff', marginBottom: '1rem' }}>Help</h4>
          <ul style={{ listStyle: 'none', padding: 0, fontSize: '1rem', lineHeight: '2.5', fontFamily: 'Poppins' }}>
            <li>
              <a href="/contact" style={{ color: '#d6d3d3ff', textDecoration: 'none' }}>Contact Us</a>
            </li>
            <li>
              <a href="/faqs" style={{ color: '#d6d3d3ff', textDecoration: 'none' }}>FAQs</a>
            </li>
            <li>
              <a href="/appointments" style={{ color: '#d6d3d3ff', textDecoration: 'none' }}>Book Appointment</a>
            </li>
            <li>
              <a href="/privacy-policy" style={{ color: '#d6d3d3ff', textDecoration: 'none' }}>Privacy Policy</a>
            </li>
          </ul>
        </div>


        {/* Newsletter */}
        <div style={{ flex: '1 1 240px', minWidth: '250px' }}>
          <h4 style={{ fontFamily: 'Poppins', fontSize: '1.4rem', color: '#d6d3d3ff', marginBottom: '1rem' }}>Stay Updated</h4>
          <p style={{ fontSize: '0.9rem', marginBottom: '1rem', fontFamily: 'Poppins' }}>
            Subscribe to our newsletter for exclusive offers and product updates.
          </p>
          <input
            type="email"
            placeholder="you@example.com"
            aria-label="Email address"
            className="footer-newsletter-input"
          />
          <button type="button" className="os-btn os-btn--primary os-btn--block">
            Subscribe
          </button>
        </div>
      </div>

      {/* Footer Bottom */}
      <div style={{
        textAlign: 'center',
        padding: '1.5rem 0',
        fontSize: '0.85rem',
        borderTop: '1px solid rgba(255,255,255,0.1)',
        fontFamily: 'Poppins',
        color: '#a8a3a3ff',
      }}>
        © {new Date().getFullYear()} Osmossion | All rights reserved.
        <div style={{ marginTop: '0.4rem' }}>
          Developed and maintained by{' '}
          <a
            href="https://binudsoftwaresolutions.in"
            target="_blank"
            rel="noreferrer"
            style={{ color: '#d6d3d3ff', textDecoration: 'none', fontWeight: 600 }}
          >
            Binud Software Solutions
          </a>
        </div>
      </div>
    </footer >
  );
};

export default Footer;
