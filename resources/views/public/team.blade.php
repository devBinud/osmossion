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
                        <h3>Our Team</h3>
                        <p><a href="{{url('/')}}">Home /</a> Team</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->
   
    <!-- expert_doctors_area_start -->
        <div class="expert_doctors_area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="doctors_title mb-55">
                            <!-- <h3>Our Team</h3> -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-md-3 col-6">
                                <div class="single_expert">
                                    <div class="expert_thumb">
                                        <img src="{{asset('assets/img/experts/1.jpg')}}" alt="">
                                    </div>
                                    <div class="experts_name text-center">
                                        <h3>Mirazul Alom</h3>
                                        <span>Neurologist</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                            <div class="single_expert">
                                <div class="expert_thumb">
                                    <img src="{{asset('assets/img/experts/2.png')}}" alt="">
                                </div>
                                <div class="experts_name text-center">
                                    <h3>Mirazul Alom</h3>
                                    <span>Neurologist</span>
                                </div>
                            </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="single_expert">
                                    <div class="expert_thumb">
                                        <img src="{{asset('assets/img/experts/3.png')}}" alt="">
                                    </div>
                                    <div class="experts_name text-center">
                                        <h3>Mirazul Alom</h3>
                                        <span>Neurologist</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="single_expert">
                                    <div class="expert_thumb">
                                        <img src="{{asset('assets/img/experts/1.jpg')}}" alt="">
                                    </div>
                                    <div class="experts_name text-center">
                                        <h3>Mirazul Alom</h3>
                                        <span>Neurologist</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mt-lg-4 col-6">
                                <div class="single_expert">
                                    <div class="expert_thumb">
                                        <img src="{{asset('assets/img/experts/3.png')}}" alt="">
                                    </div>
                                    <div class="experts_name text-center">
                                        <h3>Mirazul Alom</h3>
                                        <span>Neurologist</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mt-lg-4 col-6">
                                <div class="single_expert">
                                    <div class="expert_thumb">
                                        <img src="{{asset('assets/img/experts/2.png')}}" alt="">
                                    </div>
                                    <div class="experts_name text-center">
                                        <h3>Mirazuddl Alom</h3>
                                        <span>Neurologist</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mt-lg-4 col-6">
                                <div class="single_expert">
                                    <div class="expert_thumb">
                                        <img src="{{asset('assets/img/experts/3.png')}}" alt="">
                                    </div>
                                    <div class="experts_name text-center">
                                        <h3>Mirazul Alom</h3>
                                        <span>Neurologist</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mt-lg-4 col-6">
                                <div class="single_expert">
                                    <div class="expert_thumb">
                                        <img src="{{asset('assets/img/experts/2.png')}}" alt="">
                                    </div>
                                    <div class="experts_name text-center">
                                        <h3>Mirazul Alom</h3>
                                        <span>Neurologist</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- expert_doctors_area_end -->



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