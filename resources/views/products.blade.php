@extends('layout.app')
@section('custom_css')
<link rel="stylesheet" href="{{ asset('css/custom/products.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ asset('css/custom/landing-page.css') }}" type="text/css" />
@endsection

@section('title')
<title>Sugity Creatives | Products</title>
@endsection

@section('content')
<!-- Banner Slider
		============================================= -->
		<div class="owl-carousel owl-theme style-owl-banner-slider">
			<div class="item min-vh-100 min-vh-md-100">
				<div class="style-banner-image" style="background-image: url('{{asset('images/slider/1.png')}}');">
				</div>
			</div>
			<div class="item min-vh-100 min-vh-md-100">
				<div class="style-banner-image" style="background-image: url('{{asset('images/slider/2.png')}}');">
				</div>
			</div>
			<div class="item min-vh-100 min-vh-md-100">
				<!-- <h2 class="style-banner-title style-title-short">PRIDE of Work.</h2> -->
				<div class="style-banner-image" style="background-image: url('{{asset('images/slider/3.png')}}');">
				</div>
			</div>
			<div class="item min-vh-100 min-vh-md-100">
				<!-- <h2 class="style-banner-title style-title-short">PRIDE of Company.</h2> -->
				<div class="style-banner-image" style="background-image: url('{{asset('images/slider/4.png')}}');">
				</div>
			</div>
		</div><!-- #Banner Slider end -->
        <br><br>

		<section id="content">
			<div class="container clearfix">
				<h1 class="pt-5 text-center">Explore Our Product</h1>
			</div>
			<div class="tabs tabs-bb clearfix" id="tab-9">

				<ul class="tab-nav clearfix" style="justify-content: center;">
					<li><a href="#tabs-33" class="text-size-sm">All</a></li>
					<li><a class="text-size-sm">Vehicle</a></li>
					<li><a class="text-size-sm">Part</a></li>
					<li><a class="text-size-sm">Mold</a></li>
				</ul>

				<div class="tab-container">

					<div class="tab-content clearfix" id="tabs-33">
						<div class="style-section-location">
							<div class="row mb-5 px-5">
								<h3 class="our-video-text" style="color: black">Public Transport</h3>
								<div class="col-md-3">
										<div class="style-content">
											<img src="{{asset('images/public_transport/1.png')}}" style="width:230px;height: 180px;object-fit: contain;">
											<div class="style-footer">
												<h4 class="text-left mt-4" style="color: black">HiAce Jak Lingko
													<br><br>
													<a style="color: black" class="text-left" href="#tabs-33">Explore More <i class="fa-solid fa-chevron-right"></i>></a></h4>
											</div>
										</div>
								</div>
								<div class="col-md-3">
										<div class="style-content">
											<img src="{{asset('images/public_transport/2.png')}}" style="width:230px;height: 180px;object-fit: contain;">
											<div class="style-footer">
												<h4 class="text-left mt-4" style="color: black">Grand Max Jak Lingko
													<br><br>
													<a style="color: black" class="text-left" href="#tabs-33">Explore More <i class="fa-solid fa-chevron-right"></i>></a></h4>
											</div>
										</div>
								</div>
								<div class="col-md-3">
										<div class="style-content">
											<img src="{{asset('images/public_transport/3.png')}}" style="width:230px;height: 180px;object-fit: contain;">
											<div class="style-footer">
												<h4 class="text-left mt-4" style="color: black">HiAce Wira-Wiri SBY<br><br>
													<a style="color: black" class="text-left" href="#tabs-33">Explore More <i class="fa-solid fa-chevron-right"></i>></a></h4>
											</div>
										</div>
								</div>
								<div class="col-md-3">
										<div class="style-content">
											<img src="{{asset('images/public_transport/4.png')}}" style="width:230px;height: 180px;object-fit: contain;">
											<div class="style-footer">
												<h4  class="text-left mt-4" style="color: black">Grand Max Wira-Wiri SBY<br><br>
													<a style="color: black" class="text-left" href="#tabs-33">Explore More <i class="fa-solid fa-chevron-right"></i>></a></h4>
											</div>
										</div>
								</div>
							</div>
						</div>
						<div class="style-section-location">
							<div class="row mb-3 px-5">
								<h3 class="our-video-text" style="color: black">Healthcare Vehicle</h3>
								<div class="col-md-3">
										<div class="style-content">
											<img src="{{asset('images/health_transport/1.png')}}" style="width:250px;height:200px;object-fit: contain;">
											<div class="style-footer">
												<h4 class="text-left mt-4" style="color: black">Voxy Welcab
													<br><br>
													<a style="color: black" class="text-left" href="#tabs-33">Explore More <i class="fa-solid fa-chevron-right"></i>></a></h4>
											</div>
										</div>
								</div>
								<div class="col-md-3">
										<div class="style-content">
											<img src="{{asset('images/health_transport/2.png')}}" style="width:250px;height: 200px;object-fit: contain;">
											<div class="style-footer">
												<h4 class="text-left mt-4" style="color: black">HiAce Medical Mover
													<br><br>
													<a style="color: black" class="text-left" href="#tabs-33">Explore More <i class="fa-solid fa-chevron-right"></i>></a></h4>
											</div>
										</div>
								</div>
							</div>
						</div>
						<div class="style-section-location">
							<div class="row mb-5 px-5">
								<div class="col-md-3">
										<div class="style-content">
											<img src="{{asset('images/health_transport/3.png')}}" style="width:230px;height: 180px;object-fit: contain;">
											<div class="style-footer">
												<h4 class="text-left mt-4" style="color: black">HiAce Ambulance
													<br><br>
													<a style="color: black" class="text-left" href="#tabs-33">Explore More <i class="fa-solid fa-chevron-right"></i>></a></h4>
											</div>
										</div>
								</div>
								<div class="col-md-3">
										<div class="style-content">
											<img src="{{asset('images/health_transport/4.png')}}" style="width:230px;height: 180px;object-fit: contain;">
											<div class="style-footer">
												<h4 class="text-left mt-4" style="color: black">Grand Max Ambulance
													<br><br>
													<a style="color: black" class="text-left" href="#tabs-33">Explore More <i class="fa-solid fa-chevron-right"></i>></a></h4>
											</div>
										</div>
								</div>
								<div class="col-md-3">
									<div class="style-content">
										<img src="{{asset('images/health_transport/5.png')}}" style="width:230px;height: 180px;object-fit: contain;">
										<div class="style-footer">
											<h4 class="text-left mt-4" style="color: black">Innova Ambulance
												<br><br>
												<a style="color: black" class="text-left" href="#tabs-33">Explore More <i class="fa-solid fa-chevron-right"></i>></a></h4>
										</div>
									</div>
								</div>
								<div class="col-md-3"></div>
							</div>
						</div>
						<div class="style-section-location">
							<div class="row mb-3 px-5">
								<h3 class="our-video-text" style="color: black">Export Vehicle</h3>
								<div class="col-md-3">
										<div class="style-content">
											<img src="{{asset('images/export_transport/ccv.png')}}" style="width:250px;height:200px;object-fit: contain;">
											<div class="style-footer">
												<h4 class="text-left mt-4" style="color: black">Cash Carrier Fortuner
													<br><br>
													<a style="color: black" class="text-left" href="#tabs-33">Explore More <i class="fa-solid fa-chevron-right"></i>></a></h4>
											</div>
										</div>
								</div>
								<div class="col-md-3"></div>
								<div class="col-md-3"></div>
								<div class="col-md-3"></div>
							</div>
						</div>
					</div>
					<div class="tab-content clearfix" id="tabs-34">
						<div class="row align-items-stretch">
							<div class="col-md-6 col-padding">
								<div class="container">
									<div class="heading-block">
										<h1>PT. SUGITY CREATIVES PLANT 2, KARAWANG</h1>
									</div>
	
									<div class="row col-mb-50">
	
										<div class="col-lg-12">
											<p>Lorem ipsum dolor sit amet consectetur. Volutpat neque sed enim felis sollicitudin tincidunt pellentesque. Arcu porttitor lectus mi imperdiet mattis vestibulum libero sed. Fermentum vitae tristique venenatis velit nunc urna imperdiet sit. Elit et nam sed tristique nec convallis nunc a.</p>
											<p>In this plant we are working on our core business:</p>
											<a href="#" class="social-icon inline-block si-small si-light si-rounded si-facebook">
												<i class="icon-facebook"></i>
												<i class="icon-facebook"></i>
											</a>
											<a href="#" class="social-icon inline-block si-small si-light si-rounded si-twitter">
												<i class="icon-twitter"></i>
												<i class="icon-twitter"></i>
											</a>
											<a href="#" class="social-icon inline-block si-small si-light si-rounded si-gplus">
												<i class="icon-gplus"></i>
												<i class="icon-gplus"></i>
											</a>
										</div>
	
									</div>
	
								</div>
							</div>
							<div class="col-md-6 col-padding min-vh-60" style="background: url('{{asset('images/company-plant/karawang.png')}}') center center no-repeat; background-size: cover;"></div>
						</div>
					</div>

				</div>

			</div>
		</section><!-- #content end -->

@endsection

@section('custom_js')
<script src="{{asset('js/custom/landing-page.js')}}"></script>

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