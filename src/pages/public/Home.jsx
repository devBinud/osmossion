import React, { useEffect } from 'react';
// import Banner from '../../components/banner/Banners.jsx';
import HeroSection from '../../components/herosection/HeroSection.jsx';
import About from '../../components/aboutus/About.jsx';
// import MeetTheFounder from '../../components/meetthefounder/MeetTheFounder.jsx';
import Categories from '../../components/categories/Categories.jsx';
import CTAHome from '../../components/cta/CTAHome.jsx';
import ContactUs from '../../components/contactus/Contact.jsx';
import WhatsNew from '../../components/whatsNew/WhatsNew.js'
import FAQs from "../../components/whatsNew/FAQs.js"
import Blogs from "../../components/blogs/Blogs.js"
import KidneyHealthEducation from "../../components/kidneyhealtheducation/KidneyHealthEducation.js"

const PublicHome = () => {
  useEffect(() => {
    window.scrollTo(0, 0);
  }, []);

  return (
    <div>
      <HeroSection />
      <Categories />
      <About />
      <KidneyHealthEducation/>
      {/* <CenterOfExcellence /> */}
      <WhatsNew />
      <CTAHome />
      <Blogs />
      <FAQs />
      <ContactUs />
    </div>
  );
};

export default PublicHome;
