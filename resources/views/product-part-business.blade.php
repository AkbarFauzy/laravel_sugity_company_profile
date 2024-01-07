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
									
										@foreach($parts->data as $part)
										<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
											<div class="style-content">
												<img src="{{asset('images/products/'.$part->img)}}" style="width:100%; height: 250px; object-fit: contain;">
												<div class="style-footer px-4 px-md-0">
													<h4 class="text-left mt-4" style="color: black">{{$part->name}}
														<br><br>
														<a style="color: black" class="text-left" href="#" 
														data-bs-toggle="modal" 
														data-bs-id="{{$part->id}}"
														data-bs-target="#modalVehicle">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
												</div>
											</div>
										</div>
										@endforeach

								</div>
							</div>
						</div>

						<!-- tab interior -->
						<div class="tab-content clearfix" id="tabs-interior">
							<div class="style-section-product-overview">
								<div class="row">
									@foreach($interiors->data as $interior)
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="{{asset('images/products/'.$interior->img)}}" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">{{$interior->name}}
													<br><br>
													<a style="color: black" class="text-left" href="#" 
													data-bs-toggle="modal" 
													data-bs-id="{{$interior->id}}"
													data-bs-target="#modalVehicle">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									@endforeach
								</div>
							</div>
						</div>

						<!-- tab exterior -->
						<div class="tab-content clearfix" id="tabs-exterior">
							<div class="style-section-product-overview">
								<div class="row">

									@foreach($exteriors->data as $exterior)
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="{{asset('images/products/'.$interior->img)}}" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">{{$exteriors->name}}
													<br><br>
													<a style="color: black" class="text-left" href="#" 
													data-bs-toggle="modal" 
													data-bs-id="{{$exterior->id}}"
													data-bs-target="#modalVehicle">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
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

		<!-- Modal Vehicle -->
		<div class="modal style-modal style-modal-vehicle fade" id="modalVehicle" tabindex="-1"
		aria-labelledby="modalVehicleLabel" aria-hidden="true" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
			<div class="modal-content">
				<div class="modal-body">
					
				</div>
			</div>
			</div>
		</div>

		</section><!-- #content end -->
@endsection

@section('custom_js')


<script>
	$(document).ready(function () {
	  $('#modalVehicle').on('show.bs.modal', function (event) {
		var button = $(event.relatedTarget); // Button that triggered the modal
		var buttonId = button.data('bs-id'); // Extract the ID from data-attribute
	
		var modalBody = $(this).find('.modal-body');
	
		// Clear previous content
		modalBody.empty().append('<p>Loading...</p>');
	
		$.ajax({
		  url: "{{url('products')}}"+ "/"+ buttonId,
		  method: 'GET',
		  beforeSend: function () {
			// Show loading or processing message if needed
		  },
		  success: function (data) {
			// Handle successful response
			modalBody.empty().html(data);
		  },
		  error: function () {
			// Handle error
			modalBody.empty().html('<p>Failed to fetch data. Please try again later.</p>');
		  }
		});
	  });
	});
</script>

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
	