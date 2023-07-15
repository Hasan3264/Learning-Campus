@extends('layouts.Frontend')
@section('frontend')
<!--====== SLIDER PART START ======-->

@php
$bannrs = App\Models\slideshow::where('status', 'Active')->take(4)->get();
$isempty = $bannrs->isEmpty();
@endphp
@if ($isempty != 1)
<section id="slider-part" class="slider-active">
    @foreach ($bannrs as $value)
    <div class="single-slider bg_cover pt-150"
        style="background-image: url({{asset('uploads/website/slideshow')}}/{{$value->photo}})" data-overlay="4">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-9">
                    <div class="slider-cont">
                        <h1 data-animation="bounceInLeft" data-delay="1s">{{$value->title}}</h1>
                        <p data-animation="fadeInUp" data-delay="1.3s">{{$value->description}}</p>
                        <ul>
                            <li><a data-animation="fadeInUp" data-delay="1.6s" class="main-btn" href="#">Read More</a>
                            </li>
                            <li><a data-animation="fadeInUp" data-delay="1.9s" class="main-btn main-btn-2" href="#">Get
                                    Started</a></li>
                        </ul>
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div>
    @endforeach


    <!-- single slider -->
</section>

<!--====== SLIDER PART ENDS ======-->
@else


<div class="w-100 h-full text-center" style="background-color: #021d3a">
    <h2 class="font-bold" style="color: red;">Please Set Up Slider Or Bannar From Website Module <br>
        Or Active Banner
    </h2>
</div>



@endif

<!--====== CATEGORY PART ENDS ======-->

<!--====== ABOUT PART START ======-->
@php
$about = App\Models\ManuContent::latest()->first();
@endphp

@if ($about != '')
<section id="about-part" class="pt-65">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-title mt-50">
                    <h5>About us</h5>
                    <h2>Welcome to Learning Campus </h2>
                </div> <!-- section title -->
                <div class="about-cont">
                    <p>
                        {!!$about->content!!}
                    </p>
                    <a href="#" class="main-btn mt-55">Learn More</a>
                </div>
            </div> <!-- about cont -->

        </div>
    </div> <!-- row -->
    <!-- container -->
    <div class="about-bg">
        <img src="{{asset('FrontEnd/images/about/about-us-1.jpg')}}" alt="About">
    </div>
</section>
@else

<div class=" w-28 h-full text-center" style="background-color: #021d3a; height:200px;">
    <h2 class="font-bold" style="color: red;">Please add Content From Website for about<br> </h2>
</div>

@endif

<!--====== ABOUT PART ENDS ======-->

<!--====== APPLY PART START ======-->

<section id="apply-aprt" class="pb-120">
    <div class="container">
        <div class="apply">
            <div class="row no-gutters">
                <div class="col-lg-6">
                    <div class="apply-cont apply-color-1">
                        <h3>Apply for new admission {{ date('Y F') }}</h3>
                        <p>The Learning Campus offers a diverse range of programs and courses that align perfectly with
                            my academic and career goals. The institution provides a comprehensive curriculum that
                            encompasses both theoretical knowledge and practical application, ensuring a well-rounded
                            education. This comprehensive approach will equip me with the essential competencies and
                            expertise required to navigate the complexities of the professional world.</p>
                        <a href="Admission Form/students-add.html" class="main-btn">Apply Now</a>
                    </div> <!-- apply cont -->
                </div>
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== APPLY PART ENDS ======-->

<!--====== BREAKING NEW PART START ======-->

@php
$Newsmanage = App\Models\Newsmanage::latest()->get();
$emptyNewsmanage = $Newsmanage->isEmpty();
@endphp
@if ($emptyNewsmanage != 1)
<section id="course-part" class="pt-115 pb-120 gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title pb-45">
                    <h5>Featured News</h5>
                    <h2>Latest News</h2>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row course-slied mt-30">

            @foreach ($Newsmanage as $newss)
            <div class="col-lg-4">
                <div class="singel-course">
                    <div class="thum">
                        <div class="image">
                            <img src="{{asset('uploads/website/newsmanage')}}/{{$newss->photo}}" alt="Course">
                        </div>

                    </div>
                    <div class="cont">
                        <a href="#">
                            <h4>{{Str::limit($newss->title, 25)}}</h4>
                        </a>
                        <div class="course-teacher">
                            <div class="name">
                                <span onclick="toggleNews(event, this)">
                                    <p>{!! Str::limit($newss->news, 100) !!}</p>
                                </span>
                            </div>
                        </div>
                    </div>
                </div> <!-- singel course -->
            </div>
            @endforeach
        </div> <!-- course slied -->
    </div> <!-- container -->
</section>
@else


<div class="w-100 h-full text-center" style="background-color: #021d3a">
    <h2 class="font-bold" style="color: red;">Please Set Up News From Website Module <br>
        Or Active News
    </h2>
</div>
@endif


<!--====== COURSE PART ENDS ======-->

<!--====== VIDEO FEATURE PART START ======-->

<section id="video-feature" class="bg_cover pt-60 pb-110"
    style="background-image: url({{asset('FrontEnd/images/bg-1.png')}})">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-last order-lg-first">
            </div>
            <div class="col-lg-5 offset-lg-1 order-first order-lg-last">
                <div class="feature pt-50">
                    <div class="feature-title">
                        <h3>Our Facilities</h3>
                    </div>
                    @php
                    $facilitys = App\Models\Facility::where('status', 'Active')->latest()->take(3)->get();
                    $emptyfacility = $facilitys->isEmpty();
                    @endphp
                    @if ($emptyfacility != 1)
                    <ul>
                       @foreach ($facilitys as $facility)
                            <li>
                            <div class="singel-feature">
                                <div class="icon">
                                    <img src="{{asset('FrontEnd/images/all-icon/f-1.png')}}" alt="icon">
                                </div>
                                <div class="cont">
                                    <h4>{{$facility->title}}</h4>
                                    <p>{!!$facility->details!!}</p>
                                </div>
                            </div> <!-- singel feature -->
                        </li>
                       @endforeach
                    </ul>
                    @else
                    <div class="w-100 h-full text-center" style="background-color: #021d3a">
                        <h2 class="font-bold" style="color: red;">Please Set Facilitys From Website Module <br>
                            Or Active Facilitys
                        </h2>
                    </div>
                    @endif
                </div> <!-- feature -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
    <div class="feature-bg"></div> <!-- feature bg -->
</section>

<!--====== VIDEO FEATURE PART ENDS ======-->

<!--====== TEACHERS PART START ======-->

<section id="teachers-part" class="pt-70 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-title mt-50">
                    <h5>Featured Teachers</h5>
                    <h2>Meet Our teachers</h2>
                </div> <!-- section title -->
                <div class="teachers-cont">
                    @php
                        $t_cont = App\Models\Teachercontent::where('status', 'Active')->latest()->first()
                    @endphp
                    @if ( $t_cont != '')
                           <p>{!! $t_cont->pera_1 !!} <br>

                        <br> {!! $t_cont->pera_2 !!}</p>

                         <a href="#" class="main-btn mt-55">Career with us</a>
                        @else
                         <div class="w-100 h-full text-center" style="background-color: #021d3a">
                        <h2 class="font-bold" style="color: red;">Please Set Teacher Content From Website Module <br>
                            Or Active Teacher Content
                        </h2>
                    </div>
                    @endif


                </div> <!-- teachers cont -->
            </div>
            <div class="col-lg-6 offset-lg-1">
                <div class="teachers mt-20">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="singel-teachers mt-30 text-center">
                                <div class="image">
                                    <img src="{{asset('FrontEnd/images/teachers/t-1.jpg')}}" alt="Teachers">
                                </div>
                                <div class="cont">
                                    <a href="teachers-singel.html">
                                        <h6>Mark alen</h6>
                                    </a>
                                    <span>Lecturer</span>
                                </div>
                            </div> <!-- singel teachers -->
                        </div>
                        <div class="col-sm-6">
                            <div class="singel-teachers mt-30 text-center">
                                <div class="image">
                                    <img src="{{asset('FrontEnd/images/teachers/t-2.jpg')}}" alt="Teachers">
                                </div>
                                <div class="cont">
                                    <a href="teachers-singel.html">
                                        <h6>David card</h6>
                                    </a>
                                    <span>Lecturer</span>
                                </div>
                            </div> <!-- singel teachers -->
                        </div>
                        <div class="col-sm-6">
                            <div class="singel-teachers mt-30 text-center">
                                <div class="image">
                                    <img src="{{asset('FrontEnd/images/teachers/t-3.jpg')}}" alt="Teachers">
                                </div>
                                <div class="cont">
                                    <a href="teachers-singel.html">
                                        <h6>Rebeka alig</h6>
                                    </a>
                                    <span>Leacturer</span>
                                </div>
                            </div> <!-- singel teachers -->
                        </div>
                        <div class="col-sm-6">
                            <div class="singel-teachers mt-30 text-center">
                                <div class="image">
                                    <img src="{{asset('FrontEnd/images/teachers/t-4.jpg')}}" alt="Teachers">
                                </div>
                                <div class="cont">
                                    <a href="teachers-singel.html">
                                        <h6>Hanna bein</h6>
                                    </a>
                                    <span>Asst.Head</span>
                                </div>
                            </div> <!-- singel teachers -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- teachers -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== TEACHERS PART ENDS ======-->

<!--====== TEASTIMONIAL PART START ======-->

<section id="testimonial" class="bg_cover pt-115 pb-115" data-overlay="8"
    style="background-image: url(images/bg-2.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title pb-40">
                    <h5>Testimonial</h5>
                    <h2>What they say</h2>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row testimonial-slied mt-40">
            <div class="col-lg-6">
                <div class="singel-testimonial">
                    <div class="testimonial-thum">
                        <img src="{{asset('FrontEnd/images/testimonial/t-1.jpg')}}" alt="Testimonial">
                        <div class="quote">
                            <i class="fa fa-quote-right"></i>
                        </div>
                    </div>
                    <div class="testimonial-cont">
                        <p>Aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed
                            odio sit amet sem nibh id elit sollicitudirem </p>
                        <h6>Rubina Helen</h6>
                        <span>Principal</span>
                    </div>
                </div> <!-- singel testimonial -->
            </div>
            <div class="col-lg-6">
                <div class="singel-testimonial">
                    <div class="testimonial-thum">
                        <img src="{{asset('FrontEnd/images/testimonial/t-2.jpg')}}" alt="Testimonial">
                        <div class="quote">
                            <i class="fa fa-quote-right"></i>
                        </div>
                    </div>
                    <div class="testimonial-cont">
                        <p>Aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed
                            odio sit amet sem nibh id elit sollicitudirem </p>
                        <h6>Rubina Helen</h6>
                        <span>Vice Principal </span>
                    </div>
                </div> <!-- singel testimonial -->
            </div>
            <div class="col-lg-6">
                <div class="singel-testimonial">
                    <div class="testimonial-thum">
                        <img src="{{asset('FrontEnd/images/testimonial/t-3.jpg')}}" alt="Testimonial">
                        <div class="quote">
                            <i class="fa fa-quote-right"></i>
                        </div>
                    </div>
                    <div class="testimonial-cont">
                        <p>Aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed
                            odio sit amet sem nibh id elit sollicitudirem </p>
                        <h6>Rubina Helen</h6>
                        <span>Asst,Teacher</span>
                    </div>
                </div> <!-- singel testimonial -->
            </div>
        </div> <!-- testimonial slied -->
    </div> <!-- container -->
</section>

<!--====== TEASTIMONIAL PART ENDS ======-->

@endsection
