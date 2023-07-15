<script src="{{asset('FrontEnd/script.js')}}"></script>

<!--====== FOOTER PART START ======-->
@php
$institute = App\Models\ganarel_information::latest()->first();
@endphp
<footer id="footer-part">
    <div class="footer-top pt-40 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-about mt-40">
                        <div class="logo">
                            @if ($institute != '')
                            <a href="/"><img src="{{asset('uploads/backend/logo')}}/{{$institute->logo}}"
                                    alt="Logo"></a>
                            @else
                            <div class="w-100 h-full text-center" style="background-color: #021d3a">
                                <h2 class="font-bold" style="color: red;">Please Set logos From Website Module <br>
                                    Or Active logos
                                </h2>
                            </div>
                            @endif
                        </div>
                        <p>Gravida nibh vel velit auctor aliquetn quibibendum auci elit cons equat ipsutis sem nibh id
                            elit. Duis sed odio sit amet nibh vulputate.</p>
                        <ul class="mt-20">
                            <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div> <!-- footer about -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-link mt-40">
                        <div class="footer-title pb-25">
                            <h6>Sitemap</h6>
                        </div>
                        <ul>
                            <li><a href="index.html"><i class="fa fa-angle-right"></i>Home</a></li>
                            <li><a href="about.html"><i class="fa fa-angle-right"></i>About us</a></li>
                            <li><a href="breakingnews.html"><i class="fa fa-angle-right"></i>Breaking News</a></li>
                            <li><a href="digitalcontent.html"><i class="fa fa-angle-right"></i>Digital Content</a></li>
                            <li><a href="boardresult.html"><i class="fa fa-angle-right"></i>Result</a></li>
                            <li><a href="events.html"><i class="fa fa-angle-right"></i>Event</a></li>
                        </ul>
                        <ul>
                            <li><a href="gallery.html"><i class="fa fa-angle-right"></i>Gallery</a></li>
                            <li><a href="video.html"><i class="fa fa-angle-right"></i>Video</a></li>
                            <li><a href="calender.html"><i class="fa fa-angle-right"></i>Calender</a></li>
                            <li><a href="director.html"><i class="fa fa-angle-right"></i>Board Director</a></li>
                            <li><a href="contact.html"><i class="fa fa-angle-right"></i>Contact</a></li>
                        </ul>
                    </div> <!-- footer link -->
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="footer-link support mt-40">
                        <div class="footer-title pb-25">
                            <h6>Support</h6>
                        </div>
                        <ul>
                            <li><a href="#"><i class="fa fa-angle-right"></i>FAQS</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Privacy</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Policy</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Support</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Documentation</a></li>
                        </ul>
                    </div> <!-- support -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-address mt-40">
                        <div class="footer-title pb-25">
                            <h6>Contact Us</h6>
                        </div>
                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-home"></i>
                                </div>
                                <div class="cont">
                                    <p>Sector 07, House #11, Uttara Dhaka 1230.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="cont">
                                    <p>+880 1986-306582</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                                <div class="cont">
                                    <p>info@educare.com</p>
                                </div>
                            </li>
                        </ul>
                    </div> <!-- footer address -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- footer top -->

    <div class="footer-copyright pt-10 pb-25">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright text-md-left text-center pt-15">
                        <p><a style="color: #fff;" target="_blank" href="https://www.creativec-ampus.com"> All Right
                                Reserved By - Creative Campus 2022</a> </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="copyright text-md-right text-center pt-15">

                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- footer copyright -->
</footer>

<!--====== FOOTER PART ENDS ======-->

<!--====== BACK TO TP PART START ======-->

<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

<!--====== BACK TO TP PART ENDS ======-->
