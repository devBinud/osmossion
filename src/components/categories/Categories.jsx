import React, { useEffect } from 'react';
import {
  CalendarCheck,
  HeartPulse,
  Video,
  Globe,
  Stethoscope,
  Building2,
  BookOpen,
} from 'lucide-react';

const TopFeatures = () => {
  useEffect(() => {
    window.scrollTo(0, 0);
  }, []);

  const features = [
    { Icon: CalendarCheck, title: 'Schedule Visit' },
    { Icon: HeartPulse, title: 'Wellness Plans' },
    { Icon: Video, title: 'Virtual Care' },
    { Icon: Globe, title: 'Global Patients' },
    { Icon: Stethoscope, title: 'Meet Specialist' },
    { Icon: Building2, title: 'Corporate Support' },
    { Icon: BookOpen, title: 'Kidney Health Education' },
  ];

  return (
    <section className="features-section">
      <div className="features-container">
        {features.map(({ Icon, title }) => (
          <div className="feature-card" key={title}>
            <span className="feature-icon">
              <Icon size={28} strokeWidth={1.75} />
            </span>
            <span className="feature-title">{title}</span>
          </div>
        ))}
      </div>

      <style>{`
  .features-section {
    padding: 28px 2rem;
    background: #f7f6fb;
  }

  .features-container {
    max-width: 1200px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: repeat(7, minmax(0, 1fr));
    gap: 14px;
  }

  .feature-card {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    gap: 12px;
    padding: 22px 12px 18px;
    background: #fff;
    border: 1px solid #ebe8f3;
    border-radius: 20px;
    box-shadow: 0 2px 10px rgba(64, 61, 136, 0.06);
    text-align: center;
  }

  /* Same gradient as the Kidney Health Education banner */
  .feature-icon {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    background: linear-gradient(140deg, #403D88 0%, #8B639B 60%, #AF719D 100%);
    box-shadow: 0 6px 14px rgba(64, 61, 136, 0.25);
  }

  .feature-title {
    font-family: 'Poppins', sans-serif;
    font-size: 14px;
    font-weight: 600;
    line-height: 1.3;
    color: #2B2963;
  }

  /* Tablet: wrap into rows */
  @media (max-width: 1024px) {
    .features-container {
      grid-template-columns: repeat(4, minmax(0, 1fr));
    }
  }

  /* Mobile: horizontal scroll */
  @media (max-width: 768px) {
    .features-section {
      padding: 20px 1rem;
    }
    .features-container {
      display: flex;
      overflow-x: auto;
      padding-bottom: 6px;
      scrollbar-width: none; /* Firefox */
    }
    .features-container::-webkit-scrollbar {
      display: none; /* Chrome/Safari/Edge */
    }
    .feature-card {
      flex: 0 0 130px;
    }
  }
`}</style>
    </section>
  );
};

export default TopFeatures;
