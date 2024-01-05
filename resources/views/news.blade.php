@extends('layout.app')
@section('custom_css')
<link rel="stylesheet" href="{{ asset('css/custom/news.css') }}" type="text/css" />
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	
@endsection

@section('title')
<title>Sugity Creatives | CSR</title>
@endsection

@section('content')
<!-- Banner Slider
		============================================= -->
		<div class="owl-carousel owl-theme style-owl-banner-slider">

            @foreach(array_slice($news->data, 0, 3) as $item)
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
				<div class="style-banner-image" style="background-image: url('{{asset('images/news/'.$item->headline_img)}}');">
				</div>
			</div>
            @endforeach
		</div><!-- #Banner Slider end -->

		<!-- Content
		============================================= -->
		<section id="content">
			<!-- recent news section -->
			<div class="recent-news-section style-recent-news-section px-4 pt-5 style-background-news-1">
				<div class="services-section pt-md-5">
					<div data-aos="fade-in" data-aos-duration="1000" class="text-center pb-5 pt-md-5">
						<p class="m-0" style="color: #000; font-size: 45px; font-weight: 700;">Discover Our Latest News
						</p>
					</div>
				</div>

				<div class="style-recent-news row m-0 px-lg-4" style="width: 100%;">
					<div class="col-12 col-md-9">
						
                        <div data-aos="fade-right" data-aos-duration="1000" 
                            class="style-content style-content-1-menu d-flex justify-content-start align-items-end" 
                            style="background-image: url('{{asset('images/news/'.$news->data[0]->headline_img)}}');">
							<div class="style-content-text ms-5 mb-4">
								<h3 class="style-title m-0">{{$news->data[0]->headline}}</h3>
								<p class="style-date m-0">{{ date('F j, Y', strtotime($news->data[0]->created_at))}}</h3>
							</div>
							<div
								class="style-content-animation d-flex flex-column justify-content-center align-items-start p-5 mb-4">
								<h3 class="style-title m-0">{{$news->data[0]->headline}}</h3>
								<p class="style-date m-0">{{ date('F j, Y', strtotime($news->data[0]->created_at))}}</h3>
								<div class="style-description mt-2 mb-3">
                                    {!!  \Illuminate\Support\Str::limit($news->data[0]->content, 450) !!}
                                </div>
                                <a href="{{url('detail-news', $news->data[0]->id)}}">
								    <button class="btn style-btn">Read More -></button>
                                </a>
							</div>
						</div>
						<div data-aos="fade-up" data-aos-duration="1000" class="row">

                            @foreach(array_slice($news->data, 1, 2) as $item)
							<div class="col-md-6">
								<div class="style-content mt-3 style-content-2-menu d-flex justify-content-start align-items-end"
									style="background-image: url('{{asset('images/news/'.$item->headline_img)}}');">
									<div class="style-content-text ms-5 mb-4">
										<h3 class="style-title m-0">{{$item->headline}}</h3>
										<p class="style-date m-0">{{ date('F j, Y', strtotime($item->created_at))}}</h3>
									</div>
									<div
										class="style-content-animation d-flex flex-column justify-content-center align-items-start p-5 mb-4">
										<h3 class="style-title m-0">{{$item->headline}}</h3>
										<p class="style-date m-0">{{ date('F j, Y', strtotime($item->created_at))}}</h3>
										<div class="style-description mt-2 mb-3">
                                            {!!  \Illuminate\Support\Str::limit($item->content, 200) !!}
                                        </div>
                                        <a href="{{url('detail-news', $item->id)}}">
                                            <button class="btn style-btn">Read More -></button>
                                        </a>
									</div>
								</div>
							</div>
                            @endforeach
						</div>
					</div>
					<div data-aos="fade-left" data-aos-duration="1000" class="col-12 col-md-3 hide-mobile-width">

                        @foreach(array_slice($news->data, 3, 3) as $key => $item)
                            <div class="style-content style-content-3-menu {{$key == 1 ? 'my-2' : ''}} d-flex justify-content-start align-items-end"
                                style="background-image: url('{{asset('images/news/'.$item->headline_img)}}');">
                                <div class="style-content-text ms-3 mb-2">
                                    <h3 class="style-title m-0">{{$item->headline}}/h3>
                                    <p class="style-date m-0">{{ date('F j, Y', strtotime($item->created_at))}}</h3>
                                </div>
                                <div
                                    class="style-content-animation d-flex flex-column justify-content-center align-items-start p-3 mb-2">
                                    <h3 class="style-title m-0">Muara Gembong Mangrove Forest</h3>
                                    <p class="style-date m-0">{{ date('F j, Y', strtotime($item->created_at))}}</h3>
                                    <div class="style-description mt-2 mb-3">
                                        {!!  \Illuminate\Support\Str::limit($item->content, 100) !!}
                                    </div>
                                    <a href="{{url('detail-news', $item->id)}}">
                                        <button class="btn style-btn">Read More -></button>
                                    </a>
                                </div>
                            </div>
                        @endforeach

					</div>
				</div>
			</div>
			<!-- end recent news section -->

			<div class="style-background-news-2 style-background-news-3 px-md-5 pt-5">
				<!-- new -->
				<div class=" px-3 p-md-5">
					<div data-aos="fade-in" data-aos-duration="1000"  class="container-title-news px-4 py-4">
						<p class="title-news m-0">News</p>
						<div class="divider-title-news"
							style="border-radius: 10px; background: #000; width: 100%;height: 1px;"></div>
					</div>
					<div class="content-news-card pt-3 px-3">
						<div class="row">
                            @foreach(array_slice($randomNews, 0, 3) as $item)
                                <div data-aos="fade-down" data-aos-duration="1000" class="col-md-4 pb-4">
                                    <div class="card h-100">
                                        <div class="parent-header-card">
                                            <div class="container-img" style="overflow: hidden; position: relative;">
                                                <img class="card-img-top zoomable-image" height="235"
                                                    src="{{asset('images/news/'.$item->headline_img)}}" alt="Card image cap">
                                            </div>
                                            <div
                                                class="date-card d-flex flex-column justify-content-center align-items-center">
                                                {{ date('F j, Y', strtotime($item->created_at))}}
                                            </div>
                                        </div>
                                        <div class="card-body px-4 px-md-5 pb-5">
                                            <h5 class="card-title">{{$item->headline}}</h5>
                                            <p class="divider-title-card mt-3 mb-3"></p>
                                            <a href="{{url('detail-news', $item->id)}}">Read More -></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
						</div>
					</div>
				</div>
				<!-- end new -->

				<!-- event -->
				<div class="px-3 p-md-5">
					<div data-aos="fade-in" data-aos-duration="1000" class="container-title-news px-4 py-4">
						<p class="title-news m-0">Event</p>
						<div class="divider-title-news"
							style="border-radius: 10px; background: #000; width: 100%;height: 1px;"></div>
					</div>
					<div class="content-news-card pt-3 px-3">
						<div class="row">
							@foreach(array_slice($randomNews, 3, 3) as $item)
                                <div data-aos="fade-down" data-aos-duration="1000" class="col-md-4 pb-4">
                                    <div class="card h-100">
                                        <div class="parent-header-card">
                                            <div class="container-img" style="overflow: hidden; position: relative;">
                                                <img class="card-img-top zoomable-image" height="235"
                                                    src="{{asset('images/news/'.$item->headline_img)}}" alt="Card image cap">
                                            </div>
                                            <div
                                                class="date-card d-flex flex-column justify-content-center align-items-center">
                                                {{ date('F j, Y', strtotime($item->created_at))}}
                                            </div>
                                        </div>
                                        <div class="card-body px-4 px-md-5 pb-5">
                                            <h5 class="card-title">{{$item->headline}}</h5>
                                            <p class="divider-title-card mt-3 mb-3"></p>
                                            <a href="{{url('detail-news', $item->id)}}">Read More -></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
						</div>
					</div>
				</div>
				<!-- end event -->
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