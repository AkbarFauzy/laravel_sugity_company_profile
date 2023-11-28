@extends('layout.app')
@section('custom_css')
<link rel="stylesheet" href="{{ asset('css/custom/landing-page.css') }}" type="text/css" />
@endsection

@section('title')
<title>Sugity Creatives | Coming Soon</title>
@endsection    

@section('content')
	<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container pt-6">

					<div class="heading-block text-center border-bottom-0">
						<h1>We are currently Under Construction</h1>
						<span>Please check back again within Some Days as We're Pretty Close</span>
					</div>

					<div id="countdown-ex1" class="countdown countdown-large mx-auto bottommargin" data-year="2021" style="max-width:700px;"></div>

					<div class="clear"></div>

					<div class="progress topmargin mx-auto" style="height: 10px; max-width:600px;">
						<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
						</div>
					</div>

					<div class="divider divider-center divider-sm divider-margin-lg"><i class="icon-time"></i></div>

				</div>
			</div>
		</section><!-- #content end -->
@endsection


@section('custom_js')

@endsection
