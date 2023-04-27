@extends('public.layout')
@section('title', 'Home')
@section('custom-css')
@endsection
@section('body')
 
        <!-- slider_area_start -->
        <div class="slider_area">
                <div class="slider_active owl-carousel">
                    <div class="single_slider  d-flex align-items-center slider_bg_2">
                        <div class="container">
                            <div class="row">
                                    <div class="col-md-6">
                                        <div class="slider_text ">
                                            <h6>Osmossion provides</h6>
                                            <h3> <span>Health care</span> <br>
                                                For Your Family </h3>
                                            <p>In healthcare sector, service excellence is the facility of <br> the hospital as
                                                healthcare service provider to consistently.</p>
                                            <a href="#service__area" class="boxed-btn3 d-none d-sm-block" style="width:50%">Check Our Services</a>
                                            <a href="{{url('/appointment')}}" class="boxed-btn3 d-block d-sm-none" style="width:70%">Book an Appointment</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="{{asset('assets/img/hero/2.png')}}" class="img-fluid" alt="hero-img">
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_slider  d-flex align-items-center slider_bg_1">
                        <div class="container">
                            <div class="row">
                                    <div class="col-md-6">
                                                <div class="slider_text ">
                                                    <h6>Osmossion provides</h6>
                                                    <h3> <span>Health Care</span> <br>
                                                    For your family </h3>
                                                    <p>In healthcare sector, service excellence is the facility of <br> the hospital as
                                                        healthcare service provider to consistently.</p>
                                                        <a href="#service__area" class="boxed-btn3 d-none d-sm-block" style="width:50%">Check Our Services</a>
                                                        <a href="{{url('/appointment')}}" class="boxed-btn3 d-block d-sm-none" style="width:70%">Book an Appointment</a>
                                                </div>
                                    </div>
                                    <div class="col-md-6">
                                       <img src="{{asset('assets/img/hero/1.png')}}" class="img-fluid" alt="hero-img">
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_slider  d-flex align-items-center slider_bg_2">
                        <div class="container">
                            <div class="row">
                                    <div class="col-md-6">
                                        <div class="slider_text ">
                                           <h6>Osmossion provides</h6>
                                            <h3> <span>Health care</span> <br>
                                                For Your Family </h3>
                                            <p>In healthcare sector, service excellence is the facility of <br> the hospital as
                                                healthcare service provider to consistently.</p>
                                                <a href="#service__area" class="boxed-btn3 d-none d-sm-block" style="width:50%">Check Our Services</a>
                                                <a href="{{url('/appointment')}}" class="boxed-btn3 d-block d-sm-none" style="width:70%">Book an Appointment</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="{{asset('assets/img/hero/2.png')}}" class="img-fluid" alt="hero-img">
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    <!-- slider_area_end -->

   
    <!-- service_area_start -->
    <div id="service__area" class="service_area">
        <div class="container p-0">
            <div class="row no-gutters">
                <div class="col-xl-4 col-md-4">
                    <div class="single_service">
                        <div class="icon">
                            <i class="flaticon-electrocardiogram"></i>
                        </div>
                        <h3>Hospitality</h3>
                        <p>Clinical excellence must be the priority for any health care service provider.</p>
                        <!-- <a href="#" class="boxed-btn3-white">Apply For a Bed</a> -->
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_service">
                        <div class="icon">
                            <i class="flaticon-emergency-call"></i>
                        </div>
                        <h3>Emergency Care</h3>
                        <p>Clinical excellence must be the priority for any health care service provider.</p>
                        <!-- <a href="#" class="boxed-btn3-white">+10 672 356 3567</a> -->
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_service">
                        <div class="icon">
                            <i class="flaticon-first-aid-kit"></i>
                        </div>
                        <h3>Chamber Service</h3>
                        <p>Clinical excellence must be the priority for any health care service provider.</p>
                        <!-- <a href="#" class="boxed-btn3-white">Make an Appointment</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service_area_end -->

    <!-- welcome_docmed_area_start -->
    <div class="welcome_docmed_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="welcome_thumb">
                        <div class="thumb_1">
                            <img src="{{asset('assets/img/about/about-1.jpg')}}" alt="">
                        </div>
                        <div class="thumb_2">
                            <img src="{{asset('assets/img/about/about-2.jpg')}}" alt="">
                        </div>
                    </div>
                    <!-- <img src="{{asset('assets/img/about/1.g')}}" alt=""> -->

                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="welcome_docmed_info">
                        <h2>Welcome to Osmossion</h2>
                        <h3>Best Care For Your <br>
                                Good Health</h3>
                        <p>We offer trained healthcare professionals who will come to your home to perform the treatment, ensuring that you receive the necessary medical attention and support. </p>
                        <ul>
                            <li> <i class="flaticon-right"></i>State-of-the-art facilities for providing top-notch dialysis treatment .</li>
                            <li> <i class="flaticon-right"></i>A team of experienced and dedicated doctors and nurses, ensuring personalized care for each patient .
                            </li>
                            <li> <i class="flaticon-right"></i>Emphasis on patient comfort with amenities such as comfortable seating, entertainment options, and refreshments during treatment.
                            </li>
                        </ul>
                        <a href="#" class="boxed-btn3-white-2">Know More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- welcome_docmed_area_end -->
    <!-- business_expert_area_start  -->
            <div class="business_expert_area" style="margin-top:0px">
                    <div class="business_tabs_area">
                        <div class="container">
                            <div class="row">
                            <div class="col-xl-12">
                                <div class="doctors_title mb-55">
                                    <h2 class="text-center">Elevating the quality of life</h2>
                                    <p class="text-center">Ensuring comfort, care and safety at every step of your dialysis journey.</p>
                                </div>
                            </div>
                                <div class="col-xl-12">
                                    <ul class="nav" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                                        aria-selected="true"><img class="mr-2" src="{{asset('assets/img/service-icons/1.png')}}" alt="" width="30"> Home Dialysis</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="hospital-tab" data-toggle="tab" href="#hospital" role="tab" aria-controls="hospital"
                                        aria-selected="false"><img class="mr-2" src="{{asset('assets/img/service-icons/2.png')}}" alt="" width="30"> In-Hospital Dialysis</a>
                                        </li>

                                        <li class="nav-item">
                                          
                                            <a class="nav-link" id="oncall-tab" data-toggle="tab" href="#oncall" role="tab" aria-controls="oncall"
                                        aria-selected="false">  <img class="mr-2" src="{{asset('assets/img/service-icons/3.png')}}" alt="" width="30">Dialysis on Call</a>
                                        </li>
                                    
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="container">
                        <div class="border_bottom">
                                <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home">
                                            
                                                <div class="row align-items-start">
                                                        <div class="col-xl-7 col-md-7">
                                                            <div class="business_info">
                                                                <h3>Home Dialysis</h3>
                                                                <div class="home-dialysis">
                                                                    <p>
                                                                <strong>Looking for a convenient and effective way to manage kidney failure ?</strong> <br> We offer trained healthcare professionals who will come to your home to perform the treatment, ensuring that you receive the necessary medical attention and support. Our team provides ongoing support and education to help you manage your condition and improve your quality of life.
                                                                    </p>
                                                                <div class="small-dialysis-boxes">
                                                                    <div class="row">
                                                                        <div class="col-lg-4">
                                                                            <div class="small-dialysis-box">
                                                                                <img src="{{asset('assets/img/icons/check.png')}}" alt="reliable-equipment">
                                                                                <h4>Reliable equipment</h4>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-4">
                                                                            <div class="small-dialysis-box">
                                                                            <img src="{{asset('assets/img/icons/24-hour.png')}}" alt="patient-care">
                                                                                <h4>24/7 Patient care</h4>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-4">
                                                                            <div class="small-dialysis-box">
                                                                            <img src="{{asset('assets/img/icons/technician.png')}}" alt="technician">
                                                                                <h4>Best technicians</h4>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-5 col-md-5">
                                                            <div class="business_thumb">
                                                                <img src="{{asset('assets/img/dialysis/home-dialysis.jpg')}}" alt="home-dialysis">
                                                            </div>
                                                        </div>
                                                    </div>
                                        </div>
                                        <div class="tab-pane fade" id="hospital" role="tabpanel" aria-labelledby="hospital">
                                                <div class="row align-items-start">
                                                        <div class="col-xl-7 col-md-7">
                                                            <div class="business_info">
                                                            <h3>In-Hospital Dialysis</h3>
                                                                <div class="home-dialysis">
                                                                    <p>
                                                                <strong>Looking for a convenient and effective way to manage kidney failure ?</strong> <br> We offer trained healthcare professionals who will come to your home to perform the treatment, ensuring that you receive the necessary medical attention and support. Our team provides ongoing support and education to help you manage your condition and improve your quality of life.
                                                                    </p>
                                                                <div class="small-dialysis-boxes">
                                                                    <div class="row">
                                                                        <div class="col-lg-4">
                                                                            <div class="small-dialysis-box">
                                                                                <img src="{{asset('assets/img/icons/kidney.png')}}" alt="reliable-equipment">
                                                                                <h4>Our Best Nephrologists</h4>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-4">
                                                                            <div class="small-dialysis-box">
                                                                            <img src="{{asset('assets/img/icons/surgery-room.png')}}" alt="patient-care">
                                                                                <h4>High Tech Surgery Room</h4>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-4">
                                                                            <div class="small-dialysis-box">
                                                                            <img src="{{asset('assets/img/icons/management.png')}}" alt="technician">
                                                                                <h4>24/7 Management care </h4>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-5 col-md-5">
                                                            <div class="business_thumb">
                                                                <img src="{{asset('assets/img/dialysis/hospital-dialysis.jpg')}}" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                        </div>
                                        <div class="tab-pane fade" id="oncall" role="tabpanel" aria-labelledby="oncall">
                                                <div class="row align-items-center">
                                                        <div class="col-xl-7 col-md-7">
                                                            <div class="business_info">
                                                                <h3>Dialysis on Call </h3>
                                                                <div class="home-dialysis">
                                                                    <p>
                                                                <strong>Looking for a convenient and effective way to manage kidney failure ?</strong> <br> We offer trained healthcare professionals who will come to your home to perform the treatment, ensuring that you receive the necessary medical attention and support. Our team provides ongoing support and education to help you manage your condition and improve your quality of life.
                                                                    </p>
                                                                <div class="small-dialysis-boxes">
                                                                    <div class="row">
                                                                        <div class="col-lg-4">
                                                                            <div class="small-dialysis-box">
                                                                                <img src="{{asset('assets/img/icons/real-time.png')}}" alt="reliable-equipment">
                                                                                <h4>Real Time Reporting & Service</h4>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-4">
                                                                            <div class="small-dialysis-box">
                                                                            <img src="{{asset('assets/img/icons/medical-staff.png')}}" alt="patient-care">
                                                                                <h4>Emergency Medical Staff Support</h4>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-4">
                                                                            <div class="small-dialysis-box">
                                                                            <img src="{{asset('assets/img/icons/24-hour.png')}}" alt="technician">
                                                                                <h4>24/7 On-Call care & Service </h4>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-5 col-md-5">
                                                            <div class="business_thumb">
                                                                <img src="{{asset('assets/img/dialysis/on-call-dialysis.jpg')}}" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                        </div>
                                    </div>
                        </div>
                    </div>
            </div>
    <!-- business_expert_area_end  -->

    <!--  Call To Action Section section start-->
        <section id="call-to-action" class="call-to-action overlay_skyblue">
            <div class="container" data-aos="zoom-out">
            <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <lord-icon src="https://cdn.lordicon.com/ssvybplt.json" trigger="loop" colors="primary:#fff" style="width:50px;height:50px" data-aos="fade-in" data-aos-delay="200" class="aos-init aos-animate">
                                    </lord-icon>
                    <h3 class="mt-4">24/7 Call Assistance for Your Peace of Mind</h3>
                    <p>
                    We understand that emergencies can happen at any time, which is why we offer 24/7 call assistance for all our services. Our trained professionals are ready to assist you anytime, anywhere, ensuring your peace of mind and timely access to healthcare services.
                    </p>
                    <a href="#" class="boxed-btn3-white" style="border-radius:20px"><i class="fa fa-phone mr-2"></i>+91 9876543210</a>

                </div>
            </div>

           </div>
        </section>
    <!-- End Call To Action Section -->

    <!-- expert_doctors_area_start -->
        <div class="expert_doctors_area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="doctors_title mb-55">
                            <h2>Our Team Members</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="expert_active owl-carousel">
                            <div class="single_expert">
                                <div class="expert_thumb">
                                    <img src="{{asset('assets/img/experts/1.jpg')}}" alt="">
                                </div>
                                <div class="experts_name text-center">
                                    <h3>Rajesh Kumer</h3>
                                    <span>Nephrologists</span>
                                </div>
                            </div>
                            <div class="single_expert">
                                <div class="expert_thumb">
                                    <img src="{{asset('assets/img/experts/3.png')}}" alt="">
                                </div>
                                <div class="experts_name text-center">
                                    <h3>Rakesh Bhardawaj</h3>
                                    <span>Nephrologists</span>
                                </div>
                            </div>
                            <div class="single_expert">
                                <div class="expert_thumb">
                                    <img src="{{asset('assets/img/experts/2.png')}}" alt="">
                                </div>
                                <div class="experts_name text-center">
                                    <h3>Sunny Singh</h3>
                                    <span>Nephrologists</span>
                                </div>
                            </div>
                            <div class="single_expert">
                                <div class="expert_thumb">
                                    <img src="{{asset('assets/img/experts/3.png')}}" alt="">
                                </div>
                                <div class="experts_name text-center">
                                    <h3>Mirazul Alom</h3>
                                    <span>Nephrologists</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- expert_doctors_area_end -->

    <!-- testmonial_area_start -->
    <div class="testmonial_area">
        <div class="testmonial_active owl-carousel">
            <div class="single-testmonial testmonial_bg_1 overlay2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-10 offset-xl-1">
                            <div class="testmonial_info text-center">
                                <div class="quote">
                                    <i class="flaticon-straight-quotes"></i>
                                </div>
                                <p>
                                I received dialysis treatment at Osmossion and was impressed with the top-notch facilities and compassionate staff. 
                                They explained everything in detail, answered my questions, and made sure I was comfortable throughout my treatment. 
                                highly recommend this hospital to anyone in need of dialysis treatment. Thanks for making a difference in my life.
                                </p>
                                <div class="testmonial_author">
                                    <h4>Rajesh Bhat</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-testmonial testmonial_bg_2 overlay2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-10 offset-xl-1">
                            <div class="testmonial_info text-center">
                                <div class="quote">
                                    <i class="flaticon-straight-quotes"></i>
                                </div>
                                <p>
                                I received dialysis treatment at Osmossion and was impressed with the top-notch facilities and compassionate staff. 
                                They explained everything in detail, answered my questions, and made sure I was comfortable throughout my treatment. 
                                highly recommend this hospital to anyone in need of dialysis treatment. Thanks for making a difference in my life.
                                </p>
                                <div class="testmonial_author">
                                    <h4>Upasana Singh</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-testmonial testmonial_bg_1 overlay2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-10 offset-xl-1">
                            <div class="testmonial_info text-center">
                                <div class="quote">
                                    <i class="flaticon-straight-quotes"></i>
                                </div>
                                <p>
                                I received dialysis treatment at Osmossion and was impressed with the top-notch facilities and compassionate staff. 
                                They explained everything in detail, answered my questions, and made sure I was comfortable throughout my treatment. 
                                highly recommend this hospital to anyone in need of dialysis treatment. Thanks for making a difference in my life.
                                </p>
                                <div class="testmonial_author">
                                    <h4>Rashna Bhardwaj</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testmonial_area_end -->

    <!--  Recent Blog Posts Section  -->
      <section id="recent-posts" class="recent-posts" style="background:#F5FBFF!important">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
            <h2>Recent Blog Posts</h2>
            <p>Check our latest blogpost updated by <strong>Osmosis</strong></p>
            </div>

            <div class="row gy-4">

            <div class="col-xl-4 col-md-6 mt-2 mt-lg-0">
                <article>

                <div class="post-img">
                    <img src="{{asset('assets/img/blog/blog-1.jpg')}}" alt="" class="img-fluid">
                </div>

                <p class="post-category">Dialysis</p>

                <h2 class="title">
                    <a href="{{url('/blog-details')}}">Best Dialysis services provide by us</a>
                </h2>

                <div class="d-flex align-items-center">
                    <img src="{{asset('assets/img/blog/author.png')}}" alt="" class="img-fluid post-author-img flex-shrink-0">
                    <div class="post-meta">
                    <p class="post-author">Arjun Dasgupta</p>
                    <p class="post-date">
                        <time datetime="2023-03-01">March 1, 2023</time>
                    </p>
                    </div>
                </div>

                </article>
            </div><!-- End post list item -->

            <div class="col-xl-4 col-md-6 mt-2 mt-lg-0">
                <article>

                <div class="post-img">
                    <img src="{{asset('assets/img/blog/blog-2.jpg')}}" alt="" class="img-fluid">
                </div>

                <p class="post-category">Home Healthcare</p>

                <h2 class="title">
                    <a href="{{url('/blog-details')}}">Benefits of our Home Healthcare</a>
                </h2>

                <div class="d-flex align-items-center">
                    <img src="{{asset('assets/img/blog/author.png')}}" alt="" class="img-fluid post-author-img flex-shrink-0">
                    <div class="post-meta">
                    <p class="post-author">Abhisekh Mayer</p>
                    <p class="post-date">
                        <time datetime="2023-02-15">Feb 15, 2023</time>
                    </p>
                    </div>
                </div>

                </article>
            </div><!-- End post list item -->

            <div class="col-xl-4 col-md-6 mt-2 mt-lg-0">
                <article>

                <div class="post-img">
                    <img src="{{asset('assets/img/blog/blog-3.jpg')}}" alt="" class="img-fluid">
                </div>

                <p class="post-category">Lab Test</p>

                <h2 class="title">
                    <a href="{{url('/blog-details')}}">How Lab test works in Osmossion</a>
                </h2>

                <div class="d-flex align-items-center">
                    <img src="{{asset('assets/img/blog/author.png')}}" alt="" class="img-fluid post-author-img flex-shrink-0">
                    <div class="post-meta">
                    <p class="post-author">Mannu Singh</p>
                    <p class="post-date">
                        <time datetime="2023-01-22">Jan 22, 2023</time>
                    </p>
                    </div>
                </div>

                </article>
            </div><!-- End post list item -->

            </div><!-- End recent posts list -->

        </div>
    </section><!-- End Recent Blog Posts Section -->

   <!-- contact section start -->
   <div id="contact" class="contact">
        <div class="container">
            <div class="row">
                    <div class="col-xl-12">
                        <div class="contact_title mb-55">
                            <h2>Contact us</h2>
                            <p>Contact us for more information</p>
                        </div>
                    </div>
            </div>

            <div class="contact__us__wrapper">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="contact-form">
                            <form action="">
                                <div class="col-xl-12">
                                    <input type="text"  placeholder="Name">
                                </div>
                                <div class="col-xl-12">
                                    <input type="text"  placeholder="Phone No">
                                </div>
                                <div class="col-xl-12">
                                    <input type="email"  placeholder="Email Address">
                                </div>
                                <div class="col-xl-12">
                                    <input type="address"  placeholder="Physical Address" style="height:100px">
                                </div>
                                <div class="col-xl-12">
                                    <button type="submit" class="boxed-btn3" style="padding: 10px 30px!important;">Send us </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <img class="img-fluid" src="{{asset('assets/img/contact/contact.jpg')}}" alt="contact-img">
                    </div>
                </div>
            </div>
        </div>
   </div>
   <!-- contact section end -->
    <!-- Emergency_contact end -->
 

    <!-- form itself end-->
           <form id="test-form" class="white-popup-block mfp-hide">
                <div class="popup_box ">
                    <div class="popup_inner">
                        <h3>Make an Appointment</h3>
                        <form action="#">
                            <div class="row">
                                <div class="col-xl-6">
                                    <input type="text"  placeholder="Name">
                                </div>
                                <div class="col-xl-6">
                                    <input type="text"  placeholder="Phone No">
                                </div>
                                <div class="col-xl-6">
                                    <input type="text"  placeholder="Age">
                                </div>
                                <div class="col-xl-6">
                                    <input id="datepicker" placeholder="Appointment Date">
                                </div>
                                <div class="col-xl-12">
                                    <input type="text"  placeholder="Address">
                                </div>
                                <div class="col-xl-12">
                                    <button type="submit" class="boxed-btn3">Confirm Booking</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
          </form>
    <!-- form itself end -->

@endsection

@section('custom-js')

@endsection