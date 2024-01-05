@extends('layout.app')
@section('custom_css')
<link rel="stylesheet" href="{{ asset('css/custom/board-directors.css') }}" type="text/css" />
<!-- AOS (Animate on Scroll) -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	
@endsection

@section('title')
<title>Sugity Creatives | Board of Director</title>
@endsection

@section('content')
		<!-- Page Title
		============================================= -->
		<section id="page-title" class="page-title-dark d-none d-sm-block"
			style="background-image: url('{{asset('images/background/background-board-of-director.png')}}'); padding: 375px 0; background-repeat: no-repeat; background-attachment: fixed; background-position: center; z-index: 10;">
			<div data-aos="fade-in" data-aos-duration="1000" class="container clearfix text-center">
				<h1 style="font-size: 80px;">Board of Director</h1>
			</div>
		</section>
		<section id="page-title" class="page-title-dark d-block d-sm-none"
			style="background-image: url('{{asset('images/background/background-board-of-director.png')}}'); padding: 325px 0; background-repeat: no-repeat; background-attachment: fixed; background-position: center; z-index: 10;">
			<div data-aos="fade-in" data-aos-duration="1000" class="container clearfix text-center">
				<h1 style="font-size: 50px;">Board of Director</h1>
			</div>
		</section>
		<!-- #page-title end -->

		<!-- <div>
				<img src="./asset/images/board-of-director/group-dots-green.png" style="position: absolute; z-index: 0;" alt="">
			</div> -->
		<!-- Content
		============================================= -->
		<section id="content" class="p-3 p-md-0">
			<!-- our board of director section -->
			<div class="container pb-5 style-bg-dot">
				<div class="services-section my-5 pt-md-5">
					<div data-aos="fade-in" data-aos-duration="1000" class="mb-5">
						<h1 class="bod-title-text">Board of Directors</h1>
					</div>
				</div>
				<ul data-aos="fade-in" data-aos-duration="800" class="nav nav-pills style-nav-pills-bod" id="pills-tab" role="tablist">
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
				<div class="tab-content" id="pills-tabContent" style="z-index: 10;">
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
					<div class="tab-pane fade show active w-100 text-center" id="pills-parts" role="tabpanel" aria-labelledby="pills-parts-tab" tabindex="0">
						<div class="row mt-md-5 pt-5">
							
							<div data-aos="fade-in" data-aos-duration="1000" class="col-12 d-flex justify-content-center">
								<div class="px-3 px-md-0">
									<img class="director-image" src="{{asset('images/bod/'.$president_directors->data[0]->img)}}"
										width="280" alt="">
									<h3 class="mb-2 mt-3 director-title">{{$president_directors->data[0]->position}}</h3>
									<h3 class="mb-2 director-name">{{$president_directors->data[0]->name}}</h3>
									<h4 class="director-corp">{{$president_directors->data[0]->affiliation}}</h4>
								</div>
							</div>

							<div data-aos="fade-in" data-aos-duration="1000" class="col-12 d-flex justify-content-center">
								<div class="px-3 px-md-0">
									<img class="director-image" src="{{asset('images/bod/'.$vice_president->data[0]->img)}}"
										width="280" alt="">
									<h3 class="mb-2 mt-3 director-title">{{$vice_president->data[0]->position}}</h3>
									<h3 class="director-name">{{$vice_president->data[0]->name}}</h3>
								</div>
							</div>
						</div>

						<div data-aos="fade-in" data-aos-duration="1000" class="row">
							@foreach($directors->data as $director)
							<div class="col-6 col-md-3 d-flex">
								<div class="px-3 px-md-1">
									<img class="director-image" src="{{asset('images/bod/'.$director->img)}}"
										width="300" alt="">
									<h3 class="mb-2 mt-3 director-title">{{$director->position}}</h3>
									<h3 class="mb-2 director-name">{{$director->name}}</h3>
									<h4 class="director-corp">{{$director->affiliation}}</h4>
								</div>
							</div>	
							@endforeach
						</div>
					</div>
				</div>
			</div>
			<!-- end board director section -->

			<!-- <div>
				<img src="./asset/images/board-of-director/group-dots-orange.png" style="position: absolute; z-index: 0;" alt="">
			</div> -->
			<!-- shareholder section -->
			<div class="container mb-5 pb-5"
				style="z-index: 10; border-radius: 10px; background: #FFF; box-shadow: 0px 5px 30px 0px rgba(23, 155, 52, 0.15);">
				<div data-aos="fade-in" data-aos-duration="1000" class="pt-md-4 pt-3 ps-4">
					<h1 class="shareholders-title-text">Shareholders</h1>
				</div>
				<div class="row px-3">
					<div data-aos="fade-in" data-aos-duration="1000" class="col-12 col-md-4">
						<img src="{{asset('images/board-of-director/new-chart-shareholder.png')}}" width="400"
							alt="">
					</div>
					<div data-aos="fade-left" data-aos-duration="1000" class="col-12 col-md-8 pt-xl-5 ps-md-5">
						<div class="mb-2 mb-md-5 pt-4 pt-md-0">
							<img src="{{asset('images/board-of-director/dot-blue.png')}}" alt="">
							<span class="ps-2 desc-shareholder">Toyota Auto Body .CO, LTD (TAB)</span>
						</div>
						<div class="mb-2 my-md-5">
							<img src="{{asset('images/board-of-director/dot-red.png')}}" alt="">
							<span class="ps-2 desc-shareholder">PT. Toyota Motor Manufacturing Indonesia (TMMIN)</span>
						</div>
						<div class="">
							<img src="{{asset('images/board-of-director/dot-orange.png')}}" alt="">
							<span class="ps-2 desc-shareholder">Toyota Tsusho Corporation (TTC)</span>
						</div>
					</div>
				</div>
			</div>
			<!-- end shareholder section -->
		</section>
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
	
@endsection
