@extends('public.layout')
@section('title', 'Contact')
@section('custom-css')

@endsection
@section('body')

    <!-- bradcam_area_start  -->
    <div class="bradcam_area breadcam_bg bradcam_overlay">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>Our Contact</h3>
                        <p><a href="{{url('/')}}">Home /</a> Contact</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->


  <!-- contact section start -->
  <div id="contact" class="contact">
        <div class="container">
            <div class="row">
                    <div class="col-xl-12">
                        <div class="contact_title mb-55">
                            <h2>Contact us for more information</h2>
                            <p class="text-secondary">
                            If you have any questions or would like to schedule an appointment, please don't hesitate to contact us.
                            </p>
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