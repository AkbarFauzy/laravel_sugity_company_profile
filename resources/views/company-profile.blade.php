
@extends('layout.app')
@section('custom_css')	
<link rel="stylesheet" href="{{ asset('css/custom/company-profile.css') }}" type="text/css" />
@endsection

@section('title')
	<title>Sugity Creatives | Company Profile</title>
@endsection

@section('content')
		<!-- Banner Slider
		============================================= -->
		<div class="owl-carousel owl-theme style-owl-banner-slider">
			<div class="item min-vh-100 min-vh-md-100">
				<video autoplay="" muted="" loop=""
					style="object-fit: cover; height: 100vh; width: 100%; padding:0; margin:0; position:absolute">
					<source src="{{asset('videos/banner-video-profile.mov')}}" type="video/mp4">
				</video>
				<div class="style-banner-image is-mobile-show"
					style="background-image: url('./asset/images/banner/mobile/banner-comp-pro.png');">
				</div>
			</div>
		</div>
		<!-- #Banner Slider end -->

		<!-- Page Title
		============================================= -->
		<!-- <section id="page-title" class="page-title-dark d-none d-sm-block" 
		style="background-image: url('{{asset('images/background/background-company-profile.png')}}'); padding: 375px 0; background-size: cover;">

			<div class="container clearfix text-center">
				<h1 style="font-size: 80px;">Company Profile</h1>
			</div>

		</section>
		<section id="page-title" class="page-title-dark d-block d-sm-none" 
		style="background-image: url('{{asset('images/background/background-company-profile.png')}}'); padding: 325px 0; background-size: cover;">

			<div class="container clearfix text-center">
				<h1 style="font-size: 50px;">Company Profile</h1>
			</div>

		</section> -->
		<!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">
			<!-- president section -->
			<div class="section m-0" id="president-message">
				<div class="row p-5">
					<div class="col-md-5 text-end parent-image-president">
						<div class="container" style="width: 100%; height: 100%; display: flex; 
						justify-content: center; 
						align-items: center;">
							<!-- <div style="background-image: url('./asset/images/pres-2.png'); height: 100%; width: 100%; background-repeat: no-repeat;"></div> -->
							<img src="{{asset('images/pres-2.png')}}" class="president-image" alt="">
						</div>
					</div>
					<div class="col-md-6 parent-president-message">
						<div class="container pt-4">
							<h1 class="mb-2 president-message-text">President Message</h1>
							<p class="mb-3 president-speech">
								Dear Valued Members of the Sugity Creatives Community,
							</p>
							<p class="mb-3 president-speech">
								It is with great pleasure and pride that I extend a warm welcome to you on behalf of
								Sugity Creatives—a foundation of automotive excellence since our establishment in 1995.
							</p>
							<p class="mb-3 president-speech">
								As a premier manufacturer in Southeast Asia, specializing in an expansive array of
								automotive parts, Sugity Creatives has consistently set the bar for excellence in our
								industry. Our three-pillar business approach—Vehicle Conversion, Part, and Mold
								Business—forms the foundation of our commitment to innovation, precision, and customer
								satisfaction.
							</p>
							<p class="mb-3 president-speech">
								At Sugity Creatives, our mission goes beyond manufacturing exceptional products. We are
								driven by a profound commitment to elevate the human experience. Meticulously crafting
								products that not only meet but exceed customer expectations is at the heart of our
								endeavors. Concurrently, we understand the responsibility we bear towards the
								environment.
							</p>
							<p class="mb-3 president-speech">
								Our dedication to addressing environmental concerns reflects our commitment to a
								harmonious balance between automotive innovation and sustainable practices.
								As we navigate the future, Sugity Creatives is poised for continued growth and impact.
								Our unwavering commitment to quality, precision, and environmental stewardship remains
								resolute. I invite you to explore our website, discover the depth of our offerings, and
								join us on this journey of automotive excellence.
							</p>
							<p class="mb-3 president-speech">
								Thank you for being an integral part of the Sugity Creatives community.
							</p>
							<p class="president-signature mb-0">
								Warm regards,
								Masashi Suzuki
							</p>
							<span class="president-signature-sugity">
								President Director, Sugity Creatives
							</span>
						</div>
					</div>
				</div>
			</div>
			<!-- end president section -->

			<!-- parallax -->
			<div class="section style-paralax section-image m-0 border-0 d-none d-sm-block"
				style="height: 700px; background-image: url('{{asset('images/parallax/parallax-company-profile.png')}}');"
				data-bottom-top="background-position:0px 200px;" data-top-bottom="background-position:0px -200px;">
				<div class="row" style="height: 100%;">
					<div class="col-md-8 col-lg-6 col-xl-5 px-5 pt-5"
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

			<div class="d-block d-sm-none">
				<div class="container px-4" style="height: 100%;">
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
				<div style="height: 300px; background-image: url('{{asset('images/parallax/bg-about-us-mobile.png')}}'); background-repeat: no-repeat; background-position: top; background-size: contain;"></div>
			</div>
			<!-- end parallax -->

			<div class="row style-history py-5 ps-md-5 mt-5 mx-0">
				<div class="col-7 ps-lg-5 pe-5">
					<div class="style-custom-slider">
						<div class="style-item style-item-1">
							<img src="{{asset('images/brief-history/1-whereitall.jpg')}}" alt="...">
						</div>
						<div class="style-item style-item-2">
							<img src="{{asset('images/brief-history/2-dynaassembly.jpg')}}" alt="...">
						</div>
						<div class="style-item style-item-3">
							<img src="{{asset('images/brief-history/3-rubberline.png')}}" alt="...">
						</div>
						<div class="style-item style-item-slider">
							<img src="{{asset('images/brief-history/4-resin.png')}}" alt="...">
						</div>
						<div class="style-item style-item-slider style-delay-1">
							<img src="{{asset('images/brief-history/5-kijang.png')}}" alt="...">
						</div>
						<div class="style-item style-item-slider style-delay-2">
							<img src="{{asset('images/brief-history/7-mold.png')}}" alt="...">
						</div>
						<div class="style-item style-item-slider style-delay-3">
							<img src="{{asset('images/brief-history/6-ttec-v2.png')}}" alt="...">
						</div>
						<div class="style-item style-item-slider style-delay-4">
							<img src="{{asset('images/brief-history/8-dyna.jpg')}}" alt="...">
						</div>
						<div class="style-item style-item-slider style-delay-5">
							<img src="{{asset('images/brief-history/9-plant2.jpg')}}" alt="...">
						</div>
						<div class="style-item style-item-slider style-delay-6">
							<img src="{{asset('images/brief-history/10-nav.jpg')}}" alt="...">
						</div>
						<div class="style-item style-item-slider style-delay-7">
							<img src="{{asset('images/brief-history/11-rpt-v2.png')}}" alt="...">
						</div>
						<div class="style-item style-item-slider style-delay-8">
							<img src="{{asset('images/brief-history/12-hi-ace.png')}}" alt="...">
						</div>
						<div class="style-item style-item-slider style-delay-9">
							<img src="{{asset('images/brief-history/1-whereitall.jpg')}}" alt="...">
						</div>
						<div class="style-item style-item-slider style-delay-10">
							<img src="{{asset('images/brief-history/2-dynaassembly.jpg')}}" alt="...">
						</div>
						<div class="style-item style-item-slider style-delay-11">
							<img src="{{asset('images/brief-history/3-rubberline.png')}}" alt="...">
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
							<p class="style-description m-0 pb-2 pb-md-4">Mold Making</p>
							<h2 class="style-title m-0 p-0">2004</h2>
						</div>
						<div class="style-item px-2 px-md-5 style-item-fade style-delay-3">
							<p class="style-description m-0 pb-2 pb-md-4">TTEC Establish</p>
							<h2 class="style-title m-0 p-0">2005</h2>
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
							<p class="style-description m-0 pb-2 pb-md-4">Hi-Ace Conversion</p>
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
			</div>
			<!-- end section slider history company -->


			<!-- section visi misi -->
				{{-- <div class="row m-0 row-section-visi-misi" style="display: flex;
			width: 100%;
			justify-content: space-between;
			align-items: center;
			flex-shrink: 0;">
				<div class="col-md-6 text-visi-misi">
					<div class="container">
						Our Company Values
					</div>
				</div>
				<div class="divider-visi-misi" style="width: 1px; height: 650px; border-left: 1px solid #000;"></div>
				<div class="col-md-6 p-5 parent-visi-misi">
					<!-- mission section -->
					<div class="row">
						<div class="col-md-6 p-2 card-mission-1">
							<div class="card" style="width: 18rem; height: 300px;">
								<div class="card-body px-4 pb-0">
									<h5 class="card-title"><img src="{{asset('images/vector/our-philosophy.png')}}" alt=""
											height="110"></h5>
									<h4 class="card-subtitle mb-2">Our Philosophy</h4>
									<p style="line-height: 20px; font-size: 14px;">Create continous collaboration
										beetwen Indonesia and Japan by congtributing in various innovations for future
										mobility technology.</p>
								</div>
							</div>
						</div>
						<div class="col-md-6 p-2 card-mission-2">
							<div class="card" style="width: 18rem; height: 300px;">
								<div class="card-body px-4 pb-0">
									<h5 class="card-title"><img src="{{asset('images/vector/our-value.png')}}" alt=""
											height="110"></h5>
									<h4 class="card-subtitle mb-2">Our Value</h4>
									<p style="line-height: 20px; font-size: 22px; font-weight: 700; color: #EE6D22;">
										SUGITY PRIDE</p>
								</div>
							</div>
						</div>
					</div>
					<!-- vision section -->
					<div class="row mt-2">
						<div class="col-md-6 p-2 card-vision-1">
							<div class="card" style="width: 18rem; height: 300px;">
								<div class="card-body px-4 pb-0">
									<h5 class="card-title"><img src="{{asset('images/vector/our-mission.png')}}" alt=""
											height="110"></h5>
									<h4 class="card-subtitle mb-2">Our Mission</h4>
									<p style="line-height: 20px; font-size: 14px;">Being a Sustainable Product Maker
										Company that Provides Customer Satisfaction & Contributes to Society Growth</p>
								</div>
							</div>
						</div>
						<div class="col-md-6 p-2 card-vision-2">
							<div class="card" style="width: 18rem; height: 300px;">
								<div class="card-body px-4 pb-0">
									<h5 class="card-title"><img src="{{asset('images/vector/our-vision.png')}}" alt=""
											height="110"></h5>
									<h4 class="card-subtitle mb-2">Our Vision</h4>
									<p class="mb-1"
										style="line-height: 20px; font-size: 16px; font-weight: 700; color: #EE6D22;">
										LEADING with PRIDE</p>
									<p style="line-height: 20px; font-size: 14px;">Become a Model of Automotive
										Manufacturing Company that Leads the industrial ecosystem development.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> --}}
			<!-- end section visi misi -->
		</section><!-- #content end -->
@endsection
@section('custom_js')
<script>
	$('.style-owl-banner-slider').owlCarousel({
		loop: false,
		margin: 0,
		nav: false,
		items: 1,
		autoplay: false,
		autoplayTimeout: 4000,
		autoplayHoverPause: false,
		animateOut: 'slideOutLeft',
		animateIn: 'slideInRight',
	});
</script>

@endsection