@extends('admin.layout.apps')

@section('content')
 <!-- Page Heading -->
 <div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
</div>

<!-- Content Row -->
<div class="row">

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
          <div class="card-body">
              <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                          Products</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"> {{count($products->data)}}</div>
                  </div>
                  <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
          <div class="card-body">
              <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                          News </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{count($news->data)}}</div>
                  </div>
                  <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
          <div class="card-body">
              <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1"> CSR
                      </div>
                      <div class="row no-gutters align-items-center">
                          <div class="col-auto">
                              <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{count($csr->data)}}</div>
                          </div>
                      </div>
                  </div>
                  <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <!-- Pending Requests Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
          <div class="card-body">
              <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                          Services</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{count($services->data)}}</div>
                  </div>
                  <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

<!-- Content Row -->

<div class="row">

  <!-- Area Chart -->
  <div class="col-xl-8 col-lg-7">
      <div class="card shadow mb-4">
          <!-- Card Header - Dropdown -->
          <div
              class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-primary">Latest Products</h6>
              <div class="dropdown no-arrow">
                  <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                  </a>
              </div>
          </div>
          <!-- Card Body -->
          <div class="card-body">
            <div class="row">
            @foreach(array_slice($products->data, 0, 8) as $product)
            <div class="col-12 col-md-4 col-xl-3 px-3 py-3">
              <div class="card h-100" style="width:100%; height: 250px; object-fit: contain;">
                <img src="{{asset("images/products/".$product->img)}}" class="card-img-top" alt="...">
              
                <div class="card-body">
                  <h5 class="card-footer">{{$product->name}}</h5>
                </div>
              </div>
            </div>
            @endforeach
            </div>
          </div>
      </div>
  </div>

  <!-- Pie Chart -->
  <div class="col-xl-4 col-lg-5">
      <div class="card shadow mb-4">
          <!-- Card Header - Dropdown -->
          <div
              class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-primary">Latest CSR</h6>
              <div class="dropdown no-arrow">
                  <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                  </a>
              </div>
          </div>
          <!-- Card Body -->
          <div class="card-body">
              <div class="mt-4 text-center small">

                @foreach(array_slice($csr->data, 0, 5) as $item)
      
                <div class="row m-3" style=" border:1px solid">
                  <div class="col-md-6 img-small-detail-news" style="background-image: url('{{asset('images/news/'.$item->headline_img)}}'); background-size: contain; background-repeat:no-repeat">
                  </div>
                  <div class="col-6 col-md-6 d-flex flex-column justify-content-left">
                      <div class="title-small-detail-news pb-2">{{$item->headline}}</div>
                      <div class="date-small-detail-news pb-3">{{ date('F j, Y', strtotime($item->created_at))}}</div>
                      <a href="{{url('detail-news', $item->id)}}">
                          <div class="readmore-small-detail-news">Read More -></div>
                      </a>
                  </div>
              </div>
                @endforeach


              </div>
          </div>
      </div>
  </div>
</div>


<div class="row">

  <!-- Area Chart -->
  <div class="col-xl-8 col-lg-7">
      <div class="card shadow mb-4">
          <!-- Card Header - Dropdown -->
          <div
              class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-primary">Latest Products</h6>
              <div class="dropdown no-arrow">
                  <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                  </a>
              </div>
          </div>
          <!-- Card Body -->
          <div class="card-body">
            <div class="row">
            @foreach(array_slice($products->data, 0, 8) as $product)
            <div class="col-12 col-md-4 col-xl-3 px-3 py-3">
              <div class="card h-100" style="width:100%; height: 250px; object-fit: contain;">
                <img src="{{asset("images/products/".$product->img)}}" class="card-img-top" alt="...">
              
                <div class="card-body">
                  <h5 class="card-footer">{{$product->name}}</h5>
                </div>
              </div>
            </div>
            @endforeach
            </div>
          </div>
      </div>
  </div>

  <!-- Pie Chart -->
  <div class="col-xl-4 col-lg-5">
      <div class="card shadow mb-4">
          <!-- Card Header - Dropdown -->
          <div
              class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-primary">Latest News</h6>
              <div class="dropdown no-arrow">
                  <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                  </a>
              </div>
          </div>
          <!-- Card Body -->
          <div class="card-body">
              <div class="mt-4 text-center small">

                @foreach(array_slice($news->data, 0, 5) as $item)
      
                <div class="row m-3" style=" border:1px solid">
                  <div class="col-md-6 img-small-detail-news" style="background-image: url('{{asset('images/news/'.$item->headline_img)}}'); background-size: contain; background-repeat:no-repeat">
                  </div>
                  <div class="col-6 col-md-6 d-flex flex-column justify-content-left">
                      <div class="title-small-detail-news pb-2">{{$item->headline}}</div>
                      <div class="date-small-detail-news pb-3">{{ date('F j, Y', strtotime($item->created_at))}}</div>
                      <a href="{{url('detail-news', $item->id)}}">
                          <div class="readmore-small-detail-news">Read More -></div>
                      </a>
                  </div>
              </div>
                @endforeach


              </div>
          </div>
      </div>
  </div>

  
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->



@endsection