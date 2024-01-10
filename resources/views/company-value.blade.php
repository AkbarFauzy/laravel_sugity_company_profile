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
<section data-scroll class="page-title-dark mb-0 d-none d-sm-block" style="background-image: url('{{asset('images/background/background-company-value.png')}}'); height: 800px !important;">
	<div class="row" data-aos="fade-in" data-aos-duration="1300">
		<div class="col-12 col-lg-8 text-layer" style="display: flex; justify-content: center; align-items: center;">
			<div class="container dark pt-5 mt-5">
				<h1 class="title-layer-1 mb-0 mt-md-3 mt-lg-5 mt-xl-2 pt-md-3 pt-lg-5 pt-xl-2">COMPANY VALUE</h1>
				<h1 class="title-layer-2 py-0 my-0">SUGITY PRIDE</h1>
				<h1 class="title-layer-3 py-0 my-0">We Value Our PRIDE in Everywhere</h1>
				<p class="w-75 fs-3 d-none d-xl-block">
					The spirit that describes a "Sense of Belonging" a work spirit "Only Sugity Can Do" as well as synergy and respect to gain mutual trust from all stakeholders
				</p>
				<p class="fs-5 d-xl-none">
					The spirit that describes a "Sense of Belonging" a work spirit "Only Sugity Can Do" as well as synergy and respect to gain mutual trust from all stakeholders
				</p>
				<!-- <h1 class="title-layer-1 mb-0 mt-md-4 mt-lg-5 mt-xl-2 pt-md-5">LEADING WITH PRIDE</h1> -->
				<!-- <h1 class="title-layer-2 display-2 mb-4">WITH PRIDE</h1> -->
				<!-- <span class="fs-1 d-none d-lg-block title-layer-3">
					Sugity Becomes <span class="title-layer-3-child-1">“LEADING COMPANY”</span>
				</span>
				<span class="fs-1 d-none d-lg-block title-layer-3">
					with the spirit of <span class="title-layer-3-child-2">“SUGITY PRIDE”</span>
				</span>
				<span class="fs-1 d-lg-none title-layer-3">
					Sugity Becomes <span class="title-layer-3-child-1">“LEADING COMPANY”</span>
				</span>
				<span class="fs-1 d-lg-none title-layer-3">
					with the spirit of <span class="title-layer-3-child-2">“SUGITY PRIDE”</span> -->
			</div>
		</div>
		<div class="col-12 col-lg-4" style="display: flex; justify-content: center; align-items: center;">
			<img class="d-none d-xl-block" src="{{asset('images/background/overlay/overlay-image-company-value.png')}}" alt="" style="padding-top: 160px;">
			<img class="d-none d-lg-block d-xl-none" src="{{asset('images/background/overlay/overlay-image-company-value.png')}}" alt="" style="padding-top: 200px;">
			<img class="d-lg-none" src="{{asset('images/background/overlay/overlay-image-company-value.png')}}" alt="" style="max-width: 50%;">
		</div>
	</div>
</section>

<!-- For Mobile -->
<section data-scroll class="page-title-dark mb-0 d-block d-sm-none" style="background-image: url('{{asset('images/background/background-company-value.png')}}'); height: 800px !important;">
	<div class="row" data-aos="fade-up" data-aos-duration="1300">
		<div class="col-12">
			<div class="container dark" style="padding-top: 80px;">
				<h1 class="title-layer-1 mb-0 mt-3 pt-3">COMPANY VALUE</h1>
				<h1 class="title-layer-2 py-0 my-0">SUGITY PRIDE</h1>
				<h1 class="title-layer-3 py-0 my-0">We Value Our PRIDE in Everywhere</h1>
				<span class="fs-5">
					The spirit that describes a "Sense of Belonging" a work spirit "Only Sugity Can Do" as well as synergy and respect to gain mutual trust from all stakeholders
				</span>
				<!-- <h1 class="title-layer-1 mb-0 mt-5">LEADING</h1>
				<h1 class="title-layer-2 display-2 mb-4 mt-0">WITH PRIDE</h1>
				<span class="fs-1 d-block d-sm-none title-layer-3">
					Sugity Becomes <span class="title-layer-3-child-1">“LEADING COMPANY”</span>
				</span>
				<span class="fs-1 d-block d-sm-none title-layer-3">
					with the spirit of <span class="title-layer-3-child-2">“SUGITY PRIDE”</span> -->
			</div>
		</div>
		<div class="col-12 text-center">
			<img src="{{asset('images/background/overlay/overlay-image-company-value.png')}}" width="700" alt="" style="max-width: 75%;">
		</div>
	</div>
</section>

<!-- Content
============================================= -->
<section data-scroll id="content">

	<div data-scroll class="row m-0 mt-5 py-md-5 row-section-visi-misi">
		<div class="col-12 col-lg-4 d-flex justify-content-center">
			<div class="px-3 px-md-5 text-center" data-aos="fade-up" data-aos-duration="1300">
				<img src="{{asset('images/vector/pride-1.png')}}" width="50" alt="">
				<h1 class="mb-md-5 mt-3 fs-1 title-values">PRIDE OF TEAM</h1>
				<p class="desc-values">We protect our reputation with<br>great teamwork & working atmosphere</p>
				<h2 class="mb-1 title-values d-none d-sm-block">&nbsp;</h2>
			</div>
			
		</div>
		<div class="col-12 col-lg-4 d-flex justify-content-center border-thick">
			<div class="px-3 px-md-5 text-center" data-aos="fade-up" data-aos-duration="1300">
				<img src="{{asset('images/vector/pride-2.png')}}" width="50" alt="">
				<h1 class="mb-md-5 mt-3 fs-1 title-values">PRIDE OF WORK</h1>
				<p class="desc-values">We share our vision & work on it together to<br>always be ready to face the challenges &<br>remain great performance</p>
			</div>
		</div>
		<div class="col-12 col-lg-4 d-flex justify-content-center">
			<div class="px-3 px-md-5 text-center" data-aos="fade-up" data-aos-duration="1300">
				<img src="{{asset('images/vector/pride-3.png')}}" width="50" alt="">
				<h1 class="mb-md-5 mt-3 fs-1 title-values">PRIDE OF COMPANY</h1>
				<p class="desc-values">We maintain mutual happiness & focus on building<br>our positive environment</p>
				<h2 class="mb-1 title-values">&nbsp;</h2>
			</div>
		</div>
	</div>

	<div data-scroll class="value-section" data-aos="fade-down" data-aos-duration="1300">
		<div class="text-center mb-5">
			<h1 class="our-value-text fs-1 fw-bolder" style="color: #EE6D22;">Our Value</h1>
			<h1 class="integrity-text mb-0 fs-1 color-black fw-bolder">LEADING WITH PRIDE</h1>
			<p class="fs-4">Sugity becomes "LEADING COMPANY" with the spirit of "SUGITY PRIDE"</p>
			<!-- <h1 class="integrity-text fs-1">Professional • Integrity • Development</h1> -->
		</div>
	</div>

	<div data-scroll class="row m-0 mt-5 py-md-5 row-section-visi-misi">
		<div class="col-12 col-lg-4 d-flex justify-content-center">
			<div class="px-3 px-md-5 text-center" data-aos="fade-up" data-aos-duration="1300">
				<img src="{{asset('images/vector/vector-philosophy.png')}}" width="50" alt="">
				<h1 class="mb-md-5 mt-3 fs-1 title-values">Our Philosophy</h1>
				<p class="desc-values">Create continuous collaboration between Indonesia and Japan by contributing in <br>various innovations for future mobility technology.</p>
				<h2 class="mb-1 title-values">&nbsp;</h2>
			</div>
		</div>
		<div class="col-12 col-lg-4 d-flex justify-content-center border-thick">
			<div class="px-3 px-md-5 text-center" data-aos="fade-up" data-aos-duration="1300">
				<img src="{{asset('images/vector/vector-mission.png')}}" width="50" alt="">
				<h1 class="mb-md-5 mt-3 fs-1 title-values">Our Mission</h1>
				<p class="desc-values">Being a Sustainable Product Maker Company that Provides Customer Satisfaction & Contributes to Society Growth.</p>
				<h2 class="mb-1 title-values d-none d-sm-block">&nbsp;</h2>
			</div>
		</div>
		<div class="col-12 col-lg-4 d-flex justify-content-center">
			<div class="px-3 px-md-5 text-center" data-aos="fade-up" data-aos-duration="1300">
				<img src="{{asset('images/vector/vector-vision.png')}}" width="50" alt="">
				<h1 class="mb-md-5 mt-3 fs-1 title-values">Our Vision</h1>
				<p class="desc-values">Become a Model of Automotive <br> Manufacturing Company that Leads the industrial ecosystem development.</p>
			</div>
		</div>
	</div>

	<div data-scroll class="value-section mt-5 mt-md-0" data-aos="fade-down" data-aos-duration="1300">
		<div class="text-center mb-5">
			<h1 class="our-value-text fs-1 fw-bolder" style="color: #EE6D22;">Business Pillars</h1>
		</div>
	</div>
	<div data-scroll class="row m-0 px-3 px-sm-5 px-md-0 pb-5" data-aos="fade-up" data-aos-duration="1300">
		<div class="col-12 col-md-4 text-center px-2 px-lg-3 px-xl-5 py-4">
			<div style="background-image: url('{{asset('images/card-image/comp-value-1.png')}}'); height: 420px; border-radius: 12px; box-shadow: 1px 5px 30px 0px rgba(0, 0, 0, 0.15);">
				<div class="container dark text-start item-text-overlay-value pb-3">
					<div>
						<h3 class="mb-0">Vehicle Business</h3>
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 col-md-4 text-center px-2 px-lg-3 px-xl-5 py-4">
			<div style="background-image: url('{{asset('images/card-image/comp-value-2.png')}}'); height: 420px; border-radius: 12px; box-shadow: 1px 5px 30px 0px rgba(0, 0, 0, 0.15);">
				<div class="container dark text-start item-text-overlay-value pb-3">
					<div>
						<h3 class="mb-0">Part Business</h3>
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 col-md-4 text-center px-2 px-lg-3 px-xl-5 py-4">
			<div style="background-image: url('{{asset('images/card-image/comp-value-3.png')}}'); height: 420px; border-radius: 12px; box-shadow: 1px 5px 30px 0px rgba(0, 0, 0, 0.15);">
				<div class="container dark text-start item-text-overlay-value pb-3">
					<div>
						<h3 class="mb-0">Mold Business</h3>
					</div>
				</div>
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