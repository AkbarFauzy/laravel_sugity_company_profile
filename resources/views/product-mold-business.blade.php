@extends('layout.app')
@section('custom_css')
<link rel="stylesheet" href="{{ asset('css/custom/product-mold-business.css') }}" type="text/css" />
@endsection

@section('title')
<title>Sugity Creatives | Products Mold</title>
@endsection

@section('content')
	<!-- Banner Slider
		============================================= -->
		<div class="owl-carousel owl-theme style-owl-banner-slider">
			<div class="item min-vh-100 min-vh-md-100">
				<!-- <h2 class="style-banner-title style-title-short">PRIDE of Team.</h2> -->
				<div class="style-banner-content slide">
					<div>
						<p class="first-text-slider-mold mb-0 text-center">Mold Making</p>
						<p class="second-text-slider-mold mt-0"><i>Quality and Precious</i></p>
					</div>
				</div>
				<div class="style-banner-image" style="background-image: url('{{asset('images/slider/3.png')}}');">
				</div>
			</div>
		</div><!-- #Banner Slider end -->

		<!-- Content
		============================================= -->
		<section id="content" class="style-bg-dot">
			<div class="container clearfix">
				<h1 class="fs-1 pt-5 text-center">Mold Business</h1>
			</div>
			<div class="container">
				<div class="tabs tabs-bb clearfix tab-part-business" id="tab-9" style="z-index: 10;">
	
					<ul class="tab-nav clearfix mb-4" style="justify-content: center;">
						<li><a href="#tabs-all" class="text-size-sm">All</a></li>
					</ul>
	
					<div class="tab-container">
	
						<!-- tab mold -->
						<div class="tab-content clearfix" id="tabs-mold">
							<!-- sec 1 -->
							<div class="style-section-product-overview">
								<div class="row">
									
									@foreach($mold->data as $item)
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="{{asset('images/products/'.$item->img)}}" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">{{$item->name}} 
												<br>	
												@if($item->name == "Big Mold")
													(1300Ton-3500Ton)
												@elseif($item->name == "Medium Mold")
													(350Ton - 1050Ton)
												@elseif($item->name == "Small Mold")
													(30Ton-175Ton)
												@endif
									
												<br><br>
												<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalMold">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									@endforeach
								</div>
							</div>
						</div>
	
					</div>
	
				</div>
			</div>

			<!-- <div class="container-fluid float-left p-5">
				<div class="d-flex justify-content-center mb-3">
					<h2 class="fs-1 m-0 text-black text-center">Discover Our Product</h2>
				</div>
				<div class="d-flex justify-content-center mb-2">
					<p class="fs-5 mb-0 text-dark pb-4 text-center">An-Nur Mosque, Sugity Creatives</p>
				</div>
				<div class="style-carousel-facility">
					<div class="style-item">
						<div class="style-carousel-item item-1 active">
							<img src="./asset/images/company-plant/facility-1.jpg" alt="">
							<div class="style-carousel-overlay"></div>
						</div>
						<div class="style-carousel-item item-2 active">
							<img src="./asset/images/company-plant/facility-2.jpg" alt="">
							<div class="style-carousel-overlay"></div>
						</div>
						<div class="style-carousel-item item-3 active">
							<img src="./asset/images/company-plant/facility-3.jpg" alt="">
							<div class="style-carousel-overlay"></div>
						</div>
						<div class="style-carousel-item item-4 active">
							<img src="./asset/images/company-plant/facility-4.jpg" alt="">
							<div class="style-carousel-overlay"></div>
						</div>
						<div class="style-carousel-item item-5 active">
							<img src="./asset/images/company-plant/facility-5.jpg" alt="">
							<div class="style-carousel-overlay"></div>
						</div>
					</div>
					<div class="style-nav">
						<button class="style-carousel-prev"><i class="bi bi-arrow-left"></i></button>
						<button class="style-carousel-next"><i class="bi bi-arrow-right"></i></button>
					</div>
				</div>
			</div> -->
			
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