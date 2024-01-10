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
		<div class="owl-carousel owl-theme style-owl-banner-slider" style="background-color: #000;">
			
			@foreach(array_slice($csr->data, 0, 3) as $item)
			<div class="item min-vh-75 min-vh-md-75">
				<div class="style-banner-content">
					<p class="style-date-slider">{{ date('F j, Y', strtotime($item->created_at))}}</p>
					<p class="style-title-slider">{{$item->headline}}</p>
                    @php
                        $sentences = preg_split('/(?<=[.?!])\s+/', $item->content, -1, PREG_SPLIT_NO_EMPTY);
                        $firstSentence = isset($sentences[0]) ? $sentences[0] : '';
                    @endphp

					<div class="style-desc-slider">
                        {!!$firstSentence!!}
                    </div>
				</div>
				<div class="style-banner-image" style="background-image: url('{{asset('images/csr/'.$item->headline_img)}}'); opacity: 0.5;">
				</div>
			</div>
            @endforeach
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
							
							@foreach(array_slice($csr->data, 0, 3) as $key => $item)
							
							<div class="carousel-item {{$key === 0 ? 'active' : ''}}">
								<div class="row m-0 style-carousel-item">
									<div class="col-md-6 p-4" style="z-index: 11;">
										<div class="style-carousel-content">
											<img class="img-fluid d-block d-md-none" src="{{asset('images/csr/'.$item->headline_img)}}"
												alt="...">
											<div class="p-4 p-md-0">
												<h3 class="style-title pb-2 pe-xl-5 m-0">{{$item->headline}}</h3>
												<p class="style-subtitle pb-4 pe-xl-5 mb-2">{!!  strip_tags(\Illuminate\Support\Str::limit($item->content, 450)) !!}</p>
												<a href="{{url('detail-news/csr', $item->id)}}" class="style-button">Read More <i
														class="bi bi-chevron-right"></i></a>
											</div>
										</div>
									</div>
									<div class="col-md-6 p-0">
										<img class="style-carousel-image d-none d-md-block"
											src="{{asset('images/csr/'.$item->headline_img)}}" alt="...">
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
							@endforeach
							
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