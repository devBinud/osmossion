import React, { useState } from "react";
import { Plus } from "lucide-react";
import styles from "./faqs.module.css";

const faqs = [
    {
        question: "What dialysis treatments do you provide?",
        answer:
            "We offer both hemodialysis and peritoneal dialysis, along with advanced care plans tailored to each patient’s medical needs.",
    },
    {
        question: "How can I book a dialysis session?",
        answer:
            "Call us on +91 69017 40874, use the “Book Appointment” button on this website, message us on WhatsApp, or visit our reception desk.",
    },
    {
        question: "Do you provide emergency dialysis services?",
        answer:
            "Yes, we provide 24/7 emergency dialysis support for patients in urgent need of treatment.",
    },
    {
        question: "Can I continue my treatment if I travel?",
        answer:
            "Yes, we assist patients with travel dialysis arrangements and coordinate with partner centers so your treatment continues smoothly.",
    },
    {
        question: "Do you offer diet and lifestyle guidance?",
        answer:
            "Absolutely. Our team includes dietitians who provide personalized nutrition and lifestyle plans to support your dialysis care.",
    },
];

const FAQs = () => {
    // First question open by default so the section doesn't look empty
    const [openIndex, setOpenIndex] = useState(0);

    const toggleFAQ = (index) => {
        setOpenIndex(openIndex === index ? null : index);
    };

    return (
        <section className={styles.section}>
            <div className={styles.container}>
                <h2 className={styles.title}>Frequently Asked Questions</h2>
                <p className={styles.description}>
                    Find answers to common questions about dialysis treatments, scheduling,
                    patient care, and support services at our center.
                </p>

                {/* Accordion */}
                <div className={styles.faqList}>
                    {faqs.map((faq, index) => {
                        const isOpen = openIndex === index;
                        return (
                            <div
                                key={faq.question}
                                className={`${styles.faqItem} ${isOpen ? styles.faqItemOpen : ""}`}
                            >
                                <button
                                    type="button"
                                    onClick={() => toggleFAQ(index)}
                                    className={styles.faqButton}
                                    aria-expanded={isOpen}
                                    aria-controls={`faq-answer-${index}`}
                                    id={`faq-question-${index}`}
                                >
                                    <span className={styles.question}>{faq.question}</span>
                                    <span className={styles.toggle} aria-hidden="true">
                                        <Plus size={18} />
                                    </span>
                                </button>

                                <div
                                    id={`faq-answer-${index}`}
                                    role="region"
                                    aria-labelledby={`faq-question-${index}`}
                                    className={styles.answerWrap}
                                >
                                    <div className={styles.answerInner}>
                                        <p className={styles.answer}>{faq.answer}</p>
                                    </div>
                                </div>
                            </div>
                        );
                    })}
                </div>
            </div>
        </section>
    );
};

export default FAQs;
