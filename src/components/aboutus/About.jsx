import React from "react";
import styles from "./about.module.css";
import aboutImg from "../../assets/about-ward.jpg"; // royalty-free (Unsplash License), hosted locally

const About = () => {
  return (
    <section className={styles.aboutSection}>
      <div className={styles.container}>

        {/* Left Text Section */}
        <div className={styles.textSection}>
          <p className={styles.welcomeText}>Welcome to</p>
          <p className={styles.subtitletwo}>Osmossion Dialysis Care</p>
          <p className={styles.description}>
            <span className={styles.highlight}>
              We understand HealthCare is continuously evolving.
              It is our mission to provide the best healthcare to you and your loved ones.
            </span>
          </p>
          <p className={styles.description}>
            "Kidney health plays a vital role in our overall well-being, yet it is often overlooked until problems arise. Dialysis has become a lifeline for many people living with kidney disease, helping them maintain a healthier and more balanced life. Over the years, advancements in dialysis care have made treatments safer, more effective, and more accessible for patients who need ongoing support. In this blog, we explore the importance of dialysis, how it helps patients, and why spreading awareness about kidney health is so crucial."
          </p>
        </div>

        {/* Right Image Section */}
        <div className={styles.imageSection}>
          <div className={styles.imageFrame}>
            <img src={aboutImg} alt="Clean, well-equipped patient care ward" className={styles.image} />
          </div>
        </div>

      </div>
    </section>
  );
};

export default About;
