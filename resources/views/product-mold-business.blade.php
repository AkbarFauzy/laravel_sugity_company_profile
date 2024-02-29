@extends('layout.app')
@section('custom_css')
<link rel="stylesheet" href="{{ asset('css/custom/product-mold-business.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ asset('css/custom/product.css') }}" type="text/css" />
@endsection

@section('title')
<title>Sugity Creatives | Products Mold</title>
@endsection

@section('content')
	<!-- Banner Slider
		============================================= -->
		<div class="owl-carousel owl-theme style-owl-banner-slider">
			@foreach($sliders->data as $slider)

			<div class="item min-vh-40 min-vh-md-50 min-vh-lg-60 min-vh-xl-100">
		    	{{-- Desktop --}}
				<div class="style-banner-content d-none d-xl-block">
					<div class="custom-banner mb-5" style="{!!\App\Http\Library\SliderHelper::slider_position($slider->position, $slider->x_offset, $slider->y_offset)!!}">
						{!!$slider->tagline!!}
					</div>
				</div>
            	{{-- Mobile --}}
				<div class="style-banner-content d-block d-sm-none">
					<div class="custom-banner mb-5" style="{!!\App\Http\Library\SliderHelper::slider_position($slider->position, $slider->x_offset, $slider->y_offset-6)!!}">
						{!!$slider->tagline!!}
					</div>
				</div>
				{{-- Tablet M --}}
				<div class="style-banner-content d-none d-md-block d-lg-none">
					<div class="custom-banner mb-5" style="{!!\App\Http\Library\SliderHelper::slider_position($slider->position, $slider->x_offset, $slider->y_offset-4)!!}">
						{!!$slider->tagline!!}
					</div>
				</div>
				{{-- Tablet L --}}
				<div class="style-banner-content d-none d-lg-block d-xl-none">
					<div class="custom-banner mb-5" style="{!!\App\Http\Library\SliderHelper::slider_position($slider->position, $slider->x_offset, $slider->y_offset-4)!!}">
						{!!$slider->tagline!!}
					</div>
				</div>
				<div class="style-banner-image style-banner-mold" style="background-image: url('{{asset("images/sliders/".$slider->img)}}'); background-size: cover !important;">
				</div>
			</div>

			@endforeach
		</div><!-- #Banner Slider end -->

		<!-- Content
		============================================= -->
		<section id="content" class="style-bg-dot mb-5 pb-5">
			<div class="container clearfix">
				<h1 class="fs-1 pt-5 text-center">Mold Business</h1>
			</div>
			<div class="container mb-5 pb-5">
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
												@if(!empty($item->left_content) || !empty($item->right_content) || !empty($item->gallery) )
												<a href= "#" style="color: black" class="text-left"
													data-bs-toggle="modal"
													data-bs-target="#modalVehicle"
													data-bs-id="{{$item->id}}"
												>Explore More <i class="fa-solid fa-chevron-right"></i>></a>
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
			<!-- Modal Vehicle -->
			<div class="modal style-modal style-modal-vehicle fade" id="modalVehicle" tabindex="-1"
			aria-labelledby="modalVehicleLabel" aria-hidden="true" role="dialog">
			<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
				<div class="modal-content">
					<div class="modal-body">

					</div>
				</div>
			</div>
			</div>
        </section>


@endsection
@section('custom_js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/impetus/0.8.8/impetus.min.js"
integrity="sha512-t+0a9kGXas/mQ/ClLjnTts9UsalckNQfEHhvr+JN/R4t2ql79Q7pK81a2ltfbGpY7Q17ibaGPhHKQDukM+qM2A=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{asset('js/custom/landing-page.js')}}"></script>
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
