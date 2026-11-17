import React from "react";
import styles from "./productSlider.module.css";
import { FaArrowRight } from 'react-icons/fa';
import { FaChevronLeft, FaChevronRight } from "react-icons/fa";
import { Link } from "react-router-dom";

import product1 from "../../assets/products/2.jpg";
import product2 from "../../assets/products/2.jpg";
import product3 from "../../assets/products/2.jpg";
import product4 from "../../assets/products/2.jpg";
import product5 from "../../assets/products/2.jpg";
import product6 from "../../assets/products/2.jpg";
import product7 from "../../assets/products/2.jpg";
import product8 from "../../assets/products/2.jpg";
import product9 from "../../assets/products/2.jpg";

const products = [
  {
    id: 1,
    name: "Herbal Facial Pack",
    description: "Brightens skin | Tightens pores | Natural ingredients",
    mrp: "₹699",
    price: "₹499",
    image: product1,
  },
  {
    id: 2,
    name: "Natural Shampoo",
    description: "Strengthens hair | Sulfate-free | Adds shine",
    mrp: "₹449",
    price: "₹299",
    image: product2,
  },
  {
    id: 3,
    name: "Handmade Soap",
    description: "Gentle cleansing | Essential oils | No chemicals",
    mrp: "₹299",
    price: "₹199",
    image: product3,
  },
  {
    id: 4,
    name: "Essential Oils",
    description: "Relaxing aroma | 100% pure | Therapeutic grade",
    mrp: "₹799",
    price: "₹599",
    image: product4,
  },
  {
    id: 5,
    name: "Face Cream",
    description: "Daily glow | Non-greasy | SPF 15",
    mrp: "₹549",
    price: "₹399",
    image: product5,
  },
  {
    id: 6,
    name: "Aloe Vera Gel",
    description: "Soothes skin | Treats sunburn | Hydrating",
    mrp: "₹399",
    price: "₹249",
    image: product6,
  },
  {
    id: 7,
    name: "Rose Water Toner",
    description: "Tightens pores | pH balanced | Refreshing",
    mrp: "₹349",
    price: "₹199",
    image: product7,
  },
  {
    id: 8,
    name: "Charcoal Face Wash",
    description: "Deep cleanse | Removes oil | Fresh feel",
    mrp: "₹499",
    price: "₹349",
    image: product8,
  },
  {
    id: 9,
    name: "Turmeric Night Cream",
    description: "Reduces spots | Smooth texture | Natural glow",
    mrp: "₹649",
    price: "₹449",
    image: product9,
  },
];

const ProductSlider = () => {
  const scroll = (dir) => {
    const slider = document.getElementById("productSliderScroll");
    slider.scrollBy({ left: dir === "left" ? -320 : 320, behavior: "smooth" });
  };

  return (
    <div className={styles.sliderContainer}>
      <div className={styles.titleWrapper}>
        <h3 className={styles.title}>Shop Our Products</h3>
        <p className={styles.productinstruction}>
          Swipe Right to see products
          <span className={styles.arrow}>
            <FaArrowRight />
          </span>
        </p>
      </div>

      <div className={styles.sliderWrapper}>
        <button className={styles.arrowLeft} onClick={() => scroll("left")}>
          <FaChevronLeft />
        </button>

        <div id="productSliderScroll" className={styles.slider}>
          {products.map((item) => (
            <div key={item.id} className={styles.card}>
              <Link to="/product-details" className={styles.clickableBox}>
                <img src={item.image} alt={item.name} className={styles.image} />
                <div className={styles.cardBody}>
                  <h4 className={styles.productName}>{item.name}</h4>
                  <p className={styles.description}>{item.description}</p>
                  <div className={styles.priceBox}>
                    <span className={styles.discountedPrice}>MRP {item.price}</span>
                    <span className={styles.originalPrice}>MRP {item.mrp}</span>
                  </div>
                </div>
              </Link>
              <a
                href={`https://wa.me/916901740874?text=${encodeURIComponent(
                  `*Hello Team Mrittika Naturals,*\n\n_I’m interested in exploring one of your natural beauty products:_\n\n✨ Product: ${item.name}\n💰 Price: ₹${item.price}\n\n_Could you please share more details about this product, including availability and booking steps?_\n\n*Looking forward to your response.*`
                )}`}
                className={styles.whatsapp}
                target="_blank"
                rel="noopener noreferrer"
              >
                Book via WhatsApp
              </a>
            </div>
          ))}
        </div>

        <button className={styles.arrowRight} onClick={() => scroll("right")}>
          <FaChevronRight />
        </button>
      </div>
    </div>
  );
};

export default ProductSlider;
