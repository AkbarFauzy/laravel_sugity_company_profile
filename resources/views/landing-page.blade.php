@extends('layout.app')
@section('custom_css')
<link rel="stylesheet" href="{{ asset('css/custom/landing-page.css') }}" type="text/css" />
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<style>
.custom-banner p{
	margin: 0;
	color: rgba(255, 255, 255, 0.95);
    text-shadow: 0px 4px 10px rgba(0, 0, 0, 0.50);
    font-family: Inter;
    font-style: normal;
    line-height: normal;
}

	
</style>
@stop

@section('title')
<title>Sugity Creatives</title>
@stop

@section('content')
<!-- Banner Slider
		============================================= -->
		<div class="owl-carousel owl-theme style-owl-banner-slider" data-scroll>
			<div class="item min-vh-100 min-vh-md-100">
				<video autoplay="" muted="" loop=""
					style="object-fit: cover; height: 100vh; width: 100%; padding:0; margin:0; position:absolute">
					<source src="{{asset('videos/vid-slider-1-v3.mov')}}" type="video/mp4">
				</video>
			</div>

			@foreach ($sliders->data as $key => $slider)
			<div class="item min-vh-100 min-vh-md-100">
				<div class="custom-banner mb-5" style="{!! \App\Http\Library\SliderHelper::slider_position($slider->position, $slider->x_offset, $slider->y_offset)!!}">
					<div style="color: rgba(255, 255, 255, 0.95)">
						{!!$slider->tagline!!}
					</div>
				</div>
				<div class="style-banner-image" style="background-image: url('{{asset("images/sliders/".$slider->img)}}');">
				</div>
				
			</div>
			@endforeach

{{-- 
			<div class="item min-vh-100 min-vh-md-100">
				<!-- <h2 class="style-banner-title style-title-short">PRIDE of Team.</h2> -->
				<div class="style-banner-content slide-1">
					<div>
						<p class="first-text-slider-landing mb-0">HiAce Wira-Wiri</p>
						<p class="second-text-slider-landing mt-2">
							The TOYOTA HiAce Wira-Wiri has been developed specifically for the secure and efficient transportation <br> of cash, valuables, and passengers, prioritizing a seamless blend of security and operational <br> effectiveness.
						</p>
					</div>
				</div>
				<div class="style-banner-image" style="background-image: url('{{asset('images/banner/banner-2-v3.png')}}');">
				</div>
			</div>
			<div class="item min-vh-100 min-vh-md-100">
				<!-- <h2 class="style-banner-title style-title-short">PRIDE of Work.</h2> -->
				<div class="style-banner-content slide-2">
					<div>
						<p class="first-text-slider-landing mb-0">Instrument Panel</p>
						<p class="second-text-slider-landing mt-2">
							The instrument panel sub-assembly: a vital component orchestrating crucial vehicle data and controls, <br> ensuring seamless functionality and convenience at your fingertips.
						</p>
					</div>
				</div>
				<div class="style-banner-image" style="background-image: url('{{asset('images/banner/banner-3-v3.png')}}');">
				</div>
			</div>
			<div class="item min-vh-100 min-vh-md-100">
				<!-- <h2 class="style-banner-title style-title-short">PRIDE of Company.</h2> -->
				<div class="style-banner-content slide-3">
					<div>
						<p class="first-text-slider-landing mb-0 text-end">Vehicle Assembly</p>
						<p class="second-text-slider-landing mt-0 text-end">
							Sugity, linked to Toyota Autobody, shifted from assembly to innovative vehicle conversions since 2017, <br> prioritizing quality, safety, and durability.
						</p>
					</div>
				</div>
				<div class="style-banner-image" style="background-image: url('{{asset('images/banner/banner-4-v4.png')}}');">
				</div>
			</div> --}}
			<div class="item min-vh-100 min-vh-md-100">
				<video autoplay="" muted="" loop=""
					style="object-fit: cover; height: 100vh; width: 100%; padding:0; margin:0; position:absolute">
					<source src="{{asset('videos/vid-slider-5-v3.mp4')}}" type="video/mp4">
				</video>
			</div>
		</div><!-- #Banner Slider end -->

		<!-- Content
		============================================= -->
		<section id="content">
			<!-- image divider -->
			<img src="{{asset('images/divider-black.png')}}" alt="" srcset="" data-scroll>
	<!-- parallax -->
	<div data-scroll class="section style-paralax style-paralax-bg-dark section-image dark m-0 border-0"
	style="background-image: url('{{asset('images/parallax/parallax-sugity-creatives.png')}}');">
	<div class="row" style="height: 100%;">
		<div class="col-lg-9 col-12 px-5 pt-0">
			<div data-aos="fade-right" data-aos-duration="900" class="p-0 px-5">
				<h2 class="mb-0" style="color: #C5C2C3;">Welcome</h2>
				<h1 class="mt-0 mb-2 sugity-creative-text">Sugity Creatives</h1>
				<p style="line-height: 25px;">
					Join us on a journey where precision meets passion, shaping the future of automotive
					creativity with integrity and innovation.
					Driven by a profound mission, we aspire to elevate the human experience through
					meticulously crafted products that not only meet but exceed customer expectations.
					Concurrently, we remain steadfast in our commitment to address environmental concerns,
					ensuring a harmonious balance between automotive innovation and sustainable practices.
				</p>
				<div class="row">
					<div class="col-md-3 text-first-parallax">1995
						<span class="hide-txt-par-landing">Year Established</span>
					</div>
					<div class="col-md-3 text-first-parallax">1264
						<span class="hide-txt-par-landing">Professional Employees</span>
					</div>
					<div class="col-md-3 text-first-parallax text-second-parallax-3">31
						<span class="hide-txt-par-landing text-second-parallax-3">
							<a href="#" data-anchor="#client" style="color: #fff;">CUSTOMER</a> 
							<!-- <i style="font-size: 12px;">
								<a href="{{url('/')}}#client" style="color:white">(Click for Details)</a>
							</i> -->
						</span>
					</div>
					<div class="col-md-3 text-first-parallax text-second-parallax-3">148
						<span class="hide-txt-par-landing text-second-parallax-3">
							<a href="#" data-anchor="#supply-chain" style="color: #fff;">SUPPLY CHAIN</a>
							<!-- <i style="font-size: 12px;">
								<a href="{{url('/')}}#supply-chain" style="color:white">(Click for Details)</a>
							</i> -->
						</span>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 text-second-parallax">
						<!-- <br> -->
						Year Established
					</div>
					<div class="col-md-3 text-second-parallax">
						<!-- <br> -->
						Professional Employees
					</div>
					<div class="col-md-3 text-second-parallax text-second-parallax-3">
						<!-- <i><a href="{{url('/')}}#client" style="color:white">Click for Details</a></i><br> -->
						<!-- <br> -->
						<a href="#" data-anchor="#client" class="text-link">
							CUSTOMER
						</a>
					</div>
					<div class="col-md-3 text-second-parallax text-second-parallax-3">
						<!-- <i><a href="{{url('/')}}#supply-chain" style="color:white">Click for Details</a></i><br> -->
						<!-- <br> -->
						<a href="#" data-anchor="#supply-chain" class="text-link">
							SUPPLY CHAIN
						</a>
					</div>
				</div>
				<div class="row">
						<div class="col-md-3 vec-line"><img src="{{asset('images/vector/vector-bottom-line.svg')}}" alt="">
						</div>
						<div class="col-md-3 vec-line"><img src="{{asset('images/vector/vector-bottom-line.svg')}}" alt="">
						</div>
						<div class="col-md-3 vec-line text-second-parallax-3"><img src="{{asset('images/vector/vector-bottom-line.svg')}}" alt="">
						</div>
						<div class="col-md-3 vec-line text-second-parallax-3"><img src="{{asset('images/vector/vector-bottom-line.svg')}}"
								alt="">
						</div>
				</div>
			</div>
			</div>
		</div>
	</div>
		<!-- end parallax -->

		
		
		<!-- our services section -->
		<div class="services-section my-5" data-scroll>
			<div data-aos="fade-in" data-aos-duration="1000" class="text-center mb-5">
				<h2 class="our-services-text">Our Services</h2>
				<h1 class="integrity-text">Committed to Bringing You Excellent Products Only We Can Create</h1>
				<h5 class="embeded-text">Embedded in the essence of Sugity, as an affiliate of Toyota Autobody, is
					the unwavering commitment to QUALITY, SAFETY, AND DURABILITY integral elements forming the DNA
					of every product we deliver</h5>
				</div>
			</div>
			<ul data-scroll data-aos="fade-in" data-aos-duration="1000" class="nav nav-pills style-nav-pills" id="pills-tab" role="tablist">
				@foreach($services->data as $key=>$service)
					<li class="nav-item col-4" role="presentation">
						<button class="nav-link w-100 {{$key === 0 ? "active":""}}" id="pills-{{preg_replace('/\s+/', '',$service->name)}}-tab" style="min-height: 100%; font-size: 17px;" data-bs-toggle="pill"
							data-bs-target="#pills-{{preg_replace('/\s+/', '',$service->name)}}" type="button" role="tab" aria-controls="pills-{{preg_replace('/\s+/', '',$service->name)}}"
							aria-selected={{$key===0 ? "true":""}}>{{$service->name}}</button>
					</li>
				@endforeach
			</ul>
			<div data-scroll data-aos="fade-in" data-aos-duration="1000" class="tab-content style-tab-content" id="pills-tabContent"
				style="background-image: url('{{asset('images/background/background-services-section.png')}}');">
				
				@foreach($services->data as $key=>$service)
				<div class="tab-pane fade {{ $key=== 0 ? "show active": ""}}" id="pills-{{preg_replace('/\s+/', '',$service->name)}}" role="tabpanel"
				aria-labelledby="pills-{{preg_replace('/\s+/', '',$service->name)}}-tab" tabindex="0">
				<div class="row me-0 ps-lg-5 h-bg-our-services">
					<div class="col-md-6 my-4 px-5 d-flex justify-content-center align-items-center">
						<div>
							<h1 class="style-title my-5 title-services">{{$service->name}}</h1>
							<p class="style-description mb-5 desc-services">
								{{$service->description}}
							</p>
							
						    @if($service->name === "Vehicle Business")	
							    <a class="btn-primary style-btn mb-5" href="{{url('/products-vehicle')}}">Read More</a>
					        @elseif($service->name === "Part Business")
					            <a class="btn-primary style-btn mb-5" href="{{url('/products-part')}}">Read More</a>
					        @elseif($service->name === "Mold Business")
					            <a class="btn-primary style-btn mb-5" href="{{url('/products-mold')}}">Read More</a>
					        @endif
						
						</div>
					</div>
					<div class="col-md-6 ps-5 d-flex justify-content-center align-items-center style-content-image">
						<img src="{{asset('images/services/'.$service->img)}}"
							width="650" alt="">
					</div>
				</div>
				</div>
				@endforeach

			</div>
			<!-- end our services section -->

			<!-- recent news section -->
			<div data-scroll class="recent-news-section style-recent-news-section px-2"
				style="background-image: url('{{asset('images/Polygon.png')}}');">
				<div data-aos="fade-in" data-aos-duration="1000" class="px-5 pt-5">
					<h3 class="our-services-text">Our Recent News</h3>
					<h2 class="integrity-text">Check out our latest events and information</h2>
				</div>

				<div data-aos="fade-in" data-aos-duration="1000" class="style-recent-news row m-0 pb-5 px-lg-4" style="width: 100%;">
					<div class="col-12 col-md-8">
						@if($news[0]->type === "news")
							<div class="style-content style-content-1 d-flex justify-content-start align-items-end"
							style="background-image: url('{{ asset('/images/news/'.$news[0]->headline_img) }}');">
						@else
							<div class="style-content style-content-1 d-flex justify-content-start align-items-end"
							style="background-image: url('{{ asset('/images/csr/'.$news[0]->headline_img) }}');">
						@endif
		
							<div class="style-content-text ms-5 mb-4">
								<h3 class="style-title m-0">{{$news[0]->headline}}</h3>
								<p class="style-date m-0">{{ date('F j, Y', strtotime($news[0]->created_at))}}</h3>
							</div>
							<div
								class="style-content-animation d-flex flex-column justify-content-center align-items-start p-5 mb-4">
								<h3 class="style-title m-0">{{$news[0]->headline}}</h3>
								<p class="style-date m-0">{{ date('F j, Y', strtotime($news[0]->created_at))}}</h3>
								<div class="style-description mt-2 mb-3" style="color:white">
									{!!  str_replace('<p>', '', \Illuminate\Support\Str::limit($news[0]->content, 250)) !!}
								</div>

								{{-- @if($news[0]->type === "news")
									<a href="{{url('detail-news', $news[0]->id)}}">
										<button class="btn style-btn">Read More -></button>
									</a>
								@else
									<a href="{{url('detail-news/csr', $news[0]->id)}}">
										<button class="btn style-btn">Read More -></button>
									</a>
								@endif --}}

							
							</div>
						</div>

						<div class="row">
							@foreach (array_slice($news, 1,2) as $item)

							<div class="col-md-6">
								<div class="style-content mt-3 style-content-2 d-flex justify-content-start align-items-end"
									style="background-image: url('{{ asset('images/news/'.$item->headline_img) }}');">
									<div class="style-content-text ms-5 mb-4">
										<h3 class="style-title m-0">{{$item->headline}}</h3>
										<p class="style-date m-0">{{ date('F j, Y', strtotime($item->created_at))}}</h3>
									</div>
									<div
										class="style-content-animation d-flex flex-column justify-content-center align-items-start p-5 mb-4">
										<h3 class="style-title m-0">{{$item->headline}}</h3>
										<p class="style-date m-0">{{ date('F j, Y', strtotime($item->created_at))}}</h3>
										<div class="style-description mt-2 mb-3" style="color:white">
											{!!   str_replace('<p>', '', \Illuminate\Support\Str::limit($item->content, 100)) !!}
										</div>
										{{-- <a href="{{url('detail-news', $item->id)}}">
											<button class="btn style-btn">Read More -></button>
										</a> --}}
									</div>
								</div>
							</div>
							
							@endforeach
						</div>
					</div>

					<div class="col-12 col-md-4 hide-mobile-width scroll-news-landing">

						@foreach (array_slice($news, 3,7) as $item)

						<div class="row pb-3">
							<div class="col-md-6 img-small-news" style="background-image: url('{{ asset('images/news/'.$item->headline_img)}}');">
							</div>
							<div class="col-md-6 d-flex flex-column justify-content-center">
								<div class="title-small-news pb-2">{{$item->headline}}</div>
								<div class="date-small-news pb-3">{{ date('F j, Y', strtotime($item->created_at))}}</div>
								{{-- <a href="{{url('detail-news', $item->id)}}">
									<div class="readmore-small-news">Read More -></div>
								</a> --}}
							</div>
						</div>

						@endforeach

					</div>
					<div id="client">
			    	</div>
				</div>
				<!-- <div data-aos="fade-in" data-aos-duration="1000" class="px-5 pt-5 pb-5 section-our-videos">
					<h3 class="our-video-text" style="color: #EE6D22">Check Our Videos!</h3>
					<div class="parent-img-our-videos">
						<iframe src="https://www.youtube.com/embed/W_qM4LOOhPk?si=vHas8ylV5CvVrcKE" frameborder="0" allowfullscreen></iframe>
						<a href="https://www.youtube.com/@sugitycreatives8335&t=34s" target="_blank">
							<img src="./asset/images/our-news-img.png" class="img-our-videos" alt="">
						</a>
					</div>
				
				</div> -->
		
			</div>
			<!-- end recent news section -->
        	<div id="supply-chain" class="pt-5">
			</div>
			<!-- slider client -->
			<div class="slider-client pt-5 pt-md-3" data-scroll>
				<div data-aos="fade-in" data-aos-duration="1000" class="text-center">
					<h3 class="our-client-text">Our Customers</h3>
					<h2 class="we-build-text">We build long-term Partnerships</h2>
				</div>
				<div data-aos="fade-in" data-aos-duration="1000" class="owl-carousel owl-theme style-owl-client-slider py-2">
					<div class="item">
						<a href="javascript:void(0)">
							<img src="{{asset('images/clients/1. new_toyota.png')}}" class="style-image" alt="Clients">
						</a>
					</div>
					<div class="item">
						<a href="javascript:void(0)">
							<img src="{{asset('images/clients/2. daihatsu.png')}}" class="style-image" alt="Clients">
						</a>
					</div>
					<div class="item">
						<a href="javascript:void(0)">
							<img src="{{asset('images/clients/3. new hino.png')}}" class="style-image" alt="Clients">
						</a>
					</div>
					<div class="item">
						<a href="javascript:void(0)">
							<img src="{{asset('images/clients/4. honda.png')}}" class="style-image" alt="Clients">
						</a>
					</div>
					<div class="item">
						<a href="javascript:void(0)">
							<img src="{{asset('images/clients/5. new_suzuki.png')}}" class="style-image" alt="Clients">
						</a>
					</div>
					<div class="item">
						<a href="javascript:void(0)">
							<img src="{{asset('images/clients/6. nissan.png')}}" class="style-image" alt="Clients">
						</a>
					</div>
					<div class="item">
						<a href="javascript:void(0)">
							<img src="{{asset('images/clients/8. isuzu.png')}}" class="style-image" alt="Clients">
						</a>
					</div>
					<div class="item">
						<a href="javascript:void(0)">
							<img src="{{asset('images/clients/9. mitsubishi.png')}}" class="style-image" alt="Clients">
						</a>
					</div>
					<div class="item">
						<a href="javascript:void(0)">
							<img src="{{asset('images/clients/10. boshoku.png')}}" class="style-image" alt="Clients">
						</a>
					</div>
					<div class="item">
						<a href="javascript:void(0)">
							<img src="{{asset('images/clients/11. tsusho.png')}}" class="style-image" alt="Clients">
						</a>
					</div>
					<div class="item">
						<a href="javascript:void(0)">
							<img src="{{asset('images/clients/12. hitachi.png')}}" class="style-image" alt="Clients">
						</a>
					</div>
					<div class="item">
						<a href="javascript:void(0)">
							<img src="{{asset('images/clients/13. tcd.png')}}" class="style-image" alt="Clients">
						</a>
					</div>
					<div class="item">
						<a href="javascript:void(0)">
							<img src="{{asset('images/clients/14. denso.png')}}" class="style-image" alt="Clients">
						</a>
					</div>
					<div class="item">
						<a href="javascript:void(0)">
							<img src="{{asset('images/clients/15. ani.png')}}" class="style-image" alt="Clients">
						</a>
					</div>
					<div class="item">
						<a href="javascript:void(0)">
							<img src="{{asset('images/clients/16. cabind.png')}}" class="style-image" alt="Clients">
						</a>
					</div>
					<div class="item">
						<a href="javascript:void(0)">
							<img src="{{asset('images/clients/17. tam.png')}}" class="style-image" alt="Clients">
						</a>
					</div>
					<div class="item">
						<a href="javascript:void(0)">
							<img src="{{asset('images/clients/18. agc.png')}}" class="style-image" alt="Clients">
						</a>
					</div>
					<div class="item">
						<a href="javascript:void(0)">
							<img src="{{asset('images/clients/19. yazaki autocomp.png')}}" class="style-image" alt="Clients">
						</a>
					</div>
					<div class="item">
						<a href="javascript:void(0)">
							<img src="{{asset('images/clients/20. hd.png')}}" class="style-image" alt="Clients">
						</a>
					</div>
					<div class="item">
						<a href="javascript:void(0)">
							<img src="{{asset('images/clients/22. stanley.png')}}" class="style-image" alt="Clients">
						</a>
					</div>
					<div class="item">
						<a href="javascript:void(0)">
							<img src="{{asset('images/clients/23. eds pemi.png')}}" class="style-image" alt="Clients">
						</a>
					</div>
					<div class="item">
						<a href="javascript:void(0)">
							<img src="{{asset('images/clients/24. toyotetsu.png')}}" class="style-image" alt="Clients">
						</a>
					</div>
					<div class="item">
						<a href="javascript:void(0)">
							<img src="{{asset('images/clients/25. mori.png')}}" class="style-image" alt="Clients">
						</a>
					</div>
					<div class="item">
						<a href="javascript:void(0)">
							<img src="{{asset('images/clients/26. tme.png')}}" class="style-image" alt="Clients">
						</a>
					</div>
					<div class="item">
						<a href="javascript:void(0)">
							<img src="{{asset('images/clients/27. sami.png')}}" class="style-image" alt="Clients">
						</a>
					</div>
					<div class="item">
						<a href="javascript:void(0)">
							<img src="{{asset('images/clients/28. jatim auto.png')}}" class="style-image" alt="Clients">
						</a>
					</div>
					<div class="item">
						<a href="javascript:void(0)">
							<img src="{{asset('images/clients/29. aisin.png')}}" class="style-image" alt="Clients">
						</a>
					</div>
					<div class="item">
						<a href="javascript:void(0)">
							<img src="{{asset('images/clients/30. ochiai.png')}}" class="style-image" alt="Clients">
						</a>
					</div>
					<div class="item">
						<a href="javascript:void(0)">
							<img src="{{asset('images/clients/31. honda access.png')}}" class="style-image" alt="Clients">
						</a>
					</div>
				</div>
			
			</div>
			<!-- end slider client  -->

			<!-- slider supply chain -->
			<div class="slider-client pb-5 pb-md-3" data-scroll>
				<div data-aos="fade-in" data-aos-duration="1000" class="text-center">
					<h3 class="our-client-text">Our Supply Chain</h3>
					<h2 class="we-build-text">Synergizing Excellence, Uniting Supply</h2>
				</div>
				<div data-aos="fade-in" data-aos-duration="1000" class="owl-carousel owl-theme style-owl-supplier-slider py-2">
					<div class="item">
						<a href="javascript:void(0)">
							<img src="{{asset('images/supply-chain/1. rpt.png')}}" class="style-image" alt="Supply Chain">
						</a>
					</div>
					<div class="item">
						<a href="javascript:void(0)">
							<img src="{{asset('images/supply-chain/2. inoac.png')}}" class="style-image" alt="Supply Chain">
						</a>
					</div>
					<div class="item">
						<a href="javascript:void(0)">
							<img src="{{asset('images/supply-chain/3. dae in tech.png')}}" class="style-image" alt="Supply Chain">
						</a>
					</div>
					<div class="item">
						<a href="javascript:void(0)">
							<img src="{{asset('images/supply-chain/4. ypti.png')}}" class="style-image" alt="Supply Chain">
						</a>
					</div>
					<div class="item">
						<a href="javascript:void(0)">
							<img src="{{asset('images/supply-chain/5. hasura.png')}}" class="style-image" alt="Supply Chain">
						</a>
					</div>
					<div class="item">
						<a href="javascript:void(0)">
							<img src="{{asset('images/supply-chain/5. maju makmur.png')}}" class="style-image" alt="Supply Chain">
						</a>
					</div>
					<div class="item">
						<a href="javascript:void(0)">
							<img src="{{asset('images/supply-chain/6. ttec.png')}}" class="style-image" alt="Supply Chain">
						</a>
					</div>
					<div class="item">
						<a href="javascript:void(0)">
							<img src="{{asset('images/supply-chain/7. megah nusantara.png')}}" class="style-image" alt="Supply Chain">
						</a>
					</div>
					<div class="item">
						<a href="javascript:void(0)">
							<img src="{{asset('images/supply-chain/8. asahi denso.png')}}" class="style-image" alt="Supply Chain">
						</a>
					</div>
					<div class="item">
						<a href="javascript:void(0)">
							<img src="{{asset('images/supply-chain/9. uno minda.png')}}" class="style-image" alt="Supply Chain">
						</a>
					</div>
					<div class="item">
						<a href="javascript:void(0)">
							<img src="{{asset('images/supply-chain/10. toyoda.png')}}" class="style-image" alt="Supply Chain">
						</a>
					</div>
					<div class="item">
						<a href="javascript:void(0)">
							<img src="{{asset('images/supply-chain/11. GIW.png')}}" class="style-image" alt="Supply Chain">
						</a>
					</div>
					<div class="item">
						<a href="javascript:void(0)">
							<img src="{{asset('images/supply-chain/12. mitra kemasindo.png')}}" class="style-image" alt="Supply Chain">
						</a>
					</div>
					<div class="item">
						<a href="javascript:void(0)">
							<img src="{{asset('images/supply-chain/13. kansai.png')}}" class="style-image" alt="Supply Chain">
						</a>
					</div>
					<div class="item">
						<a href="javascript:void(0)">
							<img src="{{asset('images/supply-chain/14. nippon.png')}}" class="style-image" alt="Supply Chain">
						</a>
					</div>
					<div class="item">
						<a href="javascript:void(0)">
							<img src="{{asset('images/supply-chain/15. dnt.png')}}" class="style-image" alt="Supply Chain">
						</a>
					</div>
					<div class="item">
						<a href="javascript:void(0)">
							<img src="{{asset('images/supply-chain/16. fujikura kasei.png')}}" class="style-image" alt="Supply Chain">
						</a>
					</div>
					<div class="item">
						<a href="javascript:void(0)">
							<img src="{{asset('images/supply-chain/17. tsusho.png')}}" class="style-image" alt="Supply Chain">
						</a>
					</div>
					<div class="item">
						<a href="javascript:void(0)">
							<img src="{{asset('images/supply-chain/18. murni cahaya.png')}}" class="style-image" alt="Supply Chain">
						</a>
					</div>
					<div class="item">
						<a href="javascript:void(0)">
							<img src="{{asset('images/supply-chain/19. basunjaya.png')}}" class="style-image" alt="Supply Chain">
						</a>
					</div>
					<div class="item">
						<a href="javascript:void(0)">
							<img src="{{asset('images/supply-chain/20. duaka.png')}}" class="style-image" alt="Supply Chain">
						</a>
					</div>
					<div class="item">
						<a href="javascript:void(0)">
							<img src="{{asset('images/supply-chain/21. kpa.png')}}" class="style-image" alt="Supply Chain">
						</a>
					</div>
					<div class="item">
						<a href="javascript:void(0)">
							<img src="{{asset('images/supply-chain/22. jungwoo.png')}}" class="style-image" alt="Supply Chain">
						</a>
					</div>
					<div class="item">
						<a href="javascript:void(0)">
							<img src="{{asset('images/supply-chain/23. Saeam.png')}}" class="style-image" alt="Supply Chain">
						</a>
					</div>
					<div class="item">
						<a href="javascript:void(0)">
							<img src="{{asset('images/supply-chain/24. hyukjin.png')}}" class="style-image" alt="Supply Chain">
						</a>
					</div>
					<div class="item">
						<a href="javascript:void(0)">
							<img src="{{asset('images/supply-chain/25. selamat teknik.png')}}" class="style-image" alt="Supply Chain">
						</a>
					</div>
					<div class="item">
						<a href="javascript:void(0)">
							<img src="{{asset('images/supply-chain/26. kofuku.png')}}" class="style-image" alt="Supply Chain">
						</a>
					</div>
					<div class="item">
						<a href="javascript:void(0)">
							<img src="{{asset('images/supply-chain/27. gnp.png')}}" class="style-image" alt="Supply Chain">
						</a>
					</div>
				</div>
			</div>
			<!-- end slider supply chain  -->

			<!-- section location -->
			<div data-aos="fade-in" data-aos-duration="1000" class="style-section-location" data-scroll>
				<div class="row mb-5 mt-5 px-lg-5">
					<div class="col-sm-12 col-md-12 col-xl-4 d-xl-flex text-center mb-sm-2">
						<img src="{{asset('logo/logo-sugity-bottom-text.png')}}" alt="" srcset="" class="style-logo">
					</div>
					<div class="col-sm-6 col-md-6 col-xl-4 px-3 py-2">
						<a href="https://maps.app.goo.gl/v57EzC77gZrsrn4T7" target="_blank">
							<div class="style-content">
								<img src="{{asset('images/cibitung-plant.png')}}" alt="" srcset="" class="style-image">
								<div class="style-title">
									Head Office / Cibitung Plant
								</div>
								<div class="style-description d-none d-sm-block">
									Kawasan Industri, Jl. Bali I Jl. Mm 2100 No.17-20,<br />
									Gandamekar, Cikarang Barat, Bekasi Regency, <br />
									West Java 17530
								</div>
								<div class="style-description d-block d-sm-none">
									Kawasan Industri, Jl. Bali I Jl. Mm 2100 No.17-20, 
									Gandamekar, Cikarang Barat, Bekasi Regency, 
									West Java 17530
								</div>
							</div>
						</a>
					</div>
					<div class="col-sm-6 col-md-6 col-xl-4 px-3 py-2">
						<a href="https://maps.app.goo.gl/2aoSKAoSUuQqQXDz9" target="_blank">
							<div class="style-content">
								<img src="{{asset('images/karawang-plant.png')}}" alt="" srcset="" class="style-image">
								<div class="style-title">
									Karawang Plant
								</div>
								<div class="style-description d-none d-sm-block">
									Kawasan Industri KIIC, Jl. Permata 3, Telukjambe Timur, <br />
									Puseurjaya, Telukjambe Timur, Karawang, <br />
									Jawa Barat 41361
								</div>
								<div class="style-description d-block d-sm-none">
									Kawasan Industri KIIC, Jl. Permata 3, Telukjambe Timur, 
									Puseurjaya, Telukjambe Timur, Karawang, 
									Jawa Barat 41361
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
			<!-- end section location -->
		</section><!-- #content end -->
@stop

@section('custom_js')
<script src="{{asset('js/custom/landing-page.js')}}"></script>
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
	setInterval(function () {
		if ($('#pills-VehicleBusiness-tab').hasClass('active')) {
			$('#pills-PartBusiness-tab').trigger('click');
		} else if ($('#pills-PartBusiness-tab').hasClass('active')) {
			$('#pills-MoldBusiness-tab').trigger('click');
		} else if ($('#pills-MoldBusinesstab').hasClass('active')) {
			$('#pills-VehicleBusiness-tab').trigger('click');
		}
	}, 5000);

	$('.style-owl-banner-slider').owlCarousel({
		loop: true,
		margin: 0,
		nav: false,
		items: 1,
		// autoplay: true,
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

	$('.style-owl-supplier-slider').owlCarousel({
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
	
	$('[data-anchor]').click(function(e) {
		e.preventDefault();
		var goToAnchor = $(this).attr("data-anchor");
	$('html, body').animate({
		scrollTop: $(goToAnchor).offset().top
	}, 1000);
	});

</script>
@stop
