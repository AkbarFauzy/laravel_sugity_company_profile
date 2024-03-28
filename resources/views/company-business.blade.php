
@extends('layout.app')
@section('custom_css')	
<link rel="stylesheet" href="{{ asset('css/custom/company-business.css') }}" type="text/css" />
<!-- AOS (Animate on Scroll) -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@endsection

@section('title')
	<title>Sugity Creatives | Company Business</title>
@endsection

@section('content')
	    <!-- Page Title
		============================================= -->
        {{-- <section id="page-title" class="page-title-dark"
            style="background-image: url('{{asset('images/background/background-company-business.png')}}'); padding: 50vh 0; background-size: cover; background-repeat: no-repeat; background-position: center; min-height: 100vh;">
            <div data-aos="fade-in" data-aos-duration="1000" class="container clearfix text-center">
                <h1 class="text-banner">Company Business</h1>
            </div>
        </section> --}}
        {{-- Desktop --}}
        <section id="page-title" class="page-title-dark d-none d-xl-block"
            style="background-image: url('{{asset('images/background/background-company-business.png')}}'); padding: 375px 0; background-repeat: no-repeat; background-attachment: fixed; background-position: center; z-index: 10; background-size: cover;">
            <div data-aos="fade-in" data-aos-duration="1000" class="container clearfix text-center">
                <h1 style="font-size: 80px;">{{ __('company-business.header') }}</h1>
            </div>
        </section>
        {{-- Mobile --}}
        <section id="page-title" class="page-title-dark d-block d-sm-none"
            style="background-image: url('{{asset('images/background/background-company-business-mobile.png')}}'); padding: 110px 0; margin-top: 69px; background-repeat: no-repeat; z-index: 10; background-size: cover; background-position: 50%;">
            <div data-aos="fade-in" data-aos-duration="1000" class="container clearfix text-center">
                <h1 style="font-size: 30px; margin-top: -50px">{{ __('company-business.header') }}</h1>
            </div>
        </section>
        {{-- Tablet --}}
        <section id="page-title" class="page-title-dark d-none d-md-block d-lg-none"
            style="background-image: url('{{asset('images/background/background-company-business.png')}}'); padding: 200px 0; margin-top: 69px; background-repeat: no-repeat; z-index: 10; background-size: cover; background-position: 50%;">
            <div data-aos="fade-in" data-aos-duration="1000" class="container clearfix text-center">
                <h1 style="font-size: 40px; margin-top: -70px">{{ __('company-business.header') }}</h1>
            </div>
        </section>
        <section id="page-title" class="page-title-dark d-none d-lg-block d-xl-none"
            style="background-image: url('{{asset('images/background/background-company-business.png')}}'); padding: 200px 0; margin-top: 65px; background-repeat: no-repeat; z-index: 10; background-size: cover; background-position: 50%;">
            <div data-aos="fade-in" data-aos-duration="1000" class="container clearfix text-center">
                <h1 style="font-size: 40px; margin-top: -70px">{{ __('company-business.header') }}</h1>
            </div>
        </section>
        <!-- #page-title end -->

        <!-- Content
		============================================= -->
        <section id="content">
            <div class="container px-3 py-5 px-md-0">
                <div class="row justify-content-center" style="align-items: center;">
                    <div data-aos="fade-in" data-aos-duration="1000" class="col-12 col-md-3 col-xl-2">
                        <h2 class="style-text-business-title m-0">{{ __('company-business.title') }}</h2>
                    </div>
                    <div class="col-1 d-none d-sm-block">
                        <div class="vl"></div>
                    </div>
                    <div data-aos="fade-in" data-aos-duration="1000" class="col-12 col-md-8 col-xl-9">
                        <p class="style-text-business-description m-0">{{ __('company-business.subtext') }}</p>
                    </div>
                </div>
            </div>

            <div data-aos="fade-down" data-aos-duration="800" class="container float-left px-3 pb-5 px-md-0">
                <div class="row">
                    <div data-aos="fade-right" data-aos-duration="1000" class="col-md-4">
                        <div class="nav flex-column nav-pills style-nav-pills-business mb-4 mb-sm-0" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <button class="nav-link active" id="v-pills-vehicle-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-vehicle" type="button" role="tab" aria-controls="v-pills-vehicle"
                                aria-selected="true" style="border-radius: 10px 10px 0 0; text-align: start;">{{ __('company-business.content1') }}</button>
                            <button class="nav-link" id="v-pills-automotive-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-automotive" type="button" role="tab"
                                aria-controls="v-pills-automotive" aria-selected="false" style="border-radius: 0; text-align: start;">{{ __('company-business.content2') }}</button>
                            <button class="nav-link" id="v-pills-mold-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-mold" type="button" role="tab" aria-controls="v-pills-mold"
                                aria-selected="false" style="border-radius: 0 0 10px 10px; text-align: start;">{{ __('company-business.content3') }}</button>
                        </div>
                    </div>
                    <div class="tab-content col-md-8" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-vehicle" role="tabpanel" aria-labelledby="v-pills-vehicle-tab" tabindex="0">
                            <div id="carouselVehicle" class="carousel slide">
                                <div class="carousel-inner" style="border-radius: 15px;">
                                    <div class="carousel-item active">
                                        <img src="{{asset('images/slider/company-business/vehicle-1.png')}}" class="d-block w-100"
                                            alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{asset('images/slider/company-business/vehicle-2.png')}}" class="d-block w-100"
                                            alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{asset('images/slider/company-business/vehicle-3.png')}}" class="d-block w-100"
                                            alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselVehicle" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselVehicle" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                            <div>
                                <h4 class="style-text-business-title mt-5 mb-3">{{ __('company-business.content1') }}</h4>
                                <p class="style-text-business-description">{{ __('company-business.content1Text') }}</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-automotive" role="tabpanel" aria-labelledby="v-pills-automotive-tab" tabindex="0">
                            <div id="carouselPart" class="carousel slide">
                                <div class="carousel-inner" style="border-radius: 15px;">
                                    <div class="carousel-item active">
                                        <img src="{{asset('images/slider/company-business/part-1.png')}}" class="d-block w-100"
                                            alt="...">
                                    </div>
                                    <div class="carousel-item" style="background-color: #f2f2f2;">
                                        <img src="{{asset('images/slider/company-business/part-2.png')}}" class="d-block w-100"
                                            alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{asset('images/slider/company-business/part-3.png')}}" class="d-block w-100"
                                            alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselPart" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselPart" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                            <div>
                                <h4 class="style-text-business-title mt-5 mb-3">{{ __('company-business.content2') }}</h4>
                                <p class="style-text-business-description">{{ __('company-business.content2Text') }}</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-mold" role="tabpanel" aria-labelledby="v-pills-mold-tab" tabindex="0">
                            <div id="carouselMold" class="carousel slide">
                                <div class="carousel-inner" style="border-radius: 15px;">
                                    <div class="carousel-item active">
                                        <img src="{{asset('images/slider/company-business/mold-1.png')}}" class="d-block w-100"
                                            alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{asset('images/slider/company-business/mold-2.png')}}" class="d-block w-100"
                                            alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{asset('images/slider/company-business/mold-3.png')}}" class="d-block w-100"
                                            alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselMold" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselMold" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                            <div>
                                <h4 class="style-text-business-title mt-5 ">{{ __('company-business.content3') }}</h4>
                                <p class="style-text-business-description">{{ __('company-business.content3Text') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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