<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Dashboard | {{ config('app.name', 'Sunda Coffee Beans') }}</title>

    <link rel="icon" href="{{ asset('img/logo.png') }}">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://static2.sharepointonline.com/files/fabric/office-ui-fabric-core/9.6.1/css/fabric.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('css')
</head>
<body>
    @include('layouts.alert')
    @include('layouts.modal')
@php
$route = Route::currentRouteName();
@endphp

        @guest
        @else

        <nav class="navbar navbar-light bg-light sticky-top p-0 shadow">
  <div class="container-fluid p-0">
    <a class="navbar-brand bg-warning col-md-2" href="{{ route('home') }}">
      <div class="py-2 text-center">
      <img src="{{ asset('img/logo.png') }}" alt="" width="25" class="d-inline-block align-text-center">
      <span class="ms-2 title-4">Admin Panel</span>
      </div>
    </a>
    <div class="col-md px-3 py-1">
    <div class="d-flex justify-content-between">
        <div class="align-self-center">
            <p class="h5 m-0 title-1">{{ routing($route) }}</p>
        </div>
    <div class="btn-group">
                <button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Account
                </button>
                <ul class="dropdown-menu dropdown-menu-end w-100 mt-3">
                    <li><a href="javascript:void(0)" class="dropdown-item w-100 align-items-center d-flex" data-bs-toggle="modal" data-bs-target="#modalLogout">Logout<i class="ms-Icon ms-Icon--SignOut d-inline-block align-text-center ms-auto"></i></a></li>
                </ul>
                </div>
    </div>
    </div>
  </div>
</nav>
        
        @endguest
        <div class="container-fluid">
        <div class="row g-0">
            @guest
            @else
            <div class="col-md-2 sidebar">
            <div class="py-3 bg-brown min-vh-100">

            <ul class="nav flex-column nav-admin">
  
            <li class="nav-item {{ ($route == 'home') ? 'nav-active' : ' ' }}">
                <a class="nav-link align-items-center d-flex" href="{{ route('home') }}">Dashboard<i class="ms-Icon ms-Icon--CoffeeScript d-inline-block align-text-center ms-auto"></i></a>
            </li>
            <li class="nav-item {{ ($route == 'index.product') ? 'nav-active' : ' ' }} {{ ($route == 'create.product') ? 'nav-active' : ' ' }} {{ ($route == 'edit.product') ? 'nav-active' : ' ' }}">
                <a class="nav-link align-items-center d-flex" href="{{ route('index.product') }}">Products<i class="ms-Icon ms-Icon--Coffee d-inline-block align-text-center ms-auto"></i></a>
            </li>
            <li class="nav-item {{ ($route == 'account') ? 'nav-active' : ' ' }}">
                <a class="nav-link align-items-center d-flex" href="{{ route('account') }}">Account<i class="ms-Icon ms-Icon--ReminderPerson d-inline-block align-text-center ms-auto"></i></a>
            </li>
            <li class="nav-item {{ ($route == 'website') ? 'nav-active' : ' ' }}">
                <a class="nav-link align-items-center d-flex" href="{{ route('website') }}">Details Web<i class="ms-Icon ms-Icon--Globe d-inline-block align-text-center ms-auto"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link align-items-center d-flex" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modalLogout">Logout<i class="ms-Icon ms-Icon--SignOut d-inline-block align-text-center ms-auto"></i></a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
            
            </ul>
                
            </div>
            </div>
            @endguest
        <div class="col-md">
            @yield('content')
        </div>
        </div>
        </div>
        <!-- JavaScript Bundle with Popper -->
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- <script src="https://runwebrun.com/themebau/assets/js/themebau.min.js"></script> -->
        @yield('js')
        <script>
            var toastid = document.getElementById('liveToast');
            var toast = new bootstrap.Toast(toastid);
            toast.show();
            // var myToastEl = document.getElementById('liveToast');
            // myToastEl.addEventListener('show.bs.toast', function () {
            // // do something...
            // })
        </script>
</body>
</html>
