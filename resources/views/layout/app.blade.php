
<!DOCTYPE html>

<html dir="ltr" lang="en-US">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<!-- <meta name="sugity-creatives" content="SemiColonWeb" /> -->
    <link rel="shortcut icon" href="{{ asset('logo/favicon.png') }}"  type='image/x-icon' />

    <!-- Stylesheets
	============================================= -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" /> --}}
	<link rel="stylesheet" href="{{ asset('css/bootstrap2.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/swiper.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/dark.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/font-icons.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" type="text/css" />

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" type="text/css" />


    @yield('custom_css')

   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<!-- Document Title
	============================================= -->
	@yield('title')

</head>

<body class="stretched">
	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">


<!-- Navbar
		============================================= -->
		<nav class="navbar navbar-dark navbar-expand-lg fixed-top p-0 style-navbar">
			<div class="container-fluid px-4" style="height: 100%;">
				<a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('logo/logo-sugity-nav.png')}}" class="logo-nav"
						style="height: 50px;" alt="Canvas Logo"></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
					data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse d-none d-lg-block" id="navbarNav" style="height: 100%;">
					{{-- <ul class="navbar-nav col-12 col-md-12 col-lg-11 col-xxl-7 text-center ms-auto" style="height: 100%;"> --}}
						<ul class="navbar-nav col-12 col-md-12 col-lg-11 col-xxl-7 text-center ms-auto" style="height: 100%; justify-content: end;">
						<li class="nav-item style-w-31">
							<a class="nav-link">
								{{ __('layout.companyProfile') }}
							</a>
							{{-- <ul class="style-sub-navbar-container"> --}}
								<ul class="style-sub-navbar-container" style="position: static; width: 100%;">
                                <li class="nav-item">
									<a class="nav-link {{ (request()->is('about-us')) ? 'disabled' : '' }}" href="{{url('about-us')}}">{{ __('layout.aboutUs') }}</a>
								</li>
								<li class="nav-item">
									<a class="nav-link {{ (request()->is('company-value')) ? 'disabled' : '' }}" href="{{url('company-value')}}">{{ __('layout.companyValue') }}</a>
								</li>
                                <li class="nav-item">
									<a class="nav-link {{ (request()->is('board-directors')) ? 'disabled' : '' }}" href="{{url('board-directors')}}">{{ __('layout.bod') }}</a>
								</li>
								<li class="nav-item">
									<a class="nav-link {{ (request()->is('president-message')) ? 'disabled' : '' }}" href="{{url('president-message')}}">{{ __('layout.presidentMessage') }}</a>
								</li>
                                <li class="nav-item">
									<a class="nav-link {{ (request()->is('company-business')) ? 'disabled' : '' }}" href="{{url('company-business')}}">{{ __('layout.companyBusiness') }}</a>
								</li>
								<li class="nav-item">
									<a class="nav-link {{ (request()->is('company-history')) ? 'disabled' : '' }}" href="{{url('company-history')}}">{{ __('layout.companyHistory') }}</a>
								</li>
								<li class="nav-item">
									<a class="nav-link {{ (request()->is('company-plant')) ? 'disabled' : '' }}" href="{{url('company-plant')}}">{{ __('layout.companyPlant') }}</a>
								</li>
							</ul>
						</li>
						<li class="nav-item style-w-23">
							<a class="nav-link style-dashed {{ (request()->is('products')) ? 'disabled' : '' }}">
								{{ __('layout.product') }}
							</a>
							{{-- <ul class="style-sub-navbar-container style-left-31""> --}}
								<ul class="style-sub-navbar-container style-left-31" style="position: static; width: 125%;">
								<li class="nav-item">
									<a class="nav-link {{ (request()->is('products-vehicle')) ? 'disabled' : '' }}" href="{{url('products-vehicle')}}">{{ __('layout.vehicleBusiness') }}</a>
								</li>
								<li class="nav-item">
									<a class="nav-link {{ (request()->is('products-part')) ? 'disabled' : '' }}" href="{{url('products-part')}}">{{ __('layout.partBusiness') }}</a>
								</li>
								<li class="nav-item">
									<a class="nav-link {{ (request()->is('products-mold')) ? 'disabled' : '' }}" href="{{url('products-mold')}}">{{ __('layout.moldBusiness') }}</a>
								</li>
							</ul>
						</li>
						{{-- <li class="nav-item style-w-23">
							<a class="nav-link style-dashed {{ (request()->is('csr')) ? 'disabled' : '' }}" href="{{url('csr')}}">
								{{ __('layout.csr') }}
							</a>
						</li>
						<li class="nav-item style-w-23">
							<a class="nav-link style-dashed {{ (request()->is('news-page')) ? 'disabled' : '' }}" href="{{url('news-page')}}">
								{{ __('layout.news') }}
							</a>
						</li> --}}
					</ul>
					<a class="lang ps-xl-2 ps-xxl-5 {{ request()->segment(1) == 'en' ? 'color-active' : '' }}" href="{{ LaravelLocalization::getLocalizedURL('en') }}">
						EN
					</a>
					<div class="color-white px-2">
						|
					</div>
					<a class="lang pe-5 {{ request()->segment(1) == 'id' ? 'color-active' : '' }}" href="{{ LaravelLocalization::getLocalizedURL('id') }}">
						ID
					</a>
				</div>
				<div class="offcanvas offcanvas-end style-navbar-offcanvas d-lg-none" tabindex="-1" id="offcanvasNavbar"
					aria-labelledby="offcanvasNavbarLabel">
					<div class="offcanvas-header">
						<a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('logo/logo-sugity-nav.png')}}"
								style="height: 30px;" alt="Canvas Logo"></a>
						<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
					</div>
					<div class="offcanvas-body">
						<ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
							<li class="nav-item">
								<a class="nav-link">
									{{ __('layout.companyProfile') }}
								</a>
								<ul class="style-sub-navbar-offcanvas-container">
                                    <li class="nav-item">
                                        <a class="nav-link {{ (request()->is('about-us')) ? 'disabled' : '' }}" href="{{url('about-us')}}">{{ __('layout.aboutUs') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ (request()->is('company-value')) ? 'disabled' : '' }}" href="{{url('company-value')}}">{{ __('layout.companyValue') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ (request()->is('board-directors')) ? 'disabled' : '' }}" href="{{url('board-directors')}}">{{ __('layout.bod') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ (request()->is('president-message')) ? 'disabled' : '' }}" href="{{url('president-message')}}">{{ __('layout.presidentMessage') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ (request()->is('company-business')) ? 'disabled' : '' }}" href="{{url('company-business')}}">{{ __('layout.companyBusiness') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ (request()->is('company-history')) ? 'disabled' : '' }}" href="{{url('company-history')}}">{{ __('layout.companyHistory') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ (request()->is('company-plant')) ? 'disabled' : '' }}" href="{{url('company-plant')}}">{{ __('layout.companyPlant') }}</a>
                                    </li>
								</ul>
							</li>
							<li class="nav-item">
								<a class="nav-link {{ (request()->is('products')) ? 'disabled' : '' }}">
									{{ __('layout.product') }}
								</a>
								<ul class="style-sub-navbar-offcanvas-container">
									<li class="nav-item">
										<a class="nav-link {{ (request()->is('products-vehicle')) ? 'disabled' : '' }}" href="{{url('products-vehicle')}}">{{ __('layout.vehicleBusiness') }}</a>
									</li>
									<li class="nav-item">
										<a class="nav-link {{ (request()->is('products-part')) ? 'disabled' : '' }}" href="{{url('products-part')}}">{{ __('layout.partBusiness') }}</a>
									</li>
									<li class="nav-item">
										<a class="nav-link {{ (request()->is('products-mold')) ? 'disabled' : '' }}" href="{{url('products-mold')}}">{{ __('layout.moldBusiness') }}</a>
									</li>
								</ul>
							</li>
							{{-- <li class="nav-item"> 
								<a class="nav-link {{ (request()->is('csr')) ? 'disabled' : '' }}" href="{{url('csr')}}">
									{{ __('layout.csr') }}
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link {{ (request()->is('news-page')) ? 'disabled' : '' }}" href="{{url('news-page')}}">
									{{ __('layout.news') }}
								</a>
							</li> --}}
						</ul>
					</div>
				</div>
			</div>
		</nav><!-- #Navbar end -->

        @yield('content')

		<!-- Footer
		============================================= -->
		<footer id="footer" class="background-footer dark"
			style="background-image: url('{{asset('images/divider-black.png')}}');">
			<div class="container-fluid container-md">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap">

					<div class="row col-mb-30">
						<div class="col-lg-8">

							<div class="row col-mb-50">
								<div class="col-sm-4">

									<div class="widget widget_links clearfix">

										<!-- <a href="#"> -->
											<h3 class="entry-title mb-1">{{ __('layout.contactUs') }}</h3>
										<!-- </a> -->

										<div class="row mb-3">
											<div class="col-12">
												<a href="mailto: info@sugity.co.id">
													<i class="icon-envelope"></i> info@sugity.co.id
												</a>
											</div>
											<div class="col-12">
												<a href="tel:(021) 898 0307">
													<i class="icon-phone"></i> (021) 898 0307
												</a>
											</div>
										</div>

										<a href="#">
											<h3 class="entry-title mb-1">{{ __('layout.socialMedia') }}</h3>
										</a>

										<div class="row">
											<div class="col-12">
												<a href="https://www.youtube.com/@sugitycreatives8335" target="_blank">
													<i class="icon-youtube"></i> Sugity Creatives
												</a>
											</div>
											<div class="col-12">
												<a href="https://www.instagram.com/ptsugitycreatives/" target="_blank">
													<i class="icon-instagram"></i> ptsugitycreatives
												</a>
											</div>
										</div>

									</div>

								</div>

								<div class="col-sm-4">

									<div class="widget widget_links clearfix">

										<h3 class="entry-title mb-1">
											{{-- <a href="{{url('company-profile')}}"> --}}
												{{ __('layout.companyProfile') }}
											{{-- </a> --}}
										</h3>

										<div class="row">
                                            <div class="col-12">
												<a href="{{url('company-profile')}}#about_us">{{ __('layout.aboutUs') }}</a>
											</div>
											<div class="col-12">
												<a href="{{url('company-value')}}">{{ __('layout.companyValue') }}</a>
											</div>
                                            <div class="col-12">
												<a href="{{url('board-of-director')}}">{{ __('layout.bod') }}</a>
											</div>
											<div class="col-12">
												<a href="{{url('company-profile')}}#president-message">{{ __('layout.presidentMessage') }}</a>
											</div>
                                            <div class="col-12">
												<a href="{{url('company-business')}}">{{ __('layout.companyBusiness') }}</a>
											</div>
											<div class="col-12">
												<a href="{{url('company-history')}}">{{ __('layout.companyHistory') }}</a>
											</div>
											<div class="col-12">
												<a href="{{url('company-plant')}}">{{ __('layout.companyPlant') }}</a>
											</div>
										</div>

									</div>

								</div>

								<div class="col-sm-4">

									<div class="widget widget_links clearfix">

										<h3 class="entry-title mb-1">
											{{-- <a href="{{url('products')}}"> --}}
												{{ __('layout.product') }}
											{{-- </a> --}}
										</h3>

										<div class="row">
											<div class="col-12">
												<a href="{{url('products-vehicle')}}">{{ __('layout.vehicleBusiness') }}</a>
											</div>
											<div class="col-12">
												<a href="{{url('products-part')}}">{{ __('layout.partBusiness') }}</a>
											</div>
											<div class="col-12">
												<a href="{{url('products-mold')}}">{{ __('layout.moldBusiness') }}</a>
											</div>
										</div>

									</div>

								</div>
							</div>

						</div>

						<div class="col-lg-4">

							<div class="row">
								<div class="col-md-4 col-lg-12">
									<div class="widget clearfix pt-5 ps-2 pt-md-0 ps-md-0" style="margin-bottom: -20px;">

										<div class="row">
											<div class="col-lg-6 bottommargin-sm">
												<div class="widget widget_links clearfix">

													{{-- <h3 class="entry-title">
														<a href="{{url('csr')}}">
															{{ __('layout.csr') }}
														</a>
													</h3> --}}

													<!-- <div class="row">
														<div class="col-12">
															<a href="coming-soon.html">Tree Planting</a>
														</div>
														<div class="col-12">
															<a href="coming-soon.html">Story Book (Ehon)</a>
														</div>
													</div> -->

												</div>
											</div>

											<div class="col-lg-6 bottommargin-sm">
												<div class="widget widget_links clearfix">

													{{-- <h3 class="entry-title">
														<a href="{{url('news')}}">
															{{ __('layout.news') }}
														</a>
													</h3> --}}

													<!-- <div class="row">
														<div class="col-12">
															<a href="coming-soon.html">Achievement</a>
														</div>
														<div class="col-12">
															<a href="coming-soon.html">Product & Exhibition</a>
														</div>
														<div class="col-12">
															<a href="coming-soon.html">Internal Event</a>
														</div>
														<div class="col-12">
															<a href="coming-soon.html">Other Information</a>
														</div>
													</div> -->

												</div>
											</div>
										</div>

									</div>
								</div>

								<!-- <div class="col-md-5 col-lg-12">
									<div class="widget subscribe-widget clearfix">
										<h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</h5>
										<div class="widget-subscribe-form-result"></div>
										<form id="widget-subscribe-form" action="include/subscribe.php" method="post" class="mb-0">
											<div class="input-group mx-auto">
												<div class="input-group-text"><i class="icon-email2"></i></div>
												<input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
												<button class="btn btn-success" type="submit">Subscribe</button>
											</div>
										</form>
									</div>
								</div>

								<div class="col-md-3 col-lg-12">
									<div class="widget clearfix" style="margin-bottom: -20px;">

										<div class="row">
											<div class="col-6 col-md-12 col-lg-6 clearfix bottommargin-sm">
												<a href="#" class="social-icon si-dark si-colored si-facebook mb-0" style="margin-right: 10px;">
													<i class="icon-facebook"></i>
													<i class="icon-facebook"></i>
												</a>
												<a href="#"><small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on Facebook</small></a>
											</div>
											<div class="col-6 col-md-12 col-lg-6 clearfix">
												<a href="#" class="social-icon si-dark si-colored si-rss mb-0" style="margin-right: 10px;">
													<i class="icon-rss"></i>
													<i class="icon-rss"></i>
												</a>
												<a href="#"><small style="display: block; margin-top: 3px;"><strong>Subscribe</strong><br>to RSS Feeds</small></a>
											</div>
										</div>

									</div>
								</div> -->

							</div>

						</div>
					</div>

				</div><!-- .footer-widgets-wrap end -->

			</div>

		</footer><!-- #footer end -->

</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

    <!-- JavaScripts
	============================================= -->
	<script src="{{asset('js/jquery.js')}}"></script>
	<script src="{{asset('js/plugins.min.js')}}"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
		crossorigin="anonymous"></script>

    <!-- Footer Scripts
	============================================= -->
	<script src="{{asset('js/functions.js')}}"></script>
    @yield('custom_js')

</body>
</html>
