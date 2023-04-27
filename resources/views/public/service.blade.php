@extends('public.layout')
@section('title', 'Service')
@section('custom-css')

@endsection
@section('body')

    <!-- bradcam_area_start  -->
    <div class="bradcam_area breadcam_bg bradcam_overlay">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>Our Services</h3>
                        <p><a href="{{url('/')}}">Home /</a> Service</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->


    <!-- business_expert_area_start  -->
    <div class="business_expert_area" style="margin-top:30px">
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
                                        aria-selected="true">Home Dialysis</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                                        aria-selected="false">In-Hospital Dialysis</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
                                        aria-selected="false">Dialysis on Call</a>
                                        </li>
                                    
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="container">
                        <div class="border_bottom">
                                <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                            
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
                                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
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
                                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
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