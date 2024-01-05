@extends('layout.app')
@section('custom_css')
<link rel="stylesheet" href="{{ asset('css/custom/product-vehicle-business.css') }}" type="text/css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
@endsection

@section('title')
<title>Sugity Creatives | Products Vehicle</title>
@endsection

@section('content')

<body class="stretched">

		<!-- Banner Slider
		============================================= -->
		<div class="owl-carousel owl-theme style-owl-banner-slider">
			<div class="item min-vh-100 min-vh-md-100">
				<!-- <h2 class="style-banner-title style-title-short">PRIDE of Team.</h2> -->
				<div class="style-banner-content slide-1">
					<div>
						<p class="first-text-slider-product mb-0">Gran Max Wira-Wiri Surabaya</p>
						<p class="second-text-slider-product mt-0 text-center"><i>Spacious & Comfort</i></p>
					</div>
				</div>
				<div class="style-banner-image" style="background-image: url('{{asset('images/slider/1.png')}}');">
				</div>
			</div>
			<div class="item min-vh-100 min-vh-md-100 slide-2">
				<!-- <h2 class="style-banner-title style-title-short">PRIDE of Team.</h2> -->
				<div class="style-banner-content slide-2">
					<!-- <p class="first-text-slider-product mb-0">Gran Max Wira-Wiri Surabaya</p> -->
					<p class="second-text-slider-product mt-0"><i>Proficient and Agile</i></p>
				</div>
				<div class="style-banner-image" style="background-image: url('{{asset('images/slider/2.png')}}');">
				</div>
			</div>
			<div class="item min-vh-100 min-vh-md-100">
				<!-- <h2 class="style-banner-title style-title-short">PRIDE of Work.</h2> -->
				<div class="style-banner-content slide-3">
					<!-- <p class="first-text-slider-product mb-0">Gran Max Wira-Wiri Surabaya</p> -->
					<p class="second-text-slider-product mt-0"><i>Quality and Precious</i></p>
				</div>
				<div class="style-banner-image" style="background-image: url('{{asset('images/slider/3.png')}}');">
				</div>
			</div>
		</div><!-- #Banner Slider end -->
		<!-- <br><br> -->


		<!-- Content
		============================================= -->
		<section id="content" class="style-background-vector">
			<div class="container clearfix">
				<h1 class="fs-1 pt-5 text-center" style="color: #000000;">Explore Our Product</h1>
			</div>
			<div class="container">
				<div class="tabs tabs-bb clearfix" id="tab-9">

					<ul class="tab-nav clearfix mb-4" style="justify-content: center;">
						<li><a href="#tabs-all" class="text-size-sm">All</a></li>
						<li><a href="#tabs-vehicle" class="text-size-sm">Vehicle</a></li>
						<li><a href="#tabs-part" class="text-size-sm">Part</a></li>
						<li><a href="#tabs-mold" class="text-size-sm">Mold</a></li>
					</ul>

					<div class="tab-container">

						<!-- tab all -->
						<div class="tab-content clearfix" id="tabs-all">
							<div class="style-section-product-overview">
								<div class="row">
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="./asset/images/product-vehicle-business/all/6.png" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Gran Max JakLingko
													<br><br>
													<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalVehicle">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="./asset/images/product-vehicle-business/public-transport/2.png" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Gran Max Wira-Wiri SBY
													<br><br>
													<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalVehicle">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="./asset/images/product-vehicle-business/all/5.png" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">HiAce Wira-Wiri SBY
													<br><br>
													<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalVehicle">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="./asset/images/product-vehicle-business/healthcare/1.png" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Voxy Welcab
													<br><br>
													<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalVehicle">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="./asset/images/product-vehicle-business/healthcare/2.png" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">HiAce Medical Mover
													<br><br>
													<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalVehicle">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="./asset/images/product-vehicle-business/healthcare/4.png" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">HiAce Ambulance
													<br><br>
													<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalVehicle">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="./asset/images/product-vehicle-business/all/8.png" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Gran Max Ambulance
													<br><br>
													<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalVehicle">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="./asset/images/product-vehicle-business/healthcare/5.png" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Innova Ambulance
													<br><br>
													<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalVehicle">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="./asset/images/product-vehicle-business/other/2.png" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Car Promotion
													<br><br>
													<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalVehicle">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="./asset/images/product-vehicle-business/export-vehicle/1.png" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Cash Carrier Fortuner
													<br><br>
													<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalVehicle">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="./asset/images/product-vehicle-business/export-vehicle/2.png" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Fortuner Ambulance
													<br><br>
													<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalVehicle">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="./asset/images/product-vehicle-business/all/9.png" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Fortuner Patrol
													<br><br>
													<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalVehicle">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="./asset/images/product-vehicle-business/all/9.png" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Vios Patrol
													<br><br>
													<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalVehicle">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="./asset/images/product-part-business/interior/1.png" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Sub Assy Intrument Panel
												<br><br>
												<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalPart">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="./asset/images/product-part-business/interior/2.png" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Intrument Panel
												<br><br>
												<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalPart">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="./asset/images/product-part-business/interior/3.png" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Door Trim
												<br><br>
												<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalPart">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="./asset/images/product-part-business/interior/4.png" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Box Console
												<br><br>
												<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalPart">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="./asset/images/product-part-business/interior/5.png" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Quarter Door Trim
												<br><br>
												<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalPart">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="./asset/images/product-part-business/interior/6.png" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Door Glove
												<br><br>
												<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalPart">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="./asset/images/product-part-business/interior/7.png" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Register
												<br><br>
												<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalPart">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="./asset/images/product-part-business/exterior/1.png" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Rear Bumper Yaris
												<br><br>
												<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalPart">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="./asset/images/product-part-business/exterior/6.png" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Rear Bumper Yaris Cross
												<br><br>
												<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalPart">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="./asset/images/product-part-business/exterior/2.png" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Front Bumper Yaris
												<br><br>
												<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalPart">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="./asset/images/product-part-business/exterior/7.png" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Front Bumper Yaris Cross
												<br><br>
												<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalPart">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="./asset/images/product-part-business/exterior/3.png" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Grille
												<br><br>
												<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalPart">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="./asset/images/product-part-business/exterior/4.png" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Spoiler
												<br><br>
												<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalPart">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="./asset/images/product-part-business/exterior/5.png" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Mud Guard
												<br><br>
												<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalPart">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="./asset/images/product/mold/1.png"
												style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer">
												<h4 class="text-left mt-4" style="color: black">Big Mold
													<!-- <br>
													(1300Ton-3500Ton) -->
													<br><br>
													<a style="color: black" class="text-left" href="#"
														data-bs-toggle="modal" data-bs-target="#modalMold">Explore
														More <i class="fa-solid fa-chevron-right"></i>></a>
												</h4>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="./asset/images/product/mold/2.png"
												style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer">
												<h4 class="text-left mt-4" style="color: black">Medium Mold
													<!-- <br>
													(350Ton - 1050Ton) -->
													<br><br>
													<a style="color: black" class="text-left" href="#"
														data-bs-toggle="modal" data-bs-target="#modalMold">Explore
														More <i class="fa-solid fa-chevron-right"></i>></a>
												</h4>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="./asset/images/product/mold/3.png"
												style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Small Mold
													<!-- <br>
												(30Ton-175Ton) -->
													<br><br>
													<a style="color: black" class="text-left" href="#"
														data-bs-toggle="modal" data-bs-target="#modalMold">Explore
														More <i class="fa-solid fa-chevron-right"></i>></a>
												</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- tab vehicle -->
						<div class="tab-content clearfix" id="tabs-vehicle">
							<div class="style-section-product-overview">
								<div class="row">
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="./asset/images/product-vehicle-business/all/6.png" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Gran Max JakLingko
													<br><br>
													<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalVehicle">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="./asset/images/product-vehicle-business/public-transport/2.png" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Gran Max Wira-Wiri SBY
													<br><br>
													<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalVehicle">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="./asset/images/product-vehicle-business/all/5.png" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">HiAce Wira-Wiri SBY
													<br><br>
													<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalVehicle">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="./asset/images/product-vehicle-business/healthcare/1.png" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Voxy Welcab
													<br><br>
													<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalVehicle">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="./asset/images/product-vehicle-business/healthcare/2.png" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">HiAce Medical Mover
													<br><br>
													<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalVehicle">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="./asset/images/product-vehicle-business/healthcare/4.png" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">HiAce Ambulance
													<br><br>
													<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalVehicle">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="./asset/images/product-vehicle-business/all/8.png" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Gran Max Ambulance
													<br><br>
													<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalVehicle">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="./asset/images/product-vehicle-business/healthcare/5.png" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Innova Ambulance
													<br><br>
													<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalVehicle">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="./asset/images/product-vehicle-business/other/2.png" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Car Promotion
													<br><br>
													<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalVehicle">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="./asset/images/product-vehicle-business/export-vehicle/1.png" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Cash Carrier Fortuner
													<br><br>
													<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalVehicle">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="./asset/images/product-vehicle-business/export-vehicle/2.png" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Fortuner Ambulance
													<br><br>
													<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalVehicle">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="./asset/images/product-vehicle-business/all/9.png" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Fortuner Patrol
													<br><br>
													<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalVehicle">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="./asset/images/product-vehicle-business/all/9.png" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Vios Patrol
													<br><br>
													<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalVehicle">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- tab part -->
						<div class="tab-content clearfix" id="tabs-part">
							<div class="style-section-product-overview">
								<div class="row">
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="./asset/images/product-part-business/interior/1.png" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Sub Assy Intrument Panel
												<br><br>
												<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalPart">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="./asset/images/product-part-business/interior/2.png" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Intrument Panel
												<br><br>
												<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalPart">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="./asset/images/product-part-business/interior/3.png" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Door Trim
												<br><br>
												<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalPart">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="./asset/images/product-part-business/interior/4.png" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Box Console
												<br><br>
												<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalPart">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="./asset/images/product-part-business/interior/5.png" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Quarter Door Trim
												<br><br>
												<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalPart">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="./asset/images/product-part-business/interior/6.png" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Door Glove
												<br><br>
												<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalPart">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="./asset/images/product-part-business/interior/7.png" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Register
												<br><br>
												<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalPart">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="./asset/images/product-part-business/exterior/1.png" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Rear Bumper Yaris
												<br><br>
												<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalPart">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="./asset/images/product-part-business/exterior/6.png" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Rear Bumper Yaris Cross
												<br><br>
												<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalPart">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="./asset/images/product-part-business/exterior/2.png" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Front Bumper Yaris
												<br><br>
												<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalPart">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="./asset/images/product-part-business/exterior/7.png" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Front Bumper Yaris Cross
												<br><br>
												<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalPart">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="./asset/images/product-part-business/exterior/3.png" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Grille
												<br><br>
												<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalPart">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="./asset/images/product-part-business/exterior/4.png" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Spoiler
												<br><br>
												<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalPart">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="./asset/images/product-part-business/exterior/5.png" style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer px-4 px-md-0">
												<h4 class="text-left mt-4" style="color: black">Mud Guard
												<br><br>
												<a style="color: black" class="text-left" href="#" data-bs-toggle="modal" data-bs-target="#modalPart">Explore More <i class="fa-solid fa-chevron-right"></i>></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- tab mold -->
						<div class="tab-content clearfix" id="tabs-mold">
							<!-- sec 1 -->
							<div class="style-section-product-overview">
								<div class="row">
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="./asset/images/product/mold/1.png"
												style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer">
												<h4 class="text-left mt-4" style="color: black">Big Mold
													<br>
													(1300Ton-3500Ton)
													<br><br>
													<a style="color: black" class="text-left" href="#"
														data-bs-toggle="modal" data-bs-target="#modalMold">Explore
														More <i class="fa-solid fa-chevron-right"></i>></a>
												</h4>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="./asset/images/product/mold/2.png"
												style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer">
												<h4 class="text-left mt-4" style="color: black">Medium Mold
													<br>
													(350Ton - 1050Ton)
													<br><br>
													<a style="color: black" class="text-left" href="#"
														data-bs-toggle="modal" data-bs-target="#modalMold">Explore
														More <i class="fa-solid fa-chevron-right"></i>></a>
												</h4>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-xl-3 px-3 py-3">
										<div class="style-content">
											<img src="./asset/images/product/mold/3.png"
												style="width:100%; height: 250px; object-fit: contain;">
											<div class="style-footer">
												<h4 class="text-left mt-4" style="color: black">Small Mold
													<br>
													(30Ton-175Ton)
													<br><br>
													<a style="color: black" class="text-left" href="#"
														data-bs-toggle="modal" data-bs-target="#modalMold">Explore
														More <i class="fa-solid fa-chevron-right"></i>></a>
												</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>

				</div>
			</div>
			<!-- <div class="vector-background"></div> -->

			<!-- <div class="container-fluid px-3 py-5 p-md-5">
				<div class="d-flex justify-content-center mb-md-2">
					<h2 class="fs-2 m-0 text-black text-center" style="z-index: 10;">Discover Our Product</h2>
				</div>
				<div class="d-flex justify-content-center mb-2">
					<p class="style-discover-desc mb-0 text-dark text-center">This is the Mold of our Vehicle Product</p>
					<p class="style-discover-desc mb-0 text-dark text-center">This is the Part of our Vehicle Product</p>
					<p class="style-discover-desc mb-0 text-dark text-center">This is the model of our Vehicle Product, HiAce Wira-Wiri Surabaya.</p>
					duplicate
					<p class="style-discover-desc mb-0 text-dark text-center">This is the Mold of our Vehicle Product</p>
					<p class="style-discover-desc mb-0 text-dark text-center">This is the Part of our Vehicle Product</p>
					<p class="style-discover-desc mb-0 text-dark text-center">This is the model of our Vehicle Product, HiAce Wira-Wiri Surabaya.</p>
				</div>
				<div class="style-carousel-discover">
					<div class="style-item">
						<div class="style-carousel-item">
							<img src="./asset/images/product/discover-our-product/mold discover.png" alt="">
							<div class="style-carousel-overlay"></div>
						</div>
						<div class="style-carousel-item">
							<img src="./asset/images/product/discover-our-product/part discover.png" alt="">
							<div class="style-carousel-overlay"></div>
						</div>
						<div class="style-carousel-item">
							<img src="./asset/images/product/discover-our-product/vehicle discover.png" alt="">
							<div class="style-carousel-overlay"></div>
						</div>
						Duplicate
						<div class="style-carousel-item">
							<img src="./asset/images/product/discover-our-product/mold discover.png" alt="">
							<div class="style-carousel-overlay"></div>
						</div>
						<div class="style-carousel-item">
							<img src="./asset/images/product/discover-our-product/part discover.png" alt="">
							<div class="style-carousel-overlay"></div>
						</div>
						<div class="style-carousel-item">
							<img src="./asset/images/product/discover-our-product/vehicle discover.png" alt="">
							<div class="style-carousel-overlay"></div>
						</div>
					</div>
					<div class="style-nav">
						<button class="style-carousel-prev"><i class="bi bi-arrow-left"></i></button>
						<button class="style-carousel-next"><i class="bi bi-arrow-right"></i></button>
					</div>
				</div>
			</div> -->

		</section><!-- #content end -->

@endsection

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
		nav: false,
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
</script>
@endsection
