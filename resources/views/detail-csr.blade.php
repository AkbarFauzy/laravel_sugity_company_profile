@extends('layout.app')
@section('custom_css')
<link rel="stylesheet" href="{{ asset('css/custom/landing-page.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ asset('css/custom/detail-news.css')}}" type="text/css" />
@stop

@section('title')
<title>Sugity Creatives</title>
@stop


@section('content')
<!-- Content
		============================================= -->
		<section id="content" class="pt-5">
            <div class="container-button-back px-4 px-md-5 pt-5">
                <a href="{{ url()->previous() }}" class="px-2 btn-back">
                    <img src="{{asset('icon/back.png')}}" height="22" alt=""> &nbsp;back
                </a>
            </div>
			<!-- recent csr section -->
			<div data-scroll class="recent-news-section style-recent-news-section pt-2 pb-2 pb-md-5">
				<div data-aos="fade-in" data-aos-duration="1000" class="px-5 pt-3 pt-md-4">
                    <!-- spacer -->
				</div>

				<div data-aos="fade-in" data-aos-duration="1000" class="style-recent-news row m-0 pb-5 px-lg-4" style="width: 100%;">
					<div class="col-12 col-md-9" style="overflow-y: scroll; max-height: 100%; height: 800px;">
                        <div class="container-big-img px-4 pb-3">
                            <img src={{ asset('/images/csr/'.$current_csr->data->headline_img) }} alt="">
                        </div>
                        <div class="container-content-news px-4 pt-4">
                            <h2 class="title-detail-news m-0 pb-1" style="color: #000;">
                                {{$current_csr->data->headline}}
                            </h2>
                            <h5 class="date-detail-news pb-2">
                                {{date('F j, Y', strtotime($current_csr->data->created_at))}}
                            </h5>
                            <div class="desc-detail-news">
                                {!! $current_csr->data->content !!}
                            </div>
                                  
                            @if(count($current_csr->data->gallery) > 0)

                                <div class="image-slider-detail-news d-flex align-items-center flex-column justify-content-center pt-5">
                                    <div class="owl-carousel owl-theme style-owl-banner-slider" data-scroll style="width: 60%;">

                                        @foreach($current_csr->data->gallery as $gallery)

                                        <div class="item min-vh-40 min-vh-md-40">
                                            <div class="style-banner-image" style="background-image: url('{{asset('images/csr/content/'.$gallery->img)}}');">
                                            </div>
                                        </div>

                                        @endforeach

                                    </div>
                                </div>
                            
                            @endif

                        </div>
					</div>
					<div class="col-12 col-md-3">
						<div class="title-aside pt-3">
                            <h4 class="m-0">Recent News</h4>
                            <p class="divider-aside mt-2"></p>
                        </div>
                        <div class="small-recent-news">

                            @foreach (array_slice($csr->data, 0, 3) as $item)

                            <div class="row m-0 pb-3">
                                <div class="col-md-6 img-small-detail-news" style="background-image: url('{{asset('images/csr/'.$item->headline_img)}}');">
                                </div>
                                <div class="col-6 col-md-6 d-flex flex-column justify-content-center">
                                    <div class="title-small-detail-news pb-2">{{$item->headline}}</div>
                                    <div class="date-small-detail-news pb-3">{{ date('F j, Y', strtotime($item->created_at))}}</div>
                                    <a href="{{url('detail-news/csr', $item->id)}}">
                                        <div class="readmore-small-detail-news">Read More -></div>
                                    </a>
                                </div>
                            </div>
                            
                            @endforeach

                        </div>
                        <div class="title-aside pt-2">
                            <h4 class="m-0">Most Popular</h4>
                            <p class="divider-aside mt-2"></p>
                        </div>
                        <div class="small-recent-news popular">

                            @foreach ($csr->data as $item)

                            <div class="row m-0 pb-3">
                                <div class="col-md-6 img-small-detail-news" style="background-image: url('{{asset('images/csr/'.$item->headline_img)}}');">
                                </div>
                                <div class="col-6 col-md-6 d-flex flex-column justify-content-center">
                                    <div class="title-small-detail-news pb-2">{{$item->headline}}</div>
                                    <div class="date-small-detail-news pb-3">{{ date('F j, Y', strtotime($item->created_at))}}</div>
                                    <a href="{{url('detail-news/csr', $item->id)}}">
                                        <div class="readmore-small-detail-news">Read More -></div>
                                    </a>
                                </div>
                            </div>

                            @endforeach

                        </div>
					</div>
				</div>
			</div>
		</section><!-- #content end -->

@stop

@section('custom_js')
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
        nav: true,
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
@stop