@extends('public.layout')
@section('title', 'About')
@section('custom-css')

@endsection
@section('body')

    <!-- bradcam_area_start  -->
    <div class="bradcam_area breadcam_bg bradcam_overlay">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>About Us</h3>
                        <p><a href="{{url('/')}}">Home /</a> About</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->

    <!-- our mission section start -->
      <div class="our__mission__area">
        <div class="container">
           <div class="row">
            <div class="col-md-7 d-flex align-items-center">
                <div class="our__mission-left">
                    <h5>Our Mission</h5>
                    <h2 class="text-secondary">Filling the Gap</h2>
                    <p>
                    At Osmossion, our mission is to provide exceptional dialysis care to our patients by delivering compassionate and personalized treatment plans. Our team of highly skilled medical professionals is committed to ensuring that each patient receives the highest level of care in a comfortable and safe environment. We strive to stay at the forefront of advancements in dialysis technology and treatment methods to ensure that our patients receive the most innovative and effective care possible.
                    </p>
                </div>
            </div>
            <div class="col-md-5">
            <div class="our__mission-right">
                <img class="img-fluid" src="{{asset('assets/img/about/2.jpg')}}" alt="mision-img">
            </div>
            </div>
           </div>
        </div>
      </div>
    <!-- our mission section ends -->

    <!-- our vision section start -->
    <div class="our__vision__area">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-lg-5 order-2 order-lg-1">
                    <div class="our__vision-left">
                      <img class="img-fluid" src="{{asset('assets/img/about/mission.png')}}" alt="vision-img">
                    </div>
                </div>
                <div class="col-md-7 col-lg-7 d-flex align-items-center order-1 order-lg-2">
                    <div class="our__vision-right">
                        <h5>Our Vision</h5>
                        <h2 class="text-secondary">Easy availability of kidney care</h2>
                        <p>
                        The kidneys are such an important part of our body, responsible for filtering waste and excess fluids from our blood. When they aren't functioning properly, it can have a huge impact on our overall health. That's why it's so important to raise awareness about kidney health and to promote healthy habits that can keep our kidneys functioning at their best.
                        Through your work, you are helping people understand the importance of kidney health and how they can take action to prevent kidney disease and other related issues.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- our vision section ends -->

    <!-- quality policy section start -->
    <div class="quality__policy__area">
        <div class="container">
            <h3 class="text-center text-secondary">Quality Policy</h3>
           <div class="quality__policy-boxes">
           <div class="row">
                <div class="col-md-3 col-6">
                    <div class="quality__policy-small">
                        <img src="{{asset('assets/img/quality-icons/care.png')}}" alt="quality-1">
                         <h4>Care and Compassion</h4>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="quality__policy-small">
                        <img src="{{asset('assets/img/quality-icons/clean.png')}}" alt="quality-1">
                         <h4>Clean and Safe Environment</h4>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="quality__policy-small">
                         <img src="{{asset('assets/img/quality-icons/continuous.png')}}" alt="quality-1">
                         <h4>Continuous improvement</h4>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="quality__policy-small">
                          <img src="{{asset('assets/img/quality-icons/efficient.png')}}" alt="quality-1">
                         <h4>Culture of efficient use</h4>
                    </div>
                </div>
            </div>
           </div>
        </div>
    </div>
    <!-- quality policy section ends -->

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