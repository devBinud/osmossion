import React, { useEffect, useState } from "react";
import { Link } from "react-router-dom";
import { X } from "lucide-react";
import styles from "./blogs.module.css";

// Blog cover images (royalty-free, Unsplash License — hosted locally)
import kidneyCareImg from "../../assets/blogs/kidney-care.jpg";
import aiHealthcareImg from "../../assets/blogs/ai-healthcare.jpg";
import telemedicineImg from "../../assets/blogs/telemedicine.jpg";

/**
 * Used in two places:
 *  - Home page section:  <Blogs />            → "Latest Blogs" + "View All Blogs" button
 *  - Blogs page (/blogs): <Blogs isPage />    → full page listing, no "View All" button
 */
const Blogs = ({ isPage = false }) => {
    // Blog whose "Read More" was clicked — full articles aren't published yet
    const [comingSoon, setComingSoon] = useState(null);

    useEffect(() => {
        if (isPage) window.scrollTo(0, 0);
    }, [isPage]);

    // Close the popup with Esc
    useEffect(() => {
        if (!comingSoon) return;
        const onKey = (e) => e.key === "Escape" && setComingSoon(null);
        window.addEventListener("keydown", onKey);
        return () => window.removeEventListener("keydown", onKey);
    }, [comingSoon]);

    const blogs = [
        {
            id: 1,
            title: "Milestone in Kidney Care with 200 Successful Dialysis Sessions",
            description: "A major step forward in kidney health has been achieved with 200 successful dialysis treatments, highlighting the importance of advanced care and patient support.",

            image: kidneyCareImg,
        },
        {
            id: 2,
            title: "AI in Healthcare Revolution",
            description: "Artificial Intelligence is transforming the healthcare sector with faster diagnoses and personalized treatment plans.",
            image: aiHealthcareImg,
        },
        {
            id: 3,
            title: "Future of Telemedicine",
            description: "Telemedicine is bridging gaps between doctors and patients, ensuring healthcare is accessible anytime, anywhere.",
            image: telemedicineImg,
        },
    ];

    return (
        <section className={`${styles.blogsSection} ${isPage ? styles.blogsPage : ""}`}>
          <div className={styles.inner}>
            <div className={styles.header}>
                {isPage ? (
                    <div>
                        <h1 className={styles.mainHeadingTitle}>Our Blogs</h1>
                        <p className={styles.pageSubtitle}>
                            Insights, updates, and stories on kidney health and dialysis care.
                        </p>
                    </div>
                ) : (
                    <>
                        <h2 className={styles.mainHeadingTitle}>Latest Blogs</h2>
                        <Link to="/blogs" className={`os-btn os-btn--primary ${styles.viewAllBtn}`}>
                            View All Blogs
                        </Link>
                    </>
                )}
            </div>

            <div className={styles.blogGrid}>
                {blogs.map((blog) => (
                    <div key={blog.id} className={styles.blogCard}>
                        <img src={blog.image} alt={blog.title} className={styles.blogImage} />
                        <div className={styles.blogContent}>
                            <h3 className={styles.blogTitle}>{blog.title}</h3>
                            <p className={styles.blogDesc}>{blog.description}</p>
                            <button
                                type="button"
                                className={`os-btn os-btn--primary os-btn--sm ${styles.readMoreBtn}`}
                                onClick={() => setComingSoon(blog)}
                            >
                                Read More
                            </button>
                        </div>
                    </div>
                ))}
            </div>
          </div>

          {/* "Coming soon" popup */}
          {comingSoon && (
            <div className={styles.modalOverlay} onClick={() => setComingSoon(null)}>
                <div
                    className={styles.modal}
                    role="dialog"
                    aria-modal="true"
                    aria-label="Coming soon"
                    onClick={(e) => e.stopPropagation()}
                >
                    <button
                        type="button"
                        className={styles.modalClose}
                        aria-label="Close"
                        onClick={() => setComingSoon(null)}
                        autoFocus
                    >
                        <X size={18} />
                    </button>
                    <p className={styles.modalText}>This article is coming soon - stay tuned!</p>
                </div>
            </div>
          )}
        </section>
    );
};

export default Blogs;
