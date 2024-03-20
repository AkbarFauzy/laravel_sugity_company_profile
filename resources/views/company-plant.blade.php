@extends('layout.app')
@section('custom_css')
<link rel="stylesheet" href="{{ asset('css/custom/company-plant.css') }}" type="text/css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

<!-- AOS (Animate on Scroll) -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	
@endsection

@section('title')
<title>Sugity Creatives | Company Plant</title>
@endsection


@section('content')
	<!-- Page Title
		============================================= -->
		{{-- <section id="page-title" class="page-title-dark"
			style="background-image: url('{{asset('images/background/background-company-plant.png')}}'); padding: 300px 0; background-size: cover; background-position:100% auto; background-repeat: no-repeat; background-position: center;">
			<div data-aos="fade-in" data-aos-duration="1000" class="container clearfix text-center">
				<h1 style="font-size: 80px;">Company Plant</h1>
			</div>
		</section> --}}
		{{-- Desktop --}}
		<section id="page-title" class="page-title-dark d-none d-xl-block"
            style="background-image: url('{{asset('images/background/background-company-plant.png')}}'); padding: 375px 0; background-repeat: no-repeat; background-attachment: fixed; background-position: center; z-index: 10; background-size: cover;">
            <div data-aos="fade-in" data-aos-duration="1000" class="container clearfix text-center">
                <h1 style="font-size: 80px;">{{ __('company-plant.header') }}</h1>
            </div>
        </section>
        {{-- Mobile --}}
        <section id="page-title" class="page-title-dark d-block d-sm-none"
            style="background-image: url('{{asset('images/background/background-company-plant-mobile.png')}}'); padding: 110px 0; margin-top: 70px; background-repeat: no-repeat; z-index: 10; background-size: cover; background-position: 50%;">
            <div data-aos="fade-in" data-aos-duration="1000" class="container clearfix text-center">
                <h1 style="font-size: 30px; margin-top: -50px">{{ __('company-plant.header') }}</h1>
            </div>
        </section>
        {{-- Tablet --}}
        <section id="page-title" class="page-title-dark d-none d-md-block d-lg-none"
            style="background-image: url('{{asset('images/background/background-company-plant.png')}}'); padding: 200px 0; margin-top: 70px; background-repeat: no-repeat; z-index: 10; background-size: cover; background-position: 50%;">
            <div data-aos="fade-in" data-aos-duration="1000" class="container clearfix text-center">
                <h1 style="font-size: 40px; margin-top: -70px">{{ __('company-plant.header') }}</h1>
            </div>
        </section>
        <section id="page-title" class="page-title-dark d-none d-lg-block d-xl-none"
            style="background-image: url('{{asset('images/background/background-company-plant.png')}}'); padding: 200px 0; margin-top: 65px; background-repeat: no-repeat; z-index: 10; background-size: cover; background-position: 50%;">
            <div data-aos="fade-in" data-aos-duration="1000" class="container clearfix text-center">
                <h1 style="font-size: 40px; margin-top: -70px">{{ __('company-plant.header') }}</h1>
            </div>
        </section>
	<!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">
			<div data-aos="fade-in" data-aos-duration="1000" class="container-fluid pt-3 pt-lg-4 pt-xl-5 pb-4 px-6">
				<h2 class="style-plant-title text-center text-md-start m-0">{{ __('company-plant.title') }}</h2>
			</div>
			<div class="container-fluid p-0">
				<div data-aos="fade-in" data-aos-duration="1000" class="style-plant-tab">
					<ul class="nav nav-pills row m-0 d-flex flex-row align-items-center justify-content-center pb-4"
						id="pills-tab" role="tablist">
						<li class="col-6 nav-item px-3" role="presentation">
							<button class="nav-link active ms-md-auto" id="pills-head-office-tab" data-bs-toggle="pill"
								data-bs-target="#pills-head-office" type="button" role="tab"
								aria-controls="pills-head-office" aria-selected="true">{{ __('company-plant.tabPlant1') }}</button>
						</li>
						<li class="col-6 nav-item px-3" role="presentation">
							<button class="nav-link" id="pills-karawang-tab" data-bs-toggle="pill"
								data-bs-target="#pills-karawang" type="button" role="tab" aria-controls="pills-karawang"
								aria-selected="false">{{ __('company-plant.tabPlant2') }}</button>
						</li>
					</ul>
					<div class="tab-content" id="pills-tabContent">
						<div class="tab-pane fade show active" id="pills-head-office" role="tabpanel"
							aria-labelledby="pills-head-office-tab" tabindex="0">
							<div class="row m-0 flex-md-row-reverse">
								<div class="col-md-6 p-3 p-md-0">
									<div class="style-tab-content-overlay d-none d-md-block"></div>
									<img src="{{asset('images/company-plant/cibitung.jpg')}}" class="style-tab-content-image"
										alt="">
								</div>
								<div class="col-md-6 p-3 ps-md-5">
									<div class="ps-md-4">
										<h3 class="style-plant-tab-title mb-4">
											{{ __('company-plant.titlePlant1') }}
										</h3>
										<p class="style-plant-tab-description mb-3">
											{{ __('company-plant.text1Plant1') }}
											<br><br>
											{{ __('company-plant.text2Plant1') }}
										</p>
										<div class="row">
											<div class="col-lg-6 p-2 d-flex align-items-center">
												<img src="{{asset('images/vector/vehicle assembly-v2.png')}}"
													class="style-plant-tab-icon" alt="">
												<p class="style-plant-tab-text m-0 ps-3">{{ __('company-plant.tIcon1Plant1') }}</p>
											</div>
											<div class="col-lg-6 p-2 d-flex align-items-center">
												<img src="{{asset('images/vector/automotive part-v2.png')}}"
													class="style-plant-tab-icon" alt="">
												<p class="style-plant-tab-text m-0 ps-3">{{ __('company-plant.tIcon2Plant1') }}</p>
											</div>
											<div class="col-lg-6 p-2 d-flex align-items-center">
												<img src="{{asset('images/vector/mold making-v2.png')}}"
													class="style-plant-tab-icon" alt="">
												<p class="style-plant-tab-text m-0 ps-3">{{ __('company-plant.tIcon3Plant1') }}</p>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div data-aos="fade-in" data-aos-duration="1000" class="float-left px-3 py-5 p-md-5">
								<div class="d-flex justify-content-center mb-md-2">
									<h2 class="fs-1 m-0 text-black text-center">{{ __('company-plant.facility') }}</h2>
								</div>
								<div class="d-flex justify-content-center mb-2">
									<p class="style-facility-desc fs-4 mb-0 text-dark text-center">{{ __('company-plant.tFacility1') }}</p>
									<p class="style-facility-desc fs-4 mb-0 text-dark text-center">{{ __('company-plant.tFacility2') }}</p>
									<p class="style-facility-desc fs-4 mb-0 text-dark text-center">{{ __('company-plant.tFacility3') }}</p>
									<p class="style-facility-desc fs-4 mb-0 text-dark text-center">{{ __('company-plant.tFacility4') }}</p>
									<p class="style-facility-desc fs-4 mb-0 text-dark text-center">{{ __('company-plant.tFacility5') }}</p>
									<p class="style-facility-desc fs-4 mb-0 text-dark text-center">{{ __('company-plant.tFacility6') }}</p>
									<p class="style-facility-desc fs-4 mb-0 text-dark text-center">{{ __('company-plant.tFacility7') }}</p>
									<!-- duplicate -->
									<p class="style-facility-desc fs-4 mb-0 text-dark text-center">{{ __('company-plant.tFacility1') }}</p>
									<p class="style-facility-desc fs-4 mb-0 text-dark text-center">{{ __('company-plant.tFacility2') }}</p>
									<p class="style-facility-desc fs-4 mb-0 text-dark text-center">{{ __('company-plant.tFacility3') }}</p>
									<p class="style-facility-desc fs-4 mb-0 text-dark text-center">{{ __('company-plant.tFacility4') }}</p>
									<p class="style-facility-desc fs-4 mb-0 text-dark text-center">{{ __('company-plant.tFacility5') }}</p>
									<p class="style-facility-desc fs-4 mb-0 text-dark text-center">{{ __('company-plant.tFacility6') }}</p>
									<p class="style-facility-desc fs-4 mb-0 text-dark text-center">{{ __('company-plant.tFacility7') }}</p>
								</div>
								<div class="style-carousel-facility">
									<div class="style-item">
										<div class="style-carousel-item">
											<img src="{{asset('images/company-plant/1 An-Nur Mosque.png')}}" alt="">
											<div class="style-carousel-overlay"></div>
										</div>
										<div class="style-carousel-item">
											<img src="{{asset('images/company-plant/2 Canteen.png')}}" alt="">
											<div class="style-carousel-overlay"></div>
										</div>
										<div class="style-carousel-item">
											<img src="{{asset('images/company-plant/4 Meeting Room.png')}}" alt="">
											<div class="style-carousel-overlay"></div>
										</div>
										<div class="style-carousel-item">
											<img src="{{asset('images/company-plant/5 Football Field.png')}}" alt="">
											<div class="style-carousel-overlay"></div>
										</div>
										<div class="style-carousel-item">
											<img src="{{asset('images/company-plant/6 SC Mart.png')}}" alt="">
											<div class="style-carousel-overlay"></div>
										</div>
										<div class="style-carousel-item">
											<img src="{{asset('images/company-plant/8 Lobby.png')}}" alt="">
											<div class="style-carousel-overlay"></div>
										</div>
										<div class="style-carousel-item">
											<img src="{{asset('images/company-plant/9 Education Center.png')}}" alt="">
											<div class="style-carousel-overlay"></div>
										</div>
										<!-- Duplicate -->
										<div class="style-carousel-item">
											<img src="{{asset('images/company-plant/1 An-Nur Mosque.png')}}" alt="">
											<div class="style-carousel-overlay"></div>
										</div>
										<div class="style-carousel-item">
											<img src="{{asset('images/company-plant/2 Canteen.png')}}" alt="">
											<div class="style-carousel-overlay"></div>
										</div>
										<div class="style-carousel-item">
											<img src="{{asset('images/company-plant/4 Meeting Room.png')}}" alt="">
											<div class="style-carousel-overlay"></div>
										</div>
										<div class="style-carousel-item">
											<img src="{{asset('images/company-plant/5 Football Field.png')}}" alt="">
											<div class="style-carousel-overlay"></div>
										</div>
										<div class="style-carousel-item">
											<img src="{{asset('images/company-plant/6 SC Mart.png')}}" alt="">
											<div class="style-carousel-overlay"></div>
										</div>
										<div class="style-carousel-item">
											<img src="{{asset('images/company-plant/8 Lobby.png')}}" alt="">
											<div class="style-carousel-overlay"></div>
										</div>
										<div class="style-carousel-item">
											<img src="{{asset('images/company-plant/9 Education Center.png')}}" alt="">
											<div class="style-carousel-overlay"></div>
										</div>
									</div>
									<div class="style-nav">
										<button class="style-carousel-prev"><i class="bi bi-arrow-left"></i></button>
										<button class="style-carousel-next"><i class="bi bi-arrow-right"></i></button>
									</div>
								</div>

								<!-- <div id="carouselExample"
									class="carousel slide style-plant-carousel px-5 d-block d-md-none">
									<div class="carousel-inner">
										<div class="carousel-item active">
											<div class="carousel-caption">
												<p>An-Nur Mosque</p>
											</div>
											<img src="./asset/images/company-plant/1 An-Nur Mosque.png"
												class="d-block w-100" alt="...">
										</div>
										<div class="carousel-item">
											<div class="carousel-caption">
												<p>Canteen</p>
											</div>
											<img src="./asset/images/company-plant/2 Kantin.png" class="d-block w-100"
												alt="...">
										</div>
										<div class="carousel-item">
											<div class="carousel-caption">
												<p>Employee Parking Lot</p>
											</div>
											<img src="./asset/images/company-plant/3 Parking Lot Employee.png"
												class="d-block w-100" alt="...">
										</div>
										<div class="carousel-item">
											<div class="carousel-caption">
												<p>Lobby</p>
											</div>
											<img src="./asset/images/company-plant/4 Lobby Sugity.png"
												class="d-block w-100" alt="...">
										</div>
										<div class="carousel-item">
											<div class="carousel-caption">
												<p>Education Center</p>
											</div>
											<img src="./asset/images/company-plant/5 Education Center.png"
												class="d-block w-100" alt="...">
										</div>
									</div>
									<button class="carousel-control-prev" type="button"
										data-bs-target="#carouselExample" data-bs-slide="prev">
										<i class="bi bi-arrow-left"></i>
									</button>
									<button class="carousel-control-next" type="button"
										data-bs-target="#carouselExample" data-bs-slide="next">
										<i class="bi bi-arrow-right"></i>
									</button>
								</div> -->
							</div>

						</div>
						<div class="tab-pane fade" id="pills-karawang" role="tabpanel"
							aria-labelledby="pills-karawang-tab" tabindex="0">
							<div class="row m-0 flex-md-row-reverse">
								<div class="col-md-6 p-3 p-md-0">
									<div class="style-tab-content-overlay d-none d-md-block"></div>
									<img src="{{asset('images/company-plant/karawang.jpg')}}" class="style-tab-content-image"
										alt="">
								</div>
								<div data-aos="fade-in" data-aos-duration="1000" class="col-md-6 p-3 ps-md-5">
									<div class="ps-md-4">
										<h3 class="style-plant-tab-title mb-4">
											{{ __('company-plant.titlePlant2') }}
										</h3>
										<p class="style-plant-tab-description mb-3">
											{{ __('company-plant.text1Plant2') }}
											<br><br>
											{{ __('company-plant.text2Plant2') }}
										</p>
										<div class="row">
											<div class="col-md-12 p-2 d-flex align-items-center">
												<img src="{{asset('images/vector/automotive part-v2.png')}}"
													class="style-plant-tab-icon" alt="">
												<p class="style-plant-tab-text m-0 ps-3">{{ __('company-plant.tIcon1Plant2') }}</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div data-aos="fade-in" data-aos-duration="1000" class="style-plant-map-head-office">
				<iframe
					src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.70343392833!2d107.0815717!3d-6.3026424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6990171da13103%3A0x79ddfe115a7491d0!2sPT%20Sugity%20Creatives!5e0!3m2!1sid!2sid!4v1701094302109!5m2!1sid!2sid"
					height="450" style="border:0;" allowfullscreen="" loading="lazy"
					referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>

			<div class="style-plant-map-karawang pt-5">
				<iframe
					src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3965.2824481928865!2d107.2918042!3d-6.3574746!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e697602f550b325%3A0x7e16e18329a7a0c0!2sPT.%20Sugity%20Creatives%20Plant%202!5e0!3m2!1sid!2sid!4v1701094330651!5m2!1sid!2sid"
					height="450" style="border:0;" allowfullscreen="" loading="lazy"
					referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>

		</section><!-- #content end -->
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

<script>
	let intervalFacilityId = null;

	let active = 9;
	let activeDesc = 9;
	let zIndexFacility = 3;
	let showSideFacility = 2;

	function checkWidthFacility() {
		let widthBody = $('body').width();
		if (widthBody <= 576) {
			showSideFacility = 0;
		} else if (widthBody <= 992) {
			showSideFacility = 1;
		} else {
			showSideFacility = 2;
		}
	}

	$(window).resize(function () {
		if (this.resizeTO) clearTimeout(this.resizeTO);
		clearInterval(intervalFacilityId);
		this.resizeTO = setTimeout(function () {
			checkWidthFacility();
			loadShowFacility();
		}, 300);
	});

	function loadShowFacility() {
		clearInterval(intervalFacilityId);
		$('.style-carousel-prev').attr('disabled', 'disabled');
		$('.style-carousel-next').attr('disabled', 'disabled');
		let items = document.querySelectorAll('.style-carousel-item');
		let itemElementDesc = $('.style-facility-desc');
		let itemElement = $('.style-carousel-item');
		let halfWidthElement = 0.5 * Math.round(itemElement.width());

		items[active].style.transform = `none`;
		items[active].style.zIndex = 10;
		items[active].style.opacity = 1;
		itemElement.eq(active).find('.style-carousel-overlay').css('background-color', 'rgba(0,0,0,0)');
		itemElementDesc.eq(activeDesc).css('opacity', '1');

		// show after
		let stt = 0;
		for (var i = active + 1; i < items.length; i++) {
			stt++;
			items[i].style.transform = `translateX(${stt > (showSideFacility + 1) ? 0 : (halfWidthElement) * stt}px) scale(${1 - 0.2 * stt}) perspective(16px)`;
			items[i].style.zIndex = zIndexFacility - stt;
			items[i].style.opacity = stt > showSideFacility ? 0 : 1;
			itemElement.eq(i).find('.style-carousel-overlay').css('background-color', 'rgba(0,0,0,0.65)');
		}
		stt = 0;
		for (var i = (active - 1); i >= 0; i--) {
			stt++;
			items[i].style.transform = `translateX(${stt > (showSideFacility + 1) ? 0 : -(halfWidthElement) * stt}px) scale(${1 - 0.2 * stt}) perspective(16px)`;
			items[i].style.zIndex = zIndexFacility - stt;
			items[i].style.opacity = stt > showSideFacility ? 0 : 1;
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
			intervalFacilityId = setInterval(function () {
				$('.style-carousel-next').trigger('click');
			}, 3000);
		}, 300);
	}

	checkWidthFacility();
	loadShowFacility();
	$('.style-carousel-prev').on("click", function (event) {
		let items = document.querySelectorAll('.style-carousel-item');
		$('.style-item').prepend($('.style-carousel-item').eq(items.length - 1));
		// active = active + 1 < items.length ? active + 1 : active;

		let itemElementDesc = $('.style-facility-desc');
		activeDesc = activeDesc == 0 ? itemElementDesc.length - 1 : activeDesc - 1;
		loadShowFacility();
	});
	$('.style-carousel-next').on("click", function (event) {
		$('.style-item').append($('.style-carousel-item').eq(0))
		// active = active - 1 >= 0 ? active - 1 : active;

		let itemElementDesc = $('.style-facility-desc');
		activeDesc = activeDesc == itemElementDesc.length - 1 ? 0 : activeDesc + 1;
		loadShowFacility();
	});

	// Map
	$(document).ready(function () {
		$('.style-plant-map-karawang').hide();
	})
	const triggerTabList = document.querySelectorAll('#pills-tab button')
	triggerTabList.forEach(triggerEl => {
		const headOfficeDiv = $('.style-plant-map-head-office');
		const karawangDiv = $('.style-plant-map-karawang');

		triggerEl.addEventListener('click', event => {
			// event.preventDefault()
			if (event.target.id == 'pills-head-office-tab') {
				headOfficeDiv.show()
				karawangDiv.hide()
			} else {
				headOfficeDiv.hide()
				karawangDiv.show()
			}
			// loadShowFacility();
		})
	})
</script>



@endsection

