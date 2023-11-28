@extends('layout.app')
@section('custom_css')
<link rel="stylesheet" href="{{ asset('css/custom/board-directors.css') }}" type="text/css" />
@endsection

@section('title')
<title>Sugity Creatives | Board of Director</title>
@endsection

@section('content')
    <!-- Page Title
		============================================= -->
		<section id="page-title" class="page-title-dark d-none d-sm-block"
			style="background-image: url('{{asset('images/background/background-board-of-director.png')}}'); padding: 375px 0; background-size: cover;">

			<div class="container clearfix text-center">
				<h1 style="font-size: 80px;">Board of Director</h1>
			</div>

		</section>
		<section id="page-title" class="page-title-dark d-block d-sm-none"
			style="background-image: url('{{asset('images/background/background-board-of-director.png')}}'); padding: 325px 0; background-size: cover;">

			<div class="container clearfix text-center">
				<h1 style="font-size: 50px;">Board of Director</h1>
			</div>

		</section>
		<!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">
			<!-- our board of director section -->
			<div class="mb-md-5 pb-md-5">
				<div class="services-section my-5 pt-md-5">
					<div class="mb-5 ps-md-5">
						<h1 class="bod-title-text">Board of Directors</h1>
					</div>
				</div>
				<ul class="nav nav-pills style-nav-pills-bod" id="pills-tab" role="tablist">
					<!-- <li class="nav-item col-6 d-flex justify-content-end" role="presentation">
						<button class="nav-link w-50 active" id="pills-vehicle-tab" data-bs-toggle="pill"
							data-bs-target="#pills-vehicle" type="button" role="tab" aria-controls="pills-vehicle"
							aria-selected="true">
							Commissioner
						</button>
					</li> -->
					<li class="nav-item col-12 d-flex justify-content-center" role="presentation">
						<button class="nav-link w-50 active" id="pills-vehicle-tab" data-bs-toggle="pill"
							data-bs-target="#pills-parts" type="button" role="tab" aria-controls="pills-vehicle"
							aria-selected="true">
							Directors
						</button>
					</li>
				</ul>
				<div class="tab-content" id="pills-tabContent">
					<!-- <div class="tab-pane fade show active w-100 text-center" id="pills-vehicle" role="tabpanel"
						aria-labelledby="pills-vehicle-tab" tabindex="0">
						<div class="row ps-lg-5 pe-lg-5 mt-md-5 pt-5 g-0">
							<div class="col-4 d-md-flex justify-content-end">
								<div class="px-1">
									<img src="./asset/images/board-of-director/avatar.png" width="300" alt="">
									<h3 class="mb-2 commis-name">KEIJI MASUI</h3>
									<h4 class="corp-name">TOYOTA AUTO BODY CO.,LTD</h4>
								</div>
							</div>
							<div class="col-4 d-md-flex justify-content-center">
								<div class="px-1">
									<img src="./asset/images/board-of-director/avatar.png" width="300" alt="">
									<h3 class="mb-2 commis-name">TAKESHI KIMUTA</h3>
									<h4 class="corp-name">TOYOTA AUTO BODY CO.,LTD</h4>
								</div>
							</div>
							<div class="col-4 d-md-flex justify-content-start">
								<div class="px-1">
									<img src="./asset/images/board-of-director/avatar.png" width="300" alt="">
									<h3 class="mb-2 commis-name">KAZUYUKI URATA</h3>
									<h4 class="corp-name">TOYOTA TSUSHO CORPORATION</h4>
								</div>
							</div>
						</div>
					</div> -->
					<!-- commisioner part -->
					<div class="tab-pane fade show active w-100 text-center" id="pills-parts" role="tabpanel"
						aria-labelledby="pills-parts-tab" tabindex="0">
						<div class="row ps-lg-5 pe-lg-5 mt-md-5 pt-5">
							<div class="col-6 d-flex justify-content-end">
								<div class="px-3 px-md-5">
									<img class="director-image" src="{{asset('images/board-of-director/BOD.png')}}" width="300" alt="">
									<h3 class="mb-2 mt-3 director-title">PRESIDENT DIRECTOR</h3>
									<h3 class="mb-2 director-name">MASASHI SUZUKI</h3>
									<h4 class="director-corp">TOYOTA AUTO BODY CO.,LTD</h4>
								</div>
							</div>
							<div class="col-6 d-flex justify-content-start">
								<div class="px-3 px-md-5">
									<img class="director-image" src="{{asset('images/board-of-director/BOD (1).png')}}" width="300" alt="">
									<h3 class="mb-2 mt-3 director-title">EXECUTIVE VICE PRESIDENT</h3>
									<h3 class="mb-2 director-name">RIWAN DARMANTO</h3>
								</div>
							</div>
						</div>
						<div class="row ps-lg-5 pe-lg-5">
							<div class="col-6 d-flex justify-content-end">
								<div class="px-3 px-md-5">
									<img class="director-image" src="{{asset('images/board-of-director/BOD (2).png')}}" width="300" alt="">
									<h3 class="mb-2 mt-3 director-title">DIRECTOR</h3>
									<h3 class="mb-2 director-name">DJOKO SANTOSO</h3>
								</div>
							</div>
							<div class="col-6 d-flex justify-content-start">
								<div class="px-3 px-md-5">
									<img class="director-image" src="{{asset('images/board-of-director/BOD (3).png')}}" width="300" alt="">
									<h3 class="mb-2 mt-3 director-title">DIRECTOR</h3>
									<h3 class="mb-2 director-name">KOJI YASUDA</h3>
									<h4 class="director-corp">TOYOTA AUTO BODY CO.,LTD</h4>
								</div>
							</div>
						</div>
						<div class="row ps-lg-5 pe-lg-5">
							<div class="col-6 d-flex justify-content-end">
								<div class="px-3 px-md-5">
									<img class="director-image" src="{{asset('images/board-of-director/BOD (4).png')}}" width="300" alt="">
									<h3 class="mb-2 mt-3 director-title">DIRECTOR</h3>
									<h3 class="mb-2 mt-3 director-name">ASEP CHANDRA</h3>
								</div>
							</div>
							<div class="col-6 d-flex justify-content-start">
								<div class="px-3 px-md-5">
									<img class="director-image" src="{{asset('images/board-of-director/BOD (5).png')}}" width="300" alt="">
									<h3 class="mb-2 mt-3 director-title">DIRECTOR</h3>
									<h3 class="mb-2 mt-3 director-name">MAYA MAHARINI</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end board director section -->

			<!-- <div>
				<img src="./asset/images/board-of-director/group-dots-orange.png" style="position: absolute; z-index: 0;" alt="">
			</div> -->
			<!-- shareholder section -->
			<div class="m-4 pb-5" style="z-index: 9999; border-radius: 10px; background: #FFF; box-shadow: 0px 5px 30px 0px rgba(23, 155, 52, 0.15);">
				<div class="pt-md-4 pt-2 ps-4">
					<h1 class="shareholders-title-text">Shareholders</h1>
				</div>
				<div class="row ps-3">
					<div class="col-4">
						<img src="{{asset('images/board-of-director/chart-shareholder.png')}}" alt="">
					</div>
					<div class="col-8">
						<div class="row h-100 gx-0 align-items-center">
							<div class="col-4">
								<div><img src="{{asset('images/board-of-director/percentage-1.png')}}" alt=""></div>
							</div>
							<div class="col-4">
								<div><img src="{{asset('images/board-of-director/percentage-2.png')}}" alt=""></div>
							</div>
							<div class="col-4">
								<div><img src="{{asset('images/board-of-director/percentage-3.png')}}" alt=""></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end shareholder section -->
		</section><!-- #content end -->
@endsection

