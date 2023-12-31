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
    <link rel="stylesheet" href="{{asset('backend/css/style.css')}}" >

    @yield('assets_css')
  </head>

  <body>
    @if (session()->has('user'))
        anything ...
    @endif

    <div class="bg-light min-vh-100 d-flex flex-row align-items-center">
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="card-group d-block d-md-flex row">
                    <div class="card col-md-7 p-4 mb-0">
                        <form id ="loginForm" action="{{route('actionLogin')}}" method="POST">
                        @csrf
                            <div class="card-body">
                                <h1><center>Login</center></h1>
                                <p class="text-medium-emphasis"><center>Sign In to your account</center></p>
                                <div class="input-group mb-3"><span class="input-group-text">
                                    <img src="{{asset('backend/icons/user.svg')}}">
                                </span>
                                <input name="email" class="form-control" type="text" placeholder="Username">
                                </div>
                                <div class="input-group mb-4">
                                    <span class="input-group-text">
                                         <img src="{{asset('backend/icons/lock-locked.svg')}}">
                                    </span>
                                <input name="password" class="form-control" type="password" placeholder="Password">
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <button class="btn btn-primary px-4" type="submit" style="width: 100%;">Login</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>

  
</body>
</html>