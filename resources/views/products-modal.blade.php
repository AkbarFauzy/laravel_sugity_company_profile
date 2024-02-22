

<div align="right">
    <button type="button" class="style-btn-close" data-bs-dismiss="modal" aria-label="Close"><i
            class="bi bi-x"></i></button>
</div>
<h2 class="modal-title style-title pt-2 pb-2 text-center" id="modalVehicleLabel">{{$products->data->name}}
</h2>

<div class="d-flex justify-content-center">
    <ul class="nav style-nav-modal-vehicle pt-1 pb-1" id="modalVehicleTab" role="tablist">
        @if($is360)
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="modaVehicle360Tab" data-bs-toggle="pill"
                data-bs-target="#modaVehicle360" type="button" role="tab"
                aria-controls="modaVehicle360" aria-selected="true">360<i class="bi bi-record-circle-fill"></i></button>
        </li>
        @endif

        @if($isInterior && ($products->data->category != "Interior Part" && $products->data->category != "Exterior Part" && $products->data->category != "Mold") )
        {{-- @if($isInterior && ($products->data->category != "Mold" && $products->data->category != "Exterior Part") ) --}}
            <li class="nav-item" role="presentation">
                <button class="nav-link {{$is360 ? '' : 'active'}}" id="modaVehicleInteriorTab" data-bs-toggle="pill"
                    data-bs-target="#modaVehicleInterior" type="button" role="tab"
                    aria-controls="modaVehicleInterior" aria-selected="false">Interior</button>
            </li>
        @endif

        @if($isExterior)
            <li class="nav-item" role="presentation">
                {{-- <button class="nav-link {{$is360 || $isInterior ? '' : 'active'}}" id="modaVehicleExteriorTab" data-bs-toggle="pill"
                    data-bs-target="#modaVehicleExterior" type="button" role="tab"
                    aria-controls="modaVehicleExterior" aria-selected="false">Exterior</button> --}}
                <button class="nav-link {{$is360 || $isInterior ? ($products->data->category == 'Exterior Part' ? 'active' : '') : ''}}" id="modaVehicleExteriorTab" data-bs-toggle="pill"
                    data-bs-target="#modaVehicleExterior" type="button" role="tab"
                    aria-controls="modaVehicleExterior" aria-selected="false">Exterior</button>
            </li>
        @endif
    </ul>
</div>


<div class="tab-content" id="modalVehicleTabContent">

    @if($is360)
        <div class="tab-pane fade show active" id="modaVehicle360" role="tabpanel"
            aria-labelledby="modaVehicle360Tab" tabindex="0">
            <div class="container" align="center">
                <div class="style-content-360">
                    <figure>
                        <div class="viewer"></div>
                    </figure>
                </div>
            </div>
        </div>

    @endif

    @if($isInterior)
    <div class="tab-pane fade {{$is360 ? '' : 'show active'}}" id="modaVehicleInterior" role="tabpanel"
        aria-labelledby="modaVehicleInteriorTab" tabindex="0">
        <div class="container pt-3" align="center">
            <div class="px-3">
                <div id="carouselModalVehicleInterior"
                    class="carousel carousel-dark style-carousel-modal style-carousel-modal-vehicle slide">
                    <div class="carousel-inner">
                        @foreach($interiors as $key => $interior)
                            @if($key == 0)
                            <div class="carousel-item active">
                                <img src="{{asset('images/products/content/'.$interior)}}"
                                    class="d-block w-100" alt="...">
                            </div>
                            @else
                            <div class="carousel-item">
                                <img src="{{asset('images/products/content/'.$interior)}}"
                                    class="d-block w-100" alt="...">
                            </div>
                            @endif
                        @endforeach
                    </div>
                    @if($isInterior && ($products->data->category != "Interior Part" && $products->data->category != "Exterior Part" && $products->data->category != "Mold") )
                        <button class="carousel-control-prev" type="button"
                            data-bs-target="#carouselModalVehicleInterior" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button"
                            data-bs-target="#carouselModalVehicleInterior" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    @endif
                </div>
            </div>
        </div>
    </div>

    @endif

    @if($isExterior)
    <div class="tab-pane fade {{$is360 || $isInterior ? '' : 'show active'}}" id="modaVehicleExterior" role="tabpanel"
        aria-labelledby="modaVehicleExteriorTab" tabindex="0">
        <div class="container pt-3" align="center">
            <div class="px-3">
                <div id="carouselModalVehicleExterior"
                    class="carousel carousel-dark style-carousel-modal style-carousel-modal-vehicle slide modal-xl">
                    <div class="carousel-inner">

                        @foreach($exteriors as $key => $exterior)
                            @if($key == 0)
                                <div class="carousel-item active">
                                    <img src="{{asset('images/products/content/'.$exterior)}}"
                                        class="d-block w-100" alt="...">
                                </div>
                            @else
                                <div class="carousel-item">
                                    <img src="{{asset('images/products/content/'.$exterior)}}"
                                        class="d-block w-100" alt="...">
                                </div>
                            @endif
                        @endforeach

                    </div>
                    @if($isInterior && ($products->data->category != "Interior Part" && $products->data->category != "Exterior Part" && $products->data->category != "Mold") )
                        <button class="carousel-control-prev" type="button"
                            data-bs-target="#carouselModalVehicleExterior" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button"
                            data-bs-target="#carouselModalVehicleExterior" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    @endif
                </div>
            </div>
        </div>
    </div>

    @endif


</div>
@if(($products->data->category == "Interior Part" || $products->data->category == "Exterior Part") && !empty($products->data->left_content))
    <h2 class="modal-title style-title text-center">Product on Car</h2>
    <div class="container pt-3 pb-5" align="center">
        <div class="row justify-content-between px-3 px-xl-5" align="left">
            <div class="col-lg-12 col-xl-12">
                <div class="row">
                    @foreach ($products->data->left_content as $value)
                        <div class="col-md-3" style="font-size: 20px;"><ul><li>{{ $value }}</li></ul></div>
                    @endforeach
                </div>
                        {{-- @php
                            $string = $products->data->left_content;

                            if (($string != "") && ($products->data->category == "Interior Part" || $products->data->category == "Exterior Part")) {
                                // Decode the JSON string to get an array
                                $array = json_decode($string, true);

                                // Check if $array is an array
                                if (is_array($array)) {
                                    // Convert the array to HTML
                                    $htmlString = '<ul><li>' . implode('</li><li>', $array) . '</li></ul>';

                                    echo $htmlString;
                                } else {
                                    // Handle the case when $array is not an array
                                    echo $string; // Output the original string
                                }
                            }
                        @endphp --}}
                    {{-- {!! $products->data->left_content !!} --}}
                </div>
            </div>
        </div>
    </div>
@else
    @if(!empty($products->data->left_content) || (!empty($products->data->right_content)))
    <h2 class="modal-title style-title pt-5 text-center">{{$products->data->name}}</h2>
    <div class="container pt-3 pb-5" align="center">
        <div class="row justify-content-between px-3 px-xl-5" align="left">
            <div class="col-lg-6 col-xl-6">

                @if(!empty($products->data->left_content))
                    <h3 class="style-title-content m-0">Features</h3>
                    <div class="style-divider-content"></div>
                    <div class="style-list-content">
                @endif
                    {!!$products->data->left_content!!}

                    {{-- <ul class="style-list-content">
                        <li>Ergonomic Dashboard</li>
                        <li>Spacious cabin</li>
                        <li>Safety Body Structure</li>
                        <li>Efficient Full Consumption</li>
                        <li>Small Turning Radius</li>
                        <li>Emergency Door</li>
                    </ul> --}}
                </div>
            </div>
            <div class="col-lg-6 col-xl-6">
                @if($products->data->right_content)
                    <h3 class="style-title-content m-0">Conversion Parts</h3>
                    <div class="style-divider-content"></div>
                    <div class="style-list-content">
                @endif
                    {!!$products->data->right_content!!}
                    {{-- <div class="col-md-6">
                        <ul class="style-list-content">
                            <li>Power Slide Door</li>
                            <li>Passanger Seats</li>
                            <li>Cabin Partition</li>
                            <li>3 LED Running Text</li>
                            <li>OBU (On Board Unit)</li>
                            <li>TV Monitor</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="style-list-content">
                            <li>A/C Double Blower</li>
                            <li>4 CCTV Camera & DVR</li>
                            <li>Vynil Floor</li>
                            <li>Speed & Reverse Buzzer</li>
                            <li>Emergency Door Access</li>
                            <li>Fire Extinguisher</li>
                        </ul>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    @endif
@endif
<!-- 360 VIewer -->
<script>
	//	build scene
	var loaded = 0;
	var countImage = 43;
	var content360 = document.querySelector('.style-content-360');
	var viewer = document.querySelector('.viewer');
	var urls = @json($view360);
    var images = []
    console.log(images);
	urls.forEach(function(url, index){
        const img = new Image();
		img.src = '{{ asset("images/products/content/360/".$products->data->name) }}'+ '/' + url;
        console.log(img.src);
		images.push(img);
		viewer.appendChild(img);
    });
	//	rotation handler
	//	http://chrisbateman.github.io/impetus/
	//	https://github.com/chrisbateman/impetus
	var threshold = 10;
	var total = images.length - 1;
	var frame = 0;
	var impetus = new Impetus({
		source: document,
		update(x) {
			// console.log(x)
			images[frame].classList.remove('active')
			frame = Math.floor(-x / threshold) % total;
			frame = frame <= 0 ? total + frame : frame;
			images[frame].classList.add('active');
		}
	});
	images[frame].classList.add('active');

	//	cursor
	addEventListener('mousedown', e => content360.style.cursor = 'grabbing');
	addEventListener('mouseup', e => content360.style.cursor = 'grab');
</script>
