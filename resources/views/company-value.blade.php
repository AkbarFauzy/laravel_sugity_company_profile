@extends('layout.app')
@section('custom_css')
<link rel="stylesheet" href="{{ asset('css/custom/company-value.css') }}" type="text/css" />
@endsection

@section('title')
<title>Sugity Creatives | Company Value</title>
@endsection

@section('content')
	<!-- For Desktop -->
	<section class="page-title-dark mb-0 d-none d-sm-block" style="background-image: url('{{asset('images/background/background-company-value.png')}}'); height: 800px !important;">
		<div class="row">
			<div class="col-xs-12 col-md-7 text-layer" style="display: flex; justify-content: center; align-items: center;">
				<div class="container dark pt-5">
					<h1 class="title-layer-1 mb-0">Our</h1>
					<h1 class="title-layer-2 display-2 mb-4 mt-0">Company Value</h1>
					<p class="w-75 fs-5">
						Lorem ipsum dolor sit amet. Ut quibusdam tempora et molestiae voluptas est tempora beatae quo vitae corporis non voluptas alias. Et adipisci unde quo porro optio ut laboriosam possimus non consequatur asperiores qui perspiciatis tenetur sit neque exercitationem?
					</p>
				</div>
			</div>
			<div class="col-xs-12 col-md-5" style="display: flex; justify-content: center; align-items: center;">
				<img src="{{asset('images/background/overlay/overlay-image-company-value.png')}}" width="700" alt="" style="padding-top: 80px;">
			</div>
		</div>
	</section>

	<!-- For Mobile -->
	<section class="page-title-dark mb-0 d-block d-sm-none" style="background-image: url('{{asset('images/background/background-company-value.png')}}'); height: 800px !important;">
		<div class="row">
			<div class="col-xs-12 col-md-7">
				<div class="container dark" style="padding-top: 80px;">
					<h1 class="title-layer-1 mb-0">Our</h1>
					<h1 class="title-layer-2 display-2 mb-4 mt-0">Company Value</h1>
					<p>
						Lorem ipsum dolor sit amet. Ut quibusdam tempora et molestiae voluptas est tempora beatae quo vitae corporis non voluptas alias. Et adipisci unde quo porro optio ut laboriosam possimus non consequatur asperiores qui perspiciatis tenetur sit neque exercitationem?
					</p>
				</div>
			</div>
			<div class="col-xs-12 col-md-5">
				<img src="{{asset('images/background/overlay/overlay-image-company-value.png')}}" width="700" alt="">
			</div>
		</div>
	</section>
	
	<!-- Content
	============================================= -->
	<section id="content">

		<!-- section visi misi -->
		<div class="row m-0 row-section-visi-misi">
			<div class="col-md-6 text-visi-misi">
				<div class="container">
					Our Company Values
				</div>
			</div>
			<div class="divider-visi-misi" style="width: 1px; height: 650px; border-left: 1px solid #000;"></div>
			<div class="col-md-6 p-4 p-sm-5 parent-visi-misi">
				<!-- mission section -->
				<div class="row">
					<div class="col-md-6 p-2 p-sm-4 card-mission-1">
						<div class="card">
							<div class="card-body px-4 pb-0">
								<h5 class="card-title"><img src="{{asset('images/vector/our-philosophy.png')}}" alt=""
										height="110"></h5>
								<h4 class="card-subtitle mb-2">Our Philosophy</h4>
								<p style="line-height: 20px; font-size: 14px;">Create continous collaboration
									beetwen Indonesia and Japan by congtributing in various innovations for future
									mobility technology.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 p-2 p-sm-4 card-mission-2">
						<div class="card">
							<div class="card-body px-4 pb-0">
								<h5 class="card-title"><img src="{{asset('images/vector/our-value.png')}}" alt=""
										height="110"></h5>
								<h4 class="card-subtitle mb-2">Our Value</h4>
								<p style="line-height: 20px; font-size: 22px; font-weight: 700; color: #EE6D22;">
									SUGITY PRIDE</p>
							</div>
						</div>
					</div>
				</div>
				<!-- vision section -->
				<div class="row">
					<div class="col-md-6 p-2 p-sm-4 card-vision-1">
						<div class="card">
							<div class="card-body px-4 pb-0">
								<h5 class="card-title"><img src="{{asset('images/vector/our-mission.png')}}" alt=""
										height="110"></h5>
								<h4 class="card-subtitle mb-2">Our Mission</h4>
								<p style="line-height: 20px; font-size: 14px;">Being a Sustainable Product Maker
									Company that Provides Customer Satisfaction & Contributes to Society Growth</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 p-2 p-sm-4 card-vision-2">
						<div class="card">
							<div class="card-body px-4 pb-0">
								<h5 class="card-title"><img src="{{asset('images/vector/our-vision.png')}}" alt=""
										height="110"></h5>
								<h4 class="card-subtitle mb-2">Our Vision</h4>
								<p class="mb-1"
									style="line-height: 20px; font-size: 16px; font-weight: 700; color: #EE6D22;">
									LEADING with PRIDE</p>
								<p style="line-height: 20px; font-size: 14px;">Become a Model of Automotive
									Manufacturing Company that Leads the industrial ecosystem development.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end section visi misi -->

		<!-- our value -->
		<div class="value-section my-5">
			<div class="text-center mb-5">
				<h2 class="our-value-text fs-2">Our Value</h2>
				<h1 class="integrity-text fs-1">Professional • Integrity • Development</h1>
			</div>
		</div>
		<div class="row m-0 px-sm-5 pb-5">
			<div class="col-md-4 text-center px-5 py-4">
				<div style="background-image: url('{{asset('images/card-image/comp-value-1.png')}}'); height: 420px; border-radius: 12px;">
					<div class="container dark text-start item-text-overlay-value pb-3">
						<div>
							<h3 class="mb-0">Professional</h3>
							<p style="line-height: 15px; font-size: 14px; font-weight: 400;">
								Lorem ipsum dolor sit amet. Ut quibusdam tempora et molestiae voluptas est tempora beatae quo vitae corporis non voluptas alias. Et adipisci unde quo porro optio ut laboriosam 
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 text-center px-5 py-4">
				<div style="background-image: url('{{asset('images/card-image/comp-value-2.png')}}'); height: 420px; border-radius: 12px;">
					<div class="container dark text-start item-text-overlay-value pb-3">
						<div>
							<h3 class="mb-0">Integrity</h3>
							<p style="line-height: 15px; font-size: 14px; font-weight: 400;">
								Lorem ipsum dolor sit amet. Ut quibusdam tempora et molestiae voluptas est tempora beatae quo vitae corporis non voluptas alias. Et adipisci unde quo porro optio ut laboriosam 
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 text-center px-5 py-4">
				<div style="background-image: url('{{asset('images/card-image/comp-value-3.png')}}'); height: 420px; border-radius: 12px;">
					<div class="container dark text-start item-text-overlay-value pb-3">
						<div>
							<h3 class="mb-0">Development</h3>
							<p style="line-height: 15px; font-size: 14px; font-weight: 400;">
								Lorem ipsum dolor sit amet. Ut quibusdam tempora et molestiae voluptas est tempora beatae quo vitae corporis non voluptas alias. Et adipisci unde quo porro optio ut laboriosam 
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end our value -->
	</section>
	<!-- #content end -->


@endsection