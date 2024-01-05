@extends('layout.app')
@section('custom_css')
<link rel="stylesheet" href="{{ asset('css/custom/company-history.css') }}" type="text/css" />
<!-- AOS (Animate on Scroll) -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	
@endsection

@section('title')
<title>Sugity Creatives | Company History</title>
@endsection    

@section('content')
		<!-- Content
		============================================= -->
		<section id="content">
			<!-- parallax -->
			<div class="section style-paralax-3 section-image m-0 border-0 d-none d-lg-block"
				style="height: 750px; background-image: url('{{asset('images/parallax/parallax-company-profile.png')}}'); z-index: 10;"
				data-bottom-top="background-position:0px 200px;" data-top-bottom="background-position:0px -200px;">
				<div class="row" style="height: 100%;">
					<div class="col-md-10 col-lg-8 col-xl-6 col-xxl-5 px-5 pt-5"
						style="display: flex; justify-content: center; align-items: center;">
						<div data-aos="fade-right" data-aos-duration="1000" class="container px-5" style="height: 100%;">
							<h1 class="mt-0 title-text">Sugity Creatives</h1>
							<p style="line-height: 25px;">
								Sugity, founded in 1995 as a collaborative venture between Superior Coach and Toyota
								Auto Body, embarked on a transformative journey that witnessed our commitment to
								innovation and precision. In 1996, Sugity inaugurated the production of Kijang SCM and
								Resin & Painting Parts, followed by the assembly of Dyna and Heavy Cabin in 1997. The
								year 2012 marked the commencement of NAV1 Assembly, complemented by on-site production
								at TMMIN Karawang Plant from 2011.
								Our dedication to advancement took a notable stride in 1997 with the establishment of
								Extrusion, a venture that evolved into an entity known today as TTEC (Toyota Auto Body -
								Tokai Extrusion) in 2005. The year 2000 witnessed the initiation of Plating production,
								subsequently evolving into an enterprise known as RPT (Resin Plating Technology) in
								2013. Further enhancing our capabilities, we embraced in-house mold making in 2004,
								solidifying Sugity's legacy in the automotive landscape.
							</p>
						</div>
					</div>
				</div>
			</div>

			<div class="d-block d-lg-none" style="z-index: 10;">
				<div data-aos="fade-right" data-aos-duration="1000" class="container px-4" style="height: 100%;">
					<h1 class="mt-0 title-text pt-6">Sugity Creatives</h1>
					<p style="line-height: 25px;">
						Sugity, founded in 1995 as a collaborative venture between Superior Coach and Toyota Auto Body,
						embarked on a transformative journey that witnessed our commitment to innovation and precision.
						In 1996, Sugity inaugurated the production of Kijang SCM and Resin & Painting Parts, followed by
						the assembly of Dyna and Heavy Cabin in 1997. The year 2012 marked the commencement of NAV1
						Assembly, complemented by on-site production at TMMIN Karawang Plant from 2011.
						Our dedication to advancement took a notable stride in 1997 with the establishment of Extrusion,
						a venture that evolved into an entity known today as TTEC (Toyota Auto Body - Tokai Extrusion)
						in 2005. The year 2000 witnessed the initiation of Plating production, subsequently evolving
						into an enterprise known as RPT (Resin Plating Technology) in 2013. Further enhancing our
						capabilities, we embraced in-house mold making in 2004, solidifying Sugity's legacy in the
						automotive landscape.
					</p>
				</div>
				<div class="img-bg-about-us" style="background-image: url('{{asset('images/parallax/bg-about-us-mobile.png')}}'); "></div>
			</div>
			<!-- end parallax -->

			<!-- section new slider history -->
			<div class="container-fluid py-5 px-5 my-5 mx-0" style="position: relative;">
				<div class="style-bg-dot-slider"></div>
				<div class="style-slider-history">
					<div class="style-slider-header mb-4 mb-lg-5">
						<button class="style-item-header-button style-carousel-prev ms-auto" style="opacity: 0;"><i
								class="bi bi-arrow-left"></i></button>
						<div class="style-item-header-content">

							@foreach($uniqueYears as $year)

							<div class="style-item-title">
								<h2>{{$year}}</h2>
							</div>
							@endforeach

						</div>
						<button class="style-item-header-button style-carousel-next me-auto"><i
								class="bi bi-arrow-right"></i></button>
					</div>

					<div class="style-slider-content">

						@foreach($uniqueYears as $year)
							@if(count($history->data->$year) == 1)
								<div class="style-item-content row d-flex justify-content-center align-items-center m-0">
									<div class="col-md-10 col-lg-7 row d-flex justify-content-center align-items-center m-0">
										<div class="col-md-8">
											<img src='{{asset('images/brief-history/'.$history->data->$year[0]->img)}}' alt="...">
										</div>
										<div class="col-md-4 pt-2 pb-4">
											<h3 class="m-0">{{$history->data->$year[0]->title}}</h3>
										</div>
									</div>
								</div>
							@elseif(count($history->data->$year) > 4)
								<div class="style-item-content row d-flex justify-content-center align-items-center m-0">
									<div class="owl-carousel style-owl-carousel-history owl-theme" style="width: 90vw;">
								@foreach($history->data->$year as $item)
									<div class="item">
										<img src='{{asset('images/brief-history/'.$item->img)}}' alt="...">
										<h3 class="mt-2 m-0" align="center">{{$item->title}}</h3>
									</div>
								@endforeach
									</div>
								</div>
							@else
								
							@endif

						@endforeach
					</div>
				</div>
			</div>
	</div>
	<!-- end section slider history -->

	<!-- section slider history company -->
	<!-- <div class="row style-history style-bg-dot-orange py-5 ps-md-5 mt-5 mx-0">
				<div class="col-7 ps-lg-5 pe-5">
					<div class="style-custom-slider">
						<div class="style-item style-item-1">
							<img src="./asset/images/brief-history/1-whereitall.jpg" alt="...">
						</div>
						<div class="style-item style-item-2">
							<img src="./asset/images/brief-history/2-dynaassembly.jpg" alt="...">
						</div>
						<div class="style-item style-item-3">
							<img src="./asset/images/brief-history/3-rubberline-v2.png" alt="...">
						</div>
						<div class="style-item style-item-slider">
							<img src="./asset/images/brief-history/4-resin.png" alt="...">
						</div>
						<div class="style-item style-item-slider style-delay-1">
							<img src="./asset/images/brief-history/5-kijang.png" alt="...">
						</div>
						<div class="style-item style-item-slider style-delay-2">
							<img src="./asset/images/brief-history/6-ttec-v2.png" alt="...">
						</div>
						<div class="style-item style-item-slider style-delay-3">
							<img src="./asset/images/brief-history/7-mold.png" alt="...">
						</div>
						<div class="style-item style-item-slider style-delay-4">
							<img src="./asset/images/brief-history/8-dyna.jpg" alt="...">
						</div>
						<div class="style-item style-item-slider style-delay-5">
							<img src="./asset/images/brief-history/9-plant2.jpg" alt="...">
						</div>
						<div class="style-item style-item-slider style-delay-6">
							<img src="./asset/images/brief-history/10-nav.jpg" alt="...">
						</div>
						<div class="style-item style-item-slider style-delay-7">
							<img src="./asset/images/brief-history/11-rpt-v2.png" alt="...">
						</div>
						<div class="style-item style-item-slider style-delay-8">
							<img src="./asset/images/brief-history/12-hi-ace.png" alt="...">
						</div>
						<div class="style-item style-item-slider style-delay-9">
							<img src="./asset/images/brief-history/1-whereitall.jpg" alt="...">
						</div>
						<div class="style-item style-item-slider style-delay-10">
							<img src="./asset/images/brief-history/2-dynaassembly.jpg" alt="...">
						</div>
						<div class="style-item style-item-slider style-delay-11">
							<img src="./asset/images/brief-history/3-rubberline.png" alt="...">
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
							<p class="style-description m-0 pb-2 pb-md-4">TTEC Establish</p>
							<h2 class="style-title m-0 p-0">2005</h2>
						</div>
						<div class="style-item px-2 px-md-5 style-item-fade style-delay-3">
							<p class="style-description m-0 pb-2 pb-md-4">Mold Making</p>
							<h2 class="style-title m-0 p-0">2008</h2>
						</div>
						<div class="style-item px-2 px-md-5 style-item-fade style-delay-4">
							<p class="style-description m-0 pb-2 pb-md-4">Dyna Move To Hino</p>
							<h2 class="style-title m-0 p-0">2009</h2>
						</div>
						<div class="style-item px-2 px-md-5 style-item-fade style-delay-5">
							<p class="style-description m-0 pb-2 pb-md-4">On-site Resin - Painting part Production
								@Karawang Plant</p>
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
							<p class="style-description m-0 pb-2 pb-md-4">HiAce Conversion</p>
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
			</div> -->
	<!-- end section slider history company -->

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
	$('.style-owl-carousel-history').owlCarousel({
		loop: false,
		margin: 10,
		nav: true,
		dots: false,
		touchDrag: false,
		mouseDrag: false,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 3
			},
			1000: {
				items: 4
			}
		}
	})
</script>

<!-- Slider History -->
<script>
	let intervalHistoryId = null;

	let active = 0;
	let zIndexHistory = 3;
	let showSideHistory = 1;

	function checkWidthHistory() {
		let widthBody = $('body').width();
		if (widthBody <= 576) {
			showSideHistory = 0;
		} else {
			showSideHistory = 1;
		}
	}

	$(window).resize(function () {
		if (this.resizeTO) clearTimeout(this.resizeTO);
		clearInterval(intervalHistoryId);
		this.resizeTO = setTimeout(function () {
			checkWidthHistory();
			loadShowHistory();
		}, 300);
	});

	function loadShowHistory() {
		clearInterval(intervalHistoryId);
		$('.style-carousel-prev').attr('disabled', 'disabled');
		$('.style-carousel-next').attr('disabled', 'disabled');

		let items = document.querySelectorAll('.style-item-title');
		let itemElement = $('.style-item-title');
		let widthElement = Math.round(itemElement.width());
		let itemElementContent = document.querySelectorAll('.style-item-content');

		if (active == 0) {
			$('.style-carousel-prev').css("opacity", "0");
		} else {
			$('.style-carousel-prev').css("opacity", "1");
		}

		if (active == items.length - 1) {
			$('.style-carousel-next').css("opacity", "0");
		} else {
			$('.style-carousel-next').css("opacity", "1");
		}

		items[active].style.transform = `none`;
		items[active].style.zIndex = 10;
		items[active].style.opacity = 1;
		itemElementContent[active].style.opacity = 1;
		itemElementContent[active].style.zIndex = 10;

		// show after
		let stt = 0;
		for (var i = active + 1; i < items.length; i++) {
			stt++;
			items[i].style.transform = `translateX(${stt > showSideHistory + 1 ? 0 : widthElement * stt}px) scale(${1 - 0.4 * stt}) perspective(16px)`;
			items[i].style.zIndex = zIndexHistory - stt;
			items[i].style.opacity = stt > showSideHistory ? 0 : 0.4;
			itemElementContent[i].style.opacity = 0;
			itemElementContent[i].style.zIndex = 1;
		}
		stt = 0;
		for (var i = (active - 1); i >= 0; i--) {
			stt++;
			items[i].style.transform = `translateX(${stt > showSideHistory + 1 ? 0 : -widthElement * stt}px) scale(${1 - 0.4 * stt}) perspective(16px)`;
			items[i].style.zIndex = zIndexHistory - stt;
			items[i].style.opacity = stt > showSideHistory ? 0 : 0.4;
			itemElementContent[i].style.opacity = 0;
			itemElementContent[i].style.zIndex = 1;
		}

		setTimeout(function () {
			$('.style-carousel-prev').removeAttr('disabled');
			if (active < items.length - 1) {
				$('.style-carousel-next').removeAttr('disabled');
			}
			intervalHistoryId = setInterval(function () {
				$('.style-carousel-next').removeAttr('disabled');
				$('.style-carousel-next').trigger('click');
			}, active == items.length - 1 ? 12000 : 8000);
		}, 300);

	}

	checkWidthHistory();
	loadShowHistory();
	$('.style-carousel-prev').on("click", function (event) {
		active = active > 0 ? active - 1 : active;
		loadShowHistory();
	});
	$('.style-carousel-next').on("click", function (event) {
		let items = document.querySelectorAll('.style-item-title');
		if (active + 2 > items.length) {
			location.reload(true);
		} else {
			active = active + 1 < items.length ? active + 1 : active;
			loadShowHistory();
		}
	});
</script>

@endsection