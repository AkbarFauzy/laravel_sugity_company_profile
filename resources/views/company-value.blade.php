@extends('layout.app')
@section('custom_css')
<link rel="stylesheet" href="{{ asset('css/custom/company-value.css') }}" type="text/css" />
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

@endsection

@section('title')
<title>Sugity Creatives | Company Value</title>
@endsection

@section('content')
<!-- For Desktop -->
<section data-scroll class="page-title-dark mb-0 d-none d-xl-block" style="background-image: url('{{asset('images/background/background-company-value-v2.png')}}'); background-size: cover; height: 100vh !important; background-position-x: 20%;">
	<div class="row pt-5" data-aos="fade-in" data-aos-duration="1300">
		<div class="col-12 col-xl-4 col-lg-4 pt-2" style="text-align: center; align-items: center;">
			<div class="dark mb-0 pt-5 mt-5 ps-xl-5 ps-lg-4">
				<img class="img-banner-width" src="{{asset('images/background/overlay/overlay-image-company-value-v2.png')}}" alt="" style="max-width: 60% !important;">
			</div>
		</div>
		<div class="col-12 col-xl-8 col-lg-8 pt-5 mt-5">
			<div class="dark pt-3 mt-3 ps-xl-5 pe-xl-5 me-5 ms-5 ms-md-5 ms-lg-0 ps-md-5 ps-lg-0">
				<h1 class="title-layer-3" style="color: #dfb542; margin-bottom: 16px; font-weight: 900 !important; text-underline-offset: 10px;"><u>{{ __('company-value.headerTitle') }}</u></h1>
				{{-- <hr style="color: #C9A437; height: 3px; opacity: 1;"> --}}
				<span class="fs-4">
					{{ __('company-value.headerText1') }}
				</span>
				<br>
				<span class="fs-4">
					{{ __('company-value.headerText2') }}
				</span>
				<br>
				<span class="fs-4">
					{{ __('company-value.headerText3') }}
				</span>
			</div>
		</div>
	</div>
</section>

{{-- For Tablet L --}}
<section data-scroll class="page-title-dark mb-0 d-none d-lg-block d-xl-none" style="background-image: url('{{asset('images/background/background-company-value-v2.png')}}'); background-size: cover; height: 35vh !important; background-position: 20%; margin-top: 65px;">
	<div class="row pt-4" data-aos="fade-in" data-aos-duration="1300">
		<div class="col-4" style="text-align: center; align-items: center;">
			<div class="dark ms-3">
				<img class="img-banner-width" src="{{asset('images/background/overlay/overlay-image-company-value-v2.png')}}" alt="" style="max-width: 70% !important;">
			</div>
		</div>
		<div class="col-8" style="display: flex;">
			<div class="dark me-3 pt-3">
				<h1 class="title-layer-3" style="color: #dfb542; margin-bottom: 8px; font-weight: 900 !important; text-underline-offset: 10px;"><u>{{ __('company-value.headerTitle') }}</u></h1>
				<div class="fs-4">
					{{ __('company-value.headerText1') }}
				</div>
				<div class="fs-4">
					{{ __('company-value.headerText2') }}
				</div>
				<div class="fs-4">
					{{ __('company-value.headerText3') }}
				</div>
			</div>
		</div>
	</div>
</section>

{{-- For Tablet M --}}
<section data-scroll class="page-title-dark mb-0 d-none d-md-block d-lg-none" style="background-image: url('{{asset('images/background/background-company-value-v2.png')}}'); background-size: cover; height: 35vh !important; background-position: 20%; margin-top: 70px;">
	<div class="row pt-3" data-aos="fade-in" data-aos-duration="1300">
		<div class="col-4" style="text-align: center; align-items: center;">
			<div class="dark ms-3">
				<img class="img-banner-width" src="{{asset('images/background/overlay/overlay-image-company-value-v2.png')}}" alt="" style="max-width: 70% !important;">
			</div>
		</div>
		<div class="col-8" style="display: flex;">
			<div class="dark me-3 pt-3">
				<h1 class="title-layer-3" style="color: #dfb542; margin-bottom: 8px; font-weight: 900 !important; text-underline-offset: 10px;"><u>{{ __('company-value.headerTitle') }}</u></h1>
				<div style="font-size: 17px;">
					{{ __('company-value.headerText1') }}
				</div>
				<div style="font-size: 17px;">
					{{ __('company-value.headerText2') }}
				</div>
				<div style="font-size: 17px;">
					{{ __('company-value.headerText3') }}
				</div>
			</div>
		</div>
	</div>
</section>

<!-- For Mobile -->
<section data-scroll class="page-title-dark mb-0 d-block d-sm-none" style="background-image: url('{{asset('images/background/background-company-value-v2.png')}}'); background-size: cover; height: 35vh !important; background-position: 20%; margin-top: 70px;">
	<div class="row pt-4" data-aos="fade-in" data-aos-duration="1300">
		<div class="col-3 pt-3" style="text-align: center; align-items: center;">
			<div class="dark ms-3">
				<img class="img-banner-width" src="{{asset('images/background/overlay/overlay-image-company-value-v2.png')}}" alt="" style="max-width: 100% !important;">
			</div>
		</div>
		<div class="col-9 pt-3" style="display: flex;">
			<div class="dark me-2">
				<h1 class="title-layer-3" style="color: #dfb542; margin-bottom: 8px; font-weight: 900 !important; text-underline-offset: 5px;"><u>{{ __('company-value.headerTitle') }}</u></h1>
				<div style="font-size: 9.5px; line-height: 1.4">{{ __('company-value.headerText1') }} {{ __('company-value.headerText2') }} {{ __('company-value.headerText3') }}</div>
			</div>
		</div>
	</div>
</section>

<!-- Content
============================================= -->
<section data-scroll id="content">
	{{-- For Desktop --}}
	<div class="d-none d-xl-block" style="background: linear-gradient(to bottom, rgba(255,255,255,0) 5%,
	rgba(255,255,255,1)), url('{{asset('images/vector_1/v2.png')}}'); background-size: cover ; height: 20vh !important; opacity: 0.4; margin-bottom: -16%">
	</div>
	{{-- For Tablet --}}
	<div class="d-none d-lg-block d-xl-none" style="background: linear-gradient(to bottom, rgba(255,255,255,0) 5%,
	rgba(255,255,255,1)), url('{{asset('images/vector_1/v2.png')}}'); background-size: cover ; height: 20vh !important; opacity: 0.4; margin-bottom: -24%">
	</div>
	{{-- For Mobile --}}
	<div class="d-lg-none d-block" style="background: linear-gradient(to bottom, rgba(255,255,255,0) 5%,
	rgba(255,255,255,1)), url('{{asset('images/vector_1/v2.png')}}'); background-size: cover ; height: 20vh !important; opacity: 0.4; margin-bottom: -32%">
	</div>

	<div data-scroll data-aos="fade-up" data-aos-duration="1300" class="row m-0 mt-2 mt-md-5 pt-md-5 row-section-visi-misi">
		<div class="col-12 col-lg-4 pt-md-5 mt-md-5 d-flex justify-content-center">
			<div class="px-3 px-md-5 text-center">
				<img src="{{asset('images/vector/pride-1-v2.png')}}" width="120" alt="">
				<h1 class="mb-md-3 mt-3 fs-1 title-values">{{ __('company-value.prideOfTeam') }}</h1>
				<p class="desc-values">{{ __('company-value.prideOfTeamText') }}</p>
				<h2 class="mb-1 title-values d-none d-sm-block">&nbsp;</h2>
			</div>
		</div>
		<div class="col-12 col-lg-4 pt-md-5 mt-md-5 d-flex justify-content-center border-thick">
			<div class="px-3 px-md-5 text-center">
				<img src="{{asset('images/vector/pride-2-v2.png')}}" width="120" alt="">
				<h1 class="mb-md-3 mt-3 fs-1 title-values">{{ __('company-value.prideOfWork') }}</h1>
				<p class="desc-values">{{ __('company-value.prideOfWorkText') }}</p>
			</div>
		</div>
		<div class="col-12 col-lg-4 pt-md-5 mt-md-5 d-flex justify-content-center">
			<div class="px-3 px-md-5 text-center">
				<img src="{{asset('images/vector/pride-3-v2.png')}}" width="120" alt="">
				<h1 class="mb-md-3 mt-3 fs-1 title-values">{{ __('company-value.prideOfCompany') }}</h1>
				<p class="desc-values">{{ __('company-value.prideOfCompanyText') }}</p>
				<h2 class="mb-1 title-values">&nbsp;</h2>
			</div>
		</div>
	</div>

	<div style="background: linear-gradient(to bottom, rgba(255,255,255,0) 40%,
	rgba(255,255,255,1)), linear-gradient(to top, rgba(255,255,255,0) 40%,
	rgba(255,255,255,1)), url('{{asset('images/vector_1/v2.png')}}'); background-size: cover ; height: 25vh !important; opacity: 0.4; background-position-y: 36%; margin-top: -2%; margin-bottom: -2%;">
	</div>

	<div data-scroll class="value-section" data-aos="fade-down" data-aos-duration="1300">
		<div class="text-center mb-5">
			<h1 class="our-value-text fs-1 fw-bolder" style="color: #EE6D22;">{{ __('company-value.vision') }}</h1>
			<h1 class="integrity-text mb-0 fs-1 color-black fw-bolder">{{ __('company-value.visionText') }}</h1>
			<p class="fs-4 color-black">{{ __('company-value.visionSubText1') }} <span class="fw-bolder">"{{ __('company-value.visionSubText2') }}"</span> {{ __('company-value.visionSubText3') }} <span class="fw-bolder">"{{ __('company-value.visionSubText4') }}"</span></p>
			<!-- <h1 class="integrity-text fs-1">Professional • Integrity • Development</h1> -->
		</div>
	</div>

	<div data-scroll data-aos="fade-up" data-aos-duration="1300" class="row m-0 mt-5 py-md-5 row-section-visi-misi">
		<div class="col-12 col-xl-4 d-flex justify-content-center">
			<div class="px-3 px-md-5 text-center">
				<img src="{{asset('images/vector/vector-philosophy-v2.png')}}" width="100" alt="">
				<h1 class="mb-md-3 mt-3 fs-2 title-values">{{ __('company-value.ourPhilosophy') }}</h1>
				<p class="desc-values">{{ __('company-value.ourPhilosophyText') }}</p>
				<h2 class="mb-1 title-values">&nbsp;</h2>
			</div>
		</div>
		<div class="col-12 col-xl-4 d-flex justify-content-center border-thick">
			<div class="px-3 px-md-5 text-center">
				<img src="{{asset('images/vector/vector-mission-v2.png')}}" width="100" alt="">
				<h1 class="mb-md-3 mt-3 fs-2 title-values">{{ __('company-value.ourMission') }}</h1>
				<p class="desc-values">{{ __('company-value.ourMissionText') }}</p>
				<h2 class="mb-1 title-values d-none d-sm-block">&nbsp;</h2>
			</div>
		</div>
		<div class="col-12 col-xl-4 d-flex justify-content-center">
			<div class="px-3 px-md-5 text-center">
				<img src="{{asset('images/vector/vector-vision-v2.png')}}" width="100" alt="">
				<h1 class="mb-md-3 mt-3 fs-2 title-values">{{ __('company-value.ourVision') }}</h1>
				<p class="desc-values">{{ __('company-value.ourVisionText') }}</p>
			</div>
		</div>
	</div>

	{{-- For Desktop --}}
	<div class="d-none d-xl-block" style="background: linear-gradient(to bottom, rgba(255,255,255,0) 40%,
	rgba(255,255,255,1)), linear-gradient(to top, rgba(255,255,255,0) 40%,
	rgba(255,255,255,1)), url('{{asset('images/vector_1/v2.png')}}'); background-size: cover ; height: 35vh !important; opacity: 0.4; background-position-y: 30%; margin-bottom: -12%; margin-top: -8%; z-index: 0;">
	</div>
	{{-- For Tablet --}}
	<div class="d-none d-md-block d-xl-none" style="background: linear-gradient(to bottom, rgba(255,255,255,0) 40%,
	rgba(255,255,255,1)), linear-gradient(to top, rgba(255,255,255,0) 40%,
	rgba(255,255,255,1)), url('{{asset('images/vector_1/v2.png')}}'); background-size: cover ; height: 35vh !important; opacity: 0.4; background-position-y: 30%; margin-bottom: -28%; margin-top: -24%; z-index: 0;">
	</div>
	{{-- For Mobile --}}
	<div class="d-md-none d-block" style="background: linear-gradient(to bottom, rgba(255,255,255,0) 40%,
	rgba(255,255,255,1)), linear-gradient(to top, rgba(255,255,255,0) 40%,
	rgba(255,255,255,1)), url('{{asset('images/vector_1/v2.png')}}'); background-size: cover ; height: 35vh !important; opacity: 0.4; background-position-y: 30%; margin-bottom: -64%; margin-top: -24%; z-index: 0;">
	</div>

	<div data-scroll class="value-section mt-5 mt-md-0" data-aos="fade-down" data-aos-duration="1300">
		<div class="text-center">
			<h1 class="our-value-text fs-1 fw-bolder" style="color: #EE6D22;">{{ __('company-value.businessPillars') }}</h1>
		</div>
	</div>

    <div data-scroll data-aos="fade-up" data-aos-duration="1300" class="row m-0 mt-3 mb-5 py-md-5 row-section-visi-misi">
		<div class="col-12 col-xl-4 d-flex justify-content-center">
			<div class="px-3 px-md-5 text-center">
				<img src="{{asset('images/vector/vehicle assembly-v2.png')}}" width="150" height="150" alt="" style="object-fit: contain">
				<h1 class="mb-md-3 mt-0 fs-2 title-values">{{ __('company-value.vehicleAssembly') }}</h1>
				<p class="desc-values">{{ __('company-value.vehicleAssemblyText') }}</p>
				<h2 class="mb-1 title-values">&nbsp;</h2>
			</div>
		</div>
		<div class="col-12 col-xl-4 d-flex justify-content-center border-thick">
			<div class="px-3 px-md-5 text-center">
				<img src="{{asset('images/vector/automotive part-v2.png')}}" width="150" height="150" alt="" style="object-fit: contain">
				<h1 class="mb-md-3 mt-0 fs-2 title-values">{{ __('company-value.automotivePart') }}</h1>
				<p class="desc-values">{{ __('company-value.automotivePartText') }}</p>
				<h2 class="mb-1 title-values d-none d-sm-block">&nbsp;</h2>
			</div>
		</div>
		<div class="col-12 col-xl-4 d-flex justify-content-center">
			<div class="px-3 px-md-5 text-center">
				<img src="{{asset('images/vector/mold making-v2.png')}}" width="150" height="150" alt="" style="object-fit: contain">
				<h1 class="mb-md-3 mt-0 fs-2 title-values">{{ __('company-value.moldMaking') }}</h1>
				<p class="desc-values">{{ __('company-value.moldMakingText') }}</p>
			</div>
		</div>
	</div>
</section>
<!-- #content end -->
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
@endsection
