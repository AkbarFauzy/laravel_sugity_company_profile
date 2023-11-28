@extends('layout.app')
@section('custom_css')
<link rel="stylesheet" href="{{ asset('css/custom/company-plant.css') }}" type="text/css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
@endsection

@section('title')
<title>Sugity Creatives | Company Plant</title>
@endsection


@section('content')
<!-- Page Title
		============================================= -->
		<section id="page-title" class="page-title-dark"
			style="background-image: url('{{asset('images/background/background-company-plant.png')}}'); padding: 300px 0; background-size: cover; background-position:0px -70px; background-repeat: no-repeat;">
			<div class="container clearfix text-center">
				<h1 style="font-size: 80px;">Company Plant</h1>
			</div>
		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="container clearfix">
				<h1 class="pt-5 text-center">Our Plant</h1>
			</div>
			<div class="tabs tabs-bb clearfix" id="tab-9">

				<ul class="tab-nav clearfix" style="justify-content: center;">
					<li><a href="#tabs-33" class="text-size-md">Head Office / Plant Cibitung</a></li>
					<li><a href="#tabs-34" class="text-size-md">Plant Karawang</a></li>
				</ul>

				<div class="tab-container">

					<div class="tab-content clearfix" id="tabs-33">
						<div class="row m-0 align-items-stretch">
							<div class="col-md-6 col-padding">
								<div class="container">
									<div class="heading-block">
										<h1>PT. SUGITY CREATIVES HEAD OFFICE / PLANT CIBITUNG</h1>
									</div>

									<div class="row col-mb-50">

										<div class="col-lg-12">
											<p>Lorem ipsum dolor sit amet consectetur. At odio ultrices tristique sapien
												ullamcorper. Ornare amet placerat lacus massa elementum cursus amet
												lacinia. Gravida a tempor eleifend in orci id nisi turpis vitae. Integer
												eget tempus et ornare luctus habitant vestibulum faucibus leo.</p>
											<p>In this plant we are working on our core business:</p>
											<a href="#"
												class="social-icon inline-block si-small si-light si-rounded si-facebook">
												<i class="icon-facebook"></i>
												<i class="icon-facebook"></i>
											</a>
											<a href="#"
												class="social-icon inline-block si-small si-light si-rounded si-twitter">
												<i class="icon-twitter"></i>
												<i class="icon-twitter"></i>
											</a>
											<a href="#"
												class="social-icon inline-block si-small si-light si-rounded si-gplus">
												<i class="icon-gplus"></i>
												<i class="icon-gplus"></i>
											</a>
										</div>

									</div>

								</div>
							</div>
							<div class="col-md-6 col-padding min-vh-60"
								style="background: url('{{asset('images/company-plant/cibitung.png')}}') center center no-repeat; background-size: cover;">
							</div>
						</div>
					</div>
					<div class="tab-content clearfix" id="tabs-34">
						<div class="row m-0 align-items-stretch">
							<div class="col-md-6 col-padding">
								<div class="container">
									<div class="heading-block">
										<h1>PT. SUGITY CREATIVES PLANT 2, KARAWANG</h1>
									</div>

									<div class="row col-mb-50">

										<div class="col-lg-12">
											<p>Lorem ipsum dolor sit amet consectetur. Volutpat neque sed enim felis
												sollicitudin tincidunt pellentesque. Arcu porttitor lectus mi imperdiet
												mattis vestibulum libero sed. Fermentum vitae tristique venenatis velit
												nunc urna imperdiet sit. Elit et nam sed tristique nec convallis nunc a.
											</p>
											<p>In this plant we are working on our core business:</p>
											<a href="#"
												class="social-icon inline-block si-small si-light si-rounded si-facebook">
												<i class="icon-facebook"></i>
												<i class="icon-facebook"></i>
											</a>
											<a href="#"
												class="social-icon inline-block si-small si-light si-rounded si-twitter">
												<i class="icon-twitter"></i>
												<i class="icon-twitter"></i>
											</a>
											<a href="#"
												class="social-icon inline-block si-small si-light si-rounded si-gplus">
												<i class="icon-gplus"></i>
												<i class="icon-gplus"></i>
											</a>
										</div>

									</div>

								</div>
							</div>
							<div class="col-md-6 col-padding min-vh-60"
								style="background: url('{{asset('images/company-plant/karawang.png')}}') center center no-repeat; background-size: cover;">
							</div>
						</div>
					</div>

				</div>

			</div>

			<div class="container-fluid float-left p-5">
				<div class="d-flex justify-content-center mb-3">
					<h2 class="fs-1 m-0 text-black text-center">Facility</h2>
				</div>
				<div class="d-flex justify-content-center mb-2">
					<p class="fs-4 mb-0 text-dark text-center">An-Nur Mosque, Sugity Creatives</p>
				</div>
				<div class="style-carousel-facility">
					<div class="style-item">
						<div class="style-carousel-item item-1 active">
							<img src="{{asset('images/company-plant/facility-1.jpg')}}" alt="">
							<div class="style-carousel-overlay"></div>
						</div>
						<div class="style-carousel-item item-2 active">
							<img src="{{asset('images/company-plant/facility-2.jpg')}}" alt="">
							<div class="style-carousel-overlay"></div>
						</div>
						<div class="style-carousel-item item-3 active">
							<img src="{{asset('images/company-plant/facility-3.jpg')}}" alt="">
							<div class="style-carousel-overlay"></div>
						</div>
						<div class="style-carousel-item item-4 active">
							<img src="{{asset('images/company-plant/facility-4.jpg')}}" alt="">
							<div class="style-carousel-overlay"></div>
						</div>
						<div class="style-carousel-item item-5 active">
							<img src="{{asset('images/company-plant/facility-5.jpg')}}" alt="">
							<div class="style-carousel-overlay"></div>
						</div>
					</div>
					<div class="style-nav">
						<button class="style-carousel-prev"><i class="bi bi-arrow-left"></i></button>
						<button class="style-carousel-next"><i class="bi bi-arrow-right"></i></button>
					</div>
					<!-- <div class="item style-facility-image" style="background-image: url('./asset/images/banner/banner-2-v3.png');">
					</div>
					<div class="item style-facility-image" style="background-image: url('./asset/images/banner/banner-2-v3.png');">
					</div>
					<div class="item style-facility-image" style="background-image: url('./asset/images/banner/banner-2-v3.png');">
					</div> -->
				</div>
			</div>

			<div id="google-map5" style="height: 400px; margin-bottom: 20px;" class="gmap" data-address="New York, USA"
				data-zoom="7"></div>
		</section><!-- #content end -->

@endsection

@section('custom_js')
<script>
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


    $('.style-owl-facility').owlCarousel({
        margin: 0,
        loop: true,
        nav: true,
        mouseDrag: false,
        touchDrag: false,
        autoHeight: true,
        // autoplay: true,
        // autoplayTimeout: 2000,
        // smartSpeed: 1000,
        // animateOut: "slideOutDown",
        // animateIn: "slideInDown",
        // items: 1,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });
    var owl = $('.owl-carousel');
    owl.owlCarousel();
    // Listen to owl events:

    owl.on('changed.owl.carousel', function (event) {
        // owl.find(".active").style.transform = "rotate(7deg)";
        // setInterval(function () {
        // owl.find(".owl-stage").find('.active').removeClass("h-300").removeClass("h-400").removeClass("h-500");
        // owl.find(".owl-stage").find('.active').eq(0).addClass("h-300");
        // owl.find(".owl-stage").find('.active').eq(1).addClass("h-400");
        // owl.find(".owl-stage").find('.active').eq(2).addClass("h-500");
        // owl.find(".owl-stage").find('.active').eq(3).addClass("h-400");
        // owl.find(".owl-stage").find('.active').eq(4).addClass("h-300");
        // }, 1000);
    });

    // var owl = $('.owl-carousel');
    // // owl.on('initialize.owl.carousel');
    // owl.on('change.owl.carousel', function (event) {
    // 	var $currentItem = $('.owl-item active', owl).eq(event.item.index);
    // 	var $elemsToanim = $currentItem.find("[data-animation-out]");

    // 	// $currentItem.eq(event.item.index + event.page.size - 1).addClass('animate__animated animate__flipInX');
    // 	setAnimation($elemsToanim, 'animate__animated animate__flipInX');
    // });
</script>

@endsection

