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
		{{-- Desktop --}}
		<section id="page-title" class="page-title-dark d-none d-xl-block"
			style="background-image: url('{{asset('images/background/background-board-of-director-v2.png')}}'); padding: 375px 0; background-repeat: no-repeat; background-attachment: fixed; background-position: center; z-index: 10; background-size: cover;">
			<div data-aos="fade-in" data-aos-duration="1000" class="container clearfix text-center">
				<h1 style="font-size: 80px; margin-top: -250px">Board of Director</h1>
			</div>
		</section>
		{{-- Mobile --}}
		<section id="page-title" class="page-title-dark d-block d-sm-none"
			style="background-image: url('{{asset('images/background/background-board-of-director-v2.png')}}'); padding: 110px 0; margin-top: 69px; background-repeat: no-repeat; z-index: 10; background-size: cover; background-position: 50%;">
			<div data-aos="fade-in" data-aos-duration="1000" class="container clearfix text-center">
				<h1 style="font-size: 20px; margin-top: -75px">Board of Director</h1>
			</div>
		</section>
		{{-- Tablet --}}
		<section id="page-title" class="page-title-dark d-none d-md-block d-lg-none"
			style="background-image: url('{{asset('images/background/background-board-of-director-v2.png')}}'); padding: 200px 0; margin-top: 69px; background-repeat: no-repeat; z-index: 10; background-size: cover; background-position: 50%;">
			<div data-aos="fade-in" data-aos-duration="1000" class="container clearfix text-center">
				<h1 style="font-size: 30px; margin-top: -150px">Board of Director</h1>
			</div>
		</section>
		<section id="page-title" class="page-title-dark d-none d-lg-block d-xl-none"
			style="background-image: url('{{asset('images/background/background-board-of-director-v2.png')}}'); padding: 200px 0; margin-top: 65px; background-repeat: no-repeat; z-index: 10; background-size: cover; background-position: 50%;">
			<div data-aos="fade-in" data-aos-duration="1000" class="container clearfix text-center">
				<h1 style="font-size: 30px; margin-top: -150px">Board of Director</h1>
			</div>
		</section>
		<!-- #page-title end -->

		<!-- <div>
				<img src="./asset/images/board-of-director/group-dots-green.png" style="position: absolute; z-index: 0;" alt="">
			</div> -->
		<!-- Content
		============================================= -->
		<section id="content" class="p-0" style="position: relative;">
			<!-- our board of director section -->
			<div class="container-fluid py-5 style-bg-abstract">
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
							Board of Directors
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
						<div class="row mt-md-5 pt-5 pb-4">
							<div data-aos="fade-in" data-aos-duration="1000" class="col-12 d-flex justify-content-center">

								<div class="px-3 px-md-0" align="center">
									<div class="style-background-director-image">
									<img class="director-image" src="{{asset('images/bod/'.$president_directors->data[0]->img)}}"
										width="280" alt="">
									</div>
									{{-- <h3 class="mb-2 mt-3 director-title">{{strtoupper($president_directors->data[0]->position)}}</h3> --}}
									<h3 class="mb-2 mt-3 director-title">{{$president_directors->data[0]->position}}</h3>
									<u><h3 class="mb-2 director-name">{{strtoupper($president_directors->data[0]->name)}}</h3></u>
									{{-- <h4 class="director-corp mb-2">{{strtoupper($president_directors->data[0]->affiliation)}}</h4> --}}
									<img class="mb-5" src="{{asset('images/board-of-director/jpn-flag.png')}}" width="50" alt="" style="box-shadow: 0px 1px 5px #d9d9d9;">
								</div>
							</div>

							<div data-aos="fade-in" data-aos-duration="1000" class="col-12 d-flex justify-content-center">
								<div class="px-3 px-md-0" align="center">
									<div class="style-background-director-image">
									<img class="director-image" src="{{asset('images/bod/'.$vice_president->data[0]->img)}}"
										width="280" alt="">
									</div>
									{{-- <h3 class="mb-2 mt-3 director-title">{{strtoupper($vice_president->data[0]->position)}}</h3> --}}
									<h3 class="mb-2 mt-3 director-title">{{$vice_president->data[0]->position}}</h3>
									<u><h3 class="director-name mb-2">{{strtoupper($vice_president->data[0]->name)}}</h3></u>
									<img class="mb-5" src="{{asset('images/board-of-director/ina-flag.png')}}" width="50" alt="" style="box-shadow: 0px 1px 5px #d9d9d9;">
								</div>
							</div>
						</div>

						<div data-aos="fade-in" data-aos-duration="1000" class="row mx-lg-5">
							@foreach($directors->data as $director)
							<div class="col-12 col-md-6 col-lg-3 d-flex justify-content-center">
								<div class="px-3 px-md-0"  align="center">
									<div class="style-background-director-image">
									<img class="director-image" src="{{asset('images/bod/'.$director->img)}}"
										width="300" alt="">
									</div>
									{{-- <h3 class="mb-2 mt-3 director-title">{{strtoupper($director->position)}}</h3> --}}
									<h3 class="mb-2 mt-3 director-title">{{$director->position}}</h3>
									<u><h3 class="mb-2 director-name">{{strtoupper($director->name)}}</h3></u>
									{{-- <h4 class="director-corp">{{strtoupper($director->affiliation)}}</h4> --}}
									@if($loop->index === 1)
									<img class="mb-5" src="{{asset('images/board-of-director/jpn-flag.png')}}" width="50" alt="" style="box-shadow: 0px 1px 5px #d9d9d9;">
									@else
									<img class="mb-5" src="{{asset('images/board-of-director/ina-flag.png')}}" width="50" alt="" style="box-shadow: 0px 1px 5px #d9d9d9;">
									@endif
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

			<div style="background: linear-gradient(to bottom, rgba(255,255,255,0) 40%,
	rgba(255,255,255,1)), linear-gradient(to top, rgba(255,255,255,0) 40%,
	rgba(255,255,255,1)), url('{{asset('images/vector_1/v2.png')}}'); background-size: cover ; height: 30vh !important; opacity: 0.4; background-position-y: 36%; margin-top: -64px; margin-bottom: -64px;">
	</div>
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
