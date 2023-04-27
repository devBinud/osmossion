@extends('public.layout')
@section('title', 'Blog-details')
@section('custom-css')

@endsection
@section('body')

    <!-- bradcam_area_start  -->
    <div class="bradcam_area breadcam_bg bradcam_overlay">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>Blog Details</h3>
                        <p><a href="{{url('/')}}">Home /</a> Blog details</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5">

          <div class="col-lg-8">

            <article class="blog-details">

              <div class="post-img">
                <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="title">How Lab test works in Osmossion ?</h2>

              <div class="meta-top">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="{{url('/blog-details')}}">Mannu Singh</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="{{url('/blog-details')}}"><time datetime="2023-01-01">Jan 1, 2023</time></a></li>
                </ul>
              </div><!-- End meta top -->

              <div class="content">
               <p>
              In hemodialysis, lab tests are an important part of monitoring the effectiveness of the treatment. Dialysis patients should undergo regular lab tests including potassium, blood urea nitrogen (BUN), creatinine, and phosphorus to determine if the hemodialysis is working properly [1][4]. Urea reduction ratio (URR) is another important lab test, which measures how effectively urea and other waste products have been removed from the blood during dialysis. The recommended URR should be at least 65% [1].
              Additionally, hematocrit is another lab test that measures the percentage of red blood cells in the blood [2]. For dialysis patients, the recommended target hematocrit range is 33 to 36 percent. Hematocrit is often part of a comprehensive test called a complete blood count (CBC) [2].
              There are also other lab tests that can help identify potential complications that may arise from hemodialysis. For example, dialysis-related amyloidosis (DRA) can develop in people who have undergone hemodialysis for several years. DRA causes proteins in the blood to deposit on joints and tendons, which can cause pain, stiffness, and fluid buildup in the joints. Mood changes, including depression, are also common in people with kidney failure.
                            </p>

                <blockquote>
                <p>
                This blog post gives a brief overview of how lab tests work in hospitals, including the purpose of lab tests, common types of lab tests, and how results are analyzed and reported to healthcare providers.
                </p>
                </blockquote>
                <p>
                Lab tests are medical procedures that involve the analysis of bodily fluids, tissues or other samples to diagnose, treat or monitor a patient's health condition. These tests are essential for detecting diseases, checking organ function, and monitoring the effectiveness of treatments. They may involve blood, urine, saliva, or other samples, and are conducted in a laboratory by trained professionals using specialized equipment and techniques. Accurate and timely lab test results are critical for effective medical decision-making, and can help patients achieve better health outcomes.
                </p>
              </div><!-- End post content -->
             
            </article><!-- End blog post -->

          </div>

          <div class="col-lg-4">

            <div class="sidebar">

              <div class="sidebar-item search-form">
                <h3 class="sidebar-title">Search</h3>
                <form action="" class="mt-3">
                  <input type="text">
                  <button type="submit"><i class="fa fa-search"></i></button>
                </form>
              </div><!-- End sidebar search formn-->

              <div class="sidebar-item categories">
                <h3 class="sidebar-title">Categories</h3>
                <ul class="mt-3">
                  <li><a href="#">General <span>(25)</span></a></li>
                  <li><a href="#">Lab Test <span>(08)</span></a></li>
                  <li><a href="#">Medical Technology <span>(5)</span></a></li>
                </ul>
              </div><!-- End sidebar categories-->

              <div class="sidebar-item recent-posts">
                <h3 class="sidebar-title">Recent Posts</h3>

                <div class="mt-3">

                  <div class="post-item mt-3">
                    <img src="{{asset('assets/img/blog/blog-1.jpg')}}" alt="blog-1" style="border-radius:10px">
                    <div>
                      <h4><a href="{{url('/blog-details')}}">Best Dialysis services provide by us</a></h4>
                      <time datetime="2023-03-01">March 1, 2023</time>
                    </div>
                  </div><!-- End recent post item-->

                  <div class="post-item">
                    <img src="{{asset('assets/img/blog/blog-2.jpg')}}" alt="blog-2" style="border-radius:10px">
                    <div>
                      <h4><a href="{{url('/blog-details')}}">Benefits of our Home Healthcare</a></h4>
                      <time datetime="2023-01-12">Jan 12, 2023</time>
                    </div>
                  </div><!-- End recent post item-->

                </div>

              </div><!-- End sidebar recent posts-->

              <div class="sidebar-item tags">
                <h3 class="sidebar-title">Tags</h3>
                <ul class="mt-3">
                  <li><a href="#">Medical</a></li>
                  <li><a href="#">Labtest</a></li>
                  <li><a href="#">Hemodialysis</a></li>
                  <li><a href="#">Dialysis</a></li>
                  <li><a href="#">Technology</a></li>
                  <li><a href="#">Laboratory</a></li>
                </ul>
              </div><!-- End sidebar tags-->

            </div><!-- End Blog Sidebar -->

          </div>
        </div>

      </div>
    </section><!-- End Blog Details Section -->

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