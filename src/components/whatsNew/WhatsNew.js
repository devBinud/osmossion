import React from "react";
import { FaPlayCircle } from "react-icons/fa"; // ✅ Play icon
import styles from "./whatsnew.module.css";

const WhatsNew = () => {
  const updates = [
    {
      title: "Osmossion Journey",
      image: "https://img.youtube.com/vi/hfKDA5kbL5o/hqdefault.jpg",
      videoUrl: "https://www.youtube.com/watch?v=hfKDA5kbL5o",
      isVideo: true,
    },
    {
      title: "How to Take care of Healthy Kidney",
      image: "https://img.youtube.com/vi/YGbQSfyoXSg/hqdefault.jpg",
      videoUrl: "https://www.youtube.com/watch?v=YGbQSfyoXSg",
      isVideo: true,
    },
    {
      title: "Kidney Function Tests (KFT's) Explained",
      image: "https://img.youtube.com/vi/e5R6tzJCCgw/hqdefault.jpg",
      videoUrl: "https://www.youtube.com/watch?v=e5R6tzJCCgw",
      isVideo: true,
    },
  ];

  const openVideo = (url) => {
    window.open(url, "_blank", "noopener,noreferrer");
  };

  return (
    <section className={styles["whatsNew-section"]}>
      <div className={styles["whatsNew-container"]}>
        <h2 className={styles["whatsNew-title"]}>Reference Videos</h2>
        <p className={styles["whatsNew-subtitle"]}>
          Helpful videos on kidney health, tests, and everyday care.
        </p>


        <div className={styles["whatsNew-grid"]}>
          {updates.map((item, idx) => (
            <div
              key={idx}
              role="link"
              tabIndex={0}
              aria-label={`Watch on YouTube: ${item.title}`}
              className={`${styles["whatsNew-card"]} ${item.isVideo ? styles["whatsNew-cardVideo"] : ""}`}
              onClick={() => item.videoUrl && openVideo(item.videoUrl)}
              onKeyDown={(e) => e.key === "Enter" && item.videoUrl && openVideo(item.videoUrl)}
            >
              {/* 16:9 video frame — thumbnail fills it edge to edge */}
              <div className={styles["whatsNew-frame"]}>
                <img
                  src={item.image}
                  alt=""
                  loading="lazy"
                  className={styles["whatsNew-cardImage"]}
                />
                {item.isVideo && (
                  <span className={styles["whatsNew-playIcon"]} aria-hidden="true">
                    <FaPlayCircle size={60} />
                  </span>
                )}
              </div>

              {/* Title below the video */}
              <div className={styles["whatsNew-cardContent"]}>
                <h3 className={styles["whatsNew-cardTitle"]}>{item.title}</h3>
              </div>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
};

export default WhatsNew;
