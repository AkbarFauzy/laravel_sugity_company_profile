@extends('layout.app')
@section('custom_css')
<link rel="stylesheet" href="{{ asset('css/custom/product-part-business.css') }}" type="text/css" />
@endsection

@section('title')
<title>Sugity Creatives | Products Part</title>
@endsection

@section('content')
	<!-- Banner Slider
		============================================= -->
		<div class="owl-carousel owl-theme style-owl-banner-slider">
			<div class="item min-vh-100 min-vh-md-100">
				<!-- <h2 class="style-banner-title style-title-short">PRIDE of Team.</h2> -->
				<div class="style-banner-content slide">
					<div>
						<p class="first-text-slider-part mb-0 text-center">Door Trim Sub Assy</p>
						<p class="second-text-slider-part mt-0"><i>Proficient and Agile</i></p>
					</div>
				</div>
				<div class="style-banner-image" style="background-image: url('{{asset('images/slider/s-part.png')}}');">
				</div>
			</div>
		</div><!-- #Banner Slider end -->

		<!-- Content
		============================================= -->
		<section id="content" class="style-bg-dot">
			<div class="container clearfix">
				<h1 class="fs-1 pt-5 text-center">Part Business</h1>
			</div>
			<div class="container">
				<div class="tabs tabs-bb clearfix tab-part-business" id="tab-9" style="z-index: 10;">
	
					<ul class="tab-nav clearfix mb-4 tab-nav-justify">
						<li><a href="#tabs-all" class="text-size-sm">All</a></li>
						<li><a href="#tabs-interior" class="text-size-sm">Interior</a></li>
						<li><a href="#tabs-exterior" class="text-size-sm">Exterior</a></li>
					</ul>
	
					<div class="tab-container">
	
						<!-- tab all -->
						<div class="tab-content clearfix" id="tabs-all">
							<div class="style-section-product-overview">
								<div class="row">
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="{{asset('images/product-part-business/interior/1.png')}}" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Sub Assy Intrument Panel
												<br><br>
												<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalPart">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="{{asset('images/product-part-business/interior/2.png')}}" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Intrument Panel
												<br><br>
												<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalPart">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="{{asset('images/product-part-business/interior/3.png')}}" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Door Trim
												<br><br>
												<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalPart">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="{{asset('images/product-part-business/interior/4.png')}}" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Box Console
												<br><br>
												<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalPart">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="{{asset('images/product-part-business/interior/5.png')}}" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Quarter Door Trim
												<br><br>
												<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalPart">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="{{asset('images/product-part-business/interior/6.png')}}" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Door Glove
												<br><br>
												<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalPart">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="{{asset('images/product-part-business/interior/7.png')}}" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Register
												<br><br>
												<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalPart">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="{{asset('images/product-part-business/exterior/1.png')}}" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Rear Bumper Yaris
												<br><br>
												<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalPart">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="{{asset('images/product-part-business/exterior/6.png')}}" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Rear Bumper Yaris Cross
												<br><br>
												<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalPart">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="{{asset('images/product-part-business/exterior/2.png')}}" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Front Bumper Yaris
												<br><br>
												<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalPart">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="{{asset('images/product-part-business/exterior/7.png')}}" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Front Bumper Yaris Cross
												<br><br>
												<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalPart">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="{{asset('images/product-part-business/exterior/3.png')}}" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Grille
												<br><br>
												<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalPart">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="{{asset('images/product-part-business/exterior/4.png')}}" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Spoiler
												<br><br>
												<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalPart">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="{{asset('images/product-part-business/exterior/5.png')}}" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Mud Guard
												<br><br>
												<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalPart">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- tab interior -->
						<div class="tab-content clearfix" id="tabs-interior">
							<div class="style-section-product-overview">
								<div class="row">
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="{{asset('images/product-part-business/interior/1.png')}}" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Sub Assy Intrument Panel
												<br><br>
												<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalPart">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="{{asset('images/product-part-business/interior/2.png')}}" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Intrument Panel
												<br><br>
												<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalPart">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="{{asset('images/product-part-business/interior/3.png')}}" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Door Trim
												<br><br>
												<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalPart">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="{{asset('images/product-part-business/interior/4.png')}}" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Box Console
												<br><br>
												<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalPart">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="{{asset('images/product-part-business/interior/5.png')}}" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Quarter Door Trim
												<br><br>
												<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalPart">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="{{asset('images/product-part-business/interior/6.png')}}" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Door Glove
												<br><br>
												<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalPart">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="{{asset('images/product-part-business/interior/7.png')}}" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Register
												<br><br>
												<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalPart">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- tab exterior -->
						<div class="tab-content clearfix" id="tabs-exterior">
							<div class="style-section-product-overview">
								<div class="row">
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="{{asset('images/product-part-business/exterior/1.png')}}" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Rear Bumper Yaris
												<br><br>
												<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalPart">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="{{asset('images/product-part-business/exterior/6.png')}}" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Rear Bumper Yaris Cross
												<br><br>
												<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalPart">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="{{asset('images/product-part-business/exterior/2.png')}}" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Front Bumper Yaris
												<br><br>
												<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalPart">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="{{asset('images/product-part-business/exterior/7.png')}}" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Front Bumper Yaris Cross
												<br><br>
												<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalPart">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="{{asset('images/product-part-business/exterior/3.png')}}" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Grille
												<br><br>
												<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalPart">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="{{asset('images/product-part-business/exterior/4.png')}}" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Spoiler
												<br><br>
												<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalPart">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="{{asset('images/product-part-business/exterior/5.png')}}" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Mud Guard
												<br><br>
												<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalPart">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
	
					</div>
	
				</div>
			</div>
			
		</section><!-- #content end -->
@endsection

@section('custom_js')
<script>

	setInterval(function () {
		if ($('#pills-vehicle-tab').hasClass('active')) {
			$('#pills-parts-tab').trigger('click');
		} else if ($('#pills-parts-tab').hasClass('active')) {
			$('#pills-mold-tab').trigger('click');
		} else if ($('#pills-mold-tab').hasClass('active')) {
			$('#pills-vehicle-tab').trigger('click');
		}
	}, 5000);

	$('.style-owl-banner-slider').owlCarousel({
		loop: true,
		margin: 0,
		nav: false,
		items: 1,
		autoplay: true,
		autoplayTimeout: 5000,
		autoplayHoverPause: false,
		animateOut: 'slideOutLeft',
		animateIn: 'slideInRight',
	});

	$('.owl-dot').on('click', function () {
		$('.style-owl-banner-slider').trigger('stop.owl.autoplay');
		$('.style-owl-banner-slider').trigger('refresh.owl.carousel');
	});

	$('.style-owl-client-slider').owlCarousel({
		rtl: false,
		loop: true,
		margin: 40,
		nav: false,
		dots: false,
		autoplay: true,
		slideTransition: 'linear',
		autoplayTimeout: 2000,
		autoplaySpeed: 2000,
		autoplayHoverPause: false,
		animateOut: 'slideOutLeft',
		animateIn: 'slideInRight',
		responsive: {
			0: {
				items: 2
			},
			600: {
				items: 4
			},
			1000: {
				items: 6
			}
		}

	});
</script>

@endsection
	