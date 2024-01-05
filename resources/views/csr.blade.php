@extends('layout.app')
@section('custom_css')
<link rel="stylesheet" href="{{ asset('css/custom/csr.css') }}" type="text/css" />
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	
@endsection

@section('title')
<title>Sugity Creatives | CSR</title>
@endsection

@section('content')
	<!-- Banner Slider
		============================================= -->
		<div class="owl-carousel owl-theme style-owl-banner-slider">
			<div class="item min-vh-75 min-vh-md-75">
				<div class="style-banner-content">
					<p class="style-date-slider">November 11, 2023</p>
					<p class="style-title-slider">Planting 45,000 Mangrove Trees in Muara Gembong</p>
					<p class="style-desc-slider">Continued planting mangrove trees in Kampung Beting, Pantai Bahagia Village, Muaragembong District</p>
				</div>
				<div class="style-banner-image" style="background-image: url('{{asset('images/slider/csr/1.png')}}');">
				</div>
			</div>
			<div class="item min-vh-75 min-vh-md-75">
				<div class="style-banner-content">
					<p class="style-date-slider">June 28, 2023</p>
					<p class="style-title-slider">Handover of Qurban Animals to Jamiul Khoir Mosque, Rawajulang</p>
					<p class="style-desc-slider">Submission of Sacrificial Animals to the Jamiul Khoir Rrawajulang Mosque by Sugity</p>
				</div>
				<div class="style-banner-image" style="background-image: url('{{asset('images/slider/csr/2.png')}}');">
				</div>
			</div>
			<div class="item min-vh-75 min-vh-md-75">
				<div class="style-banner-content">
					<p class="style-date-slider">January 21, 2023</p>
					<p class="style-title-slider">Ehon Literacy Space</p>
					<p class="style-desc-slider">PT Sugity Creatives held an Early Childhood Literacy Space program</p>
				</div>
				<div class="style-banner-image" style="background-image: url('{{asset('images/slider/csr/3.png')}}');">
				</div>
			</div>
		</div><!-- #Banner Slider end -->

		<!-- Content
		============================================= -->
		<section id="content">
			<!-- latest event section -->
			<div class="style-latest-event-section style-background-csr-1 py-5">
				<div data-aos="fade-in" data-aos-duration="1000" class="text-center py-4 py-md-5">
					<h2 class="style-header m-0">Discover Our Latest Event</h2>
				</div>
				<div class="container">
					<div id="carouselLatestEvent" class="carousel slide style-carousel">
						<div data-aos="fade-in" data-aos-duration="1000" class="carousel-inner">
							<div class="carousel-item active">
								<div class="row m-0 style-carousel-item">
									<div class="col-md-6 p-4" style="z-index: 11;">
										<div class="style-carousel-content">
											<img class="img-fluid d-block d-md-none" src="{{asset('images/csr/event_1.jpg')}}"
												alt="...">
											<div class="p-4 p-md-0">
												<h3 class="style-title pb-2 pe-xl-5 m-0">Planting 45,000 Mangrove Trees</h3>
												<p class="style-subtitle pb-4 pe-xl-5 mb-2">Against the backdrop of the current global issue of increasing CO2 emissions and the local environmental concern of coastal abrasion in the Bekasi region, there is a need for tangible activities that can contribute to the environment, biodiversity, and the socio-economic well-being of the surrounding community. One such initiative is being undertaken by TAB Group Indonesia (SUGITY, TTEC, RPT), which involves the ongoing planting of mangrove trees in Kampung Beting, Desa Pantai Bahagia...</p>
												<a href="#" class="style-button">Read More <i
														class="bi bi-chevron-right"></i></a>
											</div>
										</div>
									</div>
									<div class="col-md-6 p-0">
										<img class="style-carousel-image d-none d-md-block"
											src="{{asset('images/csr/event_1.jpg')}}" alt="...">
										<div class="style-carousel-nav mx-auto mx-md-0">
											<button class="carousel-control-prev" type="button"
												data-bs-target="#carouselLatestEvent" data-bs-slide="prev">
												<i class="bi bi-arrow-left"></i>
											</button>
											<button class="carousel-control-next" type="button"
												data-bs-target="#carouselLatestEvent" data-bs-slide="next">
												<i class="bi bi-arrow-right"></i>
											</button>
										</div>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="row m-0 style-carousel-item">
									<div class="col-md-6 p-4" style="z-index: 11;">
										<div class="style-carousel-content">
											<img class="img-fluid d-block d-md-none" src="{{asset('images/csr/event_2.jpg')}}"
												alt="...">
											<div class="p-4 p-md-0">
												<h3 class="style-title pb-2 pe-xl-5 m-0">Handover of Qurban Animals</h3>
												<p class="style-subtitle pb-4 pe-xl-5 mb-2">Every year, Sugity carries out its Corporate Social Responsibility (CSR) program in the religious domain, specifically in the form of animal sacrifice donations. This initiative serves as a manifestation of social responsibility towards the surrounding community, with benefits that can be felt by the local residents. This year, Sugity donated a total of 2 cows, distributed in the vicinity of Sugity's locations in Cibitung and Karawang. In his address, Mr. Suzuki, the President Director of Sugity, conveyed the following...</p>
												<a href="#" class="style-button">Read More <i
														class="bi bi-chevron-right"></i></a>
											</div>
										</div>
									</div>
									<div class="col-md-6 p-0">
										<img class="style-carousel-image d-none d-md-block"
											src="{{asset('images/csr/event_2.jpg')}}" alt="...">
										<div class="style-carousel-nav mx-auto mx-md-0">
											<button class="carousel-control-prev" type="button"
												data-bs-target="#carouselLatestEvent" data-bs-slide="prev">
												<i class="bi bi-arrow-left"></i>
											</button>
											<button class="carousel-control-next" type="button"
												data-bs-target="#carouselLatestEvent" data-bs-slide="next">
												<i class="bi bi-arrow-right"></i>
											</button>
										</div>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="row m-0 style-carousel-item">
									<div class="col-md-6 p-4" style="z-index: 11;">
										<div class="style-carousel-content">
											<img class="img-fluid d-block d-md-none" src="{{asset('images/csr/event_3.jpg')}}"
												alt="...">
											<div class="p-4 p-md-0">
												<h3 class="style-title pb-2 pe-xl-5 m-0">Ehon Literacy Space</h3>
												<p class="style-subtitle pb-4 pe-xl-5 mb-2">To foster a culture of reading interest among children, SUGITY collaborates with the COMMUNITY READING FORUM to organize drawing and storytelling competitions for children aged 4 to 7. The theme of the event is inspired by the picture books (EHON) created by Motoko Matsuda. Through this activity, it is hoped that the children of employees and the local community can develop a strong passion for reading from an early age...</p>
												<a href="#" class="style-button">Read More <i
														class="bi bi-chevron-right"></i></a>
											</div>
										</div>
									</div>
									<div class="col-md-6 p-0">
										<img class="style-carousel-image d-none d-md-block"
											src="{{asset('images/csr/event_3.jpg')}}" alt="...">
										<div class="style-carousel-nav mx-auto mx-md-0">
											<button class="carousel-control-prev" type="button"
												data-bs-target="#carouselLatestEvent" data-bs-slide="prev">
												<i class="bi bi-arrow-left"></i>
											</button>
											<button class="carousel-control-next" type="button"
												data-bs-target="#carouselLatestEvent" data-bs-slide="next">
												<i class="bi bi-arrow-right"></i>
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end lates event section -->

			<!-- csr activity section -->
			<div class="style-csr-activity-section style-background-csr-2 pb-5">
				<div data-aos="fade-in" data-aos-duration="1000" class="text-center py-4 py-md-5">
					<h2 class="style-header m-0">CSR Activity in Sugity Creatives</h2>
				</div>
				<div class="container">
					<div id="carouselCsrActivity" class="carousel slide style-carousel">
						<div data-aos="fade-in" data-aos-duration="1000" class="carousel-inner">
							<div class="carousel-item active">
								<div class="row flex-column-reverse flex-md-row m-0 style-carousel-item">
									<div class="col-md-6 p-0">
										<img class="style-carousel-image d-none d-md-block"
											src="{{asset('images/csr/activity_1.jpg')}}" alt="...">
										<div class="style-carousel-nav mx-auto ms-md-auto me-md-0">
											<button class="carousel-control-prev" type="button"
												data-bs-target="#carouselCsrActivity" data-bs-slide="prev">
												<i class="bi bi-arrow-left"></i>
											</button>
											<button class="carousel-control-next" type="button"
												data-bs-target="#carouselCsrActivity" data-bs-slide="next">
												<i class="bi bi-arrow-right"></i>
											</button>
										</div>
									</div>
									<div class="col-md-6 p-4" style="z-index: 11;">
										<div class="style-carousel-content">
											<img class="img-fluid d-block d-md-none"
												src="{{asset('images/csr/activity_1.jpg')}}" alt="...">
											<div class="p-4 p-md-0">
												<h3 class="style-title pb-2 pe-xl-5 m-0">Muara Gembong Mangrove Forest</h3>
												<p class="style-subtitle pb-4 pe-xl-5 mb-2">
													On December 17, 2022, SUGITY conducted a tree planting ceremony at Pantai Bahagia, Muara Gembong, Bekasi. The planting initiative was driven by the region's vulnerability to submersion due to coastal erosion, necessitating preventive measures such as tree planting. The activity is planned to take place from 2022 to 2024, with a target of planting a total of 45,000 Mangrove trees. It is hoped that this undertaking will help curb the rate of erosion and enhance the economic well-being of the local community.

													Merit activity: The event received a positive response from the local community and the regional government (PEMDA), resulting in coverage by five local media outlets.
												</p>
												<a href="#" class="style-button">Read More <i class="bi bi-chevron-right"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="row flex-column-reverse flex-md-row m-0 style-carousel-item">
									<div class="col-md-6 p-0">
										<img class="style-carousel-image d-none d-md-block"
											src="{{asset('images/csr/activity_2.jpg')}}" alt="...">
										<div class="style-carousel-nav mx-auto ms-md-auto me-md-0">
											<button class="carousel-control-prev" type="button"
												data-bs-target="#carouselCsrActivity" data-bs-slide="prev">
												<i class="bi bi-arrow-left"></i>
											</button>
											<button class="carousel-control-next" type="button"
												data-bs-target="#carouselCsrActivity" data-bs-slide="next">
												<i class="bi bi-arrow-right"></i>
											</button>
										</div>
									</div>
									<div class="col-md-6 p-4" style="z-index: 11;">
										<div class="style-carousel-content">
											<img class="img-fluid d-block d-md-none"
												src="{{asset('images/csr/activity_2.jpg')}}" alt="...">
											<div class="p-4 p-md-0">
												<h3 class="style-title pb-2 pe-xl-5 m-0">Donation for Cianjur Earthquake Victims</h3>
												<p class="style-subtitle pb-4 pe-xl-5 mb-2">
													In November 2022, Cianjur experienced an extraordinary earthquake that resulted in loss of life and property. Therefore, on December 9, SUGITY provided donations such as rice, oil, blankets, etc., to the JABAR QUICK RESPONSE institution as volunteers. The hope is that this donation will aid the refugees from Cianjur in returning to normalcy.

													Merit activity: The initiative received appreciation from JABAR QUICK RESPONSE, acknowledging the good commitment from the TOP Management.
												</p>
												<a href="#" class="style-button">Read More <i class="bi bi-chevron-right"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="row flex-column-reverse flex-md-row m-0 style-carousel-item">
									<div class="col-md-6 p-0">
										<img class="style-carousel-image d-none d-md-block"
											src="{{asset('images/csr/activity_3.jpg')}}" alt="...">
										<div class="style-carousel-nav mx-auto ms-md-auto me-md-0">
											<button class="carousel-control-prev" type="button"
												data-bs-target="#carouselCsrActivity" data-bs-slide="prev">
												<i class="bi bi-arrow-left"></i>
											</button>
											<button class="carousel-control-next" type="button"
												data-bs-target="#carouselCsrActivity" data-bs-slide="next">
												<i class="bi bi-arrow-right"></i>
											</button>
										</div>
									</div>
									<div class="col-md-6 p-4" style="z-index: 11;">
										<div class="style-carousel-content">
											<img class="img-fluid d-block d-md-none"
												src="{{asset('images/csr/activity_3.jpg')}}" alt="...">
											<div class="p-4 p-md-0">
												<h3 class="style-title pb-2 pe-xl-5 m-0">Aid Shipment for Cianjur Earthquake Victims</h3>
												<p class="style-subtitle pb-4 pe-xl-5 mb-2">In November 2022, PT Sugity Creatives also sent aid to the earthquake victims in Cianjur. The activities conducted included trauma healing sessions with children and the distribution of EHON (picture books) to children.</p>
												<a href="#" class="style-button">Read More <i class="bi bi-chevron-right"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end lates event section -->
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
        $('.style-owl-banner-slider').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            navText: ['<-', '->'],
            items: 1,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: false,
            animateOut: 'slideOutLeft',
            animateIn: 'slideInRight',
        });

        $('.owl-prev').on('click', function () {
            $('.style-owl-banner-slider').trigger('stop.owl.autoplay');
            $('.style-owl-banner-slider').trigger('refresh.owl.carousel');
        });

        $('.owl-next').on('click', function () {
            $('.style-owl-banner-slider').trigger('stop.owl.autoplay');
            $('.style-owl-banner-slider').trigger('refresh.owl.carousel');
        });

        $('.owl-dot').on('click', function () {
            $('.style-owl-banner-slider').trigger('stop.owl.autoplay');
            $('.style-owl-banner-slider').trigger('refresh.owl.carousel');
        });
    </script>
@endsection