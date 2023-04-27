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
                        <h3>Book an Appointment</h3>
                        <p><a href="{{url('/')}}">Home /</a> Appointment</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->

      <!-- appointment form -->

     <div class="appointment__form">
        <div class="container">
              <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                         <label for="name">Name  <span class="text-danger">*</span></label>
                          <input type="text" class="form-control shadow-none" style="outline:none!important" id="name">
                        </div>
                        <div class="form-group col-md-6">
                        <label for="inputPassword4">Phone No <span class="text-danger">*</span></label>
                          <input type="text" class="form-control shadow-none" style="outline:none!important" id="">
                        </div>
                        <div class="form-group col-md-6">
                        <label for="age">Age(Years) <span class="text-danger">*</span></label>
                          <input type="text" class="form-control shadow-none" style="outline:none!important" id="age">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Appointment Date <span class="text-danger">*</span></label>
                            <input type="date" class="form-control shadow-none" style="outline:none!important" id="inputPassword4" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Address</label>
                        <input type="text" class="form-control shadow-none" style="outline:none!important" id="inputAddress">
                    </div>
                    <button type="submit" class="btn btn-primary">Confirm Booking</button>
            </form>
        </div>
     </div>
     

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