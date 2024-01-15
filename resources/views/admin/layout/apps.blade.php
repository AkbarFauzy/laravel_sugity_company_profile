<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="mtoken" content="{{ (Session::has('token') ? Session::get('token') : '') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('title')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('backend/css/vendors/simplebar.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('backend/css/vendors/simplebar.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('backend/css/style.css')}}" >
    
    <link rel="stylesheet" href="{{asset('css/custom/admin.css')}}">
    @yield('custom_css')
  </head>

  <body>
    <div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
      <div class="sidebar-brand d-none d-md-flex">
        <h1>Sugity</h1>
      </div>
      <ul class="sidebar-nav" data-coreui="navigation" data-simplebar>
        <li class="nav-item"><a class="nav-link" href="{{route('admin.dashboard')}}">
           <i class="nav-icon bi bi-speedometer"></i>
            Dashboard</a></li>
        <li class="nav-title">Customization</li>

        <li class="nav-item"><a class="nav-link" href="{{route('admin.sliders')}}">
          <i class="nav-icon bi bi-sliders"></i>
          Sliders</a>
          </li>

          <li class="nav-item"><a class="nav-link" href="{{route('admin.bod')}}">
            <i class="nav-icon bi-people-fill"></i>
            Board of Directors</a>
          </li>

          <li class="nav-item"><a class="nav-link" href="{{route('admin.history')}}">
            <i class="nav-icon bi bi-hourglass-split"></i> History</a>
          </li>

          <li class="nav-item"><a class="nav-link" href="{{route('admin.products')}}">
            <i class="nav-icon bi bi-boxes"></i> Products</a>
          </li>

        <li class="nav-item"><a class="nav-link" href="{{route('admin.news')}}">
          <i class="nav-icon bi bi-newspaper"></i> News</a>
         </li>

        <li class="nav-item"><a class="nav-link" href="{{route('admin.csr')}}">
          <i class="nav-icon bi bi-speedometer"></i> CSR</a>
       </li>

       <li class="nav-item"><a class="nav-link" href="{{route('admin.services')}}">
         <i class="nav-icon bi bi-cart-fill"></i> Services</a>
       </li>
      
      </ul>
      <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
    </div>

    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
      <header class="header header-sticky mb-4">
        <div class="container-fluid">
          <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
            <i class="bi bi-list"></i>
          </button>
          <a class="header-brand d-md-none" href="#">
            Sugity  
          </a>
          <ul class="header-nav text-center">
            @auth
            <form action="{{ route('actionLogout') }}" method="POST" style="margin:0px;">
               @csrf
               <button class="btn btn-danger text-white" type="submit">Logout</button>
              </form>
            @endauth

          </ul>
        </div>
        <div class="header-divider"></div>
        <div class="container-fluid">
          {{-- <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0 ms-2">
              <li class="breadcrumb-item">
                <!-- if breadcrumb is single--><span>Home</span>
              </li>
              <li class="breadcrumb-item active"><span>Dashboard</span></li>
            </ol>
          </nav> --}}
        </div>
      </header>
      <div class="body flex-grow-1 px-3">
        <div class="container-lg">
          <div class="row">
            @yield('content')
          </div>
        </div>
      </div>
    </div>
    

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="{{asset('backend/js/coreui.bundle.min.js')}}"></script>
    <script src="{{asset('backend/js/simplebar.min.js')}}"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="{{asset('backend/js/chart.min.js')}}"></script>
    <script src="{{asset('backend/js/coreui-chartjs.js')}}"></script>
    <script src="{{asset('backend/js/coreui-utils.js')}}"></script>
    @yield('custom_js')

  </body>
</html>


