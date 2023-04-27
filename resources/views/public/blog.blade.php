@extends('public.layout')
@section('title', 'Blog')
@section('custom-css')

@endsection
@section('body')

    <!-- bradcam_area_start  -->
    <div class="bradcam_area breadcam_bg bradcam_overlay">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>Our Blog</h3>
                        <p><a href="{{url('/')}}">Home /</a> Blog</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->

        <!--  Recent Blog Posts Section  -->
        <section id="recent-posts" class="recent-posts sections-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
            <h2>Recent Blog Posts</h2>
            <p>Check our latest blogpost updated by <strong>Osmosis</strong></p>
            </div>

            <div class="row gy-4">

            <div class="col-xl-4 col-md-6">
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

            <div class="col-xl-4 col-md-6">
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

            <div class="col-xl-4 col-md-6">
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