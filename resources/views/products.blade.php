@extends('layout.app')
@section('custom_css')
<link rel="stylesheet" href="{{ asset('css/custom/product.css') }}" type="text/css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
@endsection

@section('title')
<title>Sugity Creatives | Products</title>
@endsection

@section('content')
		<!-- Banner Slider
		============================================= -->
		<div class="owl-carousel owl-theme style-owl-banner-slider">
			<div class="item min-vh-100 min-vh-md-100">
				<!-- <h2 class="style-banner-title style-title-short">PRIDE of Team.</h2> -->
				<div class="style-banner-content slide-1">
					<div>
						<p class="first-text-slider-product mb-0">Gran Max Wira-Wiri Surabaya</p>
						<p class="second-text-slider-product mt-0 text-center"><i>Spacious & Comfort</i></p>
					</div>
				</div>
				<div class="style-banner-image" style="background-image: url('{{asset('images/slider/1.png')}}');">
				</div>
			</div>
			<div class="item min-vh-100 min-vh-md-100 slide-2">
				<!-- <h2 class="style-banner-title style-title-short">PRIDE of Team.</h2> -->
				<div class="style-banner-content slide-2">
					<!-- <p class="first-text-slider-product mb-0">Gran Max Wira-Wiri Surabaya</p> -->
					<p class="second-text-slider-product mt-0"><i>Proficient and Agile</i></p>
				</div>
				<div class="style-banner-image" style="background-image: url('{{asset('images/slider/2.png')}}');">
				</div>
			</div>
			<div class="item min-vh-100 min-vh-md-100">
				<!-- <h2 class="style-banner-title style-title-short">PRIDE of Work.</h2> -->
				<div class="style-banner-content slide-3">
					<!-- <p class="first-text-slider-product mb-0">Gran Max Wira-Wiri Surabaya</p> -->
					<p class="second-text-slider-product mt-0"><i>Quality and Precious</i></p>
				</div>
				<div class="style-banner-image" style="background-image: url('{{asset('images/slider/3.png')}}');">
				</div>
			</div>
		</div><!-- #Banner Slider end -->
		<!-- <br><br> -->


		<!-- Content
		============================================= -->
		<section id="content" class="style-background-vector">
			<div class="container clearfix">
				<h1 class="fs-1 pt-5 text-center" style="color: #000000;">Explore Our Product</h1>
			</div>
			<div class="container">
				<div class="tabs tabs-bb clearfix" id="tab-9">

					<ul class="tab-nav clearfix mb-4" style="justify-content: center;">
						<li><a href="#tabs-all" class="text-size-sm">All</a></li>
						<li><a href="#tabs-vehicle" class="text-size-sm">Vehicle</a></li>
						<li><a href="#tabs-part" class="text-size-sm">Part</a></li>
						<li><a href="#tabs-mold" class="text-size-sm">Mold</a></li>
					</ul>

					<div class="tab-container">

						<!-- tab all -->
						<div class="tab-content clearfix" id="tabs-all">
							<div class="style-section-product-overview">
								<div class="row">
									@foreach ($products->data as $item)
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="{{asset('images/products/'.$item->img)}}" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">{{$item->name}}
													<br><br>
													<a style="color: black" class="text-left" data-bs-toggle="modal" 
													data-bs-target="#modalVehicle" data-bs-id={{$item->id}}>
													Explore More <i class="fa-solid fa-chevron-right"></i>
													</a>
											</div>
										</div>
									</div>
									@endforeach
								</div>
							</div>
						</div>
						<!-- tab vehicle -->
						<div class="tab-content clearfix" id="tabs-vehicle">
							<div class="style-section-product-overview">
								<div class="row">
									@foreach($vehicles->data as $vehicle)
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="{{asset('images/products/'.$vehicle->img)}}" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">{{$vehicle->name}}
													<br><br>
													<a style="color: black" class="text-left" href="#" 
													data-bs-toggle="modal" 
													data-bs-target="#modalVehicle"
													data-bs-id={{$vehicle->id}}
													>Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									@endforeach								
								</div>
							</div>
						</div>

						<!-- tab part -->
						<div class="tab-content clearfix" id="tabs-part">
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
												data-bs-target="#modalPart"
												data-bs-id={{$part->id}}
												>Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									@endforeach
								</div>
							</div>
						</div>

						<!-- tab mold -->
						<div class="tab-content clearfix" id="tabs-mold">
							<!-- sec 1 -->
							<div class="style-section-product-overview">
								<div class="row">
									@foreach($mold->data as $item)
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="{{asset('images/products/'.$item->img)}}"
												style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer">
												<h4 class="text-left mt-4" style="color: black">{{$item->name}}
													<br>
													{{-- (1300Ton-3500Ton) --}}
													<br><br>
													<a style="color: black" class="text-left" href="#"
														data-bs-toggle="modal" data-bs-target="#modalMold" data-bs-id={{$part->id}}>Explore
														More <i class="fa-solid fa-chevron-right"></i>></a>
												</h4>
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

<!-- Modal Part -->
<div class="modal style-modal style-modal-part fade" id="modalPart" tabindex="-1" aria-labelledby="modalPartLabel"
aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
	<div class="modal-content">
		<div class="modal-body">
			<div align="right">
				<button type="button" class="style-btn-close" data-bs-dismiss="modal" aria-label="Close"><i
						class="bi bi-x"></i></button>
			</div>
			<h2 class="modal-title style-title pt-4 text-center" id="modalPartLabel">Explore Register</h2>
			<div class="container pt-3 pb-5" align="center">
				<div class="col-lg-7">
					<div id="carouselModalPart"
						class="carousel carousel-dark style-carousel-modal style-carousel-modal-part slide">
						<div class="carousel-inner px-5">
							<div class="carousel-item active">
								<img src="asset/images/product/modal/part/part_1.png" class="d-block w-100"
									alt="...">
							</div>
							<div class="carousel-item">
								<img src="asset/images/product/modal/part/part_2.png" class="d-block w-100"
									alt="...">
							</div>
							<div class="carousel-item">
								<img src="asset/images/product/modal/part/part_3.png" class="d-block w-100"
									alt="...">
							</div>
							<div class="carousel-item">
								<img src="asset/images/product/modal/part/part_4.png" class="d-block w-100"
									alt="...">
							</div>
							<div class="carousel-item">
								<img src="asset/images/product/modal/part/part_5.png" class="d-block w-100"
									alt="...">
							</div>
						</div>
						<button class="carousel-control-prev" type="button" data-bs-target="#carouselModalPart"
							data-bs-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Previous</span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#carouselModalPart"
							data-bs-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Next</span>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

<!-- Modal Mold -->
<div class="modal style-modal style-modal-mold fade" id="modalMold" tabindex="-1" aria-labelledby="modalMoldLabel"
aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
	<div class="modal-content">
		<div class="modal-body">
			<div align="right">
				<button type="button" class="style-btn-close" data-bs-dismiss="modal" aria-label="Close"><i
						class="bi bi-x"></i></button>
			</div>
			<h2 class="modal-title style-title text-center" id="modalMoldLabel">Small Mold (30Ton-175Ton)</h2>
			<div class="container pt-3 pb-5" align="center">
				<div class="col-lg-7">
					<div id="carouselModalMold"
						class="carousel carousel-dark style-carousel-modal style-carousel-modal-mold slide">
						<div class="carousel-inner px-5">
							<div class="carousel-item active">
								<img src="asset/images/product/modal/mold/mold_1.png" class="d-block w-100"
									alt="...">
							</div>
							<div class="carousel-item">
								<img src="asset/images/product/modal/mold/mold_1.png" class="d-block w-100"
									alt="...">
							</div>
						</div>
						<button class="carousel-control-prev" type="button" data-bs-target="#carouselModalMold"
							data-bs-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Previous</span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#carouselModalMold"
							data-bs-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Next</span>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>



@endsection

@section('custom_js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/impetus/0.8.8/impetus.min.js"
integrity="sha512-t+0a9kGXas/mQ/ClLjnTts9UsalckNQfEHhvr+JN/R4t2ql79Q7pK81a2ltfbGpY7Q17ibaGPhHKQDukM+qM2A=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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
</script>

<script>
	let intervalDiscoverId = null;

	let active = 3;
	let activeDesc = 3;
	let zIndexDiscover = 2;
	let showSideDiscover = 1;

	function checkWidthDiscover() {
		let widthBody = $('body').width();
		if (widthBody <= 576) {
			showSideDiscover = 0;
		} else if (widthBody <= 992) {
			showSideDiscover = 1;
		} else {
			showSideDiscover = 1;
		}
	}

	$(window).resize(function () {
		if (this.resizeTO) clearTimeout(this.resizeTO);
		clearInterval(intervalDiscoverId);
		this.resizeTO = setTimeout(function () {
			checkWidthDiscover();
			loadShowDiscover();
		}, 300);
	});

	function loadShowDiscover() {
		clearInterval(intervalDiscoverId);
		$('.style-carousel-prev').attr('disabled', 'disabled');
		$('.style-carousel-next').attr('disabled', 'disabled');
		let items = document.querySelectorAll('.style-carousel-item');
		let itemElementDesc = $('.style-discover-desc');
		let itemElement = $('.style-carousel-item');
		let halfWidthElement = 0.52 * Math.round(itemElement.width());

		items[active].style.transform = `none`;
		items[active].style.zIndex = 10;
		items[active].style.opacity = 1;
		itemElement.eq(active).find('.style-carousel-overlay').css('background-color', 'rgba(0,0,0,0)');
		itemElementDesc.eq(activeDesc).css('opacity', '1');

		// show after
		let stt = 0;
		for (var i = active + 1; i < items.length; i++) {
			stt++;
			items[i].style.transform = `translateX(${stt > (showSideDiscover + 1) ? 0 : (halfWidthElement) * stt}px) scale(${1 - 0.2 * stt}) perspective(16px)`;
			items[i].style.zIndex = zIndexDiscover - stt;
			items[i].style.opacity = stt > showSideDiscover ? 0 : 1;
			itemElement.eq(i).find('.style-carousel-overlay').css('background-color', 'rgba(0,0,0,0.65)');
		}
		stt = 0;
		for (var i = (active - 1); i >= 0; i--) {
			stt++;
			items[i].style.transform = `translateX(${stt > (showSideDiscover + 1) ? 0 : -(halfWidthElement) * stt}px) scale(${1 - 0.2 * stt}) perspective(16px)`;
			items[i].style.zIndex = zIndexDiscover - stt;
			items[i].style.opacity = stt > showSideDiscover ? 0 : 1;
			itemElement.eq(i).find('.style-carousel-overlay').css('background-color', 'rgba(0,0,0,0.65)');
		}

		for (var i = activeDesc + 1; i < itemElementDesc.length; i++) {
			itemElementDesc.eq(i).css('opacity', '0');
		}
		for (var i = (activeDesc - 1); i >= 0; i--) {
			itemElementDesc.eq(i).css('opacity', '0');
		}

		setTimeout(function () {
			$('.style-carousel-prev').removeAttr('disabled');
			$('.style-carousel-next').removeAttr('disabled');
			intervalDiscoverId = setInterval(function () {
				$('.style-carousel-next').trigger('click');
			}, 3000);
		}, 300);
	}

	checkWidthDiscover();
	loadShowDiscover();
	$('.style-carousel-prev').on("click", function (event) {
		let items = document.querySelectorAll('.style-carousel-item');
		$('.style-item').prepend($('.style-carousel-item').eq(items.length - 1));
		// active = active + 1 < items.length ? active + 1 : active;

		let itemElementDesc = $('.style-discover-desc');
		activeDesc = activeDesc == 0 ? itemElementDesc.length - 1 : activeDesc - 1;
		loadShowDiscover();
	});
	$('.style-carousel-next').on("click", function (event) {
		$('.style-item').append($('.style-carousel-item').eq(0))
		// active = active - 1 >= 0 ? active - 1 : active;

		let itemElementDesc = $('.style-discover-desc');
		activeDesc = activeDesc == itemElementDesc.length - 1 ? 0 : activeDesc + 1;
		loadShowDiscover();
	});
</script>

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

<!-- 360 VIewer -->
<script>
	//	build scene
	let loaded = 0;
	let countImage = 43;
	const content360 = document.querySelector('.style-content-360');
	const viewer = document.querySelector('.viewer');
	const images = [];
	for (let i = 1; i <= countImage; ++i) {
		const img = new Image();
		img.src = `./asset/images/product/product-360/medical-mover/` + i + `.png`;
		images.push(img);
		viewer.appendChild(img);
	}

	//	rotation handler
	//	http://chrisbateman.github.io/impetus/
	//	https://github.com/chrisbateman/impetus
	const threshold = 10;
	const total = images.length - 1;
	let frame = 38;
	const impetus = new Impetus({
		source: document,
		update(x) {
			// console.log(x)
			images[frame].classList.remove('active')
			frame = Math.floor(-x / threshold) % total;
			frame = frame <= 0 ? total + frame : frame;
			images[frame].classList.add('active');
		}
	});
	images[frame].classList.add('active');

	//	cursor
	addEventListener('mousedown', e => content360.style.cursor = 'grabbing');
	addEventListener('mouseup', e => content360.style.cursor = 'grab');
</script>

@endsection