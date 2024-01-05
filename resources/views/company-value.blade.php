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
			<div class="col-xs-12 col-md-7 text-layer" style="display: flex; justify-content: center; align-items: center;">
				<div class="container dark pt-5">
					<h1 class="title-layer-1 mb-0">Our</h1>
					<h1 class="title-layer-2 display-2 mb-4 mt-0">Company Value</h1>
					<p class="w-75 fs-5">
						Lorem ipsum dolor sit amet. Ut quibusdam tempora et molestiae voluptas est tempora beatae quo vitae corporis non voluptas alias. Et adipisci unde quo porro optio ut laboriosam possimus non consequatur asperiores qui perspiciatis tenetur sit neque exercitationem?
					</p>
				</div>
			</div>
			<div class="col-xs-12 col-md-5" style="display: flex; justify-content: center; align-items: center;">
				<img src="{{asset('images/background/overlay/overlay-image-company-value.png')}}" width="700" alt="" style="padding-top: 80px;">
			</div>
		</div>
	</section>

	<!-- For Mobile -->
	<section data-scroll class="page-title-dark mb-0 d-block d-sm-none" style="background-image: url('{{asset('images/background/background-company-value.png')}}'); height: 800px !important;">
		<div class="row" data-aos="fade-up" data-aos-duration="1300">
			<div class="col-xs-12 col-md-7">
				<div class="container dark" style="padding-top: 80px;">
					<h1 class="title-layer-1 mb-0">Our</h1>
					<h1 class="title-layer-2 display-2 mb-4 mt-0">Company Value</h1>
					<p>
						Lorem ipsum dolor sit amet. Ut quibusdam tempora et molestiae voluptas est tempora beatae quo vitae corporis non voluptas alias. Et adipisci unde quo porro optio ut laboriosam possimus non consequatur asperiores qui perspiciatis tenetur sit neque exercitationem?
					</p>
				</div>
			</div>
			<div class="col-xs-12 col-md-5">
				<img src="{{asset('images/background/overlay/overlay-image-company-value.png')}}" width="700" alt="">
			</div>
		</div>
	</section>
	
	<!-- Content
	============================================= -->
	<section data-scroll id="content">

		<!-- section visi misi -->
		<div data-scroll class="row m-0 mt-5 py-md-5 row-section-visi-misi">
			<div class="col-md-4 d-flex justify-content-center">
				<div class="px-3 px-md-5 text-center border-thick" data-aos="fade-up" data-aos-duration="1300">
					<img src="{{asset('images/vector/vector-mission.png')}}" width="50" alt="">
					<h1 class="mb-md-5 mt-3 fs-1 title-values">Our Mission</h1>
					<p class="desc-values">Being a Sustainable Product Maker Company that Provides Customer Satisfaction & Contributes to Society Growth.</p>
					<h2 class="mb-1 title-values d-none d-sm-block">&nbsp;</h2>
				</div>
				
			</div>
			<div class="col-md-4 d-flex justify-content-center">
				<div class="px-3 px-md-5 text-center border-thick" data-aos="fade-up" data-aos-duration="1300">
					<img src="{{asset('images/vector/vector-vision.png')}}" width="50" alt="">
					<h1 class="mb-md-5 mt-3 fs-1 title-values">Our Vision</h1>
					<h2 class="my-0 title-values">LEADING with PRIDE</h2>
					<p class="desc-values">Become a Model of Automotive <br> Manufacturing Company that Leads the industrial ecosystem development.</p>
				</div>
			</div>
			<div class="col-md-4 d-flex justify-content-center">
				<div class="px-3 px-md-5 text-center" data-aos="fade-up" data-aos-duration="1300">
					<img src="{{asset('images/vector/vector-philosophy.png')}}" width="50" alt="">
					<h1 class="mb-md-5 mt-3 fs-1 title-values">Our Philosophy</h1>
					<p class="desc-values">Create continuous collaboration between Indonesia and Japan by contributing in <br>various innovations for future mobility technology.</p>
					<h2 class="mb-1 title-values">&nbsp;</h2>
				</div>
			</div>
		</div>
		<!-- end section visi misi -->

		<!-- our value -->
		<div data-scroll class="value-section mt-5 pt-md-5" data-aos="fade-down" data-aos-duration="1300">
			<div class="text-center mb-5">
				<h1 class="our-value-text fs-1" style="color: #EE6D22;">Our Value</h1>
				<h1 class="integrity-text fs-1">Professional • Integrity • Development</h1>
			</div>
		</div>
		<div data-scroll class="row m-0 px-sm-5 pb-5" data-aos="fade-up" data-aos-duration="1300">
			<div class="col-md-4 text-center px-5 py-4">
				<div style="background-image: url('{{asset('images/card-image/comp-value-1.png')}}'); height: 420px; border-radius: 12px;">
					<div class="container dark text-start item-text-overlay-value pb-3">
						<div>
							<h3 class="mb-0">Professional</h3>
							<p style="line-height: 15px; font-size: 14px; font-weight: 400;">
								Lorem ipsum dolor sit amet. Ut quibusdam tempora et molestiae voluptas est tempora beatae quo vitae corporis non voluptas alias. Et adipisci unde quo porro optio ut laboriosam 
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 text-center px-5 py-4">
				<div style="background-image: url('{{asset('images/card-image/comp-value-2.png')}}'); height: 420px; border-radius: 12px;">
					<div class="container dark text-start item-text-overlay-value pb-3">
						<div>
							<h3 class="mb-0">Integrity</h3>
							<p style="line-height: 15px; font-size: 14px; font-weight: 400;">
								Lorem ipsum dolor sit amet. Ut quibusdam tempora et molestiae voluptas est tempora beatae quo vitae corporis non voluptas alias. Et adipisci unde quo porro optio ut laboriosam 
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 text-center px-5 py-4">
				<div style="background-image: url('{{asset('images/card-image/comp-value-3.png')}}'); height: 420px; border-radius: 12px;">
					<div class="container dark text-start item-text-overlay-value pb-3">
						<div>
							<h3 class="mb-0">Development</h3>
							<p style="line-height: 15px; font-size: 14px; font-weight: 400;">
								Lorem ipsum dolor sit amet. Ut quibusdam tempora et molestiae voluptas est tempora beatae quo vitae corporis non voluptas alias. Et adipisci unde quo porro optio ut laboriosam 
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end our value -->
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