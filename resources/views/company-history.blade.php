@extends('layout.app')
@section('custom_css')
<link rel="stylesheet" href="{{ asset('css/custom/company-history.css') }}" type="text/css" />
@endsection

@section('title')
<title>Sugity Creatives | Company History</title>
@endsection    

@section('content')
		<!-- Content
		============================================= -->
		<section id="content">
		<!-- parallax -->
			<div class="section style-paralax section-image m-0 border-0 d-none d-sm-block"
				style="height: 700px; background-image: url('{{asset('images/parallax/parallax-company-profile-2.png')}}');"
				data-bottom-top="background-position:0px 200px;" data-top-bottom="background-position:0px -200px;">
				<div class="row" style="height: 100%;">
					<div class="col-md-10 col-lg-8 col-xl-6 col-xxl-5 px-5 pt-5" style="display: flex; justify-content: center; align-items: center;">
						<div class="container px-5" style="height: 100%;">
							<h1 class="mt-0 title-text">Sugity Creatives</h1>
							<p style="line-height: 25px;">
								Sugity, founded in 1995 as a collaborative venture between Superior Coach and Toyota Auto Body, embarked on a transformative journey that witnessed our commitment to innovation and precision. In 1996, Sugity inaugurated the production of Kijang SCM and Resin & Painting Parts, followed by the assembly of Dyna and Heavy Cabin in 1997. The year 2012 marked the commencement of NAV1 Assembly, complemented by on-site production at TMMIN Karawang Plant from 2011.
                                Our dedication to advancement took a notable stride in 1997 with the establishment of Extrusion, a venture that evolved into an entity known today as TTEC (Toyota Auto Body - Tokai Extrusion) in 2005. The year 2000 witnessed the initiation of Plating production, subsequently evolving into an enterprise known as RPT (Resin Plating Technology) in 2013. Further enhancing our capabilities, we embraced in-house mold making in 2004, solidifying Sugity's legacy in the automotive landscape.
							</p>
						</div>
					</div>
				</div>
			</div>

			<div class="d-block d-sm-none">
				<div class="container px-4" style="height: 100%;">
					<h1 class="mt-0 title-text pt-6">Sugity Creatives</h1>
					<p style="line-height: 25px;">
                        Sugity, founded in 1995 as a collaborative venture between Superior Coach and Toyota Auto Body, embarked on a transformative journey that witnessed our commitment to innovation and precision. In 1996, Sugity inaugurated the production of Kijang SCM and Resin & Painting Parts, followed by the assembly of Dyna and Heavy Cabin in 1997. The year 2012 marked the commencement of NAV1 Assembly, complemented by on-site production at TMMIN Karawang Plant from 2011.
                        Our dedication to advancement took a notable stride in 1997 with the establishment of Extrusion, a venture that evolved into an entity known today as TTEC (Toyota Auto Body - Tokai Extrusion) in 2005. The year 2000 witnessed the initiation of Plating production, subsequently evolving into an enterprise known as RPT (Resin Plating Technology) in 2013. Further enhancing our capabilities, we embraced in-house mold making in 2004, solidifying Sugity's legacy in the automotive landscape.
					</p>
				</div>
				<div
					style="height: 300px; background-image: url('{{asset('images/parallax/bg-about-us-mobile.png')}}'); background-repeat: no-repeat; background-position: top; background-size: contain;">
				</div>
			</div>
			<!-- end parallax -->


			<!-- section slider history company -->
			<div class="row style-history py-5 ps-md-5 mt-5 mx-0">
				<div class="col-7 ps-lg-5 pe-5">
					<div class="style-custom-slider">
						<div class="style-item style-item-1">
							<img src="{{asset('images/brief-history/1-whereitall.jpg')}}" alt="...">
						</div>
						<div class="style-item style-item-2">
							<img src="{{asset('images/brief-history/2-dynaassembly.jpg')}}" alt="...">
						</div>
						<div class="style-item style-item-3">
							<img src="{{asset('images/brief-history/3-rubberline.png')}}" alt="...">
						</div>
						<div class="style-item style-item-slider">
							<img src="{{asset('images/brief-history/4-resin.png')}}" alt="...">
						</div>
						<div class="style-item style-item-slider style-delay-1">
							<img src="{{asset('images/brief-history/5-kijang.png')}}" alt="...">
						</div>
						<div class="style-item style-item-slider style-delay-2">
							<img src="{{asset('images/brief-history/7-mold.png')}}" alt="...">
						</div>
						<div class="style-item style-item-slider style-delay-3">
							<img src="{{asset('images/brief-history/6-ttec-v2.png')}}" alt="...">
						</div>
						<div class="style-item style-item-slider style-delay-4">
							<img src="{{asset('images/brief-history/8-dyna.jpg')}}" alt="...">
						</div>
						<div class="style-item style-item-slider style-delay-5">
							<img src="{{asset('images/brief-history/9-plant2.jpg')}}" alt="...">
						</div>
						<div class="style-item style-item-slider style-delay-6">
							<img src="{{asset('images/brief-history/10-nav.jpg')}}" alt="...">
						</div>
						<div class="style-item style-item-slider style-delay-7">
							<img src="{{asset('images/brief-history/11-rpt-v2.png')}}" alt="...">
						</div>
						<div class="style-item style-item-slider style-delay-8">
							<img src="{{asset('images/brief-history/12-hi-ace.png')}}" alt="...">
						</div>
						<div class="style-item style-item-slider style-delay-9">
							<img src="{{asset('images/brief-history/1-whereitall.jpg')}}" alt="...">
						</div>
						<div class="style-item style-item-slider style-delay-10">
							<img src="{{asset('images/brief-history/2-dynaassembly.jp')}}g" alt="...">
						</div>
						<div class="style-item style-item-slider style-delay-11">
							<img src="{{asset('images/brief-history/3-rubberline.png')}}" alt="...">
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
							<p class="style-description m-0 pb-2 pb-md-4">Mold Making</p>
							<h2 class="style-title m-0 p-0">2004</h2>
						</div>
						<div class="style-item px-2 px-md-5 style-item-fade style-delay-3">
							<p class="style-description m-0 pb-2 pb-md-4">TTEC Establish</p>
							<h2 class="style-title m-0 p-0">2005</h2>
						</div>
						<div class="style-item px-2 px-md-5 style-item-fade style-delay-4">
							<p class="style-description m-0 pb-2 pb-md-4">Dyna Move To Hino</p>
							<h2 class="style-title m-0 p-0">2009</h2>
						</div>
						<div class="style-item px-2 px-md-5 style-item-fade style-delay-5">
							<p class="style-description m-0 pb-2 pb-md-4">On-site Resin - Painting part Production @Karawang Plant</p>
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
							<p class="style-description m-0 pb-2 pb-md-4">Hi-Ace Conversion</p>
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
			</div>
			<!-- end section slider history company -->

		</section><!-- #content end -->
@endsection

@section('custom_js')
<script>
    $('.style-owl-banner-slider').owlCarousel({
        loop: false,
        margin: 0,
        nav: false,
        items: 1,
        autoplay: false,
        autoplayTimeout: 5000,
        autoplayHoverPause: false,
        animateOut: 'slideOutLeft',
        animateIn: 'slideInRight',
    });
</script>

@endsection