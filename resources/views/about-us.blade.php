@extends('layout.app')
@section('custom_css')
    <link rel="stylesheet" href="{{ asset('css/custom/company-profile.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/custom/board-directors.css') }}" type="text/css" />
    <!-- AOS (Animate on Scroll) -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@endsection

@section('title')
    <title>Sugity Creatives | Company Profile</title>
@endsection

@section('content')
    <!-- Banner Slider
                      ============================================= -->
    <div class="owl-carousel owl-theme style-owl-banner-slider" data-scroll>
        <div class="item min-vh-25 min-vh-lg-60 min-vh-xl-100">
		    {{-- Desktop --}}
            <video class="d-none d-xl-block" autoplay="" muted="" loop="" style="object-fit: cover; min-height: 100vh; width: 100%; padding:0; margin:0; position:absolute">
                <source src="{{ asset('videos/banner-video-profile.mov') }}" type="video/mp4">
            </video>
            {{-- Mobile --}}
            <video class="d-block d-sm-none" autoplay="" muted="" loop="" style="object-fit: cover; min-height: 25vh; margin-top: 70px; margin-bottom: 10px; width: 100%;">
                <source src="{{ asset('videos/banner-video-profile.mov') }}" type="video/mp4">
            </video>
            {{-- Tablet M --}}
            <video class="d-none d-md-block d-lg-none" autoplay="" muted="" loop="" style="object-fit: cover; min-height: 25vh; margin-top: 70px; margin-bottom: 20px; width: 100%;">
                <source src="{{ asset('videos/banner-video-profile.mov') }}" type="video/mp4">
            </video>
            {{-- Tablet L --}}
            <video class="d-none d-lg-block d-xl-none" autoplay="" muted="" loop="" style="object-fit: cover; min-height: 60vh; margin-top: 65px; width: 100%;">
                <source src="{{ asset('videos/banner-video-profile.mov') }}" type="video/mp4">
            </video>
        </div>
    </div>
    <!-- #Banner Slider end -->

    <!-- Page Title
                      ============================================= -->
    <!-- <section id="page-title" class="page-title-dark d-none d-sm-block"
                       style="background-image: url('./asset/images/background/background-company-profile.png'); padding: 375px 0; background-size: cover;">

                       <div class="container clearfix text-center">
                        <h1 style="font-size: 80px;">Company Profile</h1>
                       </div>

                      </section>
                      <section id="page-title" class="page-title-dark d-block d-sm-none"
                       style="background-image: url('./asset/images/background/background-company-profile.png'); padding: 325px 0; background-size: cover;">

                       <div class="container clearfix text-center">
                        <h1 style="font-size: 50px;">Company Profile</h1>
                       </div>

                      </section> -->
    <!-- #page-title end -->

    <!-- Content
                      ============================================= -->
    <section id="content">

        <!-- parallax -->
        <div data-scroll class="section style-paralax-2 section-image m-0 border-0 d-none d-lg-block bg-white"
            style="height: 700px; background-image: url('{{ asset('images/parallax/parallax-company-profile.png') }}');"
            data-bottom-top="background-position:0px 200px;" data-top-bottom="background-position:0px -200px;"
            id="about_us">
            <div class="row" style="height: 100%;">
                <div data-aos="fade-right" data-aos-duration="1300" class="col-md-8 col-lg-6 col-xl-5 px-5 pt-5"
                    style="display: flex; justify-content: center; align-items: center;">
                    <div class="container px-5" style="height: 100%;">
                        <h1 class="mt-0 about-us-text">About Us</h1>
                        <p style="line-height: 25px;">
                            Sugity Creatives is a leading manufacturer of automotive components. With a legacy
                            steeped in automotive excellence, our three-pillar business model encompasses Vehicle
                            Conversion, Part, and Mold Business.

                            As a distinguished subsidiary of TOYOTA AUTO BODY JAPAN, renowned for crafting iconic
                            vehicles, our commitment to innovation is woven into the fabric of our heritage.
                            Driven by a profound mission, we meticulously craft product that not only meet but
                            exceed customer expectations.

                            Join us on a journey where precision meets passion, shaping the future of automotive
                            creativity with integrity and innovation.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div data-scroll class="d-block d-lg-none bg-white">
            <div data-aos="fade-right" data-aos-duration="1300" class="container px-4" style="height: 100%;">
                <h1 class="mt-0 mb-3" style="font-size: 35px;">About Us</h1>
                <p style="line-height: 23px;">
                    Sugity Creatives is a leading manufacturer of automotive components. With a legacy
                    steeped in automotive excellence, our three-pillar business model encompasses Vehicle
                    Conversion, Part, and Mold Business.

                    As a distinguished subsidiary of TOYOTA AUTO BODY JAPAN, renowned for crafting iconic
                    vehicles, our commitment to innovation is woven into the fabric of our heritage.
                    Driven by a profound mission, we meticulously craft product that not only meet but
                    exceed customer expectations.

                    Join us on a journey where precision meets passion, shaping the future of automotive
                    creativity with integrity and innovation.
                </p>
            </div>
            <div class="img-bg-about-us"
                style="background-image: url('{{ asset('images/parallax/bg-about-us-mobile.png') }}'); "></div>
        </div>
        <!-- end parallax -->

        <!-- shareholder section -->
        <div class="container mb-5 pb-5 mt-5"
            style="z-index: 10; border-radius: 10px; background: #FFF; box-shadow: 0px 5px 30px 0px rgba(23, 155, 52, 0.15); width: 100%;">
            <div data-aos="fade-in" data-aos-duration="1000" class="pt-md-4 pt-3 ps-4">
                <h1 class="shareholders-title-text">Shareholders</h1>
            </div>
            <div class="row px-3">
                <div data-aos="fade-in" data-aos-duration="1000" class="col-12 col-md-4">
                    <img src="{{ asset('images/board-of-director/new-chart-shareholder.png') }}" width="400"
                        alt="">
                </div>
                <div data-aos="fade-left" data-aos-duration="1000" class="col-12 col-md-8 pt-xl-5 ps-md-5">
                    <div class="wrap-shareholders mb-2 mb-md-5 pt-4 pt-md-0">
                        <img src="{{ asset('images/shareholders/TAB.png') }}" alt="" style="max-width:60px">
                        <span class="ps-2 desc-shareholder">Toyota Auto Body .CO, LTD (TAB)</span>
                    </div>
                    <div class="wrap-shareholders mb-2 mb-md-5 pt-4 pt-md-0">
                        <img src="{{ asset('images/shareholders/TMMIN.png') }}" alt="" style="max-width:60px">
                        <span class="ps-2 desc-shareholder">PT. Toyota Motor Manufacturing Indonesia (TMMIN)</span>
                    </div>
                    <div class="wrap-shareholders">
                        <img src="{{ asset('images/shareholders/TTC.png') }}" alt="" style="max-width:60px">
                        <span class="ps-2 desc-shareholder">Toyota Tsusho Corporation (TTC)</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- end shareholder section -->


        <!-- section slider history company -->
        <!-- <div class="row style-history py-5 py-lg-0 ps-md-5 mt-5 mx-0">
                        <div class="col-7 ps-lg-5 pe-5">
                         <div class="style-custom-slider">
                          <div class="style-item style-item-1">
                           <img src="./asset/images/brief-history/1-whereitall.jpg" alt="...">
                          </div>
                          <div class="style-item style-item-2">
                           <img src="./asset/images/brief-history/2-dynaassembly.jpg" alt="...">
                          </div>
                          <div class="style-item style-item-3">
                           <img src="./asset/images/brief-history/3-rubberline-v2.png" alt="...">
                          </div>
                          <div class="style-item style-item-slider">
                           <img src="./asset/images/brief-history/4-resin.png" alt="...">
                          </div>
                          <div class="style-item style-item-slider style-delay-1">
                           <img src="./asset/images/brief-history/5-kijang.png" alt="...">
                          </div>
                          <div class="style-item style-item-slider style-delay-2">
                           <img src="./asset/images/brief-history/6-ttec-v2.png" alt="...">
                          </div>
                          <div class="style-item style-item-slider style-delay-3">
                           <img src="./asset/images/brief-history/7-mold.png" alt="...">
                          </div>
                          <div class="style-item style-item-slider style-delay-4">
                           <img src="./asset/images/brief-history/8-dyna.jpg" alt="...">
                          </div>
                          <div class="style-item style-item-slider style-delay-5">
                           <img src="./asset/images/brief-history/9-plant2.jpg" alt="...">
                          </div>
                          <div class="style-item style-item-slider style-delay-6">
                           <img src="./asset/images/brief-history/10-nav.jpg" alt="...">
                          </div>
                          <div class="style-item style-item-slider style-delay-7">
                           <img src="./asset/images/brief-history/11-rpt-v2.png" alt="...">
                          </div>
                          <div class="style-item style-item-slider style-delay-8">
                           <img src="./asset/images/brief-history/12-hi-ace.png" alt="...">
                          </div>
                          <div class="style-item style-item-slider style-delay-9">
                           <img src="./asset/images/brief-history/1-whereitall.jpg" alt="...">
                          </div>
                          <div class="style-item style-item-slider style-delay-10">
                           <img src="./asset/images/brief-history/2-dynaassembly.jpg" alt="...">
                          </div>
                          <div class="style-item style-item-slider style-delay-11">
                           <img src="./asset/images/brief-history/3-rubberline.png" alt="...">
                          </div>
                         </div>
                        </div>
                        <div class="col-5">
                         <div class="style-custom-content pt-5">
                          <div class="style-item px-2 px-md-5 style-item-1">
                           <p class="style-description m-0 pb-2 pb-md-4">Sugity Establish</p>
                           <h2 class="style-title m-0 p-0">1995</h2>
                          </div>
                          <div class="style-item px-2 px-md-5 style-item-2">
                           <p class="style-description m-0 pb-2 pb-md-4">Vehicle Assembly: <br>Dyna & Kijang SCM</p>
                           <h2 class="style-title m-0 p-0">1996</h2>
                          </div>
                          <div class="style-item px-2 px-md-5 style-item-3">
                           <p class="style-description m-0 pb-2 pb-md-4">Automotive Part: <br>Resin Painting</p>
                           <h2 class="style-title m-0 p-0">1998</h2>
                          </div>
                          <div class="style-item px-2 px-md-5 style-item-fade">
                           <p class="style-description m-0 pb-2 pb-md-4">Automotive Part: <br>Plating</p>
                           <h2 class="style-title m-0 p-0">2000</h2>
                          </div>
                          <div class="style-item px-2 px-md-5 style-item-fade style-delay-1">
                           <p class="style-description m-0 pb-2 pb-md-4">Kijang Krista / Rangga Run Out</p>
                           <h2 class="style-title m-0 p-0">2002</h2>
                          </div>
                          <div class="style-item px-2 px-md-5 style-item-fade style-delay-2">
                           <p class="style-description m-0 pb-2 pb-md-4">TTEC Establish</p>
                           <h2 class="style-title m-0 p-0">2005</h2>
                          </div>
                          <div class="style-item px-2 px-md-5 style-item-fade style-delay-3">
                           <p class="style-description m-0 pb-2 pb-md-4">Mold Making</p>
                           <h2 class="style-title m-0 p-0">2008</h2>
                          </div>
                          <div class="style-item px-2 px-md-5 style-item-fade style-delay-4">
                           <p class="style-description m-0 pb-2 pb-md-4">Dyna Move To Hino</p>
                           <h2 class="style-title m-0 p-0">2009</h2>
                          </div>
                          <div class="style-item px-2 px-md-5 style-item-fade style-delay-5">
                           <p class="style-description m-0 pb-2 pb-md-4">On-site Resin - Painting part Production @Karawang Plant</p>
                           <h2 class="style-title m-0 p-0">2011</h2>
                          </div>
                          <div class="style-item px-2 px-md-5 style-item-fade style-delay-6">
                           <p class="style-description m-0 pb-2 pb-md-4">NAV1 Production</p>
                           <h2 class="style-title m-0 p-0">2012</h2>
                          </div>
                          <div class="style-item px-2 px-md-5 style-item-fade style-delay-7">
                           <p class="style-description m-0 pb-2 pb-md-4">RPT Establish</p>
                           <h2 class="style-title m-0 p-0">2013</h2>
                          </div>
                          <div class="style-item px-2 px-md-5 style-item-fade style-delay-8">
                           <p class="style-description m-0 pb-2 pb-md-4">HiAce Conversion</p>
                           <h2 class="style-title m-0 p-0">2017</h2>
                          </div>
                          <div class="style-item px-2 px-md-5 style-item-fade style-delay-9">
                           <p class="style-description m-0 pb-2 pb-md-4">Sugity Establish</p>
                           <h2 class="style-title m-0 p-0">1995</h2>
                          </div>
                          <div class="style-item px-2 px-md-5 style-item-fade style-delay-10">
                           <p class="style-description m-0 pb-2 pb-md-4">Vehicle Assembly: <br>Dyna & Kijang SCM</p>
                           <h2 class="style-title m-0 p-0">1996</h2>
                          </div>
                          <div class="style-item px-2 px-md-5 style-item-fade style-delay-11">
                           <p class="style-description m-0 pb-2 pb-md-4">Automotive Part: <br>Resin Painting</p>
                           <h2 class="style-title m-0 p-0">1998</h2>
                          </div>
                         </div>
                        </div>
                       </div> -->
        <!-- end section slider history company -->


        <!-- section visi misi -->
        <!-- <div class="row m-0 pt-md-6 mt-md-5 py-md-5 mb-lg-5 row-section-visi-misi">
                        <div class="col-lg-4 d-flex justify-content-center">
                         <div class="px-3 px-md-5 text-center border-thick">
                          <img src="./asset/images/vector/vector-mission.png" width="50" alt="">
                          <h1 class="mb-md-5 mt-3 fs-1 title-values">Our Mission</h1>
                          <p class="desc-values">Being a Sustainable Product Maker Company that Provides Customer Satisfaction & Contributes to Society Growth.</p>
                          <h2 class="mb-1 title-values d-none d-sm-block">&nbsp;</h2>
                         </div>

                        </div>
                        <div class="col-lg-4 d-flex justify-content-center">
                         <div class="px-3 px-md-5 text-center border-thick">
                          <img src="./asset/images/vector/vector-vision.png" width="50" alt="">
                          <h1 class="mb-md-5 mt-3 fs-1 title-values">Our Vision</h1>
                          <h2 class="my-0 title-values">LEADING with PRIDE</h2>
                          <p class="desc-values">Become a Model of Automotive <br> Manufacturing Company that Leads the industrial ecosystem development.</p>
                         </div>
                        </div>
                        <div class="col-lg-4 d-flex justify-content-center">
                         <div class="px-3 px-md-5 text-center">
                          <img src="./asset/images/vector/vector-philosophy.png" width="50" alt="">
                          <h1 class="mb-md-5 mt-3 fs-1 title-values">Our Philosophy</h1>
                          <p class="desc-values">Create continuous collaboration between Indonesia and Japan by contributing in <br>various innovations for future mobility technology.</p>
                          <h2 class="mb-1 title-values">&nbsp;</h2>
                         </div>
                        </div>
                       </div> -->
        <!-- end section visi misi -->
    </section><!-- #content end -->
@endsection
@section('custom_js')
    <!-- AOS (Animate on Scroll) -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- smooth scroll -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scroll/16.1.3/smooth-scroll.polyfills.min.js"></script>

    <script>
        AOS.init();

        // Initialize Smooth Scroll
        var scroll = new SmoothScroll('[data-scroll]', {
            speed: 100, // Adjust the scrolling speed as needed
        });
    </script>

    <script>
        $('.style-owl-banner-slider').owlCarousel({
            loop: false,
            margin: 0,
            nav: false,
            items: 1,
            autoplay: false,
            autoplayTimeout: 5000,
            autoplayHoverPause: false,
            animateOut: 'slideOutLeft',
            animateIn: 'slideInRight',
        });
    </script>
@endsection
