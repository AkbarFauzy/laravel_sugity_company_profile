

<div align="right">
    <button type="button" class="style-btn-close" data-bs-dismiss="modal" aria-label="Close"><i
            class="bi bi-x"></i></button>
</div>
<h2 class="modal-title style-title pt-2 pb-2 text-center" id="modalVehicleLabel">{{$products->data->name}}
</h2>

<div class="d-flex justify-content-center">
    <ul class="nav style-nav-modal-vehicle pt-1 pb-1" id="modalVehicleTab" role="tablist">
        @if($products->data->name === "Gran Max Jaklingko")
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="modaVehicle360Tab" data-bs-toggle="pill"
                data-bs-target="#modaVehicle360" type="button" role="tab"
                aria-controls="modaVehicle360" aria-selected="true">360<i class="bi bi-record-circle-fill"></i></button>
        </li>
        @endif

        @if($isInterior && ($products->data->category != "Interior Part" && $products->data->category != "Exterior Part" && $products->data->category != "Mold") )
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="modaVehicleInteriorTab" data-bs-toggle="pill"
                    data-bs-target="#modaVehicleInterior" type="button" role="tab"
                    aria-controls="modaVehicleInterior" aria-selected="false">Interior</button>
            </li>
        @endif

        @if($isExterior)
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="modaVehicleExteriorTab" data-bs-toggle="pill"
                    data-bs-target="#modaVehicleExterior" type="button" role="tab"
                    aria-controls="modaVehicleExterior" aria-selected="false">Exterior</button>
            </li>
        @endif
    </ul>
</div>


<div class="tab-content" id="modalVehicleTabContent">

    @if($products->data->name === "Gran Max Jaklingko")
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
    @else
    <div class="container pt-3 pb-5" align="center">
        <div class="col-lg-7">
            <div id="carouselModalVehicleInterior"
                class="carousel carousel-dark style-carousel-modal style-carousel-modal-part slide">
                
                
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{asset('images/products/'.$products->data->img)}}"
                            class="d-block w-100" alt="...">
                    </div>
                    
                    @foreach($interiors as $key => $interior)
                        <div class="carousel-item">
                            <img src="{{asset('images/products/content/'.$interior)}}"
                                class="d-block w-100" alt="...">
                        </div>
                    @endforeach
                </div>


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
            </div>
        </div>
    </div>
    @endif


    @if($isInterior)
    <div class="tab-pane fade" id="modaVehicleInterior" role="tabpanel"
        aria-labelledby="modaVehicleInteriorTab" tabindex="0">
        <div class="container pt-3 pb-5" align="center">
            <div class="col-lg-8 px-3">
                <div id="carouselModalVehicleInterior"
                    class="carousel style-carousel-modal style-carousel-modal-vehicle slide">
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
                </div>
            </div>
        </div>
    </div>

    @endif


    @if($isExterior)

    <div class="tab-pane fade" id="modaVehicleExterior" role="tabpanel"
        aria-labelledby="modaVehicleExteriorTab" tabindex="0">
        <div class="container pt-3 pb-5" align="center">
            <div class="col-lg-8 px-3">
                <div id="carouselModalVehicleExterior"
                    class="carousel style-carousel-modal style-carousel-modal-vehicle slide modal-xl">
                    <div class="carousel-inner">

                        @foreach($exteriors as $key => $exterior)
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
                </div>
            </div>
        </div>
    </div>

    @endif


</div>
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