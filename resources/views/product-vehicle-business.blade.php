@extends('layout.app')
@section('custom_css')
<link rel="stylesheet" href="{{ asset('css/custom/product-vehicle-business.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ asset('css/custom/product.css') }}" type="text/css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
@endsection

@section('title')
<title>Sugity Creatives | Products Vehicle</title>
@endsection

@section('content')

<body class="stretched">
		<!-- Banner Slider
		============================================= -->
		<div class="owl-carousel owl-theme style-owl-banner-slider">
			@foreach($sliders->data as $slider)
			
			<div class="item min-vh-100 min-vh-md-100">
				<div class="style-banner-content">
					<div class="custom-banner mb-5" style="{!! \App\Http\Library\SliderHelper::slider_position($slider->position, $slider->x_offset, $slider->y_offset)!!}">
						{!!$slider->tagline!!}
					</div>
				</div>
				<div class="style-banner-image" style="background-image: url('{{asset("images/sliders/".$slider->img)}}');">
				</div>
			</div>


			@endforeach
		</div><!-- #Banner Slider end -->
		<!-- <br><br> -->

		<!-- Content
		============================================= -->
		<section id="content" class="style-bg-dot">
			<div class="container clearfix">
				<h1 class="fs-1 pt-5 text-center">Vehicle Conversion</h1>
			</div>
			<div class="container">
				<div class="tabs tabs-bb clearfix tab-vehicle-business" id="tab-9" style="z-index: 10;">
	
					<ul class="tab-nav clearfix mb-4 tab-nav-justify">
						<li><a href="#tabs-all" class="text-size-sm">All</a></li>
						<li><a href="#tabs-public-transport" class="text-size-sm">Public Transport</a></li>
						<li><a href="#tabs-healthcare" class="text-size-sm">Healthcare Vehicle</a></li>
						<li><a href="#tabs-export" class="text-size-sm">Export Vehicle</a></li>
						<li><a href="#tabs-other" class="text-size-sm">Other</a></li>
					</ul>
	
					<div class="tab-container">
	
						<!-- tab all -->
						<div class="tab-content clearfix" id="tabs-all">
							<div class="style-section-product-overview">
								<div class="row">

									@foreach($vehicles->data as $vehicle)
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="{{asset('images/products/'.$vehicle->img)}}" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">{{$vehicle->name}}
													<br><br>
													@if(!empty($vehicle->left_content) || !empty($vehicle->right_content) || !empty($vehicle->gallery) )
													<a style="color: black" class="text-left" href="#" 
													data-bs-toggle="modal" 
													data-bs-id="{{$vehicle->id}}"
													data-bs-target="#modalVehicle">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
													@endif
											</div>
										</div>
									</div>
									@endforeach

								</div>
							</div>
						</div>

						<!-- tab public transport -->
						<div class="tab-content clearfix" id="tabs-public-transport">
							<div class="style-section-product-overview">
								<div class="row">
										@foreach($publicTransport->data as $vehicle)
										<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
											<div class="style-content">
												<img src="{{asset('images/products/'.$vehicle->img)}}" style="width:100%; height: 250px; object-fit: contain;">
												<div class="style-footer px-4 px-md-0">
													<h4 class="text-left mt-4" style="color: black">{{$vehicle->name}}
														<br><br>
														@if(!empty($vehicle->left_content) || !empty($vehicle->right_content) || !empty($vehicle->gallery) )
														<a style="color: black" class="text-left" href="#" 
														data-bs-toggle="modal" 
														data-bs-id="{{$vehicle->id}}"
														data-bs-target="#modalVehicle">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
														@endif
												</div>
											</div>
										</div>
										@endforeach
								</div>
							</div>
						</div>

						<!-- tab healthcare -->
						<div class="tab-content clearfix" id="tabs-healthcare">
							<div class="style-section-product-overview">
								<div class="row">

									@foreach($healthcareVehicles->data as $vehicle)
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
									<div class="style-content">
										<img src="{{asset('images/products/'.$vehicle->img)}}" style="width:100%; height: 250px; object-fit: contain;">
										<div class="style-footer px-4 px-md-0">
											<h4 class="text-left mt-4" style="color: black">{{$vehicle->name}}
												<br><br>
												@if(!empty($vehicle->left_content) || !empty($vehicle->right_content) || !empty($vehicle->gallery) )
													<a style="color: black" class="text-left" href="#" 
													data-bs-toggle="modal" 
													data-bs-id="{{$vehicle->id}}"
													data-bs-target="#modalVehicle">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
												@endif
										</div>
									</div>
									</div>
									@endforeach

								</div>
							</div>
						</div>

						<!-- tab export -->
						<div class="tab-content clearfix" id="tabs-export">
							<div class="style-section-product-overview">
								<div class="row">

									@foreach($exportVehicles->data as $vehicle)
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
									<div class="style-content">
										<img src="{{asset('images/products/'.$vehicle->img)}}" style="width:100%; height: 250px; object-fit: contain;">
										<div class="style-footer px-4 px-md-0">
											<h4 class="text-left mt-4" style="color: black">{{$vehicle->name}}
												<br><br>
												@if(!empty($vehicle->left_content) || !empty($vehicle->right_content) || !empty($vehicle->gallery) )
												<a style="color: black" class="text-left" href="#" 
												data-bs-toggle="modal" 
												data-bs-id="{{$vehicle->id}}"
												data-bs-target="#modalVehicle">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
												@endif
										</div>
									</div>
									</div>
									@endforeach

								</div>
							</div>
						</div>

						<!-- tab other -->
						<div class="tab-content clearfix" id="tabs-other">
							<div class="style-section-product-overview">
								<div class="row">
									@foreach($otherVehicles->data as $vehicle)
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
									<div class="style-content">
										<img src="{{asset('images/products/'.$vehicle->img)}}" style="width:100%; height: 250px; object-fit: contain;">
										<div class="style-footer px-4 px-md-0">
											<h4 class="text-left mt-4" style="color: black">{{$vehicle->name}}
												<br><br>
												@if(!empty($vehicle->left_content) || !empty($vehicle->right_content) || !empty($vehicle->gallery) )
												<a style="color: black" class="text-left" href="#" 
												data-bs-toggle="modal" 
												data-bs-id="{{$vehicle->id}}"
												data-bs-target="#modalVehicle">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
												@endif
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
		</section><!-- #content end -->

		<div class="modal style-modal style-modal-vehicle fade" id="modalVehicle" tabindex="-1"
		aria-labelledby="modalVehicleLabel" aria-hidden="true" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
			<div class="modal-content">
				<div class="modal-body">
					
				</div>
			</div>
		</div>
		</div>

@endsection

@section('custom_js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/impetus/0.8.8/impetus.min.js"
integrity="sha512-t+0a9kGXas/mQ/ClLjnTts9UsalckNQfEHhvr+JN/R4t2ql79Q7pK81a2ltfbGpY7Q17ibaGPhHKQDukM+qM2A=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
		// loop: true,
		margin: 0,
		nav: false,
		items: 1,
		// autoplay: true,
		// autoplayTimeout: 5000,
		// autoplayHoverPause: false,
		// animateOut: 'slideOutLeft',
		// animateIn: 'slideInRight',
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

	var intervalFacilityId = null;

	$(document).ready(function () {
		intervalFacilityId = setInterval(function () {
			$('.style-carousel-prev').trigger('click');
		}, 3000);
		var maxWidth = $('.style-item').width();
		var itemElement = $('.style-carousel-item');
		var widthElement = Math.round(itemElement.width());
		var leftElement = Math.round(parseFloat(itemElement.css("left").replace("px", "")));
		var leftPositionFirst = 40;
		var leftPositionSecond = Math.round(40 + (widthElement * 0.55));
		var leftPositionMiddle = Math.round((maxWidth / 2) - (widthElement / 2));
		var leftPositionThird = Math.round(maxWidth - 40 - widthElement - (widthElement * 0.55));
		var leftPositionFourth = Math.round(maxWidth - 40 - widthElement);
		$('.style-carousel-item').eq(0).css({
			'z-index': '1',
			'left': leftPositionFirst + 'px',
			'height': '300px',
		});
		$('.style-carousel-item').eq(1).css({
			'z-index': '5',
			'left': leftPositionSecond + 'px',
			'height': '350px',
		});
		$('.style-carousel-item').eq(2).css({
			'z-index': '10',
			'left': leftPositionMiddle + 'px',
			'height': '450px',
		});
		$('.style-carousel-item').eq(3).css({
			'z-index': '5',
			'left': leftPositionThird + 'px',
			'height': '350px',
		});
		$('.style-carousel-item').eq(4).css({
			'z-index': '1',
			'left': leftPositionFourth + 'px',
			'height': '300px',
		});
	})

	$('.style-carousel-prev').on("click", function () {
		clearInterval(intervalFacilityId);
		$('.style-carousel-prev').attr('disabled', 'disabled');
		var maxWidth = $('.style-item').width();
		var itemElement = $('.style-carousel-item');
		console.log(itemElement.length)
		for (i = 0; i < itemElement.length; i++) {
			var rowItemElement = itemElement.eq(i);
			var widthElement = Math.round(rowItemElement.width());
			var leftElement = Math.round(parseFloat(rowItemElement.css("left").replace("px", "")));
			var leftPositionFirst = 40;
			var leftPositionSecond = Math.round(40 + (widthElement * 0.55));
			var leftPositionMiddle = Math.round((maxWidth / 2) - (widthElement / 2));
			var leftPositionThird = Math.round(maxWidth - 40 - widthElement - (widthElement * 0.55));
			var leftPositionFourth = Math.round(maxWidth - 40 - widthElement);

			if (leftElement == leftPositionFirst) {
				rowItemElement.css({
					'z-index': '1',
					'left': leftPositionFourth + 'px',
					'height': '300px',
				});
				rowItemElement.find('.style-carousel-overlay').css('background-color', 'rgba(0,0,0,0.65)')
			} else if (leftElement == leftPositionSecond) {
				rowItemElement.css({
					'z-index': '1',
					'left': leftPositionFirst + 'px',
					'height': '300px',
				});
				rowItemElement.find('.style-carousel-overlay').css('background-color', 'rgba(0,0,0,0.65)')
			} else if (leftElement == leftPositionMiddle) {
				rowItemElement.css({
					'z-index': '5',
					'left': leftPositionSecond + 'px',
					'height': '350px',
				});
				rowItemElement.find('.style-carousel-overlay').css('background-color', 'rgba(0,0,0,0.65)')
			} else if (leftElement == leftPositionThird) {
				rowItemElement.css({
					'z-index': '10',
					'left': leftPositionMiddle + 'px',
					'height': '450px',
				});
				rowItemElement.find('.style-carousel-overlay').css('background-color', 'rgba(0,0,0,0)')
			} else if (leftElement == leftPositionFourth) {
				rowItemElement.css({
					'z-index': '5',
					'left': leftPositionThird + 'px',
					'height': '350px',
				});
				rowItemElement.find('.style-carousel-overlay').css('background-color', 'rgba(0,0,0,0.65)')
			}
			console.log(i + ' - ' + '-----')
			console.log(i + ' - ' + '-----')
		}
		setTimeout(function () {
			$('.style-carousel-prev').removeAttr('disabled');
			intervalFacilityId = setInterval(function () {
				$('.style-carousel-prev').trigger('click');
			}, 3000);
		}, 500);
	});

	$('.style-carousel-next').on("click", function () {
		clearInterval(intervalFacilityId);
		$('.style-carousel-next').attr('disabled', 'disabled');
		var maxWidth = $('.style-item').width();
		var itemElement = $('.style-carousel-item');
		console.log(itemElement.length)
		for (i = 0; i < itemElement.length; i++) {
			var rowItemElement = itemElement.eq(i);
			var widthElement = Math.round(rowItemElement.width());
			var leftElement = Math.round(parseFloat(rowItemElement.css("left").replace("px", "")));
			var leftPositionFirst = 40;
			var leftPositionSecond = Math.round(40 + (widthElement * 0.55));
			var leftPositionMiddle = Math.round((maxWidth / 2) - (widthElement / 2));
			var leftPositionThird = Math.round(maxWidth - 40 - widthElement - (widthElement * 0.55));
			var leftPositionFourth = Math.round(maxWidth - 40 - widthElement);

			if (leftElement < leftPositionSecond) {
				console.log(i + ' - ' + leftPositionFirst)
				rowItemElement.css({
					'z-index': '5',
					'left': leftPositionSecond + 'px',
					'height': '350px'
				});
				rowItemElement.find('.style-carousel-overlay').css('background-color', 'rgba(0,0,0,0.65)')
			} else if (leftElement == leftPositionSecond) {
				console.log(i + ' - ' + leftPositionSecond)
				rowItemElement.css({
					'z-index': '10',
					'left': leftPositionMiddle + 'px',
					'height': '450px',
				});
				rowItemElement.find('.style-carousel-overlay').css('background-color', 'rgba(0,0,0,0)')
			} else if (leftElement == leftPositionMiddle) {
				console.log(i + ' - ' + leftPositionMiddle)
				rowItemElement.css({
					'z-index': '5',
					'left': leftPositionThird + 'px',
					'height': '350px'
				});
				rowItemElement.find('.style-carousel-overlay').css('background-color', 'rgba(0,0,0,0.65)')
			} else if (leftElement == leftPositionThird) {

				console.log(i + ' - ' + leftPositionThird)
				rowItemElement.css({
					'z-index': '1',
					'left': leftPositionFourth + 'px',
					'height': '300px'
				});
				rowItemElement.find('.style-carousel-overlay').css('background-color', 'rgba(0,0,0,0.65)')
			} else if (leftElement > leftPositionThird) {
				console.log(i + ' - ' + leftPositionFourth)
				rowItemElement.css({
					'z-index': '1',
					'left': leftPositionFirst + 'px',
					'height': '300px'
				});
				rowItemElement.find('.style-carousel-overlay').css('background-color', 'rgba(0,0,0,0.65)')
			}
			console.log(i + ' - ' + '-----')
			console.log(i + ' - ' + '-----')
		}
		setTimeout(function () {
			$('.style-carousel-next').removeAttr('disabled');
			intervalFacilityId = setInterval(function () {
				$('.style-carousel-prev').trigger('click');
			}, 3000);
		}, 1000);
	});
</script>

<script>
	$('#modalVehicle').on('hidden.bs.modal', function () {
		$('#modaVehicle360Tab').tab('show');
	});
</script>

@endsection
